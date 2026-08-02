@extends('layouts.guest')

@section('content')

    <!-- HERO SECTION -->
    <section class="w-full min-h-[500px] sm:h-[500px] bg-slate-950 flex flex-col items-center justify-end relative px-4 pb-12 sm:pb-0">

        <!-- Central Hero Text -->
        <div class="static sm:absolute sm:top-[20%] text-center text-white px-4 mb-8 sm:mb-0">
            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-3 leading-tight">
                Synchronize your bookings.<br>Optimize your time.
            </h1>
            <p class="text-slate-400 text-xs sm:text-base max-w-xl mx-auto">
                A complete platform for managing schedules, clients, and services with a REST API ready for mobile & web integration.
            </p>
        </div>

        <!-- Floating Metric Cards -->
        <div class="w-full max-w-5xl grid grid-cols-2 sm:flex sm:flex-nowrap items-center justify-center gap-3 sm:gap-4 z-10 retangulo-floating sm:translate-y-1/2">
            <div class="w-full sm:w-56 h-20 sm:h-24 bg-white border border-slate-200 shadow-lg flex flex-col items-center justify-center p-2 sm:p-4 hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 relative group rounded-xl sm:rounded-none">
                <span class="text-lg sm:text-xl font-extrabold text-indigo-600">24/7</span>
                <span class="text-[10px] sm:text-xs font-semibold text-slate-500 text-center">Online Scheduling</span>
            </div>
            
            <div class="w-full sm:w-56 h-20 sm:h-24 bg-white border border-slate-200 shadow-lg flex flex-col items-center justify-center p-2 sm:p-4 hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 relative group rounded-xl sm:rounded-none">
                <span class="text-lg sm:text-xl font-extrabold text-indigo-600">+99%</span>
                <span class="text-[10px] sm:text-xs font-semibold text-slate-500 text-center">Punctuality Rate</span>
            </div>
            
            <div class="w-full sm:w-56 h-20 sm:h-24 bg-white border border-slate-200 shadow-lg flex flex-col items-center justify-center p-2 sm:p-4 hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 relative group rounded-xl sm:rounded-none">
                <span class="text-lg sm:text-xl font-extrabold text-indigo-600">REST API</span>
                <span class="text-[10px] sm:text-xs font-semibold text-slate-500 text-center">Integration Ready</span>
            </div>
            
            <div class="w-full sm:w-56 h-20 sm:h-24 bg-white border border-slate-200 shadow-lg flex flex-col items-center justify-center p-2 sm:p-4 hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 relative group rounded-xl sm:rounded-none">
                <span class="text-lg sm:text-xl font-extrabold text-indigo-600">100%</span>
                <span class="text-[10px] sm:text-xs font-semibold text-slate-500 text-center">Cloud Management</span>
            </div>
        </div>

    </section>

    <!-- SOLUTIONS SECTION (3 CARDS) -->
    <section id="solutions" class="w-full min-h-[500px] flex items-center justify-center gap-6 sm:gap-8 pt-16 sm:pt-28 pb-16 sm:pb-20 px-4 sm:px-6 flex-wrap bg-slate-100">

        <!-- Card 1 -->
        <div class="w-full sm:w-80 h-auto sm:h-80 bg-white border-2 border-slate-200/80 p-6 sm:p-8 rounded-2xl sm:rounded-none shadow-xl hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-center relative group">
            <div class="w-12 sm:w-14 h-12 sm:h-14 bg-indigo-50 rounded-xl flex items-center justify-center text-2xl sm:text-3xl mb-4 sm:mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                🗓️
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2 sm:mb-3 group-hover:text-indigo-600 transition-colors">
                Schedule Management
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Full control over available time slots, date blocking, and automated prevention of double bookings.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="w-full sm:w-80 h-auto sm:h-80 bg-white border-2 border-slate-200/80 p-6 sm:p-8 rounded-2xl sm:rounded-none shadow-xl hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-center relative group">
            <div class="w-12 sm:w-14 h-12 sm:h-14 bg-indigo-50 rounded-xl flex items-center justify-center text-2xl sm:text-3xl mb-4 sm:mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                👥
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2 sm:mb-3 group-hover:text-indigo-600 transition-colors">
                Client Portal
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Complete appointment history, streamlined registration, and customer attendance reports.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="w-full sm:w-80 h-auto sm:h-80 bg-white border-2 border-slate-200/80 p-6 sm:p-8 rounded-2xl sm:rounded-none shadow-xl hover:shadow-2xl hover:border-indigo-500 hover:-translate-y-2 transition-all duration-300 flex flex-col justify-center relative group">
            <div class="w-12 sm:w-14 h-12 sm:h-14 bg-indigo-50 rounded-xl flex items-center justify-center text-2xl sm:text-3xl mb-4 sm:mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                ⚡
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2 sm:mb-3 group-hover:text-indigo-600 transition-colors">
                Sanctum API Ready
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Secure endpoints designed for seamless consumption by mobile applications (Flutter) and external web apps.
            </p>
        </div>

    </section>

    <!-- FEATURES SECTION (50/50 SPLIT) -->
    <section id="features" class="w-full min-h-[500px] bg-slate-950 flex flex-col md:flex-row items-center justify-center p-4 sm:p-6 lg:p-12 gap-6">

        <!-- API Code Preview Side -->
        <div class="w-full md:w-1/2 min-h-[300px] sm:h-[400px] bg-slate-900 border border-slate-800 rounded-2xl flex items-center justify-center p-4 sm:p-6">
            <div class="font-mono text-xs sm:text-sm text-sky-400 bg-slate-950 p-4 sm:p-6 rounded-xl border border-slate-800 w-full max-w-md shadow-inner overflow-x-auto">
                <span class="bg-sky-500 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider mb-4 inline-block">
                    RESTful API
                </span>
                <p class="text-slate-300 mb-2">POST /api/v1/appointments</p>
                <p class="text-slate-500">{</p>
                <p class="pl-4 text-emerald-400">"service_id": <span class="text-amber-400">1</span>,</p>
                <p class="pl-4 text-emerald-400">"date": <span class="text-amber-400">"2026-08-10"</span>,</p>
                <p class="pl-4 text-emerald-400">"time": <span class="text-amber-400">"14:00"</span></p>
                <p class="text-slate-500">}</p>
            </div>
        </div>

        <!-- Copywriting & Action Side -->
        <div class="w-full md:w-1/2 min-h-[300px] sm:h-[400px] text-white flex items-center justify-center p-4 sm:p-6">
            <div class="max-w-md">
                <h2 class="text-xl sm:text-3xl font-extrabold mb-3 sm:mb-4 leading-tight">
                    Built for high performance and seamless integration.
                </h2>
                <p class="text-slate-400 text-xs sm:text-base mb-6 leading-relaxed">
                    TimeSync was engineered using Laravel and software architecture best practices. A scalable solution for modern businesses and mobile-first apps.
                </p>
                <a href="{{ route('login') }}" class="inline-block bg-white text-slate-950 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-bold hover:bg-slate-200 transition-colors text-xs sm:text-sm">
                    Explore Admin Dashboard
                </a>
            </div>
        </div>

    </section>

@endsection