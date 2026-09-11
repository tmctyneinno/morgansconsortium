<?php

use Livewire\Component;

new class extends Component
{
    public $pillars = [
        [
            'subtitle' => 'Diagnose', // Corrected typo from image "Diagonise"
            'title' => 'Find the pivot point',
            'description' => 'Every engagement begins with diagnosis — locating the few changes that compound into outsized results.'
        ],
        [
            'subtitle' => 'Deliver',
            'title' => 'Execute with discipline',
            'description' => 'Customised, rigorous delivery — driving outcomes faster than the market expects, without cutting a single corner.'
        ],
        [
            'subtitle' => 'Endure',
            'title' => 'Build what lasts',
            'description' => 'We build capabilities, institutions and assets designed to outlive the engagement — and often, to outlive us.'
        ],
    ];
};
?>

<div>
   <section class="py-20 lg:py-32 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16 max-w-5xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Mission</span>
                </div>
                
                <h2 class="text-3xl lg:text-3xl xl:text-3xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-8 leading-tight">
                    OUR MISSION
                </h2>
                
                <p class="text-2xl lg:text-2xl xl:text-2xl font-serif text-[#1e3a5f] dark:text-gray-200 leading-snug">
                    To help organisations everywhere discover the pivot points of accelerated performance, growth and profitability and to build, in every industry we enter, businesses worthy of institutional trust.
                </p>
            </div>

            {{-- Pillars Grid --}}
            <div class="grid md:grid-cols-3 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                
                @foreach($pillars as $index => $pillar)
                    <div class="p-6 lg:p-8 {{ $index < 2 ? 'border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800' : '' }} bg-white dark:bg-[#050a14] hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300">
                        
                        {{-- Red Subtitle --}}
                        <span class="block text-[#c41e3a] italic font-serif text-xl mb-6">
                            {{ $pillar['subtitle'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                            {{ $pillar['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed">
                            {{ $pillar['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>