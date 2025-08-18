
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ __('portfolio.hero.title') }} - Hossam </title>
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




    .feedback-scroll-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        margin-top: 2rem;
    }

    .feedback-scroll-container {
        overflow-x: auto;
        scroll-behavior: smooth;
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
    }

    .feedback-scroll-row {
        display: flex;
        gap: 1.5rem;
        padding: 1rem 0;
    }

    .feedback-card {
        flex: 0 0 auto;
        width: 320px;
        background: linear-gradient(to bottom right, #ffffff, #f0f0f0);
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .feedback-card:hover {
        transform: scale(1.03);
    }

    .stars {
        color: #FFD700;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .scroll-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background: #ff6f61;
        border: none;
        color: white;
        font-size: 2rem;
        cursor: pointer;
        padding: 0.6rem 1rem;
        border-radius: 50%;
        transition: background 0.3s ease;
    }

    .scroll-arrow:hover {
        background: #e65347;
    }

    .scroll-arrow.left {
        left: -10px;
    }

    .scroll-arrow.right {
        right: -10px;
    }

    .client-info {
        display: flex;
        align-items: center;
        margin-top: 1rem;
    }

    .client-avatar img {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
        border: 2px solid #ff6f61;
    }

    .client-details h4 {
        margin: 0;
        font-weight: 600;
        color: #333;
    }

    .client-details p {
        margin: 0;
        font-size: 0.9rem;
        color: #777;
    }

    .feedback-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #444;
        min-height: 100px;
    }

    @media (max-width: 768px) {
        .feedback-card {
            width: 280px;
        }

        .scroll-arrow {
            font-size: 1.5rem;
        }
    }

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
        font-family: {{ $locale === 'ar' ? "'Cario', sans-serif" : "'Inter', sans-serif" }};
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
        /* القائمة الرئيسية */
.navbar {
    width: 100%;
    background-color: #111; /* لون خلفية الشريط */
    padding: 10px 20px;
    box-sizing: border-box;
}

.navbar .nav-links {
    display: flex;
    justify-content: space-between; /* توزيع العناصر بشكل متساوي */
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    flex-wrap: wrap; /* لجعلها متجاوبة */
}

.navbar .nav-links li {
    margin: 0 10px; /* المسافة بين العناصر */
}

.navbar .nav-links a {
    text-decoration: none;
    color: #fff;
    font-size: 18px; /* حجم النص */
    font-weight: 500;
    padding: 8px 12px;
    transition: all 0.3s ease;
}

.navbar .nav-links a:hover {
    color: #ff9100; /* لون عند المرور */
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
}

/* للشاشات الصغيرة */
@media (max-width: 768px) {
    .navbar .nav-links {
        flex-direction: column;
        width: 100%;
        display: none; /* سيتم إظهارها عند الضغط على أيقونة الموبايل */
    }

    .navbar .nav-links li {
        margin: 10px 0;
    }

    .mobile-menu-toggle {
        display: block;
        cursor: pointer;
    }
}

/* أيقونة الموبايل */
.mobile-menu-toggle span {
    display: block;
    width: 30px;
    height: 3px;
    margin: 5px 0;
    background-color: #fff;
    transition: all 0.3s ease;
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


        /* تحريك العنصر عند الظهور */
@keyframes fadeInLeft {
    0% {
        opacity: 0;
        transform: translateX(-40px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(40px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fade-left {
    animation: fadeInLeft 1s ease-out forwards;
}

.fade-right {
    animation: fadeInRight 1s ease-out forwards;
}

/* أنيميشن عند التمرير */
.reveal {
    opacity: 0;
    transform: translateY(20px);
    transition: 0.6s ease-out;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
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

      @keyframes pulse {
    0% { transform: scale(1); box-shadow:0 0 0 0 rgba(255,137,6,0.65); }
    70% { transform: scale(1.08); box-shadow:0 0 0 18px rgba(255,137,6,0); }
    100% { transform: scale(1); box-shadow:0 0 0 0 rgba(255,137,6,0); }
}

/* الحاوية العامة للقسم */
.samples {
    padding: 70px 0 90px;
    background: linear-gradient(135deg, var(--dark-gray) 0%, var(--carbon-blue) 100%);
    position: relative;
    overflow: hidden;
}

/* تأثير خلفي خفيف */
.samples::before,
.samples::after {
    content:"";
    position:absolute;
    width:480px;
    height:480px;
    background:radial-gradient(circle at center, rgba(127,90,240,0.25), transparent 70%);
    filter:blur(40px);
    z-index:0;
    pointer-events:none;
}
.samples::before { top:-160px; left:-140px; }
.samples::after  { bottom:-180px; right:-120px; }

/* رأس القسم */
.section-header {
    text-align:center;
    margin:0 auto 50px;
    max-width:900px;
    position:relative;
    z-index:1;
}
.section-header h2 {
    font-size:2.65rem;
    font-weight:900;
    margin:0 0 18px;
    line-height:1.18;
    background:linear-gradient(135deg, var(--electric-violet), var(--mint-green));
    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
}
.section-header p {
    font-size:1.06rem;
    color:var(--soft-gray);
    line-height:1.55;
    margin:0 auto;
    max-width:640px;
}


 .audio-player audio,
        audio {
            height: 44px; /* ensure enough height for built-in controls */
            min-width: 180px;
        }

        audio {
            background: #111;
            border-radius: 14px;
        }

        /* Force showing native controls in WebKit/Blink if something hid them */
        audio::-webkit-media-controls-panel,
        audio::-webkit-media-controls-enclosure {
            display: flex !important;
            opacity: 1 !important;
        }

        audio::-webkit-media-controls-play-button {
            display: block !important;
            opacity: 1 !important;
        }

        /* Remove any accidental scaling that might hide buttons */
        audio * {
            transform: none !important;
        }

        /* Optional: high contrast for dark background */
        audio::-webkit-media-controls-timeline,
        audio::-webkit-media-controls-volume-slider {
            filter: none !important;
        }

/* مجموعة الفلاتر */
.sample-filters {
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:12px;
    margin:32px auto 18px;
    padding:16px 18px;
    background:var(--glass-bg);
    backdrop-filter:blur(18px);
    border:1px solid var(--glass-border);
    border-radius:28px;
    position:relative;
    z-index:2;
}

/* زر الفلتر */
.filter-btn {
    position:relative;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:10px 22px;
    background:rgba(255,255,255,0.02);
    border:1px solid var(--glass-border);
    border-radius:40px;
    color:var(--soft-gray);
    font-size:0.9rem;
    font-weight:600;
    letter-spacing:0.6px;
    text-transform:uppercase;
    cursor:pointer;
    outline:none;
    line-height:1;
    transition:
        background 0.35s ease,
        color 0.35s ease,
        transform 0.25s ease,
        box-shadow 0.35s ease,
        border-color 0.35s ease;
    backdrop-filter:blur(10px);
    user-select:none;
}
.filter-btn:hover {
    background:rgba(127,90,240,0.15);
    color:var(--white);
    transform:translateY(-2px);
    box-shadow:0 6px 20px -4px rgba(127,90,240,0.35);
}
.filter-btn:active {
    transform:translateY(0);
    box-shadow:0 3px 12px -4px rgba(127,90,240,0.35);
}
.filter-btn.active {
    background:linear-gradient(135deg,var(--electric-violet), var(--mint-green));
    color:var(--white);
    border-color:transparent;
    box-shadow:0 10px 28px -6px rgba(127,90,240,0.55);
    transform:translateY(-3px);
}
.filter-btn.active::after {
    content:"";
    position:absolute;
    inset:0;
    border-radius:inherit;
    background:linear-gradient(135deg,var(--electric-violet), var(--mint-green));
    filter:blur(18px);
    opacity:0.25;
    z-index:-1;
}

/* شبكة العينات */
.samples-grid {
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
    gap:26px;
    margin-top:42px;
    position:relative;
    z-index:2;
}

/* البطاقة */
.sample-card {
    position:relative;
    background:linear-gradient(135deg, rgba(255,255,255,0.04), rgba(255,255,255,0.01));
    backdrop-filter:blur(14px);
    border:1px solid var(--glass-border);
    border-radius:22px;
    padding:26px 26px 24px;
    overflow:hidden;
    transition:
        transform 0.55s cubic-bezier(.23,1,.32,1),
        box-shadow 0.55s cubic-bezier(.23,1,.32,1),
        border-color 0.4s ease;
}
.sample-card::before {
    content:"";
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at 30% 20%, rgba(127,90,240,0.18), transparent 60%),
        radial-gradient(circle at 85% 75%, rgba(0,255,198,0.18), transparent 65%);
    opacity:0.55;
    pointer-events:none;
    transition:opacity 0.5s ease;
}
.sample-card:hover {
    transform:translateY(-10px) scale(1.018);
    border-color:var(--electric-violet);
    box-shadow:0 18px 42px -10px rgba(127,90,240,0.45);
}
.sample-card:hover::before { opacity:0.75; }

/* رأس البطاقة */
.sample-header {
    display:flex;
    align-items:center;
    gap:16px;
    margin:0 0 18px;
}
.sample-icon {
    flex:0 0 auto;
    width:56px;
    height:56px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:1.35rem;
    color:var(--white);
    background:linear-gradient(135deg,var(--electric-violet), var(--mint-green));
    border-radius:50%;
    box-shadow:0 10px 25px -6px rgba(127,90,240,0.55);
    position:relative;
    overflow:hidden;
}
.sample-icon::after {
    content:"";
    position:absolute;
    inset:0;
    background:radial-gradient(circle at 35% 30%, rgba(255,255,255,0.35), transparent 65%);
    mix-blend-mode:overlay;
    opacity:0.85;
}
.sample-info h3 {
    font-size:1.15rem;
    font-weight:700;
    color:var(--white);
    margin:0 0 4px;
    line-height:1.25;
}
.sample-category {
    margin:0;
    color:var(--electric-violet);
    font-weight:600;
    text-transform:uppercase;
    font-size:0.72rem;
    letter-spacing:0.75px;
    opacity:0.9;
}

/* الوصف */
.sample-description {
    color:var(--soft-gray);
    line-height:1.55;
    font-size:0.92rem;
    margin:0 0 16px;
}

/* مشغل الصوت */
.audio-player {
    margin:0 0 14px;
    position:relative;
}
.audio-player audio {
    width:100%;
    display:block;
    height:42px;
    border-radius:14px;
    background:#222;
    outline:none;
}

/* المدة */
.sample-duration {
    text-align:right;
    color:var(--mint-green);
    font-weight:600;
    font-size:0.78rem;
    letter-spacing:0.5px;
    opacity:0.9;
}

/* حالة لا يوجد نتائج */
.samples-grid.empty::before {
    content:attr(data-empty-text);
    grid-column:1/-1;
    text-align:center;
    padding:50px 20px;
    color:var(--soft-gray);
    font-size:1rem;
    font-weight:500;
    border:1px dashed var(--glass-border);
    border-radius:18px;
    background:rgba(255,255,255,0.02);
}

/* انتقال إظهار/إخفاء الفئة */
.sample-card.hide {
    pointer-events:none;
    opacity:0;
    transform:scale(.94) translateY(14px);
    transition:
        opacity .35s ease,
        transform .45s cubic-bezier(.23,1,.32,1);
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
            height: 150px;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 100px;
            border: 1px solid var(--glass-border);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            transition: all 0.s ease;
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


      .scroll-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: linear-gradient(to right, #00a2ff, #ee0979); /* vibrant gradient */
    border: none;
    color: white;
    font-size: 2rem;
    cursor: pointer;
    padding: 0.6rem 1rem;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.scroll-arrow:hover {
    background: linear-gradient(to right, #ee0979, #ff6a00);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
}

.scroll-arrow.left {
    left: -10px;
}

.scroll-arrow.right {
    right: -10px;
}

@media (max-width: 768px) {
    .scroll-arrow {
        font-size: 1.5rem;
        padding: 0.5rem 0.8rem;
    }
}

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
            animation: feedbackBackgroundFlow 5s ease-in-out infinite;
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
            width: max-content;
            overflow: hidden;
            margin-top: 50px;
            position: relative;
            mask: linear-gradient(90deg, transparent 0%, black 5%, black 95%, transparent 100%);
        }

        /* Dual Direction Scrolling Like Company Logos */
        .feedback-scroll-row {
            display: flex;
            gap: 30px;
            animation: feedbackScrollRight 15s linear infinite;
            margin-bottom: 30px;
        }

        .feedback-scroll-row:nth-child(1) {
            animation: feedbackScrollLeft 15s linear infinite;
        }

        .feedback-scroll-row:hover {
            animation-play-state: paused;
        }

        @keyframes feedbackScrollRight {
            0% { transform: translateX(0); }
            100% { transform: translateX(100%); }
        }

        @keyframes feedbackScrollLeft {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        .feedback-card {
            flex-shrink: 0;
            width: 350px;
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
            right: -50px;
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
            font-size: 1.2rem;
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



        .why-work-section {
  background: #212631;
  padding: 80px 0;
}

.section-title {
  text-align: center;
  font-size: 3rem;
  color: var(--mint-green, #14b8a6);
  margin-bottom: 30px;
  font-weight: 700;
}

.intro-paragraph {
  text-align: center;
  color: #333;
  font-size: 1.3rem;
  max-width: 900px;
  margin: 0 auto 50px;
  line-height: 2;
  direction: rtl;
}

.about-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.about-card {
  background: white;
  padding: 30px;
  border-radius: 20px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.about-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.card-icon {
  font-size: 3rem;
  color: #14b8a6;
  margin-bottom: 15px;
}

.about-card h3 {
  margin-bottom: 10px;
  font-size: 1.5rem;
  color: #111;
}

.about-card p {
  font-size: 1rem;
  color: #666;
}



        /* About Section */
        .about {

              padding: 80px 20px; /* إضافة padding جانبي */
    background: var(--dark-gray);
        }

 .about-grid {
    display: grid;
    flex-wrap: wrap;
    align-items: flex-start; /* هذه تجعل العناصر تبدأ من الأعلى */
    gap: 40px;
    margin-top: 60px;
}

        .about-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            text-align: start;
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

        /* .about-card p {
            color: #cccccc;
            line-height: 1.6;
        } */
        .about-section h2 {
    color: #00c896;
    font-size: 2rem;
    margin-bottom: 20px;
}

.about-card  p{
    color: #ddd;
    line-height: 1.8;
    font-size: 1.1rem;
}


         #about img {
         object-fit: cover;
         border-radius: 12px;
         max-width: 100%;
         height: auto;
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
                gap: 30px;
            }

            .feedback-card {
                min-width: 350px;
            }

            .samples-grid {
                grid-template-columns: 1fr;
                gap: 20px;
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

        /* تركيز لوحة المفاتيح */
.filter-btn:focus-visible,
.sample-card:focus-within {
    outline:2px solid var(--electric-violet);
    outline-offset:3px;
}

/* دعم RTL */
html[dir="rtl"] .sample-header { direction:rtl; }
html[dir="rtl"] .sample-duration { text-align:left; }
html[dir="rtl"] .samples-grid.empty::before { direction:rtl; }
html[dir="rtl"] .filter-btn { letter-spacing:0.4px; }

/* استجابة الشاشات */
@media (max-width:1100px){
    .section-header h2 { font-size:2.35rem; }
}
@media (max-width:900px){
    .sample-card { padding:24px 22px 22px; }
    .sample-icon { width:54px; height:54px; font-size:1.25rem; }
}
@media (max-width:680px){
    .section-header h2 { font-size:2.05rem; }
    .filter-btn { padding:9px 18px; font-size:0.82rem; }
    .sample-filters { gap:10px; padding:14px 14px; margin:26px auto 10px; }
    .samples-grid { gap:22px; margin-top:34px; }
}
@media (max-width:480px){
    .samples { padding:60px 0 75px; }
    .filter-btn { padding:8px 16px; font-size:0.78rem; }
    .sample-card { padding:22px 18px 18px; }
    .sample-description { font-size:0.85rem; }
    .sample-icon { width:50px; height:50px; }
    .section-header p { font-size:0.95rem; }
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



        @keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.nav-links li {
    list-style: none;
    display: inline-block;
    margin: 0 10px;
}

/* Default hidden */
.fade-link {
    opacity: 0;
    animation: fadeUp 0.8s ease forwards;
}

.nav-link {
    position: relative;
    color: #fff;
    transition: color 0.3s ease;
}

.nav-link::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: #ff9500;
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}
/* Apply delay to each link */
.nav-links li:nth-child(1) .fade-link { animation-delay: 0.2s; }
.nav-links li:nth-child(2) .fade-link { animation-delay: 0.4s; }
.nav-links li:nth-child(3) .fade-link { animation-delay: 0.6s; }
.nav-links li:nth-child(4) .fade-link { animation-delay: 0.8s; }
.nav-links li:nth-child(5) .fade-link { animation-delay: 1s; }
.nav-links li:nth-child(6) .fade-link { animation-delay: 1.2s; }



.logo img {
    height: 160px;
    width: 160px;
    transition: transform 0.5s ease, opacity 0.5s ease;
    opacity: 0;
    transform: translateY(-50px) rotate(-10deg);
}

/* بعد تحميل الصفحة يظهر الشعار */
.logo img.show {
    opacity: 1;
    transform: translateY(0) rotate(0deg);
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

  <nav class="navbar">
    <div class="container">
        <div class="nav-content">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/hos-logo.png') }}" alt="Hossam Logo" style="height: 160px;width: 160px;" />
            </div>

            <!-- Links -->
            <ul class="nav-links">
                <li><a href="#home" class="nav-link"> {{ __('portfolio.nav.home') }} </a></li>
                <li><a href="#samples" class="nav-link"> {{ $locale === 'ar' ? 'عينات صوتية' : 'Voice Samples' }} </a></li>
                <li><a href="#about" class="nav-link"> {{ __('portfolio.nav.about') }} </a></li>
                <li><a href="#contact-info" class="nav-link"> {{ $locale === 'ar' ? 'تواصل معي' : 'Contact Info' }} </a></li>
                <li><a href="#feedback" class="nav-link"> {{ $locale === 'ar' ? 'آراء العملاء' : 'Feedback' }} </a></li>
                <li><a href="#contact-me" class="nav-link"> {{ __('portfolio.nav.contact-me') }} </a></li>
            </ul>

            <!-- Mobile menu -->
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
                        <img src="{{ asset('images/profile2.JPG') }}" alt="Hossam - Professional AI-Enhanced Voice Artist">
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



@php $locale = $locale ?? app()->getLocale(); @endphp
<section id="samples" class="samples">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ $locale === 'ar' ? 'عينات صوتية' : 'Voice Samples' }}</h2>
            <p>{{ $locale === 'ar' ? 'استمع إلى مجموعة مختارة من أعمال التعليق الصوتي المتميزة' : 'Listen to a curated selection of outstanding voice-over work' }}</p>
        </div>

        <!-- Sample Filters -->
        <div class="sample-filters" data-aos="fade-up" data-aos-delay="200">
            <button class="filter-btn active" data-filter="all">{{ $locale === 'ar' ? 'الكل' : 'All' }}</button>
            <button class="filter-btn" data-filter="commercial">{{ $locale === 'ar' ? 'إعلان' : 'Commercial' }}</button>
            <button class="filter-btn" data-filter="documentary">{{ $locale === 'ar' ? 'وثائقي' : 'Documentary' }}</button>
            <button class="filter-btn" data-filter="character">{{ $locale === 'ar' ? 'شخصية' : 'Character' }}</button>
            <button class="filter-btn" data-filter="narration">{{ $locale === 'ar' ? 'سرد' : 'Narration' }}</button>
            <button class="filter-btn" data-filter="educational">{{ $locale === 'ar' ? 'تعليمي' : 'Educational' }}</button>
              <button class="filter-btn" data-filter="audiobook">{{ $locale === 'ar' ? 'كتب' : '
audiobook' }}</button>
        </div>




        <div class="samples-grid" id="samplesGrid">
            @foreach($samples as $index => $sample)

                                @php
    $token = hash_hmac('sha256', $sample->id . '|' . $sample->audio_file, config('app.key'));
@endphp
                <div class="sample-card" data-category="{{ strtolower($sample->category) }}" data-aos="fade-up" data-aos-delay="{{ ($index * 100) + 300 }}">
                    <div class="sample-header">
                        <div class="sample-icon">
                            @switch(strtolower($sample->category))
                                @case('commercial')
                                    <i class="fas fa-bullhorn"></i>
                                    @break
                                @case('documentary')
                                    <i class="fas fa-film"></i>
                                    @break
                                @case('character')
                                    <i class="fas fa-theater-masks"></i>
                                    @break
                                @case('narration')
                                    <i class="fas fa-book-open"></i>
                                    @break
                                @case('educational')
                                    <i class="fas fa-graduation-cap"></i>
                                    @break
                                @default
                                    <i class="fas fa-microphone"></i>
                            @endswitch
                        </div>
                        <div class="sample-info">
                            <h3>{{ $locale === 'ar' ? $sample->title_ar : $sample->title_en }}</h3>
                            <p class="sample-category">{{ $sample->category }}</p>
                        </div>
                    </div>
                  <p class="sample-description">
    {{ $locale === 'ar' ? ($sample->description_ar ?? 'لا يوجد وصف') : ($sample->description ?? 'No description available') }}
</p>
                    <div class="audio-player">

<audio controls preload="metadata">
  <source src="{{ route('samples.play', ['id' => $sample->id, 'token' => $token]) }}" type="audio/mpeg">
  متصفحك لا يدعم تشغيل الصوت.
</audio>
                    </div>
                    <div class="sample-duration">{{ $sample->duration }}</div>
                </div>
            @endforeach
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




<section id="about" class="about">
    <div class="container">
        <div class="about-grid" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;">
            <!-- النص على اليسار -->
            <div class="fade-right" style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--mint-green); font-size: 2.5rem; margin-bottom: 20px;">
                    {{ __('portfolio.about.title') }}
                </h2>
                <p style="color: #ccc; line-height: 1.8; font-size: 1.1rem;">
                    {{ __('portfolio.about.description') }}
                </p>
            </div>

            <!-- الصورة على اليمين -->
            <div class="fade-left" style="flex: 1; min-width: 300px; text-align: center;">
                <img src="{{ asset('images/Hossam (2).png') }}" alt="Hossam Image" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>




<section class="why-work-section" id="why_work">
  <div class="container">
    <h2 class="section-title">{{ __('portfolio.why_work.title') }}</h2>

    <div class="about-grid">
  @foreach(trans('portfolio.why_work.items') as $item)
    <div class="about-card">
        <div class="card-icon"><i class="{{ $item['icon'] }}"></i></div>
        <h3>{{ $item['title'] }}</h3>
        <p>{{ $item['desc'] }}</p>
    </div>
@endforeach
    </div>
  </div>
</section>


<section class="about" id="portfolio">
    <div class="container">
        <h2 style="color: var(--mint-green); font-size: 2.5rem; text-align: center; margin-bottom: 40px;">
            <?= __('portfolio.title') ?>
        </h2>
        <div class="about-grid">
            <?php foreach(__('portfolio.projects') as $project): ?>
                <div class="about-card">
                    <a href="<?= $project['link'] ?>" target="_blank">
                        <img src="https://img.youtube.com/vi/<?= $project['thumb'] ?>/hqdefault.jpg"
                             alt="YouTube Thumbnail"
                             style="width: 100%; border-radius: 12px; margin-bottom: 16px;">
                    </a>
                    <h3><?= $project['title'] ?></h3>
                    <p><?= $project['desc'] ?></p>
                    <a href="<?= $project['link'] ?>" target="_blank" style="color: var(--mint-green); font-weight: bold;">
                        <?= __('portfolio.watch_now') ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Client Feedback Section -->
<section id="feedback" class="feedback">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <h2>{{ $locale === 'ar' ? 'آراء العملاء' : 'Client Feedback' }}</h2>
            <p>{{ $locale === 'ar' ? 'اكتشف ماذا قال عملائي عن خدماتي في التعليق الصوتي' : 'Discover what my clients said about my voice-over services' }}</p>
        </div>

        <!-- Scrollable Feedback -->
        <div class="feedback-scroll-wrapper">
            <div class="feedback-scroll-container" id="feedbackScroll">
                <div class="feedback-scroll-row">
                    @php
                        $feedbacks = [
                            [
                                'text_ar' => 'ما شاء الله على الصوت، شكرًا أخي حسام، فعلاً محترف ومتمكن من عملك. ليست المرة الأولى ولن تكون الأخيرة.',
                                'text_en' => 'MashaAllah, thank you Hossam. You’re truly professional and skilled. Not the first time I work with you and certainly not the last.',
                                'name' => 'Younes',
                                'title' => 'Magic Intro',
                                'image' => 'clients/hicats.png'
                            ],
                            [
                                'text_ar' => 'التعامل كان مريح جدًا والفويس أوفر ممتاز، ما احتاج تعديلات. يعطيك العافية حسام.',
                                'text_en' => 'The process was smooth, and the voice-over was perfect with no need for edits. Thanks, Hossam!',
                                'name' => 'Ahmed',
                                'title' => 'Motion Graphics Designer',
                                'image' => 'clients/ahmed.png'
                            ],
                            [
                                'text_ar' => 'الصوت ممتاز جدًا. مبدع والله يا حسام، كل تعاملي هيكون معك دائمًا بإذن الله.',
                                'text_en' => 'Amazing voice, truly creative. All my future projects will be with you, God willing!',
                                'name' => 'Dalal',
                                'title' => 'Graphic Designer',
                                'image' => 'clients/dalal.png'
                            ],
                            [
                                'text_ar' => 'أحد أرقى الأصوات التي تعاملت معها، صوته مميز وتعامل راقٍ واحترافي. أنصح به بشدة.',
                                'text_en' => 'One of the finest voices I’ve worked with. Professional, smooth, and highly recommended!',
                                'name' => 'Huda',
                                'title' => 'Mass Media',
                                'image' => 'clients/huda.png'
                            ],
                            [
                                'text_ar' => 'عمل مميز وأداء جميل، تجربتنا معكم في لورا كانت رائعة وستتكرر بإذن الله.',
                                'text_en' => 'Excellent work and performance. Our experience with you at Laura was great and will be repeated, God willing.',
                                'name' => 'Anas Nadeem',
                                'title' => 'Graphic Designer',
                                'image' => 'clients/anas.png'
                            ],
                            [
                                'text_ar' => 'خدمة صوتية احترافية بمعايير عالية. نوصي بشدة بالتعامل مع السيد حسام لأي مشروع يحتاج إلى تعليق صوتي احترافي وموثوق.',
                                'text_en' => 'Highly professional voice-over service. We strongly recommend Mr. Hossam for any project requiring a reliable and professional voice.',
                                'name' => 'Hind Marmash',
                                'title' => 'Media Plus Company',
                                'image' => 'clients/hind.png'
                            ],
                        ];
                    @endphp

                    @foreach ($feedbacks as $feedback)
                        <div class="feedback-card">
                            <div class="stars">
                                @for ($i = 0; $i < 5; $i++)
                                    <span class="star">★</span>
                                @endfor
                            </div>
                            <p class="feedback-text">
                                {{ $locale === 'ar' ? '"' . $feedback['text_ar'] . '"' : '"' . $feedback['text_en'] . '"' }}
                            </p>
                            <div class="client-info">
                                <div class="client-avatar">
                                    <img src="{{ asset('images/' . $feedback['image']) }}" alt="{{ $feedback['name'] }}">
                                </div>
                                <div class="client-details">
                                    <h4>{{ $feedback['name'] }}</h4>
                                    <p>{{ $feedback['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.feedback-scroll-container {
    overflow: hidden;
    white-space: nowrap;
    position: relative;
}

.feedback-scroll-row {
    display: flex;
    gap: 20px;
    animation: scroll-left 40s linear infinite;
}

.feedback-card {
    min-width: 300px;
    background: #1e1e1e;
    color: #fff;
    padding: 20px;
    border-radius: 12px;
    flex-shrink: 0;
}

@keyframes scroll-left {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); } /* يمر كل الكروت ويرجع */
}
</style>


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
                    <p><a href="tel:+972 595 359 631">+972 595 359 631</a></p>
                    <p><a href="tel:+972 595 359 631">+972 595 359 631</a></p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'بريد إلكتروني' : 'Email' }}</h3>
                    <p><a href="mailto:hossam.vo.pale@gmail.com">hossam.vo.pale@gmail.com</a></p>
                    <p><a href="mailto:hossam.vo.pale@gmail.com">hossam.vo.pale@gmail.com</a></p>
                </div>
                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'واتساب' : 'WhatsApp' }}</h3>
                    <p><a href="https://wa.me/972595359631">+972 595 359 631</a></p>
                    <p>{{ $locale === 'ar' ? 'متاح 24/7 للاستشارات' : 'Available 24/7 for consultations' }}</p>
                </div>


                <div class="contact-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="contact-icon">
                        <i class="fab fa-telegram"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'تيليجرام' : 'Telegram' }}</h3>
                    <p><a href="https://t.me/hossamamriti">@hossamvoiceover</a></p>
                    <p>{{ $locale === 'ar' ? 'تواصل سريع ومباشر' : 'Quick and direct communication' }}</p>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="contact-icon">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'فيس بوك' : 'Facebook' }}</h3>
                    <p><a href="https://www.facebook.com/profile.php?id=61565398037604">Hossam Voice Over</a></p>
                    <p>{{ $locale === 'ar' ? 'تواصل سريع ومباشر' : 'Quick and direct communication' }}</p>
                </div>

                   <div class="contact-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="contact-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'انستغرام' : 'Instagram' }}</h3>
                    <p><a href="https://www.instagram.com/hossamalamriti/">Hossam voice over</a></p>
                    <p>{{ $locale === 'ar' ? 'تواصل سريع ومباشر' : 'Quick and direct communication' }}</p>
                </div>
            </div>

             {{-- <div class="contact-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>{{ $locale === 'ar' ? 'ساعات العمل' : 'Working Hours' }}</h3>
                    <p>{{ $locale === 'ar' ? 'السبت - الخميس: 9:00 - 5:00 ' : 'Satuarday - Thursday: 9:00 - 5:00' }}</p>
                    <p>{{ $locale === 'ar' ? 'طوارئ: متاح في أي وقت' : 'Emergency: Available anytime' }}</p>
                </div>
            </div> --}}

        </div>
    </section>



    <!-- Contact Form Section -->
    <section id="contact-me" class="contact">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>{{ __('portfolio.contact.title') }}</h2>
                <p>{{ __('portfolio.contact.description') }}</p>
            </div>
            <div class="contact-form" data-aos="fade-up" data-aos-delay="200">
                <div id="messageAlert" style="display:none; margin-bottom: 1rem;"></div>

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
        <source src="{{ asset('sounds/background-music.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('sounds/background-music.wav') }}" type="audio/wav">
        <!-- Fallback audio files - you can upload your own background music -->
    </audio>

    <audio id="notificationSound" src="{{ asset('sounds/notification.mp3') }}" preload="auto"></audio>


    <!-- Audio Control Button -->
    <div id="audioControl" class="audio-control">
        <button id="audioToggle" class="audio-toggle-btn">
            <i class="fas fa-volume-up"></i>
        </button>
    </div>

    <!-- Custom JavaScript -->
    <script>


         const reveals = document.querySelectorAll(".reveal");

    function revealOnScroll() {
        for (let i = 0; i < reveals.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = reveals[i].getBoundingClientRect().top;
            const elementVisible = 100;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", revealOnScroll);
    window.addEventListener("load", revealOnScroll);



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



        // Audio sample management
        document.addEventListener('DOMContentLoaded', function() {
            const audioElements = document.querySelectorAll('.sample-card audio');

            const filterButtons = document.querySelectorAll('.filter-btn');
            const sampleCards = document.querySelectorAll('.sample-card');

            console.log('Found filter buttons:', filterButtons.length);
            console.log('Found sample cards:', sampleCards.length);

            if (filterButtons.length === 0) {
                console.error('No filter buttons found!');
                return;
            }

            if (sampleCards.length === 0) {
                console.error('No sample cards found!');
                return;
            }

            // Log all sample categories for debugging
            sampleCards.forEach((card, index) => {
                console.log(`Sample ${index}: category="${card.dataset.category}"`);
            });

            filterButtons.forEach((button, buttonIndex) => {
                console.log(`Setting up button ${buttonIndex}: ${button.dataset.filter}`);

                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const filter = this.dataset.filter;
                    console.log('Filter clicked:', filter);

                    // Update active button with enhanced animation
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Filter samples with staggered animation
                    let visibleIndex = 0;
                    sampleCards.forEach((card, index) => {
                        const category = card.dataset.category;
                        console.log(`Card ${index}: category="${category}", filter="${filter}"`);

                        if (filter === 'all' || category === filter) {
                            // Show card with staggered animation
                            card.style.display = 'block';
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(50px) scale(0.8)';

                            setTimeout(() => {
                                card.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0) scale(1)';
                            }, visibleIndex * 150);

                            visibleIndex++;
                        } else {
                            // Hide card with fade-out animation
                            card.style.transition = 'all 0.5s ease-out';
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(-30px) scale(0.7)';

                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 500);
                        }
                    });

                    console.log(`Showing ${visibleIndex} cards for filter: ${filter}`);
                });
            });

            console.log('Enhanced filter functionality initialized successfully!');

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
    submitBtn.innerHTML = '{{ $locale === "ar" ? "جاري الإرسال..." : "Sending..." }}';
    submitBtn.disabled = true;

    fetch('{{ route("portfolio.contact") }}', {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        messageAlert.style.display = 'block';
        if(data.success){
            messageAlert.className = 'success-message';
            messageAlert.innerHTML = data.message;
            form.reset();
        } else {
            messageAlert.className = 'error-message';
            messageAlert.innerHTML = data.message;
        }
        setTimeout(() => messageAlert.style.display = 'none', 5000);
         notificationSound.play();
    })


    .catch(() => {
        messageAlert.style.display = 'block';
        messageAlert.className = 'error-message';
        messageAlert.innerHTML = '{{ $locale === "ar" ? "حدث خطأ غير متوقع. يرجى المحاولة مرة أخرى." : "An unexpected error occurred. Please try again." }}';
        setTimeout(() => messageAlert.style.display = 'none', 5000);
    })
    .finally(() => {
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
                    animation: clickRipple 0.10s ease-out forwards;
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




     function scrollFeedback(direction) {
        const container = document.querySelector('.feedback-scroll-container');
        const scrollAmount = 320;

        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }








    </script>
</body>
</html>
