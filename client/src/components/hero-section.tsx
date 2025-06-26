import { Play, Eye } from "lucide-react";
import { Button } from "@/components/ui/button";
import { scrollToSection } from "@/lib/utils";

export default function HeroSection() {
  return (
    <section id="home" className="min-h-screen flex items-center justify-center relative overflow-hidden">
      {/* AI Wave Background */}
      <div className="absolute inset-0 flex items-center justify-center opacity-20">
        <div className="flex space-x-1">
          <div className="w-1 h-16 bg-purple-500 animate-wave"></div>
          <div className="w-1 h-20 bg-green-500 animate-wave-2"></div>
          <div className="w-1 h-12 bg-orange-500 animate-wave-3"></div>
          <div className="w-1 h-24 bg-purple-500 animate-wave"></div>
          <div className="w-1 h-8 bg-green-500 animate-wave-2"></div>
          <div className="w-1 h-18 bg-orange-500 animate-wave-3"></div>
          <div className="w-1 h-14 bg-purple-500 animate-wave"></div>
          <div className="w-1 h-22 bg-green-500 animate-wave-2"></div>
        </div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
        <div className="text-center lg:text-left animate-slide-up">
          <div className="mb-6">
            <span className="bright-orange text-sm font-semibold tracking-wider uppercase">
              AI Evolution Meets Human Voice
            </span>
          </div>
          <h1 className="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            In a world moving <span className="electric-violet">faster than sound</span>
          </h1>
          <p className="text-xl md:text-2xl mb-8 text-gray-300">
            AI is evolving—but nothing replaces the <span className="mint-green font-semibold">human voice</span>. 
            I'm Hicats Sam. Let me be your voice.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <Button
              onClick={() => scrollToSection("samples")}
              className="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-lg font-semibold transition-all transform hover:scale-105 animate-glow"
            >
              <Play className="mr-2 h-4 w-4" />
              Hear My Voice
            </Button>
            <Button
              variant="outline"
              onClick={() => scrollToSection("gallery")}
              className="border-2 border-green-500 text-green-500 hover:bg-green-500 hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all"
            >
              <Eye className="mr-2 h-4 w-4" />
              View Portfolio
            </Button>
          </div>
        </div>
        <div className="relative animate-float">
          <img
            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&h=800"
            alt="Professional voice-over artist"
            className="rounded-2xl shadow-2xl w-full max-w-md mx-auto lg:max-w-none"
          />
          <div className="absolute -bottom-4 -right-4 bg-orange-500 p-4 rounded-xl animate-pulse">
            <svg className="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
              <path fillRule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clipRule="evenodd" />
            </svg>
          </div>
        </div>
      </div>
    </section>
  );
}
