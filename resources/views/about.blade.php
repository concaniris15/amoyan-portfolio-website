@extends('layouts.app')

@section('content')
<div class="space-y-10 py-6">
    <!-- Header Title -->
    <div class="border-b border-slate-700 pb-4">
        <h2 class="text-3xl font-bold text-white">About <span class="text-emeraldAccent">Me</span></h2>
        <p class="text-slate-400 text-sm mt-1">Get to know more about my background, passion, and technical expertise.</p>
    </div>

    <!-- Main Grid Content -->
    <div class="grid md:grid-cols-2 gap-8">
        
        <!-- Left Column: Who I Am & Personal Details -->
        <div class="bg-cardBg p-6 rounded-xl border border-slate-700/50 space-y-5">
            <h3 class="text-xl font-semibold text-emeraldAccent">Who I Am</h3>
            
            <p class="text-slate-300 leading-relaxed">
                I am an Information Technology student studying at <span class="text-emeraldAccent font-medium">Eastern Samar State University, Borongan City</span>. I have a strong passion for building web applications, designing a simple user interfaces, and solving problems through code.
            </p>

            <p class="text-slate-300 leading-relaxed">
                My journey in technology spans across making a simple database management, and hands-on hardware prototyping. I continuously strive to learn modern tools and best practices to craft reliable, scalable, and user-centered digital solutions.
            </p>

            <!-- Quick Info Badges -->
            <div class="pt-2 border-t border-slate-700/60 space-y-2 text-sm text-slate-300">
                <div class="flex items-center gap-2">
                    <span class="text-emeraldAccent font-semibold">Location Studying:</span> 
                    <span>ESSU MAIN</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-emeraldAccent font-semibold">Focus:</span> 
                    <span>Simple Systems, Networking & Elective</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Tech Stack & Skills -->
        <div class="bg-cardBg p-6 rounded-xl border border-slate-700/50 space-y-6">
            <h3 class="text-xl font-semibold text-emeraldAccent">Technical Skills</h3>
            
            <!-- Web & Frameworks -->
            <div>
                <h4 class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-3">Web & Frameworks</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">PHP / Laravel</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">CodeIgniter</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">JavaScript</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">Tailwind CSS</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">HTML5 / CSS3</span>
                </div>
            </div>

            <!-- Database & Tools -->
            <div>
                <h4 class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-3">Database & Systems</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">MySQL</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">Git / GitHub</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">VS Code</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">Arduino / IoT</span>
                </div>
            </div>

            <!-- Design & Prototyping -->
            <div>
                <h4 class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-3">Design & Prototyping</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">UI/UX Design</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">Figma</span>
                    <span class="bg-slate-800 text-emeraldAccent px-3 py-1 rounded-md text-sm border border-emeraldAccent/30">Canva</span>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection