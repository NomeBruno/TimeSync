@extends('layouts.guest')

@section('content')

    <!-- HERO / TITLE SECTION -->
    <section class="w-full bg-slate-950 py-12 sm:py-16 px-4 border-b border-slate-800 text-center">
        <div class="max-w-4xl mx-auto space-y-3 sm:space-y-4">
            <span class="inline-block px-3 py-1 bg-sky-500/10 border border-sky-500/30 text-sky-400 text-xs font-mono font-bold rounded-full uppercase tracking-wider">
                v1.0 REST API Reference
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                API Documentation
            </h1>
            <p class="text-xs sm:text-base text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Connect your mobile application (Flutter / React Native) or external services directly to TimeSync using secure token-based authentication (Laravel Sanctum).
            </p>
        </div>
    </section>

    <!-- CONTENT CONTAINER -->
    <section class="w-full bg-slate-900 py-8 sm:py-16 px-4 sm:px-8 min-h-[600px] text-slate-200">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- SIDEBAR NAVIGATION (VERSÃO DESKTOP E MOBILE) -->
            <aside class="lg:col-span-1 space-y-6">
                <div class="bg-slate-950 p-4 rounded-xl border border-slate-800 sticky top-24">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3 px-2">
                        Endpoints
                    </h3>
                    <nav class="space-y-1 text-xs sm:text-sm font-medium">
                        <a href="#auth-endpoints" class="flex items-center gap-2 px-3 py-2 rounded-lg bg-slate-800 text-white font-semibold transition-colors">
                            <span class="w-2 h-2 rounded-full bg-indigo-500"></span> Authentication
                        </a>
                        <a href="#appointments-endpoints" class="flex items-center gap-2 px-3 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/50 transition-colors">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Appointments
                        </a>
                        <a href="#clients-endpoints" class="flex items-center gap-2 px-3 py-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800/50 transition-colors">
                            <span class="w-2 h-2 rounded-full bg-amber-500"></span> Clients
                        </a>
                    </nav>

                    <hr class="border-slate-800 my-4">

                    <div class="px-2 space-y-2">
                        <span class="text-[10px] uppercase font-bold text-slate-500 tracking-wider">Base URL</span>
                        <div class="font-mono text-xs text-sky-400 bg-slate-900 p-2 rounded border border-slate-800 break-all">
                            https://api.timesync.com/v1
                        </div>
                    </div>
                </div>
            </aside>

            <!-- MAIN DOCUMENTATION AREA -->
            <main class="lg:col-span-3 space-y-10">

                <!-- AUTHENTICATION ENDPOINTS -->
                <div id="auth-endpoints" class="space-y-6">
                    <div class="border-b border-slate-800 pb-3">
                        <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                            🔑 Authentication
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">Obtain Bearer Tokens for mobile app API consumption.</p>
                    </div>

                    <!-- ENDPOINT ITEM: POST /api/v1/login -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-lg">
                        <!-- Header -->
                        <div class="p-4 bg-slate-900/60 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="px-2.5 py-1 bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-mono font-bold rounded">
                                    POST
                                </span>
                                <code class="text-xs sm:text-sm font-mono text-white">/login</code>
                            </div>
                            <span class="text-xs text-slate-400">Issue auth token</span>
                        </div>

                        <!-- Body / Details -->
                        <div class="p-4 sm:p-6 space-y-4">
                            <div>
                                <h4 class="text-xs font-bold uppercase text-slate-400 mb-2">Request Body (JSON)</h4>
                                <div class="bg-slate-900 p-3 sm:p-4 rounded-lg font-mono text-xs text-slate-300 border border-slate-800 overflow-x-auto">
<pre>{
  <span class="text-emerald-400">"email"</span>: <span class="text-amber-400">"admin@timesync.com"</span>,
  <span class="text-emerald-400">"password"</span>: <span class="text-amber-400">"secret123"</span>,
  <span class="text-emerald-400">"device_name"</span>: <span class="text-amber-400">"Flutter Mobile App"</span>
}</pre>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold uppercase text-slate-400 mb-2">Response Example (200 OK)</h4>
                                <div class="bg-slate-900 p-3 sm:p-4 rounded-lg font-mono text-xs text-sky-400 border border-slate-800 overflow-x-auto">
<pre>{
  <span class="text-emerald-400">"token"</span>: <span class="text-amber-400">"1|laravel_sanctum_token_hash_here..."</span>,
  <span class="text-emerald-400">"user"</span>: {
    <span class="text-emerald-400">"id"</span>: <span class="text-amber-400">1</span>,
    <span class="text-emerald-400">"name"</span>: <span class="text-amber-400">"Admin User"</span>
  }
}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- APPOINTMENTS ENDPOINTS -->
                <div id="appointments-endpoints" class="space-y-6 pt-4">
                    <div class="border-b border-slate-800 pb-3">
                        <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                            🗓️ Appointments API
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">Manage, query, and book time slots.</p>
                    </div>

                    <!-- ENDPOINT ITEM: GET /api/v1/appointments -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="p-4 bg-slate-900/60 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="px-2.5 py-1 bg-sky-500/20 text-sky-400 border border-sky-500/30 text-xs font-mono font-bold rounded">
                                    GET
                                </span>
                                <code class="text-xs sm:text-sm font-mono text-white">/appointments</code>
                            </div>
                            <span class="text-xs font-mono text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded border border-amber-400/20">
                                Bearer Token Required
                            </span>
                        </div>

                        <div class="p-4 sm:p-6 space-y-4">
                            <div>
                                <h4 class="text-xs font-bold uppercase text-slate-400 mb-2">Response Example (200 OK)</h4>
                                <div class="bg-slate-900 p-3 sm:p-4 rounded-lg font-mono text-xs text-sky-400 border border-slate-800 overflow-x-auto">
<pre>{
  <span class="text-emerald-400">"data"</span>: [
    {
      <span class="text-emerald-400">"id"</span>: <span class="text-amber-400">101</span>,
      <span class="text-emerald-400">"client_name"</span>: <span class="text-amber-400">"Carlos Silva"</span>,
      <span class="text-emerald-400">"service"</span>: <span class="text-amber-400">"Technical Support"</span>,
      <span class="text-emerald-400">"date"</span>: <span class="text-amber-400">"2026-08-10"</span>,
      <span class="text-emerald-400">"time"</span>: <span class="text-amber-400">"14:00"</span>,
      <span class="text-emerald-400">"status"</span>: <span class="text-amber-400">"confirmed"</span>
    }
  ]
}</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ENDPOINT ITEM: POST /api/v1/appointments -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="p-4 bg-slate-900/60 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="px-2.5 py-1 bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-mono font-bold rounded">
                                    POST
                                </span>
                                <code class="text-xs sm:text-sm font-mono text-white">/appointments</code>
                            </div>
                            <span class="text-xs font-mono text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded border border-amber-400/20">
                                Bearer Token Required
                            </span>
                        </div>

                        <div class="p-4 sm:p-6 space-y-4">
                            <div>
                                <h4 class="text-xs font-bold uppercase text-slate-400 mb-2">Request Body (JSON)</h4>
                                <div class="bg-slate-900 p-3 sm:p-4 rounded-lg font-mono text-xs text-slate-300 border border-slate-800 overflow-x-auto">
<pre>{
  <span class="text-emerald-400">"client_id"</span>: <span class="text-amber-400">5</span>,
  <span class="text-emerald-400">"service_id"</span>: <span class="text-amber-400">2</span>,
  <span class="text-emerald-400">"date"</span>: <span class="text-amber-400">"2026-08-15"</span>,
  <span class="text-emerald-400">"time"</span>: <span class="text-amber-400">"10:30"</span>
}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </section>

@endsection