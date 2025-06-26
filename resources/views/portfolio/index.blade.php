
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('portfolio.hero.title') }} - Hicats Sam</title>
    <meta name="description" content="{{ __('portfolio.hero.description') }}">

    <!-- Enhanced Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Enhanced CSS Variables */
        :root {
            --carbon-blue: #0a0f1a;
            --electric-violet: #7F5AF0;
            --mint-green: #2CB67D;
            --soft-gray: #E5E5E5;
            --bright-orange: #FF8906;
            --dark-gray: #1a1a1a;
            --medium-gray: #333333;
            --light-gray: #666666;
            --white: #ffffff;
            --black: #000000;
            --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --wave-color-1: #7F5AF0;
            --wave-color-2: #2CB67D;
            --wave-color-3: #FF8906;
        }

        /* Reset and Enhanced Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: {{ $locale === 'ar' ? "'Tajawal', 'Amiri', sans-serif" : "'Montserrat', 'Inter', sans-serif" }};
            background: linear-gradient(135deg, var(--carbon-blue) 0%, #1a1a2e 50%, #16213e 100%);
            color: var(--soft-gray);
            line-height: 1.6;
            overflow-x: hidden;
            font-weight: 400;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Enhanced Glassmorphism Effect */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
        }

        /* Flying Microphone Animation */
        .flying-microphone {
            position: fixed;
            top: 20%;
            right: -100px;
            font-size: 2rem;
            color: var(--bright-orange);
            z-index: 1000;
            animation: flyAcross 15s linear infinite;
            pointer-events: none;
        }

        @keyframes flyAcross {
            0% {
                right: -100px;
                transform: rotate(0deg) scale(1);
                opacity: 0;
            }
            10% {
                opacity: 1;
                transform: rotate(15deg) scale(1.2);
            }
            50% {
                transform: rotate(-10deg) scale(1);
            }
            90% {
                opacity: 1;
                transform: rotate(5deg) scale(1.1);
            }
            100% {
                right: 100vw;
                transform: rotate(0deg) scale(1);
                opacity: 0;
            }
        }

        /* Enhanced Language Toggle */
        .language-toggle {
            position: fixed;
            top: 20px;
            {{ $locale === 'ar' ? 'left' : 'right' }}: 20px;
            z-index: 1000;
            background: var(--glass-bg);
            border-radius: 25px;
            padding: 8px;
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .language-toggle form {
            display: flex;
            gap: 5px;
        }

        .lang-btn {
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            background: transparent;
            color: var(--soft-gray);
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 14px;
        }

        .lang-btn.active {
            background: var(--electric-violet);
            color: white;
            box-shadow: 0 4px 15px rgba(127, 90, 240, 0.4);
        }

        .lang-btn:hover {
            background: rgba(127, 90, 240, 0.2);
            transform: translateY(-2px);
        }

        /* Enhanced Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            z-index: 999;
            padding: 20px 0;
            transition: all 0.3s ease;
            border-bottom: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(127, 90, 240, 0.3);
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--soft-gray);
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            padding: 12px 20px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border-radius: 30px;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .nav-links a:hover::before {
            opacity: 0.2;
            transform: scale(1);
        }

        .nav-links a:hover {
            color: var(--white);
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--electric-violet), var(--mint-green));
            transition: all 0.4s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--mint-green);
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        /* Enhanced Hero Section with Advanced Animations */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            background: linear-gradient(135deg, rgba(127, 90, 240, 0.1), rgba(44, 182, 125, 0.1));
            border-radius: 50%;
            animation: advancedFloat 8s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes advancedFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
                opacity: 0.7;
            }
            25% {
                transform: translateY(-30px) rotate(90deg) scale(1.1);
                opacity: 1;
            }
            50% {
                transform: translateY(-15px) rotate(180deg) scale(0.9);
                opacity: 0.8;
            }
            75% {
                transform: translateY(-25px) rotate(270deg) scale(1.05);
                opacity: 0.9;
            }
        }

        /* Enhanced AI Waves with Sound Visualization */
        .ai-waves {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 8px;
            opacity: 0.4;
        }

        .wave {
            width: 6px;
            background: var(--electric-violet);
            border-radius: 3px;
            animation: soundWave 2s ease-in-out infinite;
            box-shadow: 0 0 10px rgba(127, 90, 240, 0.5);
        }

        .wave:nth-child(1) {
            height: 60px;
            animation-delay: 0s;
            background: var(--wave-color-1);
        }
        .wave:nth-child(2) {
            height: 80px;
            animation-delay: 0.1s;
            background: var(--wave-color-2);
        }
        .wave:nth-child(3) {
            height: 40px;
            animation-delay: 0.2s;
            background: var(--wave-color-3);
        }
        .wave:nth-child(4) {
            height: 120px;
            animation-delay: 0.3s;
            background: var(--wave-color-1);
        }
        .wave:nth-child(5) {
            height: 30px;
            animation-delay: 0.4s;
            background: var(--wave-color-2);
        }
        .wave:nth-child(6) {
            height: 90px;
            animation-delay: 0.5s;
            background: var(--wave-color-3);
        }
        .wave:nth-child(7) {
            height: 70px;
            animation-delay: 0.6s;
            background: var(--wave-color-1);
        }
        .wave:nth-child(8) {
            height: 110px;
            animation-delay: 0.7s;
            background: var(--wave-color-2);
        }

        @keyframes soundWave {
            0%, 100% {
                transform: scaleY(1);
                box-shadow: 0 0 10px rgba(127, 90, 240, 0.5);
            }
            50% {
                transform: scaleY(3);
                box-shadow: 0 0 20px rgba(127, 90, 240, 0.8);
            }
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            width: 100%;
        }

        .hero-text {
            z-index: 2;
        }

        .hero-subtitle {
            display: inline-block;
            background: linear-gradient(135deg, var(--bright-orange), #ffb366);
            color: var(--white);
            padding: 12px 24px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(255, 137, 6, 0.3);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 24px;
            line-height: 1.1;
            background: linear-gradient(135deg, var(--white), var(--soft-gray));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 32px;
            color: #cccccc;
            font-weight: 400;
        }

        .highlight-violet {
            background: linear-gradient(135deg, var(--electric-violet), #9d7df0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .highlight-green {
            background: linear-gradient(135deg, var(--mint-green), #2ea86e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 16px 32px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--electric-violet), #9d7df0);
            color: var(--white);
            box-shadow: 0 8px 25px rgba(127, 90, 240, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--mint-green);
            border: 2px solid var(--mint-green);
            box-shadow: 0 8px 25px rgba(44, 182, 125, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .hero-image {
            position: relative;
            text-align: center;
        }

        .professional-photo-container {
            position: relative;
            display: inline-block;
            width: 100%;
            max-width: 600px;
        }

        .professional-photo-container img {
            width: 100%;
            height: auto;
            border-radius: 30px;
            position: relative;
            z-index: 3;
            filter: contrast(1.1) brightness(1.05) saturate(1.1);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .ai-background-removal {
            position: absolute;
            top: -15px;
            left: -15px;
            right: -15px;
            bottom: -15px;
            background: linear-gradient(135deg,
                var(--electric-violet) 0%,
                var(--carbon-blue) 30%,
                var(--mint-green) 70%,
                var(--bright-orange) 100%);
            border-radius: 40px;
            z-index: 1;
            opacity: 0.4;
            filter: blur(20px);
        }

        .professional-glow {
            position: absolute;
            top: -25px;
            left: -25px;
            right: -25px;
            bottom: -25px;
            background: radial-gradient(ellipse at center,
                rgba(127, 90, 240, 0.3) 0%,
                rgba(44, 182, 125, 0.2) 50%,
                transparent 70%);
            border-radius: 50px;
            z-index: 2;
            animation: professionalPulse 4s ease-in-out infinite;
        }

        @keyframes professionalPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.08);
                opacity: 0.7;
            }
        }

        .professional-photo-container:hover img {
            transform: scale(1.50);
        }

        .mic-icon {
            position: absolute;
            bottom: -20px;
            {{ $locale === 'ar' ? 'left' : 'right' }}: -20px;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--bright-orange), #ffb366);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--white);
            animation: pulse 2s infinite;
            box-shadow: 0 8px 25px rgba(255, 137, 6, 0.4);
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 137, 6, 0.7); }
            70% { transform: scale(1.1); box-shadow: 0 0 0 20px rgba(255, 137, 6, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 137, 6, 0); }
        }

        /* Voice Samples Section */
        .samples {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--dark-gray) 0%, var(--carbon-blue) 100%);
            position: relative;
            overflow: hidden;
        }

        /* Enhanced Sample Filters */
        .sample-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 50px 0;
            padding: 30px;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .sample-filters::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,
                rgba(127, 90, 240, 0.05) 0%,
                rgba(44, 182, 125, 0.05) 50%,
                rgba(255, 137, 6, 0.05) 100%);
            animation: filterBackgroundShift 8s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes filterBackgroundShift {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.02); }
        }

        .filter-btn {
            position: relative;
            z-index: 2;
            padding: 15px 30px;
            border: 2px solid var(--glass-border);
            background: rgba(255, 255, 255, 0.1);
            color: var(--soft-gray);
            border-radius: 35px;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            font-weight: 700;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(15px);
            overflow: hidden;
            min-width: 120px;
            text-align: center;
        }

        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
            transition: left 0.6s ease;
            z-index: 1;
        }

        .filter-btn::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                var(--electric-violet),
                var(--mint-green),
                var(--bright-orange),
                var(--electric-violet));
            background-size: 400% 400%;
            border-radius: 37px;
            z-index: -1;
            opacity: 0;
            animation: gradientShift 4s ease-in-out infinite;
            transition: opacity 0.5s ease;
        }

        .filter-btn:hover::before {
            left: 100%;
        }

        .filter-btn:hover {
            border-color: var(--electric-violet);
            color: var(--electric-violet);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(127, 90, 240, 0.4);
            text-shadow: 0 0 15px rgba(127, 90, 240, 0.5);
        }

        .filter-btn:hover::after {
            opacity: 0.7;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border-color: transparent;
            color: white;
            box-shadow: 0 15px 40px rgba(127, 90, 240, 0.6);
            transform: translateY(-3px) scale(1.1);
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }

        .filter-btn.active::after {
            opacity: 1;
        }

        .filter-btn.active:hover {
            transform: translateY(-8px) scale(1.15);
            box-shadow: 0 20px 50px rgba(127, 90, 240, 0.7);
        }

        .samples::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(127, 90, 240, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(44, 182, 125, 0.1) 0%, transparent 50%);
            animation: backgroundFlow 10s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes backgroundFlow {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.7; }
            33% { transform: scale(1.1) rotate(2deg); opacity: 0.8; }
            66% { transform: scale(0.95) rotate(-1deg); opacity: 0.6; }
        }

        .samples-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
            position: relative;
            z-index: 2;
        }

        .sample-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            padding: 30px;
            border-radius: 25px;
            border: 1px solid var(--glass-border);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .sample-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
            border-color: var(--electric-violet);
        }

        .sample-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .sample-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }

        .sample-info h3 {
            color: var(--mint-green);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .sample-category {
            color: #aaa;
            font-size: 0.9rem;
        }

        .sample-description {
            color: #e0e0e0;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .audio-player {
            width: 100%;
            margin-bottom: 15px;
        }

        .audio-player audio {
            width: 100%;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
        }

        .sample-duration {
            text-align: center;
            color: var(--electric-violet);
            font-weight: 600;
        }

        /* Trusted By Section with Scrolling Animation */
        .trusted-by {
            padding: 80px 0;
            background: var(--dark-gray);
            position: relative;
            overflow: hidden;
        }

        .trusted-by::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center,
                rgba(127, 90, 240, 0.05) 0%,
                transparent 70%);
            animation: breathe 6s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes breathe {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.1); }
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .section-header h2 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 16px;
            background: linear-gradient(135deg, var(--white), var(--soft-gray));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleGlow 3s ease-in-out infinite;
        }

        @keyframes titleGlow {
            0%, 100% { text-shadow: 0 0 20px rgba(127, 90, 240, 0.3); }
            50% { text-shadow: 0 0 30px rgba(127, 90, 240, 0.6), 0 0 40px rgba(44, 182, 125, 0.3); }
        }

        .section-header p {
            font-size: 1.2rem;
            color: #cccccc;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Enhanced Scrolling Logos */
        .logos-container {
            position: relative;
            overflow: hidden;
            margin-top: 50px;
        }

        .logos-scroll {
            display: flex;
            gap: 40px;
            animation: scrollRight 30s linear infinite;
        }

        .logos-scroll:hover {
            animation-play-state: paused;
        }

        @keyframes scrollRight {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .logos-scroll-reverse {
            display: flex;
            gap: 40px;
            margin-top: 30px;
            animation: scrollLeft 35s linear infinite;
        }

        .logos-scroll-reverse:hover {
            animation-play-state: paused;
        }

        @keyframes scrollLeft {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }

        .logo-item {
            flex-shrink: 0;
            width: 200px;
            height: 120px;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            transition: all 0.6s ease;
        }

        .logo-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.95) 0%,
                rgba(245, 245, 245, 0.98) 100%);
            z-index: 1;
            transition: all 0.6s ease;
        }

        .logo-item::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                var(--electric-violet),
                var(--mint-green),
                var(--bright-orange),
                var(--electric-violet));
            background-size: 400% 400%;
            border-radius: 22px;
            z-index: 0;
            opacity: 0;
            animation: gradientShift 4s ease-in-out infinite;
            transition: opacity 0.6s ease;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .logo-item img {
            max-width: 160px;
            max-height: 80px;
            width: auto;
            height: auto;
            object-fit: contain;
            position: relative;
            z-index: 2;
            filter: contrast(1.1) brightness(0.9);
            transition: all 0.6s ease;
        }

        .logo-item:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 25px 50px rgba(127, 90, 240, 0.3);
        }

        .logo-item:hover::after {
            opacity: 1;
        }

        .logo-item:hover img {
            filter: contrast(1.2) brightness(1.1) saturate(1.2);
            transform: scale(1.05);
        }

        /* Client Feedback Section with Enhanced Scrolling Animation */
        .feedback {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--carbon-blue) 0%, #1a1a2e 50%, #0f1419 100%);
            position: relative;
            overflow: hidden;
        }

        .feedback::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(127, 90, 240, 0.15) 0%, transparent 60%),
                radial-gradient(circle at 80% 20%, rgba(44, 182, 125, 0.15) 0%, transparent 60%),
                radial-gradient(circle at 40% 40%, rgba(255, 137, 6, 0.08) 0%, transparent 50%);
            animation: feedbackBackgroundFlow 12s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes feedbackBackgroundFlow {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.7; }
            33% { transform: scale(1.1) rotate(1deg); opacity: 0.9; }
            66% { transform: scale(0.95) rotate(-0.5deg); opacity: 0.6; }
        }

        .feedback-container {
            position: relative;
            z-index: 2;
        }

        .feedback-scroll-container {
            overflow: hidden;
            margin-top: 50px;
            position: relative;
            mask: linear-gradient(90deg, transparent 0%, black 5%, black 95%, transparent 100%);
        }

        /* Dual Direction Scrolling Like Company Logos */
        .feedback-scroll-row {
            display: flex;
            gap: 30px;
            animation: feedbackScrollRight 45s linear infinite;
            margin-bottom: 30px;
        }

        .feedback-scroll-row:nth-child(2) {
            animation: feedbackScrollLeft 50s linear infinite;
        }

        .feedback-scroll-row:hover {
            animation-play-state: paused;
        }

        @keyframes feedbackScrollRight {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes feedbackScrollLeft {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }

        .feedback-card {
            flex-shrink: 0;
            width: 400px;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            padding: 35px;
            border-radius: 25px;
            border: 1px solid var(--glass-border);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .feedback-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.15),
                rgba(127, 90, 240, 0.1),
                rgba(255, 255, 255, 0.15),
                transparent);
            transition: left 0.8s ease;
            z-index: 1;
        }

        .feedback-card::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                var(--electric-violet),
                var(--mint-green),
                var(--bright-orange),
                var(--electric-violet));
            background-size: 400% 400%;
            border-radius: 27px;
            z-index: -1;
            opacity: 0;
            animation: gradientShift 4s ease-in-out infinite;
            transition: opacity 0.6s ease;
        }

        .feedback-card:hover::before {
            left: 100%;
        }

        .feedback-card:hover::after {
            opacity: 1;
        }

        .feedback-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.5),
                0 0 30px rgba(127, 90, 240, 0.4);
            border-color: transparent;
        }

        .stars {
            display: flex;
            gap: 5px;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .star {
            color: #ffd700;
            font-size: 1.3rem;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
            animation: starTwinkle 3s ease-in-out infinite;
            animation-delay: calc(var(--star-index) * 0.2s);
        }

        .star:nth-child(1) { --star-index: 1; }
        .star:nth-child(2) { --star-index: 2; }
        .star:nth-child(3) { --star-index: 3; }
        .star:nth-child(4) { --star-index: 4; }
        .star:nth-child(5) { --star-index: 5; }

        @keyframes starTwinkle {
            0%, 100% { transform: scale(1); text-shadow: 0 0 10px rgba(255, 215, 0, 0.5); }
            50% { transform: scale(1.2); text-shadow: 0 0 20px rgba(255, 215, 0, 0.8); }
        }

        .feedback-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #e8e8e8;
            margin-bottom: 25px;
            font-style: italic;
            position: relative;
            z-index: 2;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .client-info {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 2;
        }

        .client-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            overflow: hidden;
            position: relative;
            box-shadow: 0 8px 25px rgba(127, 90, 240, 0.3);
            transition: all 0.4s ease;
        }

        .client-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: all 0.4s ease;
        }

        .feedback-card:hover .client-avatar {
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(127, 90, 240, 0.5);
        }

        .feedback-card:hover .client-avatar img {
            transform: scale(1.05);
        }

        .client-details h4 {
            color: var(--mint-green);
            font-size: 1.2rem;
            margin-bottom: 8px;
            font-weight: 700;
            text-shadow: 0 0 15px rgba(44, 182, 125, 0.4);
            transition: all 0.4s ease;
        }

        .feedback-card:hover .client-details h4 {
            color: var(--electric-violet);
            text-shadow: 0 0 20px rgba(127, 90, 240, 0.6);
        }

        .client-details p {
            color: #bbb;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.4s ease;
        }

        .feedback-card:hover .client-details p {
            color: #ddd;
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: var(--dark-gray);
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .about-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }

        .about-card:hover::before {
            left: 100%;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: var(--mint-green);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--electric-violet), #9d7df0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 8px 25px rgba(127, 90, 240, 0.3);
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            color: var(--mint-green);
        }

        .about-card p {
            color: #cccccc;
            line-height: 1.6;
        }

        /* Contact Info Section */
        .contact-info {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--dark-gray) 0%, var(--carbon-blue) 100%);
            position: relative;
            overflow: hidden;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(127, 90, 240, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(44, 182, 125, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255, 137, 6, 0.05) 0%, transparent 50%);
            animation: backgroundFlow 10s ease-in-out infinite;
            z-index: 1;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
            position: relative;
            z-index: 2;
        }

        .contact-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            padding: 40px 30px;
            border-radius: 25px;
            border: 1px solid var(--glass-border);
            text-align: center;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px) scale(0.95);
            animation: contactCardEntrance 0.8s ease-out forwards;
            animation-delay: calc(var(--card-index) * 0.15s);
        }

        .contact-card:nth-child(1) { --card-index: 1; }
        .contact-card:nth-child(2) { --card-index: 2; }
        .contact-card:nth-child(3) { --card-index: 3; }
        .contact-card:nth-child(4) { --card-index: 4; }
        .contact-card:nth-child(5) { --card-index: 5; }
        .contact-card:nth-child(6) { --card-index: 6; }

        @keyframes contactCardEntrance {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                rgba(127, 90, 240, 0.05),
                rgba(255, 255, 255, 0.1),
                transparent);
            transition: left 0.8s ease;
            z-index: 1;
        }

        .contact-card::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                var(--electric-violet),
                var(--mint-green),
                var(--bright-orange),
                var(--electric-violet));
            background-size: 400% 400%;
            border-radius: 27px;
            z-index: -1;
            opacity: 0;
            animation: gradientShift 4s ease-in-out infinite;
            transition: opacity 0.6s ease;
        }

        .contact-card:hover::before {
            left: 100%;
        }

        .contact-card:hover::after {
            opacity: 1;
        }

        .contact-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.4),
                0 0 30px rgba(127, 90, 240, 0.3),
                inset 0 0 20px rgba(255, 255, 255, 0.1);
            border-color: transparent;
        }

        .contact-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.2rem;
            color: white;
            box-shadow: 0 8px 25px rgba(127, 90, 240, 0.4);
            position: relative;
            z-index: 2;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            animation: iconPulse 3s ease-in-out infinite;
        }

        @keyframes iconPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 8px 25px rgba(127, 90, 240, 0.4);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 12px 35px rgba(127, 90, 240, 0.6);
            }
        }

        .contact-card:hover .contact-icon {
            transform: scale(1.2) rotate(360deg);
            box-shadow:
                0 15px 40px rgba(127, 90, 240, 0.6),
                0 0 20px rgba(44, 182, 125, 0.4);
            background: linear-gradient(135deg, var(--mint-green), var(--electric-violet));
        }

        .contact-card h3 {
            font-size: 1.6rem;
            margin-bottom: 18px;
            color: var(--mint-green);
            position: relative;
            z-index: 2;
            transition: all 0.4s ease;
            animation: textGlow 4s ease-in-out infinite;
        }

        @keyframes textGlow {
            0%, 100% { text-shadow: 0 0 10px rgba(44, 182, 125, 0.3); }
            50% { text-shadow: 0 0 20px rgba(44, 182, 125, 0.6), 0 0 30px rgba(127, 90, 240, 0.3); }
        }

        .contact-card:hover h3 {
            color: var(--electric-violet);
            transform: translateY(-2px);
            text-shadow: 0 0 15px rgba(127, 90, 240, 0.7);
        }

        .contact-card p {
            color: #e0e0e0;
            margin-bottom: 12px;
            position: relative;
            z-index: 2;
            transition: all 0.4s ease;
            line-height: 1.6;
        }

        .contact-card:hover p {
            color: #f0f0f0;
            transform: translateY(-1px);
        }

        .contact-card a {
            color: var(--electric-violet);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.4s ease;
            position: relative;
            z-index: 2;
            display: inline-block;
        }

        .contact-card a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--electric-violet), var(--mint-green));
            transition: width 0.4s ease;
        }

        .contact-card a:hover {
            color: var(--mint-green);
            text-shadow: 0 0 10px rgba(44, 182, 125, 0.7);
            transform: translateY(-2px);
        }

        .contact-card a:hover::after {
            width: 100%;
        }

        /* Contact Form Section */
        .contact {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--carbon-blue) 0%, var(--dark-gray) 100%);
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 70% 30%, rgba(127, 90, 240, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 30% 70%, rgba(44, 182, 125, 0.1) 0%, transparent 50%);
            animation: contactBackgroundFlow 8s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes contactBackgroundFlow {
            0%, 100% { transform: rotate(0deg) scale(1); opacity: 0.6; }
            50% { transform: rotate(2deg) scale(1.05); opacity: 0.8; }
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            padding: 50px 40px;
            border-radius: 30px;
            border: 1px solid var(--glass-border);
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.4),
                inset 0 0 20px rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: perspective(1000px) rotateX(30deg) translateY(50px);
            animation: formEntranceNew 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s forwards;
        }

        @keyframes formEntranceNew {
            0% {
                opacity: 0;
                transform: perspective(1000px) rotateX(30deg) translateY(50px) scale(0.9);
            }
            50% {
                opacity: 0.7;
                transform: perspective(1000px) rotateX(15deg) translateY(20px) scale(0.95);
            }
            100% {
                opacity: 1;
                transform: perspective(1000px) rotateX(0deg) translateY(0) scale(1);
            }
        }

        @keyframes formEntrance {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .contact-form::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                var(--electric-violet),
                var(--mint-green),
                var(--bright-orange),
                var(--electric-violet));
            background-size: 300% 300%;
            border-radius: 32px;
            z-index: -1;
            opacity: 0;
            animation: formBorderGlow 6s ease-in-out infinite;
            transition: opacity 0.6s ease;
        }

        @keyframes formBorderGlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .contact-form:hover::before {
            opacity: 0.7;
        }

        .form-group {
            margin-bottom: 30px;
            opacity: 0;
            transform: translateX(-20px);
            animation: formGroupSlide 0.6s ease-out forwards;
            animation-delay: calc(var(--group-index) * 0.1s + 0.5s);
        }

        .form-group:nth-child(1) { --group-index: 1; }
        .form-group:nth-child(2) { --group-index: 2; }
        .form-group:nth-child(3) { --group-index: 3; }
        .form-group:nth-child(4) { --group-index: 4; }
        .form-group:nth-child(5) { --group-index: 5; }

        @keyframes formGroupSlide {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: var(--mint-green);
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            text-shadow: 0 0 10px rgba(44, 182, 125, 0.3);
        }

        .form-group:hover label {
            color: var(--electric-violet);
            text-shadow: 0 0 15px rgba(127, 90, 240, 0.5);
            transform: translateX(5px);
        }

        .form-control {
            width: 100%;
            padding: 18px 25px;
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--soft-gray);
            font-size: 16px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            backdrop-filter: blur(10px);
            position: relative;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.4s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--electric-violet);
            box-shadow:
                0 0 0 4px rgba(127, 90, 240, 0.4),
                0 15px 35px rgba(127, 90, 240, 0.3),
                inset 0 0 30px rgba(255, 255, 255, 0.15);
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-5px) scale(1.03);
            animation: formFieldPulse 2s ease-in-out infinite;
        }

        @keyframes formFieldPulse {
            0%, 100% {
                box-shadow:
                    0 0 0 4px rgba(127, 90, 240, 0.4),
                    0 15px 35px rgba(127, 90, 240, 0.3),
                    inset 0 0 30px rgba(255, 255, 255, 0.15);
            }
            50% {
                box-shadow:
                    0 0 0 6px rgba(127, 90, 240, 0.6),
                    0 20px 45px rgba(127, 90, 240, 0.4),
                    inset 0 0 40px rgba(255, 255, 255, 0.2);
            }
        }

        .form-control:focus::placeholder {
            color: rgba(255, 255, 255, 0.7);
            transform: translateY(-2px);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 130px;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--mint-green), #2ea86e);
            color: white;
            border: none;
            padding: 20px 45px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            width: 100%;
            box-shadow: 0 8px 25px rgba(44, 182, 125, 0.4);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0;
            transform: translateY(20px);
            animation: buttonEntrance 0.8s ease-out 1.5s forwards;
        }

        @keyframes buttonEntrance {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent);
            transition: left 0.6s ease;
        }

        .btn-submit::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        .btn-submit:hover::after {
            width: 300px;
            height: 300px;
        }

        .btn-submit:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow:
                0 15px 35px rgba(44, 182, 125, 0.6),
                0 0 30px rgba(127, 90, 240, 0.3);
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
        }

        .btn-submit:active {
            transform: translateY(-2px) scale(1.02);
            transition: all 0.1s ease;
        }

        /* Modern scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-gray);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, var(--mint-green), var(--electric-violet));
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none;
            }

            .mobile-menu-toggle {
                display: flex;
            }

            .language-toggle {
                top: 15px;
                {{ $locale === 'ar' ? 'left' : 'right' }}: 15px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .feedback-scroll {
                gap: 20px;
            }

            .feedback-card {
                min-width: 300px;
            }

            .samples-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .sample-filters {
                gap: 10px;
            }

            .filter-btn {
                padding: 8px 16px;
                font-size: 0.8rem;
            }

            .logos-scroll, .logos-scroll-reverse {
                gap: 20px;
            }

            .logo-item {
                width: 150px;
                height: 100px;
            }

            .logo-item img {
                max-width: 120px;
                max-height: 60px;
            }

            .contact-form {
                padding: 30px 20px;
            }
        }

        /* RTL Support */
        [dir="rtl"] .hero-content {
            direction: rtl;
        }

        [dir="rtl"] .nav-content {
            direction: rtl;
        }

        [dir="rtl"] .hero-buttons {
            direction: rtl;
        }

        [dir="rtl"] .logos-scroll {
            direction: rtl;
        }

        /* Audio Control Button */
        .audio-control {
            position: fixed;
            bottom: 30px;
            {{ $locale === 'ar' ? 'left' : 'right' }}: 30px;
            z-index: 1000;
        }

        .audio-toggle-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--electric-violet), var(--mint-green));
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(127, 90, 240, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: audioPulse 2s ease-in-out infinite;
        }

        .audio-toggle-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(127, 90, 240, 0.6);
        }

        .audio-toggle-btn.muted {
            background: linear-gradient(135deg, #666, #888);
            animation: none;
        }

        @keyframes audioPulse {
            0%, 100% {
                box-shadow: 0 8px 25px rgba(127, 90, 240, 0.4);
            }
            50% {
                box-shadow: 0 8px 25px rgba(127, 90, 240, 0.6), 0 0 0 10px rgba(127, 90, 240, 0.1);
            }
        }

        /* Success Animation */
        .success-message {
            background: linear-gradient(135deg, var(--mint-green), #2ea86e);
            color: white;
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Flying Microphone -->
    <div class="flying-microphone">
        <i class="fas fa-microphone"></i>
    </div>

    <!-- Language Toggle -->
    <div class="language-toggle">
        <form method="POST" action="{{ route('portfolio.setLanguage') }}" id="languageForm">
            @csrf
            <button type="button" class="lang-btn {{ $locale === 'en' ? 'active' : '' }}" onclick="setLanguage('en')">EN</button>
            <button type="button" class="lang-btn {{ $locale === 'ar' ? 'active' : '' }}" onclick="setLanguage('ar')">عربي</button>
            <input type="hidden" name="locale" id="localeInput" value="{{ $locale }}">
        </form>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">Hossam</div>
                <ul class="nav-links">
                    <li><a href="#home">{{ __('portfolio.nav.home') }}</a></li>
                    <li><a href="#samples">{{ $locale === 'ar' ? 'عينات صوتية' : 'Voice Samples' }}</a></li>
                    <li><a href="#about">{{ __('portfolio.nav.about') }}</a></li>
                    <li><a href="#contact-info">{{ $locale === 'ar' ? 'تواصل معي' : 'Contact Info' }}</a></li>
                    <li><a href="#feedback">{{ $locale === 'ar' ? 'آراء العملاء' : 'Feedback' }}</a></li>
                    <li><a href="#contact">{{ __('portfolio.nav.contact') }}</a></li>
                </ul>
                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="floating-elements">
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
            </div>
            <div class="ai-waves">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="hero-text">
                    <span class="hero-subtitle">{{ __('portfolio.hero.subtitle') }}</span>
                    <h1 class="hero-title">
                        {{ __('portfolio.hero.title') }} <span class="highlight-violet">{{ $locale === 'ar' ? 'بسرعة أكبر من الصوت' : 'faster than sound' }}</span>
                    </h1>
                    <p class="hero-description">
                        {{ __('portfolio.hero.description') }}
                    </p>
                    <div class="hero-buttons">
                        <a href="#samples" class="btn btn-primary">
                            <i class="fas fa-play"></i>
                            {{ $locale === 'ar' ? 'استمع للعينات' : 'Listen to Samples' }}
                        </a>
                        <a href="#about" class="btn btn-secondary">
                            <i class="fas fa-user"></i>
                            {{ __('portfolio.hero.view_portfolio') }}
                        </a>
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                    <div class="professional-photo-container">
                        <img src="{{ asset('images/profile2.JPG') }}" alt="Hicats Sam - Professional AI-Enhanced Voice Artist">
                        <div class="ai-background-removal"></div>
                        <div class="professional-glow"></div>
                    </div>
                    <div class="mic-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voice Samples Section -->
  @php $locale = $locale ?? app()->getLocale(); @endphp

<section id="samples" class="samples">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ $locale === 'ar' ? 'عينات صوتية' : 'Voice Samples' }}</h2>
            <p>{{ $locale === 'ar' ? 'استمع إلى مجموعة مختارة من أعمال التعليق الصوتي المتميزة' : 'Listen to a curated selection of outstanding voice-over work' }}</p>
        </div>

        <!-- Sample Filters -->
        <div class="sample-filters" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">{{ $locale === 'ar' ? 'الكل' : 'All' }}</button>
            <button class="filter-btn" data-filter="commercial">{{ $locale === 'ar' ? 'إعلانات' : 'Commercial' }}</button>
            <button class="filter-btn" data-filter="documentary">{{ $locale === 'ar' ? 'وثائقي' : 'Documentary' }}</button>
            <button class="filter-btn" data-filter="character">{{ $locale === 'ar' ? 'شخصيات' : 'Character' }}</button>
            <button class="filter-btn" data-filter="narration">{{ $locale === 'ar' ? 'سرد' : 'Narration' }}</button>
            <button class="filter-btn" data-filter="educational">{{ $locale === 'ar' ? 'تعليمي' : 'Educational' }}</button>
        </div>

        <div class="samples-grid" id="samplesGrid">
            @if(isset($samples) && $samples->count() > 0)
                @foreach($samples as $sample)
                    <div class="sample-card" data-category="{{ strtolower($sample->category) }}" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="sample-header">
                            <div class="sample-icon">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div class="sample-info">
                                <h3>{{ $sample->getLocalizedTitle($locale) }}</h3>
                                <p class="sample-category">{{ $sample->category }}</p>
                            </div>
                        </div>
                        <p class="sample-description">{{ $sample->getLocalizedDescription($locale) }}</p>
                        <div class="audio-player">
                            <audio controls>
                                <source src="{{ asset('storage/' . $sample->audio_file) }}" type="audio/mpeg">
                                {{ $locale === 'ar' ? 'متصفحك لا يدعم تشغيل الملفات الصوتية' : 'Your browser does not support the audio element.' }}
                            </audio>
                        </div>
                        <div class="sample-duration">{{ $sample->getFormattedDuration() }}</div>
                    </div>
                @endforeach
            @else
                <!-- Demo samples with categories -->
                <div class="sample-card" data-category="commercial" data-aos="fade-up">
                    <div class="sample-header">
                        <div class="sample-icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <div class="sample-info">
                            <h3>{{ $locale === 'ar' ? 'إعلان تجاري للمطاعم' : 'Restaurant Commercial' }}</h3>
                            <p class="sample-category">{{ $locale === 'ar' ? 'إعلان' : 'Commercial' }}</p>
                        </div>
                    </div>
                    <p class="sample-description">{{ $locale === 'ar' ? 'نموذج لتعليق صوتي احترافي لإعلان مطعم' : 'Professional voice-over sample for restaurant advertisement' }}</p>
                    <div class="audio-player">
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            {{ $locale === 'ar' ? 'سيتم إضافة العينات قريباً' : 'Samples will be added soon' }}
                        </audio>
                    </div>
                    <div class="sample-duration">0:30</div>
                </div>

                <div class="sample-card" data-category="documentary" data-aos="fade-up" data-aos-delay="100">
                    <div class="sample-header">
                        <div class="sample-icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <div class="sample-info">
                            <h3>{{ $locale === 'ar' ? 'فيلم وثائقي' : 'Documentary Narration' }}</h3>
                            <p class="sample-category">{{ $locale === 'ar' ? 'وثائقي' : 'Documentary' }}</p>
                        </div>
                    </div>
                    <p class="sample-description">{{ $locale === 'ar' ? 'تعليق صوتي لفيلم وثائقي تاريخي' : 'Voice-over for historical documentary' }}</p>
                    <div class="audio-player">
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            {{ $locale === 'ar' ? 'سيتم إضافة العينات قريباً' : 'Samples will be added soon' }}
                        </audio>
                    </div>
                    <div class="sample-duration">1:45</div>
                </div>

                <div class="sample-card" data-category="character" data-aos="fade-up" data-aos-delay="200">
                    <div class="sample-header">
                        <div class="sample-icon">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <div class="sample-info">
                            <h3>{{ $locale === 'ar' ? 'أداء شخصية كرتونية' : 'Cartoon Character Voice' }}</h3>
                            <p class="sample-category">{{ $locale === 'ar' ? 'شخصيات' : 'Character' }}</p>
                        </div>
                    </div>
                    <p class="sample-description">{{ $locale === 'ar' ? 'أداء صوتي لشخصية كرتونية للأطفال' : 'Voice acting for children\'s cartoon character' }}</p>
                    <div class="audio-player">
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            {{ $locale === 'ar' ? 'سيتم إضافة العينات قريباً' : 'Samples will be added soon' }}
                        </audio>
                    </div>
                    <div class="sample-duration">0:45</div>
                </div>

                <!-- مثال إضافي بعد  -->
                <div class="sample-card" data-aos="fade-up">
                    <div class="sample-header">
                        <div class="sample-icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <div class="sample-info">
                            <h3>{{ $locale === 'ar' ? 'إعلان تجاري' : 'Commercial Advertisement' }}</h3>
                            <p class="sample-category">{{ $locale === 'ar' ? 'إعلان' : 'Advertisement' }}</p>
                        </div>
                    </div>
                    <p class="sample-description">{{ $locale === 'ar' ? 'نموذج لتعليق صوتي احترافي لإعلان تجاري' : 'Professional voice-over sample for commercial advertisement' }}</p>
                    <div class="audio-player">
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            {{ $locale === 'ar' ? 'سيتم إضافة العينات قريباً' : 'Samples will be added soon' }}
                        </audio>
                    </div>
                    <div class="sample-duration">0:30</div>
                </div>
            @endif
        </div>
    </div>
</section>


    <!-- Trusted By Section with Enhanced Scrolling -->
    <section id="trusted-by" class="trusted-by">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ __('portfolio.trusted_by.title') }} <span class="highlight-violet">{{ $locale === 'ar' ? 'من قبل' : 'By' }}</span></h2>
                <p>{{ __('portfolio.trusted_by.description') }}</p>
            </div>
            <div class="logos-container" data-aos="fade-up" data-aos-delay="200">
                <!-- First Row - Scrolling Right -->
                <div class="logos-scroll">
                    <div class="logo-item">
                        <img src="{{ asset('images/7enews_1750670748696.webp') }}" alt="7E News">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/alquds-2_1750670748696.png') }}" alt="Al Quds">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/Alrowad_1750670748697.png') }}" alt="Al Rowad Model Schools">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo1_1750670748698.png') }}" alt="Makboos Restaurant">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/MEDIA PLUS_1750670748698.png') }}" alt="Media Plus">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/rasel-logo_1750670748699.png') }}" alt="Rasel">
                    </div>
                     <div class="logo-item">
                        <img src="{{ asset('images/jawwal.webp') }}" alt="Umm Al-Qura University">
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="logo-item">
                        <img src="{{ asset('images/7enews_1750670748696.webp') }}" alt="7E News">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/alquds-2_1750670748696.png') }}" alt="Al Quds">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/Alrowad_1750670748697.png') }}" alt="Al Rowad Model Schools">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo1_1750670748698.png') }}" alt="Makboos Restaurant">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/MEDIA PLUS_1750670748698.png') }}" alt="Media Plus">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/rasel-logo_1750670748699.png') }}" alt="Rasel">
                    </div>
                     <div class="logo-item">
                        <img src="{{ asset('images/jawwal.webp') }}" alt="Umm Al-Qura University">
                    </div>
                </div>

                <!-- Second Row - Scrolling Left -->
                <div class="logos-scroll-reverse">
                    <div class="logo-item">
                        <img src="{{ asset('images/rook_1750670748699.webp') }}" alt="Rook">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo - جمعية إنقاذ المستقبل الشبابي_1750670748697.png') }}" alt="Future Youth Rescue Association">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo_1750670748697.png') }}" alt="Palestinian Ministry of Justice">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/widelogo_1750670748699.png') }}" alt="Charity Organization">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/أجنحة زاد الايمان_1750670748700.png') }}" alt="Zad Al Iman Wings">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/جامعة أم القرى_1750670748700.png') }}" alt="Umm Al-Qura University">
                    </div>
                     <div class="logo-item">
                        <img src="{{ asset('images/jawwal.webp') }}" alt="Umm Al-Qura University">
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="logo-item">
                        <img src="{{ asset('images/rook_1750670748699.webp') }}" alt="Rook">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo - جمعية إنقاذ المستقبل الشبابي_1750670748697.png') }}" alt="Future Youth Rescue Association">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/logo_1750670748697.png') }}" alt="Palestinian Ministry of Justice">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/widelogo_1750670748699.png') }}" alt="Charity Organization">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/أجنحة زاد الايمان_1750670748700.png') }}" alt="Zad Al Iman Wings">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('images/جامعة أم القرى_1750670748700.png') }}" alt="Umm Al-Qura University">
                    </div>
                     <div class="logo-item">
                        <img src="{{ asset('images/jawwal.webp') }}" alt="Umm Al-Qura University">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ __('portfolio.about.title') }}</h2>
                <p>{{ __('portfolio.about.description') }}</p>
            </div>
            <div class="about-grid">
                <div class="about-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>{{ __('portfolio.about.multilingual.title') }}</h3>
                    <p>{{ __('portfolio.about.multilingual.description') }}</p>
                </div>
                <div class="about-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>{{ __('portfolio.about.ai_enhanced.title') }}</h3>
                    <p>{{ __('portfolio.about.ai_enhanced.description') }}</p>
                </div>
                <div class="about-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>{{ __('portfolio.about.professional.title') }}</h3>
                    <p>{{ __('portfolio.about.professional.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Feedback Section with Enhanced Client Images -->
    <section id="feedback" class="feedback">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ $locale === 'ar' ? 'آراء العملاء' : 'Client Feedback' }}</h2>
                <p>{{ $locale === 'ar' ? 'اكتشف ما يقوله عملائي عن جودة خدمات التعليق الصوتي' : 'Discover what my clients say about the quality of voice-over services' }}</p>
            </div>
            <div class="feedback-container">
                <div class="feedback-scroll-container">
                    <!-- First Row - Scrolling Right -->
                    <div class="feedback-scroll-row">
                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"صوت هقاط سام محترف جداً ومميز. أنجز مشروع الإعلان التجاري بجودة عالية وفي الوقت المحدد. أنصح به بشدة لأي مشروع يحتاج إلى تعليق صوتي احترافي."' : '"Hicats Sam\'s voice is extremely professional and distinctive. He completed the commercial project with high quality and on time. I highly recommend him for any project requiring professional voice-over."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/7enews_1750670748696.webp') }}" alt="Ahmed Al-Masri">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'أحمد المصري' : 'Ahmed Al-Masri' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مدير إنتاج - قناة 7E News' : 'Production Manager - 7E News Channel' }}</p>
                                </div>
                            </div>
                        </div>

                    <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"تعاملت مع هقاط سام في عدة مشاريع ودائماً ما يبهرني بمهارته في تنويع النبرات وقدرته على إيصال الرسالة بوضوح. خدمة عملاء ممتازة ومرونة في التعديلات."' : '"I worked with Hicats Sam on several projects and he always amazes me with his skill in voice modulation and ability to convey messages clearly. Excellent customer service and flexibility in revisions."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/logo1_1750670748698.png') }}" alt="Sarah Al-Ahmad">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'سارة الأحمد' : 'Sarah Al-Ahmad' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مديرة التسويق - مطعم مكبوس' : 'Marketing Manager - Makboos Restaurant' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"صوت دافئ ومعبر، مناسب جداً للبرامج الوثائقية. هقاط سام فنان محترف يفهم متطلبات العمل الإعلامي ويسلم في الوقت المحدد. شراكة ناجحة ومثمرة."' : '"Warm and expressive voice, perfect for documentaries. Hicats Sam is a professional artist who understands media work requirements and delivers on time. A successful and fruitful partnership."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/alquds-2_1750670748696.png') }}" alt="Mohammed Al-Quds">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'محمد القدس' : 'Mohammed Al-Quds' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'منتج تنفيذي - صحيفة القدس' : 'Executive Producer - Al-Quds Newspaper' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate first set for seamless loop -->
                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"صوت هقاط سام محترف جداً ومميز. أنجز مشروع الإعلان التجاري بجودة عالية وفي الوقت المحدد. أنصح به بشدة لأي مشروع يحتاج إلى تعليق صوتي احترافي."' : '"Hicats Sam\'s voice is extremely professional and distinctive. He completed the commercial project with high quality and on time. I highly recommend him for any project requiring professional voice-over."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/7enews_1750670748696.webp') }}" alt="Ahmed Al-Masri">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'أحمد المصري' : 'Ahmed Al-Masri' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مدير إنتاج - قناة 7E News' : 'Production Manager - 7E News Channel' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"تعاملت مع هقاط سام في عدة مشاريع ودائماً ما يبهرني بمهارته في تنويع النبرات وقدرته على إيصال الرسالة بوضوح. خدمة عملاء ممتازة ومرونة في التعديلات."' : '"I worked with Hicats Sam on several projects and he always amazes me with his skill in voice modulation and ability to convey messages clearly. Excellent customer service and flexibility in revisions."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/logo1_1750670748698.png') }}" alt="Sarah Al-Ahmad">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'سارة الأحمد' : 'Sarah Al-Ahmad' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مديرة التسويق - مطعم مكبوس' : 'Marketing Manager - Makboos Restaurant' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row - Scrolling Left -->
                    <div class="feedback-scroll-row">
                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"خبرة واسعة في مجال التعليق الصوتي للمؤسسات التعليمية. صوت واضح وملائم للطلاب، مع إمكانية التحكم في السرعة والنبرة حسب المحتوى التعليمي."' : '"Extensive experience in voice-over for educational institutions. Clear and suitable voice for students, with ability to control speed and tone according to educational content."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/Alrowad_1750670748697.png') }}" alt="Fatima Al-Rowad">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'فاطمة الرواد' : 'Fatima Al-Rowad' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مديرة المحتوى - مدارس الرواد النموذجية' : 'Content Manager - Al-Rowad Model Schools' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"مواعيد دقيقة وجودة صوت استثنائية. هقاط سام يتميز بالمهنية العالية والقدرة على فهم متطلبات العميل بسرعة وتنفيذها بإتقان."' : '"Precise timing and exceptional sound quality. Hicats Sam stands out with high professionalism and ability to quickly understand client requirements and execute them perfectly."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/MEDIA PLUS_1750670748698.png') }}" alt="Khalid Media">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'خالد الإعلامي' : 'Khalid Al-Alami' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مدير الإنتاج - ميديا بلس' : 'Production Director - Media Plus' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"تعاون مثمر في مشاريع متعددة. صوت متميز ومرونة في التعامل مع متطلبات العمل المختلفة. أنصح بالتعامل معه للحصول على نتائج احترافية."' : '"Fruitful collaboration on multiple projects. Distinctive voice and flexibility in dealing with different work requirements. I recommend working with him for professional results."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/rasel-logo_1750670748699.png') }}" alt="Nadia Rasel">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'نادية راسل' : 'Nadia Rasel' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مديرة العلاقات العامة - راسل' : 'Public Relations Manager - Rasel' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate second set for seamless loop -->
                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"خبرة واسعة في مجال التعليق الصوتي للمؤسسات التعليمية. صوت واضح وملائم للطلاب، مع إمكانية التحكم في السرعة والنبرة حسب المحتوى التعليمي."' : '"Extensive experience in voice-over for educational institutions. Clear and suitable voice for students, with ability to control speed and tone according to educational content."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/Alrowad_1750670748697.png') }}" alt="Fatima Al-Rowad">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'فاطمة الرواد' : 'Fatima Al-Rowad' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مديرة المحتوى - مدارس الرواد النموذجية' : 'Content Manager - Al-Rowad Model Schools' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="feedback-card">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"مواعيد دقيقة وجودة صوت استثنائية. هقاط سام يتميز بالمهنية العالية والقدرة على فهم متطلبات العميل بسرعة وتنفيذها بإتقان."' : '"Precise timing and exceptional sound quality. Hicats Sam stands out with high professionalism and ability to quickly understand client requirements and execute them perfectly."' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/MEDIA PLUS_1750670748698.png') }}" alt="Khalid Media">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $locale === 'ar' ? 'خالد الإعلامي' : 'Khalid Al-Alami' }}</h4>
                                    <p>{{ $locale === 'ar' ? 'مدير الإنتاج - ميديا بلس' : 'Production Director - Media Plus' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section id="contact-info" class="contact-info">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ $locale === 'ar' ? 'معلومات التواصل' : 'Contact Information' }}</h2>
                <p>{{ $locale === 'ar' ? 'تواصل معي عبر القنوات التالية للحصول على أفضل خدمات التعليق الصوتي' : 'Get in touch through multiple channels for the best voice-over services' }}</p>
            </div>
            <div class="contact-grid">
                <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'هاتف' : 'Phone' }}</h3>
                    <p><a href="tel:+970592123456">+972 569 896 990</a></p>
                    <p><a href="tel:+966501234567">+966 50 123 4567</a></p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'بريد إلكتروني' : 'Email' }}</h3>
                    <p><a href="mailto:hicats.sam@gmail.com">hicats.sam@gmail.com</a></p>
                    <p><a href="mailto:voice@hicatssam.com">voice@hicatssam.com</a></p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'واتساب' : 'WhatsApp' }}</h3>
                    <p><a href="https://wa.me/970592123456">+970 592 123 456</a></p>
                    <p>{{ $locale === 'ar' ? 'متاح 24/7 للاستشارات' : 'Available 24/7 for consultations' }}</p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-icon">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'لينكدإن' : 'LinkedIn' }}</h3>
                    <p><a href="https://linkedin.com/in/hicatssam" target="_blank">linkedin.com/in/hicatssam</a></p>
                    <p>{{ $locale === 'ar' ? 'شبكة مهنية' : 'Professional Network' }}</p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="contact-icon">
                        <i class="fab fa-telegram"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'تيليجرام' : 'Telegram' }}</h3>
                    <p><a href="https://t.me/hossamamriti">@hossamvoiceover</a></p>
                    <p>{{ $locale === 'ar' ? 'تواصل سريع ومباشر' : 'Quick and direct communication' }}</p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'ساعات العمل' : 'Working Hours' }}</h3>
                    <p>{{ $locale === 'ar' ? 'الأحد - الخميس: 9:00 - 18:00' : 'Sunday - Thursday: 9:00 - 18:00' }}</p>
                    <p>{{ $locale === 'ar' ? 'طوارئ: متاح في أي وقت' : 'Emergency: Available anytime' }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ __('portfolio.contact.title') }}</h2>
                <p>{{ __('portfolio.contact.description') }}</p>
            </div>
            <div class="contact-form" data-aos="fade-up" data-aos-delay="200">
                <form id="contactForm" method="POST" action="{{ route('portfolio.contact') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('portfolio.contact.form.name') }}</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('portfolio.contact.form.email') }}</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="project_type">{{ __('portfolio.contact.form.project_type') }}</label>
                        <select id="project_type" name="project_type" class="form-control" required>
                            <option value="">{{ $locale === 'ar' ? 'اختر نوع المشروع' : 'Select Project Type' }}</option>
                            <option value="commercial">{{ __('portfolio.contact.project_types.commercial') }}</option>
                            <option value="documentary">{{ __('portfolio.contact.project_types.documentary') }}</option>
                            <option value="character">{{ __('portfolio.contact.project_types.character') }}</option>
                            <option value="ai_project">{{ __('portfolio.contact.project_types.ai_project') }}</option>
                            <option value="multilingual">{{ __('portfolio.contact.project_types.multilingual') }}</option>
                            <option value="other">{{ __('portfolio.contact.project_types.other') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">{{ __('portfolio.contact.form.message') }}</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i>
                        {{ __('portfolio.contact.form.send') }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Background Audio -->
    <audio id="backgroundAudio" loop preload="auto">
        <source src="{{ asset('storage/background-music.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('storage/background-music.wav') }}" type="audio/wav">
        <!-- Fallback audio files - you can upload your own background music -->
    </audio>

    <!-- Audio Control Button -->
    <div id="audioControl" class="audio-control">
        <button id="audioToggle" class="audio-toggle-btn">
            <i class="fas fa-volume-up"></i>
        </button>
    </div>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Enhanced Audio Management
        let backgroundAudio = document.getElementById('backgroundAudio');
        let audioToggle = document.getElementById('audioToggle');
        let currentSample = null;
        let isBackgroundPlaying = false;
        let isMuted = false;

        // Initialize audio control
        if (backgroundAudio && audioToggle) {
            audioToggle.addEventListener('click', function() {
                if (isMuted) {
                    backgroundAudio.volume = 0.1;
                    backgroundAudio.play().catch(e => console.log('Audio play failed'));
                    this.innerHTML = '<i class="fas fa-volume-up"></i>';
                    this.classList.remove('muted');
                    isMuted = false;
                    isBackgroundPlaying = true;
                } else {
                    backgroundAudio.pause();
                    this.innerHTML = '<i class="fas fa-volume-mute"></i>';
                    this.classList.add('muted');
                    isMuted = true;
                    isBackgroundPlaying = false;
                }
            });

            // Auto-start background audio on first user interaction
            document.addEventListener('click', function() {
                if (!isBackgroundPlaying && !isMuted) {
                    backgroundAudio.volume = 0.1;
                    backgroundAudio.play().catch(e => console.log('Audio autoplay prevented'));
                    isBackgroundPlaying = true;
                }
            }, { once: true });
        }

        // Enhanced sample filtering functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const sampleCards = document.querySelectorAll('.sample-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.dataset.filter;

                // Update active button with animation
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.transform = 'scale(1)';
                });
                this.classList.add('active');
                this.style.transform = 'scale(1.1)';

                // Create ripple effect
                const ripple = document.createElement('div');
                ripple.style.cssText = `
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 0;
                    height: 0;
                    background: radial-gradient(circle, rgba(255, 255, 255, 0.5) 0%, transparent 70%);
                    border-radius: 50%;
                    transform: translate(-50%, -50%);
                    pointer-events: none;
                    z-index: 10;
                    animation: filterRipple 0.6s ease-out forwards;
                `;
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);

                // Filter samples with staggered animation
                sampleCards.forEach((card, index) => {
                    const category = card.dataset.category || 'all';

                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(30px) scale(0.9)';

                        setTimeout(() => {
                            card.style.transition = 'all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        }, index * 100);
                    } else {
                        card.style.transition = 'all 0.4s ease-out';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(-20px) scale(0.8)';

                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });

        // Add filter ripple animation
        const filterStyle = document.createElement('style');
        filterStyle.textContent = `
            @keyframes filterRipple {
                to {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(filterStyle);

        // Audio sample management
        document.addEventListener('DOMContentLoaded', function() {
            const audioElements = document.querySelectorAll('.sample-card audio');

            audioElements.forEach(audio => {
                audio.addEventListener('play', function() {
                    // Pause background audio when sample plays
                    if (backgroundAudio) {
                        backgroundAudio.pause();
                    }

                    // Pause other samples
                    audioElements.forEach(otherAudio => {
                        if (otherAudio !== this && !otherAudio.paused) {
                            otherAudio.pause();
                        }
                    });

                    currentSample = this;
                });

                audio.addEventListener('pause', function() {
                    // Resume background audio when sample stops
                    if (backgroundAudio && isBackgroundPlaying) {
                        setTimeout(() => {
                            if (!Array.from(audioElements).some(a => !a.paused)) {
                                backgroundAudio.play().catch(e => console.log('Background audio resume failed'));
                            }
                        }, 500);
                    }
                });

                audio.addEventListener('ended', function() {
                    // Resume background audio when sample ends
                    if (backgroundAudio && isBackgroundPlaying) {
                        backgroundAudio.play().catch(e => console.log('Background audio resume failed'));
                    }
                });
            });
        });

        // Language Toggle Function
        function setLanguage(locale) {
            document.getElementById('localeInput').value = locale;
            document.getElementById('languageForm').submit();
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('mobile-open');
                this.classList.toggle('active');
            });
        }

        // Enhanced navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(10, 15, 26, 0.95)';
                navbar.style.backdropFilter = 'blur(20px)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.1)';
                navbar.style.backdropFilter = 'blur(15px)';
            }
        });

        // Contact form submission with enhanced feedback
      document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('.btn-submit');
            const messageAlert = document.getElementById('messageAlert');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '{{ $locale === "ar" ? "جاري الإرسال..." : "Sending..." }}';
            submitBtn.disabled = true;

            // Create FormData
            const formData = new FormData(form);

            // Send AJAX request
            fetch('{{ route("portfolio.contact") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageAlert.innerHTML = data.message;
                    messageAlert.className = 'success-message';
                    messageAlert.style.display = 'block';
                    form.reset();
                } else {
                    messageAlert.innerHTML = data.message;
                    messageAlert.className = 'error-message';
                    messageAlert.style.display = 'block';
                }

                // Hide message after 5 seconds
                setTimeout(() => {
                    messageAlert.style.display = 'none';
                }, 5000);
            })
            .catch(error => {
                messageAlert.innerHTML = '{{ $locale === "ar" ? "حدث خطأ غير متوقع. يرجى المحاولة مرة أخرى." : "An unexpected error occurred. Please try again." }}';
                messageAlert.className = 'error-message';
                messageAlert.style.display = 'block';

                setTimeout(() => {
                    messageAlert.style.display = 'none';
                }, 5000);
            })
            .finally(() => {
                // Reset button state
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });


        // Add parallax effect to floating elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            document.querySelectorAll('.floating-element').forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Enhanced Intersection Observer for animations
        const animationObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Animate contact cards
                    if (entry.target.classList.contains('contact-card')) {
                        entry.target.style.animationDelay = `${index * 0.15}s`;
                        entry.target.style.animation = 'contactCardEntrance 0.8s ease-out forwards';
                    }

                    // Animate sample cards
                    if (entry.target.classList.contains('sample-card')) {
                        entry.target.style.animationDelay = `${index * 0.1}s`;
                        entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
                    }

                    // Animate form groups
                    if (entry.target.classList.contains('form-group')) {
                        entry.target.style.animationDelay = `${index * 0.1 + 0.5}s`;
                        entry.target.style.animation = 'formGroupSlide 0.6s ease-out forwards';
                    }
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all animated elements
        document.querySelectorAll('.contact-card, .sample-card, .form-group').forEach(element => {
            animationObserver.observe(element);
        });

        // Enhanced form interactions
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });

            input.addEventListener('input', function() {
                if (this.value.length > 0) {
                    this.parentElement.classList.add('has-content');
                } else {
                    this.parentElement.classList.remove('has-content');
                }
            });
        });

        // Contact card click animation
        document.querySelectorAll('.contact-card').forEach(card => {
            card.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const clickEffect = document.createElement('div');
                clickEffect.style.cssText = `
                    position: absolute;
                    top: ${y}px;
                    left: ${x}px;
                    width: 0;
                    height: 0;
                    background: radial-gradient(circle, rgba(44, 182, 125, 0.5) 0%, transparent 70%);
                    border-radius: 50%;
                    transform: translate(-50%, -50%);
                    pointer-events: none;
                    z-index: 10;
                    animation: clickRipple 0.5s ease-out forwards;
                `;

                this.appendChild(clickEffect);

                setTimeout(() => {
                    clickEffect.remove();
                }, 500);
            });
        });

        // Click ripple effect
        const clickStyle = document.createElement('style');
        clickStyle.textContent = `
            @keyframes clickRipple {
                to {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(clickStyle);
    </script>
</body>
</html>
