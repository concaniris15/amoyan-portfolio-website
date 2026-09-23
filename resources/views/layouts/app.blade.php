<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <!-- Tailwind CSS Script CDN para siguradong gagana ang styles at spacing -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emeraldAccent: '#10b981',
                        cardBg: '#1e293b',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col font-sans antialiased">

    <!-- Header Navigation Bar -->
    <nav class="flex items-center justify-between py-6 px-8 bg-slate-900 border-b border-slate-800">
        <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wider text-emeraldAccent">
            PORTFOLIO WEBSITE<span class="text-slate-100">.</span>
        </a>

        <!-- Navigation Links sa Taas -->
        <div class="flex items-center space-x-6">
            <a href="{{ route('home') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">Home</a>
            <a href="{{ route('about') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">About</a>
            <a href="{{ route('skills') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">Skills</a>
            <a href="{{ route('experience') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">Experience & Education</a>
            <a href="{{ route('projects') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">Projects</a>
            <a href="{{ route('contact') }}" class="hover:text-emeraldAccent transition-colors duration-200 font-medium text-slate-200">Contact</a>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow max-w-6xl w-full mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-slate-500 text-sm border-t border-slate-800">
        &copy; {{ date('Y') }} John Quester Amoyan. All rights reserved.
    </footer>

</body>
</html>