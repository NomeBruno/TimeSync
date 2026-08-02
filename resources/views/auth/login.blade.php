@extends('layouts.guest')

@section('content')
<section class="w-full min-h-[calc(100vh-160px)] flex items-center justify-center py-6 sm:py-12 px-4 bg-slate-100">
    
    <div class="w-full max-w-md bg-white border-2 border-slate-200/80 rounded-2xl sm:rounded-3xl shadow-xl p-6 sm:p-8">
        
        <!-- Header -->
        <div class="text-center mb-6 sm:mb-8">
            <h1 class="text-xl sm:text-2xl font-extrabold text-slate-900">Sign in to your account</h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Enter your credentials to access TimeSync</p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-semibold rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4 sm:space-y-5">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-xs sm:text-sm font-semibold text-slate-700 mb-1">Email address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus 
                    placeholder="name@company.com"
                    class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 text-xs sm:text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                >
                @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-xs sm:text-sm font-semibold text-slate-700 mb-1">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    placeholder="••••••••"
                    class="w-full px-3.5 sm:px-4 py-2 sm:py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-slate-900 text-xs sm:text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                >
                @error('password')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between text-xs">
                <label class="flex items-center gap-2 cursor-pointer text-slate-600">
                    <input type="checkbox" name="remember" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    Remember me
                </label>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full py-2.5 sm:py-3 px-4 bg-indigo-600 hover:bg-indigo-500 text-white text-xs sm:text-sm font-bold rounded-lg shadow-md hover:shadow-indigo-500/20 transition-all cursor-pointer mt-2"
            >
                Sign In
            </button>

            <!-- Register Link -->
            <div class="text-center pt-4 border-t border-slate-200">
                <p class="text-xs text-slate-600">
                    Don't have an account yet? 
                    <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">
                        Sign up
                    </a>
                </p>
            </div>

        </form>
    </div>

</section>
@endsection