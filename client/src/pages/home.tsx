import { useEffect } from "react";
import Navigation from "@/components/navigation";
import HeroSection from "@/components/hero-section";
import AboutSection from "@/components/about-section";
import VoiceSamples from "@/components/voice-samples";
import ServicesSection from "@/components/services-section";
import GallerySection from "@/components/gallery-section";
import ContactSection from "@/components/contact-section";

export default function Home() {
  useEffect(() => {
    // Navbar background on scroll
    const handleScroll = () => {
      const nav = document.querySelector('nav');
      if (nav) {
        if (window.scrollY > 50) {
          nav.classList.add('nav-blur');
        } else {
          nav.classList.remove('nav-blur');
        }
      }
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <div className="min-h-screen">
      <Navigation />
      <main>
        <HeroSection />
        <AboutSection />
        <VoiceSamples />
        <div className="py-20 bg-gray-900">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-16">
              <h2 className="text-4xl font-bold mb-4">Trusted <span className="electric-violet">By</span></h2>
              <p className="text-xl text-gray-300">Leading brands and organizations worldwide</p>
            </div>
            <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
              {[1, 2, 3, 4, 5, 6].map((i) => (
                <div key={i} className="grayscale hover:grayscale-0 transition-all duration-300 transform hover:scale-110 opacity-60 hover:opacity-100">
                  <div className="h-16 bg-gray-700 rounded-lg flex items-center justify-center">
                    <span className="text-gray-400 text-sm">Logo {i}</span>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
        <ServicesSection />
        <GallerySection />
        <ContactSection />
      </main>
      <footer className="bg-gray-900 py-12">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <div className="mb-4 md:mb-0">
              <h3 className="text-2xl font-bold electric-violet">Hicats Sam</h3>
              <p className="text-gray-400">Professional Voice-over Artist</p>
            </div>
            <div className="flex space-x-6">
              <a href="#" className="text-gray-400 hover:text-purple-400 transition-colors">
                <i className="fab fa-instagram text-xl"></i>
              </a>
              <a href="#" className="text-gray-400 hover:text-green-400 transition-colors">
                <i className="fab fa-whatsapp text-xl"></i>
              </a>
              <a href="#" className="text-gray-400 hover:text-orange-400 transition-colors">
                <i className="fas fa-envelope text-xl"></i>
              </a>
            </div>
          </div>
          <div className="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2024 Hicats Sam. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>
  );
}
