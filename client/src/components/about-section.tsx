import { Globe, Brain, Award } from "lucide-react";

export default function AboutSection() {
  return (
    <section id="about" className="py-20 bg-gray-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold mb-4">About <span className="electric-violet">Hicats Sam</span></h2>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Professional voice-over artist specializing in commercial narration, documentary work, and AI-enhanced projects
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8">
          <div className="carbon-blue p-8 rounded-xl border border-gray-800">
            <div className="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
              <Globe className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-4 mint-green">Multilingual Expertise</h3>
            <p className="text-gray-300">
              Fluent in Arabic (Gulf dialects), English, and French. Perfect for regional and international projects.
            </p>
          </div>

          <div className="carbon-blue p-8 rounded-xl border border-gray-800">
            <div className="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-6">
              <Brain className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-4 electric-violet">AI-Enhanced Production</h3>
            <p className="text-gray-300">
              Combining traditional voice-over techniques with cutting-edge AI tools for superior audio quality.
            </p>
          </div>

          <div className="carbon-blue p-8 rounded-xl border border-gray-800">
            <div className="w-16 h-16 bg-orange-600 rounded-lg flex items-center justify-center mb-6">
              <Award className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-4 bright-orange">Professional Excellence</h3>
            <p className="text-gray-300">
              10+ years experience with major brands, documentaries, and character voice work.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
