@extends('layouts.app')

@section('content')
<div class="py-12 space-y-12">
    <!-- Section Header -->
    <div class="space-y-3">
        <div class="inline-block bg-slate-800/80 border border-emeraldAccent/30 rounded-full px-4 py-1">
            <span class="text-emeraldAccent font-semibold tracking-wide uppercase text-xs">
                Technical Expertise
            </span>
        </div>
        <h1 class="text-4xl font-extrabold text-white tracking-tight">My Skills & Proficiencies</h1>
        <p class="text-slate-400 max-w-2xl text-base">
            Here are the technologies, frameworks, and tools I use to build robust, scalable, and high-performance digital solutions from backend to frontend.
        </p>
    </div>

    <!-- Skills Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Backend & Frameworks -->
        <div class="bg-cardBg border border-slate-800 rounded-2xl p-6 space-y-4 shadow-xl hover:border-emeraldAccent/50 transition duration-300">
            <div class="w-12 h-12 rounded-xl bg-emeraldAccent/10 flex items-center justify-center text-emeraldAccent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white">Backend Development</h3>
            <ul class="space-y-2 text-slate-300 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> PHP & CodeIgniter 4 Framework</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Laravel Ecosystem</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> RESTful APIs & Controllers</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> MySQL Database Design</li>
            </ul>
        </div>

        <!-- Card 2: Frontend & UI/UX -->
        <div class="bg-cardBg border border-slate-800 rounded-2xl p-6 space-y-4 shadow-xl hover:border-emeraldAccent/50 transition duration-300">
            <div class="w-12 h-12 rounded-xl bg-emeraldAccent/10 flex items-center justify-center text-emeraldAccent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white">Frontend & UI/UX</h3>
            <ul class="space-y-2 text-slate-300 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Tailwind CSS & Responsive Design</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> JavaScript (ES6+), HTML5, CSS3</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Figma & Canva (Prototyping)</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Interactive User Dashboards</li>
            </ul>
        </div>

        <!-- Card 3: Tools & Hardware Prototyping -->
        <div class="bg-cardBg border border-slate-800 rounded-2xl p-6 space-y-4 shadow-xl hover:border-emeraldAccent/50 transition duration-300">
            <div class="w-12 h-12 rounded-xl bg-emeraldAccent/10 flex items-center justify-center text-emeraldAccent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white">Tools & Hardware</h3>
            <ul class="space-y-2 text-slate-300 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Visual Studio Code & Git/GitHub</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Arduino Programming & Sensors</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> Circuit Design & Electronics</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emeraldAccent"></span> QR Verification System Integration</li>
            </ul>
        </div>
    </div>
</div>
@endsection