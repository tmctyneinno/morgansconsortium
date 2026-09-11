<?php

use Livewire\Component;

new class extends Component
{
    public $milestones = [
        [
            'label' => 'THE FOUNDING YEARS',
            'title' => 'A practice built on trust',
            'description' => 'The original advisory practice earns its reputation conducting independent compliance reviews and audits for international banking groups — the standard that still defines the group.'
        ],
        [
            'label' => 'THE TECHNOLOGY ERA',
            'title' => 'Tyneside Innovation & digital delivery',
            'description' => 'The group builds its own technology and digital agency, taking product-grade engineering to more than two thousand clients — and laying the foundations for its platform businesses.'
        ],
        [
            'label' => '2020',
            'title' => 'The Awards are founded',
            'description' => 'The GRC & Financial Crime Prevention Awards & Summit is founded, convening the profession and recognising excellence across six pillars.'
        ],
        [
            'label' => 'THE PLATFORM & INSTITUTIONS ERA',
            'title' => 'OysterChecks, IGRCFP, WGRCFP and the Institute',
            'description' => 'The group expands its institutional reach through specialist platforms and professional bodies dedicated to governance, risk, compliance and financial crime prevention.'
        ],
        [
            'label' => '2026',
            'title' => 'A global group',
            'description' => 'Offices in Lagos, London and New York anchor eleven lines of business; the Awards stage two global editions — London on 6 November and Nairobi on 20 November.'
        ],
    ];
};
?>

<div>
    <section class="py-20 lg:py-25 bg-white dark:bg-[#FBFAF7] transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Milestones</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                    How the group took shape.
                </h2>
            </div>

            {{-- Timeline Container --}}
            <div class="relative space-y-12">
                
                {{-- Vertical Connecting Line --}}
                {{-- Positioned to align with the center of the dots (left: 11px for a 24px dot) --}}
                <div class="absolute left-[11px] top-4 bottom-4 w-[2px] bg-gray-200 dark:bg-gray-800 transition-colors duration-300"></div>

                {{-- Timeline Items --}}
                @foreach($milestones as $milestone)
                    <div class="relative pl-12 group">
                        
                        {{-- Red Dot --}}
                        <div class="absolute left-0 top-1.5 w-6 h-6 rounded-full bg-[#c41e3a] z-10 ring-4 ring-white dark:ring-[#050a14] transition-all duration-300"></div>

                        {{-- Content --}}
                        <div class="space-y-3">
                            <span class="block text-[#c41e3a] text-xs font-bold tracking-[0.15em] uppercase">
                                {{ $milestone['label'] }}
                            </span>
                            
                            <h3 class="text-2xl lg:text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white">
                                {{ $milestone['title'] }}
                            </h3>
                            
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed max-w-2xl">
                                {{ $milestone['description'] }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
