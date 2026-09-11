<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <section class="py-20 lg:py25 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Top Section: Heading & Story Text --}}
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 mb-20">
                
                {{-- Left Side: Heading --}}
                <div class="lg:col-span-5 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                        <span class="text-[#c41e3a] text-sm font-bold tracking-[0.15em] uppercase">Our Story</span>
                    </div>
                    
                    <h2 class="text-3xl lg:text-3xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-[1.1]">
                        From one practice to a global group.
                    </h2>
                </div>

                {{-- Right Side: Story Text --}}
                <div class="lg:col-span-7 space-y-6 pt-2">
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        THE MORGANS began more than twenty-five years ago as a professional practice serving financial institutions. What followed was not diversification for its own sake, but a pattern: each time clients trusted us with a new problem — screening a counterparty, building a platform, staging a summit, developing a property — we built a business capable of solving it to the same standard.
                    </p>
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        Today the group operates eleven distinct lines of business across financial services, technology, real estate, education, events and enterprise services. Its companies include OysterChecks, the AI-driven risk and assurance intelligence platform; Tyneside Innovation, the technology and digital agency; Portrec Resourcing, the talent and workforce brand; Tyneprints, the print and brand-production house; and the institutional bodies that convene the global GRC profession.
                    </p>
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        We are no longer a consultancy. We are a group of companies — and the discipline that built the first practice now governs all eleven.
                    </p>
                </div>
            </div>

            {{-- Bottom Section: Statistics Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                
                {{-- Stat 1 --}}
                <div class="p-8 lg:p-12 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-[#050a14] transition-colors duration-300">
                    <div class="text-5xl lg:text-6xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                        25<span class="text-3xl lg:text-4xl align-top">+</span>
                    </div>
                    <div class="text-xs lg:text-sm font-bold tracking-[0.15em] uppercase text-[#1e3a5f]/70 dark:text-gray-400">
                        Years Serving Clients
                    </div>
                </div>

                {{-- Stat 2 --}}
                <div class="p-8 lg:p-12 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-[#050a14] transition-colors duration-300">
                    <div class="text-5xl lg:text-6xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                        11
                    </div>
                    <div class="text-xs lg:text-sm font-bold tracking-[0.15em] uppercase text-[#1e3a5f]/70 dark:text-gray-400">
                        Lines of Business
                    </div>
                </div>

                {{-- Stat 3 --}}
                <div class="p-8 lg:p-12 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-[#050a14] transition-colors duration-300">
                    <div class="text-5xl lg:text-6xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                        3
                    </div>
                    <div class="text-xs lg:text-sm font-bold tracking-[0.15em] uppercase text-[#1e3a5f]/70 dark:text-gray-400">
                        Group Offices
                    </div>
                </div>

                {{-- Stat 4 --}}
                <div class="p-8 lg:p-12 bg-white dark:bg-[#050a14] transition-colors duration-300">
                    <div class="text-5xl lg:text-6xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                        5
                    </div>
                    <div class="text-xs lg:text-sm font-bold tracking-[0.15em] uppercase text-[#1e3a5f]/70 dark:text-gray-400">
                        Regions of Operation
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>