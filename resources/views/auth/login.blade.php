<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Control Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="relative bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900 min-h-screen flex items-center justify-center">

    <!-- Layer for dark overlay -->
    <div class="absolute inset-0 bg-black opacity-40 z-0"></div>

    <div class="relative z-10 w-full max-w-md p-8 bg-white/10 border border-white/20 backdrop-blur-xl rounded-2xl shadow-2xl transition-all duration-500 transform hover:scale-[1.02]">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/rasel-logo_1750670748699.png') }}" alt="Logo" class="w-20 h-20 rounded-full shadow-lg ring-2 ring-white/1">
        </div>

        <!-- Title -->
        <div class="text-center mb-8">
            <i class="fas fa-shield-alt text-4xl text-cyan-400 mb-4"></i>
            <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 mb-2">Control Panel</h1>
            <p class="text-gray-300">Sign in to your account</p>
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
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent"
                    placeholder="Enter your email"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                    <i class="fas fa-lock mr-2"></i>Password
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent"
                    placeholder="Enter your password"
                >
            </div>

            {{-- <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-cyan-600 shadow-sm focus:border-cyan-300 focus:ring focus:ring-cyan-200 focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-300">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-cyan-400 hover:text-cyan-300">
                        Forgot password?
                    </a>
                @endif
            </div> --}}

            <button
                type="submit"
                class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:brightness-110 hover:scale-105 text-white font-bold py-3 px-4 rounded-xl transition-all duration-300 shadow-xl"
            >
                <i class="fas fa-sign-in-alt mr-2"></i> Sign In
            </button>
        </form>

        <!-- Register Link -->
        <div class="mt-6 text-center">
            <p class="text-gray-400">Don't have an account?</p>
            <a href="{{ route('register') }}" class="text-cyan-400 hover:text-cyan-300 font-medium">
                Create an account
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-10 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </div>
</body>
</html>
