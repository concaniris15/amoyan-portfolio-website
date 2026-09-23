@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row items-center justify-between py-16 gap-12">
    <!-- Left Column: Detailed Intro Text -->
    <div class="space-y-6 md:w-1/2">
        <div class="inline-block bg-slate-800/80 border border-emeraldAccent/30 rounded-full px-4 py-1">
            <span class="text-emeraldAccent font-semibold tracking-wide uppercase text-xs">
                Welcome to my Portfolio Website
            </span>
        </div>

        <h1 class="text-5xl font-extrabold text-white leading-tight">
            Hi, I'm <span class="text-emeraldAccent"> John Quester Amoyan</span>
        </h1>

        <div class="space-y-4 text-slate-300 text-base leading-relaxed">
            <p>
                I am an Information Technology student, learning for more on technology, computers, and hands-on
            </p>
            <p>
                Feel free to explore all of my infomartion,and projects.
            </p>
        </div>

        <!-- Call to Action Buttons -->
        <div class="flex flex-wrap gap-4 pt-4">
            <a href="{{ route('projects') }}" class="bg-emeraldAccent hover:bg-emerald-600 text-slate-900 font-bold px-6 py-3 rounded-lg shadow-lg transition duration-200 flex items-center gap-2">
                View My Work
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
            <a href="{{ route('contact') }}" class="border border-slate-600 hover:border-emeraldAccent hover:text-emeraldAccent text-slate-200 px-6 py-3 rounded-lg transition duration-200">
                Get In Touch
            </a>
        </div>
    </div>
    
    <!-- Right Column: Profile Picture Display -->
    <div class="md:w-1/2 flex justify-center">
        <div class="w-80 h-80 rounded-2xl bg-cardBg border-2 border-emeraldAccent/40 flex items-center justify-center shadow-2xl relative overflow-hidden group">
            <img 
                src="{{ asset('images/profile.jpg') }}" 
                alt="Amoyan Profile Picture" 
                class="w-full h-full object-cover rounded-2xl transition duration-300 group-hover:scale-105"
            >
        </div>
    </div>
</div>
@endsection