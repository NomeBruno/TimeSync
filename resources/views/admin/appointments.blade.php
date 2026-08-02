@extends('layouts.app')

@section('content')
<div class="bg-white w-full max-w-[1100px] min-h-[500px] rounded-[30px] p-5 sm:p-8 flex flex-col justify-between shadow-2xl border border-slate-200/80">
    <div>
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-slate-100">
            <div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">🗓️ Appointments</h2>
                <p class="text-xs text-slate-500 mt-1">Manage all scheduled appointments in TimeSync</p>
            </div>
            <button onclick="alert('Use the Dashboard button to test the modal!')" class="w-full sm:w-auto px-4 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-bold rounded-xl shadow-md cursor-pointer transition-all">
                + New Appointment
            </button>
        </div>

        <!-- Demo Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="w-full min-w-[500px] text-left text-xs text-slate-600">
                <thead class="bg-slate-50 text-slate-400 uppercase tracking-wider font-bold">
                    <tr>
                        <th class="p-3 rounded-l-xl">Client</th>
                        <th class="p-3">Service</th>
                        <th class="p-3">Date & Time</th>
                        <th class="p-3 rounded-r-xl">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr>
                        <td class="p-4 font-bold text-slate-800">Carlos Eduardo</td>
                        <td class="p-4">Technical Consultation</td>
                        <td class="p-4">Today at 2:00 PM</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-full font-bold">Confirmed</span></td>
                    </tr>
                    <tr>
                        <td class="p-4 font-bold text-slate-800">Mariana Lopes</td>
                        <td class="p-4">General Support</td>
                        <td class="p-4">Tomorrow at 10:30 AM</td>
                        <td class="p-4"><span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full font-bold">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row gap-2 justify-between items-center text-xs text-slate-400 mt-6 sm:mt-0">
        <p>Displaying demo data</p>
        <a href="{{ route('dashboard') }}" class="font-bold text-indigo-600 hover:underline">← Back to Dashboard</a>
    </div>
</div>
@endsection