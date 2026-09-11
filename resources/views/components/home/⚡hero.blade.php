<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>

    <section class="relative min-h-screen flex items-center overflow-hidden transition-colors duration-300">
        {{-- Background Image with Adaptive Overlay --}}
        <div class="absolute inset-0 z-0">
            <img 
                src="assets/images/hero-background.png"     
                alt="Tower Bridge London" 
                class="w-full h-full object-cover"
            >
            {{-- Light Mode: Slightly lighter navy overlay | Dark Mode: Deep, rich dark overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-[#1e3a5f]/80 via-[#1e3a5f]/60 to-[#1e3a5f]/40 dark:from-[#020617]/95 dark:via-[#020617]/85 dark:to-[#020617]/60 transition-all duration-300"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-15 lg:py-20 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                {{-- Left Content --}}
                <div class="space-y-4">
                    {{-- Top Label --}}
                    <div class="flex items-center space-x-3">
                        <div class="h-px w-12 bg-[#c41e3a]"></div>
                        <span class="text-[#c41e3a] text-xs font-semibold tracking-[0.2em] uppercase">
                            The Morgans . Global Group Holding
                        </span>
                    </div>

                    {{-- Main Heading --}}
                    <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-white dark:text-gray-50 leading-tight">
                        A global group.<br>
                        Eleven lines of<br>
                        business. <span class="text-[#c41e3a] italic">One standard</span>
                    </h1>

                    {{-- Description --}}
                    <p class="text-white/80 dark:text-gray-300 text-base lg:text-lg leading-relaxed max-w-xl transition-colors duration-300">
                        THE MORGANS is a diversified group of independent companies operating across financial services, technology, real estate, education, events and enterprise services, serving clients on four continents from offices in Lagos, London and New York.
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a 
                            href="{{ route('group') }}" 
                            class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold tracking-wider uppercase text-white bg-[#c41e3a] rounded-md hover:bg-[#a01830] transition-all duration-200 group shadow-lg shadow-[#c41e3a]/20"
                        >
                            Explore The Group Register
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a 
                            href="{{ route('group') }}" 
                            class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold tracking-wider uppercase text-white border border-white/40 dark:border-gray-500 rounded-md hover:bg-white/10 dark:hover:bg-gray-800/50 transition-all duration-200 backdrop-blur-sm"
                        >
                            About The Group
                        </a>
                    </div>
                </div>

                {{-- Right Side Elements --}}
                <div class="hidden lg:block relative">
                    <div class="space-y-6">
                        
                        {{-- Active Learners Badge --}}
                        <div class="flex justify-end">
                            <div class="bg-white/15 dark:bg-gray-900/60 backdrop-blur-md border border-white/30 dark:border-gray-700 rounded-2xl px-6 py-4 flex items-center space-x-4 shadow-xl transition-colors duration-300">
                                <div class="flex -space-x-3">
                                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://i.pravatar.cc/100?img=1" alt="User">
                                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://i.pravatar.cc/100?img=2" alt="User">
                                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://i.pravatar.cc/100?img=3" alt="User">
                                    <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800" src="https://i.pravatar.cc/100?img=4" alt="User">
                                    <div class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800 bg-[#c41e3a] flex items-center justify-center text-white text-xs font-bold">
                                        +
                                    </div>
                                </div>
                                <div class="text-white dark:text-gray-100">
                                    <div class="text-3xl font-bold">544+</div>
                                    <div class="text-xs uppercase tracking-wider text-white/70 dark:text-gray-400">Active Learners</div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-6">
                            {{-- Years Badge --}}
                            <div class="self-end bg-white/15 h-40 dark:bg-gray-900/60 backdrop-blur-md border border-white/30 dark:border-gray-700 rounded-2xl px-8 py-6 text-center shadow-xl transition-colors duration-300">
                                <div class="text-white/70 dark:text-gray-400 text-xs uppercase tracking-wider mb-2">Serving Clients For</div>
                                <div class="text-5xl font-bold text-white dark:text-gray-50">25+</div>
                                <div class="text-white dark:text-gray-200 text-lg">Years</div>
                            </div>

                            {{-- Office Times --}}
                            <div class="bg-white/15 dark:bg-gray-900/60 backdrop-blur-md border border-white/30 dark:border-gray-700 rounded-2xl px-6 py-6 space-y-4 shadow-xl transition-colors duration-300" x-data="{
                                times: {
                                    lagos: '',
                                    london: '',
                                    newyork: ''
                                },
                                updateTime() {
                                    const options = { hour: '2-digit', minute: '2-digit', hour12: false };
                                    options.timeZone = 'Africa/Lagos';
                                    this.times.lagos = new Intl.DateTimeFormat('en-US', options).format(new Date());
                                    options.timeZone = 'Europe/London';
                                    this.times.london = new Intl.DateTimeFormat('en-US', options).format(new Date());
                                    options.timeZone = 'America/New_York';
                                    this.times.newyork = new Intl.DateTimeFormat('en-US', options).format(new Date());
                                }
                            }" x-init="updateTime(); setInterval(updateTime, 1000)">
                                <div class="text-white dark:text-gray-100">
                                    <div class="text-lg font-semibold">Lagos</div>
                                    <div class="text-xs text-white/60 dark:text-gray-400 uppercase tracking-wider">Africa Office</div>
                                    <div class="text-2xl font-bold text-[#c41e3a]" x-text="times.lagos"></div>
                                </div>
                                <div class="border-t border-white/20 dark:border-gray-700"></div>
                                <div class="text-white dark:text-gray-100">
                                    <div class="text-lg font-semibold">London</div>
                                    <div class="text-xs text-white/60 dark:text-gray-400 uppercase tracking-wider">Europe Office</div>
                                    <div class="text-2xl font-bold text-[#c41e3a]" x-text="times.london"></div>
                                </div>
                                <div class="border-t border-white/20 dark:border-gray-700"></div>
                                <div class="text-white dark:text-gray-100">
                                    <div class="text-lg font-semibold">New York</div>
                                    <div class="text-xs text-white/60 dark:text-gray-400 uppercase tracking-wider">US Office</div>
                                    <div class="text-2xl font-bold text-[#c41e3a]" x-text="times.newyork"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/60 dark:text-gray-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

</div>
