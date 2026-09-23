@extends('layouts.app')

@section('content')
<div class="py-12 space-y-12">
    <!-- Section Header -->
    <div class="space-y-3">
        <div class="inline-block bg-slate-800/80 border border-emeraldAccent/30 rounded-full px-4 py-1">
            <span class="text-emeraldAccent font-semibold tracking-wide uppercase text-xs">
                Background & Growth
            </span>
        </div>
        <h1 class="text-4xl font-extrabold text-white tracking-tight">Experience & Education</h1>
        <p class="text-slate-400 max-w-2xl text-base">
            My academic journey as an IT student combined with hands-on software development and system prototyping projects.
        </p>
    </div>

    <!-- Timeline Container -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Education Column -->
        <div class="space-y-6">
            <h2 class="text-2xl font-bold text-emeraldAccent flex items-center gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                </svg>
                Education
            </h2>

            <div class="bg-cardBg border border-slate-800 rounded-2xl p-6 space-y-3 shadow-xl relative border-l-4 border-l-emeraldAccent">
                <span class="text-xs font-semibold text-emeraldAccent uppercase tracking-wider">Present</span>
                <h3 class="text-xl font-bold text-white">Bachelor of Science in Information Technology</h3>
                <p class="text-slate-400 text-sm">Active IT Student focusing on application development, database management systems, emerging technologies, and hardware prototyping.</p>
            </div>
        </div>

        <!-- Experience & Projects Column -->
        <div class="space-y-6">
            <h2 class="text-2xl font-bold text-emeraldAccent flex items-center gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Projects & Development
            </h2>

            <div class="bg-cardBg border border-slate-800 rounded-2xl p-6 space-y-3 shadow-xl relative border-l-4 border-l-emeraldAccent">
                <span class="text-xs font-semibold text-emeraldAccent uppercase tracking-wider">Full-Stack Development</span>
                <h3 class="text-xl font-bold text-white">Web Application Developer & Prototyper</h3>
                <p class="text-slate-400 text-sm">Developed custom web systems (such as task management dashboards using CodeIgniter 4 and product verification tools like VerifyGuard when i was in firstyear) featuring clean UI/UX designs and database structures.</p>
            </div>
        </div>

    </div>
</div>
@endsection