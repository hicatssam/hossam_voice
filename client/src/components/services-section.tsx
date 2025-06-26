import { Megaphone, Film, Bot, VenetianMask, Globe, Headphones } from "lucide-react";

export default function ServicesSection() {
  const services = [
    {
      icon: <Megaphone className="h-8 w-8 text-white" />,
      title: "Commercial Voice-overs",
      description: "Professional advertising voice-overs for TV, radio, and digital campaigns that capture attention and drive results.",
      features: ["TV & Radio Commercials", "Digital Advertising", "Product Launches"],
      color: "bg-purple-600",
      hoverColor: "hover:border-purple-500"
    },
    {
      icon: <Film className="h-8 w-8 text-white" />,
      title: "Documentary Narration",
      description: "Compelling storytelling for documentaries, educational content, and corporate presentations.",
      features: ["Documentary Films", "Educational Content", "Corporate Videos"],
      color: "bg-green-600",
      hoverColor: "hover:border-green-500"
    },
    {
      icon: <Bot className="h-8 w-8 text-white" />,
      title: "AI & Technology",
      description: "Cutting-edge voice work for AI assistants, apps, and smart technology interfaces.",
      features: ["AI Voice Assistants", "App Interfaces", "Smart Home Systems"],
      color: "bg-orange-600",
      hoverColor: "hover:border-orange-500"
    },
    {
      icon: <VenetianMask className="h-8 w-8 text-white" />,
      title: "Character Voices",
      description: "Dynamic character voice acting for games, animations, and interactive media.",
      features: ["Video Game Characters", "Animation Voice-over", "Interactive Media"],
      color: "bg-purple-600",
      hoverColor: "hover:border-purple-500"
    },
    {
      icon: <Globe className="h-8 w-8 text-white" />,
      title: "Gulf Accent Specialization",
      description: "Authentic Gulf Arabic voice-overs for regional markets and cultural content.",
      features: ["Regional Commercials", "Cultural Content", "Local Brand Campaigns"],
      color: "bg-green-600",
      hoverColor: "hover:border-green-500"
    },
    {
      icon: <Headphones className="h-8 w-8 text-white" />,
      title: "Audio Post-Production",
      description: "Complete audio production services including editing, mixing, and mastering.",
      features: ["Professional Editing", "Audio Enhancement", "Final Mastering"],
      color: "bg-orange-600",
      hoverColor: "hover:border-orange-500"
    }
  ];

  return (
    <section id="services" className="py-20 carbon-blue">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold mb-4">My <span className="electric-violet">Services</span></h2>
          <p className="text-xl text-gray-300">Professional voice-over solutions for every project</p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div
              key={index}
              className={`bg-gray-900 p-8 rounded-xl border border-gray-800 ${service.hoverColor} transition-all duration-300 transform hover:-translate-y-2`}
            >
              <div className={`w-16 h-16 ${service.color} rounded-lg flex items-center justify-center mb-6`}>
                {service.icon}
              </div>
              <h3 className="text-xl font-semibold mb-4">{service.title}</h3>
              <p className="text-gray-300 mb-6">{service.description}</p>
              <ul className="text-sm text-gray-400 space-y-2">
                {service.features.map((feature, featureIndex) => (
                  <li key={featureIndex} className="flex items-center">
                    <svg className="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                      <path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd" />
                    </svg>
                    {feature}
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
