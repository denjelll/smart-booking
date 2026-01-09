<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Booking | Welcome</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,600,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center p-6 bg-slate-50">
        
        <div class="mb-10">
            <div class="w-20 h-20 bg-indigo-600 rounded-[2rem] flex items-center justify-center shadow-xl shadow-indigo-200">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m4 0h1m-5 10h1m4 0h1m-5-5h1m4 0h1"></path>
                </svg>
            </div>
        </div>

        <div class="text-center max-w-xl space-y-4 mb-10">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900">
                Smart <span class="text-indigo-600">Booking.</span>
            </h1>
            <p class="text-lg text-slate-500 leading-relaxed">
                Internal workspace reservation management. <br>
                Please sign in using an account registered by the Administrator.
            </p>
        </div>

        <div class="w-full max-w-sm">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="flex justify-center items-center w-full py-4 bg-slate-900 text-white rounded-2xl font-bold text-lg hover:bg-black transition-all">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex justify-center items-center w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                        Sign In to System
                    </a>
                @endauth
            @endif
        </div>

        <div class="mt-20 flex flex-col items-center gap-3 text-center">
            <div class="flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.3em] text-slate-300">
                <span>Internal System</span>
                <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                <span>Restricted Access</span>
            </div>
            <p class="text-[10px] text-slate-400 font-medium italic">
                Contact IT Support or Administrator if you do not have access.
            </p>
        </div>
    </div>
</body>
</html>