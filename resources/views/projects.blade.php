@extends('layouts.app')

@section('content')

<div class="space-y-10 py-6">

    <!-- HEADER -->
    <div class="border-b border-slate-700 pb-5">
        <p class="text-emeraldAccent text-sm uppercase tracking-[0.25em] mb-2">
            My Work
        </p>

        <h2 class="text-3xl md:text-4xl font-bold text-white">
            My <span class="text-emeraldAccent">Projects</span>
        </h2>

        <p class="text-slate-400 mt-3 max-w-2xl">
            A collection of projects, activities, and applications
            I have created while learning and exploring technology.
        </p>
    </div>


    <!-- PROJECT CARDS -->
    <div class="grid md:grid-cols-2 gap-6">

        <!-- PROJECT: Network Simulation / Router Project -->
        <div class="group bg-cardBg rounded-2xl border border-slate-700/50 overflow-hidden
                    hover:border-emeraldAccent/60 transition-all duration-300
                    hover:-translate-y-2">

            <!-- TOP VISUAL WITH IMAGE -->
            <div class="h-48 bg-slate-900/60 flex items-center justify-center relative overflow-hidden">
                <div class="absolute w-32 h-32 bg-emeraldAccent/10 rounded-full blur-2xl
                            group-hover:bg-emeraldAccent/20 transition">
                </div>

                <!-- Dito naka-match sa router-simulation.jpg na nasa public/images/ mo -->
                <img 
                    src="{{ asset('images/router-simulation.jpg') }}" 
                    alt="Network Simulation Project" 
                    class="w-full h-full object-cover transition duration-300 group-hover:scale-105"
                >

                <span class="absolute top-4 left-4 text-xs text-white bg-slate-900/80 px-2 py-1 rounded font-mono border border-slate-700">
                    01
                </span>
            </div>


            <!-- CONTENT -->
            <div class="p-5 space-y-4">

                <div>
                    <p class="text-emeraldAccent text-xs uppercase tracking-widest mb-2">
                        Networking
                    </p>

                    <h3 class="text-xl font-bold text-white">
                        Network Simulation & Router Configuration
                    </h3>
                </div>

                <p class="text-slate-400 text-sm leading-6">
                    Networking activities and simulations focusing on router configuration,
                    subnetting, and connectivity using Cisco Packet Tracer.
                </p>


                <!-- TAGS -->
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full bg-slate-800 text-xs text-slate-300">
                        Cisco
                    </span>
                    <span class="px-3 py-1 rounded-full bg-slate-800 text-xs text-slate-300">
                        Networking
                    </span>
                    <span class="px-3 py-1 rounded-full bg-slate-800 text-xs text-slate-300">
                        Packet Tracer
                    </span>
                </div>


                <!-- LINKS (GitHub & View Raw) -->
                <div class="pt-3 border-t border-slate-700/50 flex items-center justify-between">
                    <a href="https://github.com/concaniris15git config user.name "Amoyan"
git config user.email target="_blank"
                       class="flex items-center gap-2 text-sm text-slate-300 hover:text-emeraldAccent transition">
                        <!-- GitHub Icon -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                        <span>View on GitHub</span>
                    </a>

                    <!-- View Raw Link (Points to the Packet Tracer file directly for download) -->
                    <a href="https://raw.githubusercontent.com/concaniris15/routing-simulation-jpg/main/router%20(1).pkt" target="_blank"
                       class="text-sm text-emeraldAccent hover:underline flex items-center gap-1">
                        <span>View Raw</span>
                        <span>→</span>
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection