
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voice Samples Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --dark-bg: #0f1419;
            --card-bg: #1a202c;
            --text-light: #e2e8f0;
            --text-muted: #a0aec0;
            --success-color: #48bb78;
            --warning-color: #ed8936;
            --danger-color: #f56565;
            --neon-blue: #00d4ff;
            --neon-purple: #b347d9;
            --neon-pink: #ff007a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #2d3748 100%);
            color: var(--text-light);
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #667eea);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            opacity: 0.1;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container-fluid {
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: slideInDown 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(0, 212, 255, 0.1), transparent);
            animation: rotateGlow 3s linear infinite;
            pointer-events: none;
        }

        @keyframes rotateGlow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-title {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple), var(--neon-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }

        .floating-icon {
            position: relative;
            color: var(--neon-blue);
            animation: floatIcon 3s ease-in-out infinite;
        }

        .floating-icon::before {
            content: '🎧';
            position: absolute;
            font-size: 1.5rem;
            top: -20px;
            right: -10px;
            animation: floatSecondary 2.5s ease-in-out infinite reverse;
        }

        .floating-icon::after {
            content: '🎤';
            position: absolute;
            font-size: 1.2rem;
            bottom: -15px;
            left: -15px;
            animation: floatTertiary 3.5s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }

        @keyframes floatSecondary {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-8px) scale(1.1); }
        }

        @keyframes floatTertiary {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-6px) rotate(-10deg); }
        }

        .voice-text {
            animation: textGlow 2s ease-in-out infinite alternate;
        }

        @keyframes textGlow {
            from {
                text-shadow: 0 0 10px var(--neon-blue), 0 0 20px var(--neon-blue), 0 0 30px var(--neon-blue);
            }
            to {
                text-shadow: 0 0 20px var(--neon-purple), 0 0 30px var(--neon-purple), 0 0 40px var(--neon-purple);
            }
        }

        .add-btn {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            border: none;
            padding: 15px 35px;
            border-radius: 25px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .add-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .add-btn:hover::before {
            left: 100%;
        }

        .add-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.5);
            background: linear-gradient(135deg, var(--neon-purple), var(--neon-pink));
        }

        .add-btn i {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        .samples-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .sample-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .sample-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .sample-card:hover::before {
            left: 100%;
        }

        .sample-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.4);
            border-color: var(--neon-blue);
            background: rgba(255, 255, 255, 0.12);
        }

        .sample-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .sample-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .sample-category {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            color: white;
            padding: 6px 16px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(0, 212, 255, 0.3);
        }

        .sample-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .action-btn::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: inherit;
            opacity: 0.3;
            transform: scale(0);
            transition: transform 0.3s ease;
        }

        .action-btn:hover::before {
            transform: scale(1.2);
        }

        .action-btn.edit {
            background: linear-gradient(135deg, var(--warning-color), #d69e2e);
            color: white;
            box-shadow: 0 6px 20px rgba(237, 137, 54, 0.4);
        }

        .action-btn.delete {
            background: linear-gradient(135deg, var(--danger-color), #e53e3e);
            color: white;
            box-shadow: 0 6px 20px rgba(245, 101, 101, 0.4);
        }

        .action-btn.play {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            color: white;
            box-shadow: 0 6px 20px rgba(0, 212, 255, 0.4);
        }

        .action-btn:hover {
            transform: scale(1.15);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .sample-description {
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .audio-player-container {
            margin-bottom: 1.5rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .custom-audio-player {
            width: 100%;
        }

        .audio-controls {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .play-pause-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0, 212, 255, 0.4);
        }

        .play-pause-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.6);
        }

        .time-display {
            font-size: 0.9rem;
            color: var(--text-muted);
            min-width: 100px;
            text-align: center;
        }

        .seekbar-container {
            flex: 1;
            position: relative;
        }

        .seekbar {
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
            appearance: none;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .seekbar::-webkit-slider-thumb {
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 212, 255, 0.5);
            transition: all 0.3s ease;
        }

        .seekbar::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            box-shadow: 0 6px 20px rgba(0, 212, 255, 0.7);
        }

        .seekbar::-moz-range-thumb {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 212, 255, 0.5);
        }

        .progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--neon-blue), var(--neon-purple));
            border-radius: 4px;
            width: 0%;
            transition: width 0.1s linear;
            pointer-events: none;
        }

        .waveform-visualization {
            height: 60px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .wave-bars {
            display: flex;
            align-items: end;
            gap: 2px;
            height: 40px;
        }

        .wave-bar {
            width: 3px;
            background: linear-gradient(to top, var(--neon-blue), var(--neon-purple));
            border-radius: 2px;
            animation: waveAnimation 1.5s ease-in-out infinite;
            opacity: 0.7;
        }

        .wave-bar:nth-child(odd) {
            animation-delay: 0.1s;
        }

        .wave-bar:nth-child(even) {
            animation-delay: 0.3s;
        }

        @keyframes waveAnimation {
            0%, 100% { height: 10px; }
            50% { height: 35px; }
        }

        .sample-duration {
            text-align: center;
            color: var(--neon-blue);
            font-weight: 700;
            font-size: 1.2rem;
            text-shadow: 0 0 10px var(--neon-blue);
        }

        .modal {
            backdrop-filter: blur(15px);
        }

        .modal-content {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            color: var(--text-light);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
        }

        .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 25px 25px 0 0;
        }

        .modal-title {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            border-radius: 15px;
            padding: 15px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--neon-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 212, 255, 0.25);
            color: var(--text-light);
        }

        .form-label {
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            border: none;
            border-radius: 15px;
            padding: 15px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 212, 255, 0.5);
            background: linear-gradient(135deg, var(--neon-purple), var(--neon-pink));
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: var(--text-light);
            border-radius: 15px;
            padding: 15px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            color: var(--text-light);
            transform: translateY(-2px);
        }

        .alert {
            border-radius: 20px;
            border: none;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            animation: slideInRight 0.5s ease;
        }



        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .alert-success {
            background: linear-gradient(135deg, var(--success-color), #38a169);
            color: white;
            box-shadow: 0 10px 30px rgba(72, 187, 120, 0.3);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 5rem;
            margin-bottom: 2rem;
            color: var(--neon-blue);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% { transform: translateY(0); }
            40%, 43% { transform: translateY(-20px); }
            70% { transform: translateY(-10px); }
            90% { transform: translateY(-5px); }
        }

        .back-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--neon-blue), var(--neon-purple));
            border: none;
            color: white;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.4);
            z-index: 1000;
        }

        .back-btn:hover {
            transform: scale(1.15);
            box-shadow: 0 15px 40px rgba(0, 212, 255, 0.6);
        }

        .loading-spinner {
            display: none;
            text-align: center;
            padding: 3rem;
        }

        .spinner-border {
            color: var(--neon-blue);
            width: 3rem;
            height: 3rem;
        }

        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
                padding: 1.5rem;
            }

            .header-title {
                font-size: 2rem;
            }

            .samples-grid {
                grid-template-columns: 1fr;
            }

            .container-fluid {
                padding: 1rem;
            }

            .sample-card {
                padding: 1.5rem;
            }

            .audio-controls {
                flex-direction: column;
                gap: 10px;
            }

            .seekbar-container {
                order: -1;
                width: 100%;
            }
        }

        /* Enhanced animations for playing state */
        .playing .wave-bar {
            animation-duration: 0.8s;
        }

        .playing .action-btn.play {
            background: linear-gradient(135deg, var(--neon-pink), var(--neon-purple));
            animation: playingPulse 1s ease-in-out infinite;
        }

        @keyframes playingPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 6px 20px rgba(255, 0, 122, 0.4);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 8px 25px rgba(255, 0, 122, 0.6);
            }
        }


        .icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, #ff6b6b, #f8e71c, #50e3c2);
    border-radius: 15px;
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0);
      box-shadow: 0 5px 15px rgba(255, 107, 107, 0.6);
    }
    50% {
      transform: translateY(-15px);
      box-shadow: 0 15px 25px rgba(255, 107, 107, 0.8);
    }
  }
    </style>
</head>
<body>
    <div class="animated-bg"></div>

    <div class="container-fluid">
        <!-- Header Section -->
        <div class="header-section" >
            <h1 class="header-title">
                <span class="floating-icon">
                    <i class="fas fa-microphone"></i>
                </span>
                <span class="voice-text">Hossam Voice Over</span> Management
            </h1>
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#sampleModal" onclick="openAddModal()">
                <i class="fas fa-plus"></i>
                Add New Sample
            </button>

            <!-- تأكد أنك تستخدم Tailwind و Animate.css أو أضفها -->
<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
   class="flex items-center gap-2 px-4 py-2 rounded-xl text-white bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 hover:scale-105 transition-all duration-300 shadow-lg animate-bounce hover:animate-none"
>
    <!-- أيقونة تسجيل الخروج -->
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-1V7m0 0V6" />
    </svg>
    <span class="font-bold">تسجيل الخروج</span>
</a>

<!-- فورم تسجيل الخروج -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
        </div>
<!-- Success/Error Messages -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="slide-right">
        <i class="fas fa-check-circle me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<!-- Samples Grid -->
<div class="samples-grid" id="samplesGrid">
    @forelse($samples as $sample)
        <div class="sample-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="sample-header">
                <div>
                    <h3 class="sample-title">{{ $sample->title }}</h3>
                    <div class="sample-category">{{ $sample->category }}</div>
                </div>
                <div class="sample-actions">
                    <button class="action-btn edit" onclick="openEditModal({{ $sample->id }})" title="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete" onclick="deleteSample({{ $sample->id }})" title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>

            <p class="sample-description">{{ $sample->description }}</p>

            <!-- Audio Player -->
            <div class="audio-player-container">
                <div class="custom-audio-player">
                    <div class="audio-controls">
                        <button class="play-pause-btn action-btn play" onclick="toggleAudio({{ $sample->id }})" title="Play/Pause">
                            <i class="fas fa-play" id="playIcon{{ $sample->id }}"></i>
                        </button>
                        <div class="time-display" id="timeDisplay{{ $sample->id }}">
                            0:00 / {{ $sample->getFormattedDuration() }}
                        </div>
                        <div class="seekbar-container">
                            <input type="range" class="seekbar" id="seekbar{{ $sample->id }}" min="0" max="100" value="0"
                                   onchange="seekAudio({{ $sample->id }}, this.value)">
                            <div class="progress-bar" id="progressBar{{ $sample->id }}"></div>
                        </div>
                    </div>
                    <div class="waveform-visualization" id="waveform{{ $sample->id }}">
                        <div class="wave-bars">
                            @for($i = 0; $i < 30; $i++)
                                <div class="wave-bar"
                                     style="height: {{ rand(10, 35) }}px; animation-delay: {{ $i * 0.05 }}s;"></div>
                            @endfor
                        </div>
                    </div>
                    <audio id="audio{{ $sample->id }}" src="{{ route('samples.play', $sample->id) }}"></audio>
                </div>
            </div>
        </div>
    @empty
        <div class="empty-state" data-aos="fade-in">
            <i class="fas fa-microphone-alt-slash"></i>
            <h3>No samples found</h3>
            <p>Get started by adding your first voice sample!</p>
        </div>
    @endforelse
</div>

<!-- Loading Spinner -->
<div class="loading-spinner" id="loadingSpinner">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

    <!-- Sample Modal (Add/Edit) -->
    <div class="modal fade" id="sampleModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add New Sample</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="sampleForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="sampleId" name="sample_id">
                    <input type="hidden" id="methodField" name="_method" value="POST">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title (English)</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title_ar" class="form-label">Title (Arabic)</label>
                                    <input type="text" class="form-control" id="title_ar" name="title_ar" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="">Select Category</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="documentary">Documentary</option>
                                        <option value="narration">Narration</option>
                                        <option value="educational">Educational</option>
                                        <option value="audiobook">Audiobook</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration (seconds)</label>
                                    <input type="number" class="form-control" id="duration" name="duration" min="1" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description (English)</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Description (Arabic)</label>
                            <textarea class="form-control" id="description_ar" name="description_ar" rows="3" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="audio_file" class="form-label">Audio File</label>
                                    <input type="file" class="form-control" id="audio_file" name="audio_file" accept="audio/*">
                                    <small class="text-muted">Supported formats: MP3, WAV, M4A (max 20MB)</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="order" class="form-label">Display Order</label>
                                    <input type="number" class="form-control" id="order" name="order" min="0" value="0">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" value="1">
                                <label class="form-check-label" for="is_featured">
                                    Featured Sample
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <i class="fas fa-save me-2"></i>
                            Save Sample
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Back to Portfolio Button -->
    <a href="{{ route('portfolio.index') }}" class="back-btn" title="Back to Portfolio">
        <i class="fas fa-arrow-left"></i>
    </a>




    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ase-out',
            once: true
        });

        let currentAudio = null;
        let currentPlayIcon = null;
        let currentSampleId = null;

        // Open Add Modal
        function openAddModal() {
            document.getElementById('modalTitle').textContent = 'Add New Sample';
            document.getElementById('methodField').value = 'POST';
            document.getElementById('sampleId').value = '';
            document.getElementById('sampleForm').reset();
            document.getElementById('sampleForm').action = '{{ route("samples.store") }}';
            document.getElementById('audio_file').required = true;
        }

        // Open Edit Modal
        function openEditModal(sampleId) {
            document.getElementById('modalTitle').textContent = 'Edit Sample';
            document.getElementById('methodField').value = 'PUT';
            document.getElementById('sampleId').value = sampleId;
            document.getElementById('sampleForm').action = `/admin/samples/${sampleId}`;
            document.getElementById('audio_file').required = false;

            // Fetch sample data and populate form
            fetch(`/admin/samples/${sampleId}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('title').value = data.title;
                    document.getElementById('title_ar').value = data.title_ar;
                    document.getElementById('description').value = data.description;
                    document.getElementById('description_ar').value = data.description_ar;
                    document.getElementById('category').value = data.category;
                    document.getElementById('duration').value = data.duration;
                    document.getElementById('order').value = data.order;
                    document.getElementById('is_featured').checked = data.is_featured;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error loading sample data');
                });

            const modal = new bootstrap.Modal(document.getElementById('sampleModal'));
            modal.show();
        }

        // Enhanced Toggle Audio with Progress
        function toggleAudio(sampleId) {
            conste audio = document.getElementById(`audio${sampleId}`);
            const playIcon = document.getElementById(`playIcon${sampleId}`);
            const timeDisplay = document.getElementById(`timeDisplay${sampleId}`);
            const seekbar = document.getElementById(`seekbar${sampleId}`);
            const progressBar = document.getElementById(`progressBar${sampleId}`);
            const waveform = document.getElementById(`waveform${sampleId}`);
            const sampleCard = audio.closest('.sample-card');

            // Stop current audio if different
            if (currentAudio && currentAudio !== audio) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
                currentPlayIcon.classList.remove('fa-pause');
                currentPlayIcon.classList.add('fa-play');
                document.querySelector(`#waveform${currentSampleId}`).classList.remove('playing');
                document.querySelector(`.sample-card[data-sample-id="${currentSampleId}"]`)?.classList.remove('playing');
            }

            if (audio.paused) {
                // Play audio
                audio.play();
                playIcon.classList.remove('fa-play');
                playIcon.classList.add('fa-pause');
                waveform.classList.add('playing');
                sampleCard.classList.add('playing');
                currentAudio = audio;
                currentPlayIcon = playIcon;
                currentSampleId = sampleId;

                // Update progress
                audio.addEventListener('timeupdate', function() {
                    updateProgress(sampleId);
                });

                audio.addEventListener('loadedmetadata', function() {
                    seekbar.max = audio.duration;
                });

                audio.onended = function() {
                    playIcon.classList.remove('fa-pause');
                    playIcon.classList.add('fa-play');
                    waveform.classList.remove('playing');
                    sampleCard.classList.remove('playing');
                    seekbar.value = 0;
                    progressBar.style.width = '0%';
                    currentAudio = null;
                    currentPlayIcon = null;
                    currentSampleId = null;
                };
            } else {
                // Pause audio
                audio.pause();
                playIcon.classList.remove('fa-pause');
                playIcon.classList.add('fa-play');
                waveform.classList.remove('playing');
                sampleCard.classList.remove('playing');
                currentAudio = null;
                currentPlayIcon = null;
                currentSampleId = null;
            }
        }

        // Update Progress
        function updateProgress(sampleId) {
            const audio = document.getElementById(`audio${sampleId}`);
            const timeDisplay = document.getElementById(`timeDisplay${sampleId}`);
            const seekbar = document.getElementById(`seekbar${sampleId}`);
            const progressBar = document.getElementById(`progressBar${sampleId}`);

            if (audio.duration) {
                const progress = (audio.currentTime / audio.duration) * 100;
                seekbar.value = audio.currentTime;
                progressBar.style.width = progress + '%';

                const currentMin = Math.floor(audio.currentTime / 60);
                const currentSec = Math.floor(audio.currentTime % 60);
                const durationMin = Math.floor(audio.duration / 60);
                const durationSec = Math.floor(audio.duration % 60);

                timeDisplay.textContent = `${currentMin}:${currentSec.toString().padStart(2, '0')} / ${durationMin}:${durationSec.toString().padStart(2, '0')}`;
            }
        }

        // Seek Audio
        function seekAudio(sampleId, value) {
            const audio = document.getElementById(`audio${sampleId}`);
            if (audio.duration) {
                audio.currentTime = value;
                updateProgress(sampleId);
            }
        }

        // Delete Sample
        function deleteSample(sampleId) {
            if (confirm('Are you sure you want to delete this sample? This action cannot be undone.')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/samples/${sampleId}`;
                form.innerHTML = `
                    @csrf
                    @method('DELETE')
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Handle Form Submission
        document.getElementById('sampleForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Saving...';
            submitBtn.disabled = true;

            const formData = new FormData(this);
            const method = document.getElementById('methodField').value;

            if (method === 'PUT') {
                formData.append('_method', 'PUT');
            }

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
                                   document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.message || 'Error saving sample');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error saving sample');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });

        // Auto-calculate duration from audio file
        document.getElementById('audio_file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const audio = new Audio();
                const url = URL.createObjectURL(file);
                audio.src = url;
                audio.addEventListener('loadedmetadata', function() {
                    document.getElementById('duration').value = Math.round(audio.duration);
                    URL.revokeObjectURL(url);
                });
            }
        });

        // Add sample-id data attribute for easier targeting
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.sample-card').forEach((card, index) => {
                const audioElement = card.querySelector('audio');
                if (audioElement) {
                    const sampleId = audioElement.id.replace('audio', '');
                    card.setAttribute('data-sample-id', sampleId);
                }
            });
        });
    </script>
</body>
</html>
