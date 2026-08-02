<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'TimeSync - Smart Scheduling Platform' }}</title>
  
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 flex flex-col justify-between font-sans antialiased">

    <!-- HEADER / NAVIGATION -->
    <header class="w-full bg-white border-b border-slate-200 px-4 sm:px-10 lg:px-20 py-4 sm:py-5 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="text-xl sm:text-2xl font-extrabold tracking-tight text-slate-900">
                TimeSync<span class="text-indigo-600">.</span>
            </a>
        </div>
        
        <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-medium text-slate-600">
            <a href="#solutions" class="hover:text-indigo-600 transition-colors">Solutions</a>
            <a href="#features" class="hover:text-indigo-600 transition-colors">Features</a>
            <a href="{{ route('api.docs') }}" class="hover:text-indigo-600 transition-colors">API Docs</a>
        </nav>

        <div class="flex items-center gap-2 sm:gap-4">
            <a href="{{ route('login') }}" class="text-xs sm:text-sm font-semibold text-slate-600 hover:text-slate-900 px-2 py-1">Log in</a>
            <a href="{{ route('register') }}" class="hidden sm:inline-block text-xs sm:text-sm font-semibold text-slate-600 hover:text-slate-900">Register</a>
            <a href="{{ route('login') }}" class="px-3 sm:px-4 py-2 text-xs sm:text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow-sm transition-all">
                Live Demo
            </a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="w-full bg-white border-t border-slate-200 px-4 sm:px-20 py-6 sm:py-8 text-center">
        <div class="text-xs sm:text-sm text-slate-600 space-y-1">
            <p>&copy; {{ date('Y') }} <strong>TimeSync</strong>. All rights reserved.</p>
            <p class="text-[10px] sm:text-xs text-slate-400">Laravel portfolio demonstration project.</p>
        </div>
    </footer>

</body>
</html>