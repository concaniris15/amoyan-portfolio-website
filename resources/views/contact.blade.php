@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto space-y-8 py-6">
    <div class="border-b border-slate-700 pb-4 text-center">
        <h2 class="text-3xl font-bold text-white">Get In <span class="text-emeraldAccent">Touch</span></h2>
    </div>

    <form class="bg-cardBg p-8 rounded-xl border border-slate-700/50 space-y-6">
        <div>
            <label class="block text-slate-300 font-medium mb-2">Name</label>
            <input type="text" placeholder="Your Name" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emeraldAccent">
        </div>
        <div>
            <label class="block text-slate-300 font-medium mb-2">Email</label>
            <input type="email" placeholder="your@email.com" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emeraldAccent">
        </div>
        <div>
            <label class="block text-slate-300 font-medium mb-2">Message</label>
            <textarea rows="4" placeholder="Your message..." class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emeraldAccent"></textarea>
        </div>
        <button type="button" class="w-full bg-emeraldAccent hover:bg-emerald-600 text-slate-900 font-bold py-3 rounded-lg shadow-lg transition">
            Send Message
        </button>
    </form>
</div>
@endsection