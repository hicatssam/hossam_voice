import { useState, useRef, useEffect } from "react";
import { Play, Pause } from "lucide-react";

interface AudioPlayerProps {
  title: string;
  duration: string;
  audioUrl?: string;
  category: string;
}

export default function AudioPlayer({ title, duration, audioUrl, category }: AudioPlayerProps) {
  const [isPlaying, setIsPlaying] = useState(false);
  const [progress, setProgress] = useState(0);
  const [currentTime, setCurrentTime] = useState("0:00");
  const intervalRef = useRef<NodeJS.Timeout | null>(null);

  const getCategoryColor = (category: string) => {
    switch (category) {
      case "commercial":
        return "bg-purple-600 hover:bg-purple-700";
      case "narrative":
        return "bg-green-600 hover:bg-green-700";
      case "documentary":
        return "bg-orange-600 hover:bg-orange-700";
      case "ai":
        return "bg-purple-600 hover:bg-purple-700";
      default:
        return "bg-purple-600 hover:bg-purple-700";
    }
  };

  const getProgressColor = (category: string) => {
    switch (category) {
      case "commercial":
        return "bg-purple-500";
      case "narrative":
        return "bg-green-500";
      case "documentary":
        return "bg-orange-500";
      case "ai":
        return "bg-purple-500";
      default:
        return "bg-purple-500";
    }
  };

  const handlePlayPause = () => {
    if (isPlaying) {
      // Pause
      setIsPlaying(false);
      if (intervalRef.current) {
        clearInterval(intervalRef.current);
      }
    } else {
      // Play - mock implementation
      setIsPlaying(true);
      let currentProgress = progress;
      
      intervalRef.current = setInterval(() => {
        currentProgress += 2;
        setProgress(currentProgress);
        
        // Update current time display
        const totalSeconds = Math.floor((currentProgress / 100) * 60); // Assuming max 60 seconds
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        setCurrentTime(`${minutes}:${seconds.toString().padStart(2, '0')}`);
        
        if (currentProgress >= 100) {
          setIsPlaying(false);
          setProgress(0);
          setCurrentTime("0:00");
          if (intervalRef.current) {
            clearInterval(intervalRef.current);
          }
        }
      }, 100);
    }
  };

  useEffect(() => {
    return () => {
      if (intervalRef.current) {
        clearInterval(intervalRef.current);
      }
    };
  }, []);

  return (
    <div className="custom-audio-player">
      <div className="flex items-center space-x-4">
        <button
          onClick={handlePlayPause}
          className={`w-12 h-12 rounded-full flex items-center justify-center transition-colors ${getCategoryColor(category)}`}
        >
          {isPlaying ? (
            <Pause className="h-5 w-5 text-white" />
          ) : (
            <Play className="h-5 w-5 text-white ml-0.5" />
          )}
        </button>
        <div className="flex-1">
          <div className="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
            <div 
              className={`h-full rounded-full transition-all duration-300 ${getProgressColor(category)}`}
              style={{ width: `${progress}%` }}
            ></div>
          </div>
          <div className="flex justify-between text-xs text-gray-400 mt-1">
            <span>{currentTime}</span>
            <span>{duration}</span>
          </div>
        </div>
      </div>
    </div>
  );
}
