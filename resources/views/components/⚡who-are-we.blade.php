<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <section class="py-20 lg:py-25 bg-white dark:bg-gray-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Top Section: Heading & Description --}}
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 mb-20">
                
                {{-- Left Side: Heading --}}
                <div class="lg:col-span-5 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="h-[2px] w-16 bg-[#c41e3a]"></div>
                        <span class="text-[#c41e3a] text-sm font-bold tracking-[0.15em] uppercase">Who Are We?</span>
                    </div>
                    
                    <h2 class="text-4xl lg:text-4xl xl:text-5xl font-serif font-bold text-[#1e3a5f] dark:text-gray-100 leading-[1.1]">
                        From consultancy roots to a diversified global group.
                    </h2>
                </div>

                {{-- Right Side: Description Text --}}
                <div class="lg:col-span-7 space-y-6 pt-2">
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        THE MORGANS began as a consultancy. Today it is a group of independent companies operating eleven distinct lines of business from advisory and assurance to enterprise technology, real estate, education, global events and workforce solutions.
                    </p>
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        Each company in the group OysterChecks, Tyneside Innovation, Portrec Resourcing, Tyneprints and the group's institutional bodies among them runs on its own strength in its own industry. What binds them is a single standard: disciplined governance, uncompromising integrity, and a habit of finding the pivot points where focused change compounds into accelerated performance for our clients wherever in the world they operate.
                    </p>
                </div>
            </div>

            {{-- Bottom Section: Three Pillars Grid --}}
            <div class="grid md:grid-cols-3 border-t border-gray-200 dark:border-gray-800">
                
                {{-- Pillar 1 --}}
                <div class="p-8 lg:p-10 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors duration-300 group">
                    <span class="block text-[#c41e3a] italic font-serif text-xl mb-6">1. Multi-industry</span>
                    <h3 class="text-2xl font-bold text-[#1e3a5f] dark:text-white mb-4">Eleven lines of business</h3>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 mb-8 leading-relaxed">
                        Advisory, risk intelligence, education, events, technology, talent, procurement, property, facilities and brand production each a business in its own right.
                    </p>
                    <a href="#" class="inline-flex items-center text-sm font-bold tracking-wider uppercase text-[#c41e3a] hover:text-[#a01830] dark:hover:text-red-400 transition-colors group/link">
                        The Group Register 
                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Pillar 2 --}}
                <div class="p-8 lg:p-10 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors duration-300 group">
                    <span class="block text-[#c41e3a] italic font-serif text-xl mb-6">2. Global</span>
                    <h3 class="text-2xl font-bold text-[#1e3a5f] dark:text-white mb-4">Four continents, one standard</h3>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 mb-8 leading-relaxed">
                        Offices in Lagos, London and New York anchor operations, partners and client engagements across Africa, Europe, the Middle East, the Americas and Asia.
                    </p>
                    <a href="#" class="inline-flex items-center text-sm font-bold tracking-wider uppercase text-[#c41e3a] hover:text-[#a01830] dark:hover:text-red-400 transition-colors group/link">
                        Our Footprint 
                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Pillar 3 --}}
                <div class="p-8 lg:p-10 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors duration-300 group">
                    <span class="block text-[#c41e3a] italic font-serif text-xl mb-6">3. Institutional</span>
                    <h3 class="text-2xl font-bold text-[#1e3a5f] dark:text-white mb-4">Governed, not merely managed</h3>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 mb-8 leading-relaxed">
                        An advisory council and experienced leadership hold every group company to the same standard of integrity and rigour.
                    </p>
                    <a href="#" class="inline-flex items-center text-sm font-bold tracking-wider uppercase text-[#c41e3a] hover:text-[#a01830] dark:hover:text-red-400 transition-colors group/link">
                        Leadership & Council 
                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>