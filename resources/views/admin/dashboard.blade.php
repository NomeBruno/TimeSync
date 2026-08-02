@extends('layouts.app')

@section('content')
<!-- DASHBOARD MAIN CONTAINER -->
<div class="bg-amber-100/60 w-full max-w-[1100px] min-h-[590px] rounded-[30px] p-4 sm:p-6 lg:p-8 flex flex-col lg:flex-row gap-5 shadow-2xl border border-amber-200/50 relative">

    <!-- LEFT COLUMN (Main Metrics & Cards) -->
    <div class="w-full lg:w-[70%] flex flex-col gap-5">

        <!-- PANEL 1 (Purple/Indigo Gradient) -->
        <div class="bg-gradient-to-r from-purple-700 to-indigo-600 rounded-[30px] p-6 text-white flex flex-col justify-between shadow-lg min-h-[180px]">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mb-4 sm:mb-0">
                <div>
                    <span class="text-xs uppercase tracking-wider font-semibold opacity-80">Overview</span>
                    <h2 class="text-xl sm:text-2xl font-extrabold mt-1">Hello, {{ auth()->user()->name }}! 👋</h2>
                </div>
                <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold">Main Dashboard</span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white/10 backdrop-blur-sm p-3 rounded-2xl">
                    <p class="text-xs opacity-80">Today's Appointments</p>
                    <p class="text-xl sm:text-2xl font-black mt-1">8 Confirmed</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-3 rounded-2xl">
                    <p class="text-xs opacity-80">Pending</p>
                    <p class="text-xl sm:text-2xl font-black mt-1">3 Awaiting</p>
                </div>
            </div>
        </div>

        <!-- PANEL 2 (Blue/Cyan Gradient) -->
        <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-[30px] p-6 text-white flex flex-col justify-between shadow-lg min-h-[160px]">
            <div class="flex justify-between items-center mb-3">
                <h3 class="font-bold text-base sm:text-lg">🗓️ Next Appointment</h3>
                <span class="text-xs bg-white/20 px-2.5 py-1 rounded-lg font-semibold">Today at 2:00 PM</span>
            </div>

            <div class="bg-white/15 backdrop-blur-sm p-3 rounded-2xl flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                <div>
                    <p class="font-bold text-sm">Carlos Eduardo</p>
                    <p class="text-xs opacity-80">Technical Consultation - Duration: 45 min</p>
                </div>
                <span class="bg-emerald-400 text-slate-950 text-xs font-extrabold px-3 py-1 rounded-xl self-start sm:self-auto">Confirmed</span>
            </div>
        </div>

        <!-- PANEL 3 (Emerald/Teal Gradient) -->
        <div class="bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[30px] p-6 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-lg">
            <div>
                <h3 class="font-bold text-base sm:text-lg">⚡ Sanctum API Status</h3>
                <p class="text-xs opacity-80">Ready for Flutter mobile application connection</p>
            </div>
            <div class="text-right bg-white/20 px-4 py-2 rounded-2xl self-end sm:self-auto">
                <span class="text-xl font-black">100%</span>
                <p class="text-[10px] uppercase tracking-wider font-bold">Online</p>
            </div>
        </div>

    </div>

    <!-- RIGHT SIDE PANEL (White Summary) -->
    <div class="w-full lg:w-[30%] bg-white rounded-[30px] p-6 flex flex-col justify-between shadow-lg border border-slate-200/80 min-h-[300px]">
        <div>
            <h3 class="font-extrabold text-slate-900 text-base mb-4 border-b border-slate-100 pb-3">Quick Summary</h3>
            
            <div class="space-y-4">
                <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-xs text-slate-400 font-semibold uppercase">Total Clients</p>
                    <p class="text-xl font-bold text-slate-800 mt-1">{{ $totalUsers ?? 1 }} Registered</p>
                </div>

                <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-xs text-slate-400 font-semibold uppercase">Top Service</p>
                    <p class="text-sm font-bold text-slate-800 mt-1">General Support</p>
                </div>
            </div>
        </div>

        <div class="pt-6 border-t border-slate-100 mt-4">
            <!-- Modal Trigger Button -->
            <button onclick="toggleModal(true)" class="w-full py-3 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-bold rounded-2xl shadow-md hover:shadow-indigo-500/20 transition-all cursor-pointer">
                + New Appointment
            </button>
        </div>
    </div>

</div>

<!-- NEW APPOINTMENT MODAL -->
<div id="modalAgendamento" class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm flex items-center justify-center hidden z-50 p-4 transition-opacity">
    <div class="bg-white w-full max-w-md rounded-3xl p-6 shadow-2xl border border-slate-100 animate-in fade-in zoom-in duration-150">
        
        <!-- Modal Header -->
        <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-5">
            <h3 class="font-extrabold text-slate-900 text-lg">New Appointment</h3>
            <button onclick="toggleModal(false)" class="text-slate-400 hover:text-slate-600 font-bold p-1 cursor-pointer">✕</button>
        </div>

        <!-- Form -->
        <form onsubmit="event.preventDefault(); alert('Appointment successfully simulated!'); toggleModal(false);" class="space-y-4">
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Client Name</label>
                <input type="text" placeholder="e.g. Lucas Mendes" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Date</label>
                    <input type="date" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Time</label>
                    <input type="time" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Service</label>
                <select class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 outline-none text-slate-700">
                    <option>Technical Consultation</option>
                    <option>General Support</option>
                    <option>Custom Consultation</option>
                </select>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="toggleModal(false)" class="w-1/2 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-bold rounded-xl transition-all cursor-pointer">
                    Cancel
                </button>
                <button type="submit" class="w-1/2 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-bold rounded-xl shadow-md transition-all cursor-pointer">
                    Confirm
                </button>
            </div>
        </form>

    </div>
</div>

<!-- TOGGLE MODAL SCRIPT -->
<script>
    function toggleModal(show) {
        const modal = document.getElementById('modalAgendamento');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>
@endsection