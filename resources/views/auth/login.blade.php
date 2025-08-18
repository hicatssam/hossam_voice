<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Voice Over Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-indigo-950 to-purple-900 overflow-hidden">

  <!-- Animated Waveform Background -->
  <div class="absolute inset-0 overflow-hidden z-0">
    <div class="absolute bottom-0 left-0 right-0 flex items-end justify-center space-x-1 opacity-20">
      @for ($i = 0; $i < 40; $i++)
        <div class="bg-cyan-400 w-1 rounded-full animate-pulse" style="height: {{ rand(10, 100) }}px; animation-delay: {{ $i * 0.05 }}s;"></div>
      @endfor
    </div>
  </div>

  <!-- Login Card -->
  <div class="relative z-10 w-full max-w-md p-8 bg-white/10 border border-white/20 backdrop-blur-2xl rounded-2xl shadow-2xl transition-all duration-500 hover:scale-[1.02]">

    <!-- Logo -->
    <div class="flex justify-center mb-4">
      <img src="{{ asset('images/hos-logo.png') }}" alt="Logo" class="w-20 h-20 rounded-full shadow-lg ring-2 ring-cyan-400/50">
    </div>

    <!-- Title -->
    <div class="text-center mb-8">
      <i class="fas fa-microphone-alt text-4xl text-cyan-400 mb-4 drop-shadow-lg"></i>
      <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Voice Over Panel</h1>
      <p class="text-gray-300 text-sm">Enter your credentials to continue</p>
    </div>

    <!-- Error Handling -->
    @if ($errors->any())
      <div class="bg-red-500/20 border border-red-500/50 rounded-lg p-4 mb-6">
        <ul class="text-red-300 text-sm list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf
      <div>
        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
          <i class="fas fa-envelope mr-2"></i>Email Address
        </label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
          class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent"
          placeholder="Enter your email">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
          <i class="fas fa-lock mr-2"></i>Password
        </label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent"
          placeholder="Enter your password">
      </div>

      <button type="submit"
        class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:brightness-110 hover:scale-105 text-white font-bold py-3 px-4 rounded-xl transition-all duration-300 shadow-xl flex items-center justify-center">
        <i class="fas fa-sign-in-alt mr-2"></i> Sign In
      </button>
    </form>

    <!-- Footer -->
    <div class="mt-10 text-center text-xs text-gray-400">
      &copy; {{ date('Y') }} Hossan Voice Over. All rights reserved.
    </div>
  </div>
</body>
</html>
