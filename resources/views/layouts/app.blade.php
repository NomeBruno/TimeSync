<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard - TimeSync' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full min-h-screen bg-indigo-950 flex flex-col md:flex-row font-sans antialiased">

    <!-- MOBILE HEADER (Visível apenas em telas menores) -->
    <header class="md:hidden bg-indigo-950 text-white p-4 flex justify-between items-center border-b border-indigo-900 sticky top-0 z-40">
        <a href="{{ route('dashboard') }}" class="text-xl font-extrabold tracking-tight">
            TimeSync<span class="text-indigo-400">.</span>
        </a>
        <button onclick="toggleSidebar()" class="p-2 text-indigo-200 hover:text-white focus:outline-none">
            ☰
        </button>
    </header>

    <!-- MAIN SIDEBAR -->
    <aside id="sidebar" class="hidden md:flex w-full md:w-64 bg-indigo-950 text-white flex-col justify-between p-6 shrink-0 md:h-screen md:sticky md:top-0 z-30 transition-all duration-300">
        <div>
            <!-- Logo (Desktop) -->
            <div class="hidden md:block mb-8 px-2">
                <a href="{{ route('dashboard') }}" class="text-2xl font-extrabold tracking-tight">
                    TimeSync<span class="text-indigo-400">.</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-2">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 text-sm font-bold hover:text-white hover:bg-indigo-900 text-white rounded-2xl">
                    <span>📊</span> Dashboard
                </a>
                <a href="{{ route('appointments.index') }}"
                    class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-indigo-200 hover:text-white hover:bg-indigo-900 rounded-2xl transition-all">
                    <span>🗓️</span> Appointments
                </a>
                <a href="{{ route('clients.index') }}"
                    class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-indigo-200 hover:text-white hover:bg-indigo-900 rounded-2xl transition-all">
                    <span>👥</span> Clients
                </a>
            </nav>
        </div>

        <!-- Profile & Logout -->
        <div class="pt-4 border-t border-indigo-900 flex items-center justify-between mt-6 md:mt-0">
            <div class="truncate mr-2">
                <p class="text-xs font-bold text-white truncate">{{ auth()->user()->name }}</p>
                <p class="text-[10px] text-indigo-300 truncate">{{ auth()->user()->email }}</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" title="Log out"
                    class="p-2 bg-indigo-900 hover:bg-red-500/20 text-indigo-300 hover:text-red-400 rounded-xl transition-all cursor-pointer">
                    🚪
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <main class="flex-1 p-4 md:p-6 flex items-center justify-center overflow-y-auto">
        @yield('content')
    </main>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        }
    </script>
</body>

</html>