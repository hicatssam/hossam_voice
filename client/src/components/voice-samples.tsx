import { useState } from "react";
import { Button } from "@/components/ui/button";
import AudioPlayer from "./audio-player";

type SampleCategory = "all" | "commercial" | "narrative" | "documentary" | "ai";

interface VoiceSample {
  id: string;
  title: string;
  category: SampleCategory;
  duration: string;
  description: string;
  audioUrl?: string;
}

const samples: VoiceSample[] = [
  {
    id: "1",
    title: "Tech Product Launch",
    category: "commercial",
    duration: "0:30",
    description: "Commercial • 30 seconds",
    audioUrl: "#"
  },
  {
    id: "2",
    title: "Children's Story",
    category: "narrative",
    duration: "0:45",
    description: "Narrative • 45 seconds",
    audioUrl: "#"
  },
  {
    id: "3",
    title: "Environmental Documentary",
    category: "documentary",
    duration: "1:00",
    description: "Documentary • 60 seconds",
    audioUrl: "#"
  },
  {
    id: "4",
    title: "AI Assistant Voice",
    category: "ai",
    duration: "0:25",
    description: "AI Project • 25 seconds",
    audioUrl: "#"
  },
  {
    id: "5",
    title: "Luxury Brand",
    category: "commercial",
    duration: "0:20",
    description: "Commercial • 20 seconds",
    audioUrl: "#"
  },
  {
    id: "6",
    title: "Smart Home System",
    category: "ai",
    duration: "0:35",
    description: "AI Project • 35 seconds",
    audioUrl: "#"
  }
];

export default function VoiceSamples() {
  const [activeFilter, setActiveFilter] = useState<SampleCategory>("all");

  const filteredSamples = samples.filter(
    sample => activeFilter === "all" || sample.category === activeFilter
  );

  const filterButtons = [
    { key: "all" as const, label: "All Samples" },
    { key: "commercial" as const, label: "Commercial" },
    { key: "narrative" as const, label: "Narrative" },
    { key: "documentary" as const, label: "Documentary" },
    { key: "ai" as const, label: "AI Projects" }
  ];

  return (
    <section id="samples" className="py-20 carbon-blue">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold mb-4">Voice <span className="electric-violet">Samples</span></h2>
          <p className="text-xl text-gray-300">Experience the range and quality of professional voice-over work</p>
        </div>

        {/* Filter Buttons */}
        <div className="flex flex-wrap justify-center gap-4 mb-12">
          {filterButtons.map((button) => (
            <Button
              key={button.key}
              onClick={() => setActiveFilter(button.key)}
              className={`px-6 py-3 rounded-lg font-semibold transition-all ${
                activeFilter === button.key
                  ? "bg-purple-600 text-white"
                  : "bg-gray-800 hover:bg-purple-600 text-white"
              }`}
            >
              {button.label}
            </Button>
          ))}
        </div>

        {/* Audio Players */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {filteredSamples.map((sample) => (
            <div key={sample.id} className="bg-gray-900 p-6 rounded-xl border border-gray-800">
              <div className="mb-4">
                <h3 className="text-lg font-semibold mb-2">{sample.title}</h3>
                <p className="text-gray-400 text-sm">{sample.description}</p>
              </div>
              <AudioPlayer
                title={sample.title}
                duration={sample.duration}
                audioUrl={sample.audioUrl}
                category={sample.category}
              />
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
