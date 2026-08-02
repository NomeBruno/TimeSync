@extends('layouts.app')

@section('content')
<div class="bg-white w-full max-w-[1100px] min-h-[500px] rounded-[30px] p-5 sm:p-8 flex flex-col justify-between shadow-2xl border border-slate-200/80">
    <div>
        <!-- Header Section -->
        <div class="pb-6 border-b border-slate-100">
            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">👥 Clients</h2>
            <p class="text-xs text-slate-500 mt-1">Database of registered clients in the system</p>
        </div>

        <!-- Client Cards Grid -->
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-50 border border-slate-100 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-100 text-indigo-600 font-bold rounded-full flex items-center justify-center shrink-0">CE</div>
                <div class="truncate">
                    <p class="font-bold text-sm text-slate-800 truncate">Carlos Eduardo</p>
                    <p class="text-xs text-slate-400 truncate">carlos@email.com</p>
                </div>
            </div>
            <div class="p-4 bg-slate-50 border border-slate-100 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 bg-purple-100 text-purple-600 font-bold rounded-full flex items-center justify-center shrink-0">ML</div>
                <div class="truncate">
                    <p class="font-bold text-sm text-slate-800 truncate">Mariana Lopes</p>
                    <p class="text-xs text-slate-400 truncate">mariana@email.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row gap-2 justify-between items-center text-xs text-slate-400 mt-6 sm:mt-0">
        <p>Total: {{ $totalUsers ?? 1 }} client(s)</p>
        <a href="{{ route('dashboard') }}" class="font-bold text-indigo-600 hover:underline">← Back to Dashboard</a>
    </div>
</div>
@endsection