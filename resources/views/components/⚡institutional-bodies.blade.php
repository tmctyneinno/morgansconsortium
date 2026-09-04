<?php

use Livewire\Component;

new class extends Component
{
   
    public $institutions = [
        [
            'label' => 'IGRCFP',
            'title' => 'The International Institute of Governance, Risk, Compliance & Financial Crime Prevention',
            'description' => "Professional standards, international fellowships and the IGRCFP Scholarship Programme — building the profession's next generation across every region the group serves.",
            'link' => ['text' => 'IGRCFP.ORG', 'url' => '#']
        ],
        [
            'label' => 'WGRCFP',
            'title' => 'Women in GRC & Financial Crime Prevention',
            'description' => 'A global community and structured mentorship programme with measured outcomes — readiness assessment, matched pairing and a nine-month progress framework.',
            'link' => ['text' => 'WGRCFP.ORG', 'url' => '#']
        ],
        [
            'label' => 'THE AWARDS',
            'title' => 'GRC & FinCrime Prevention Awards & Summit',
            'description' => "The profession's flagship convening, in association with the IGRCFP — 7th annual edition, six pillars, 40+ categories, staged across London and Nairobi in 2026.",
            'link' => ['text' => 'GRCFINCRIMEAWARDS.COM', 'url' => '#']
        ],
        [
            'label' => 'THE INSTITUTE',
            'title' => 'Executive Education & Professional Development',
            'description' => 'Flagship executive programmes on insurance governance, financial integrity and enterprise resilience, delivered to international cohorts in person and online.',
            'link' => ['text' => 'TMCINSTITUTE.COM', 'url' => '#']
        ],
    ];

};
?>

<div>
   <section class="py-20 lg:py-25 bg-[#0f1d35] dark:bg-[#050d1a] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Institutional Bodies</span>
                </div>
                
                <h2 class="text-4xl lg:text-4xl xl:text-4xl font-serif font-bold text-white mb-6 leading-tight">
                    The institutions the group convenes.
                </h2>
                
                <p class="text-lg text-gray-300 dark:text-gray-400 leading-relaxed max-w-6xl">
                    Beyond its operating companies, THE MORGANS architects and stewards professional institutions that set standards, educate practitioners and convene the global governance, risk, compliance and financial-crime prevention community.
                </p>
            </div>

            {{-- 2x2 Grid of Institution Cards --}}
            <div class="grid md:grid-cols-2 border border-gray-600/30 dark:border-gray-700/50 rounded-sm overflow-hidden mb-16">
                
                @foreach($institutions as $index => $institution)
                    <div class="p-8 lg:p-12 {{ $index < 2 ? 'border-b border-gray-600/30 dark:border-gray-700/50 md:border-b-0' : '' }} {{ $index % 2 === 0 ? 'md:border-r border-gray-600/30 dark:border-gray-700/50' : '' }} hover:bg-white/5 dark:hover:bg-white/5 transition-colors duration-300 group">
                        
                        {{-- Red Label --}}
                        <span class="block text-[#c41e3a] italic font-serif text-sm lg:text-base mb-4 tracking-wider">
                            {{ $institution['label'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-xl lg:text-2xl font-serif font-bold text-white mb-4 leading-snug">
                            {{ $institution['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-gray-300 dark:text-gray-400 text-sm lg:text-base leading-relaxed mb-8">
                            {{ $institution['description'] }}
                        </p>

                        {{-- Link --}}
                        <a 
                            href="{{ $institution['link']['url'] }}" 
                            class="inline-flex items-center text-xs font-bold tracking-wider uppercase text-[#c41e3a] hover:text-red-400 transition-colors group/link"
                        >
                            {{ $institution['link']['text'] }}
                            <svg class="w-3 h-3 ml-1 transform group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                    </div>
                @endforeach

            </div>

            {{-- Bottom Banner: Awards & Summit --}}
            <div class="border border-[#c41e3a]/30 dark:border-[#c41e3a]/20 rounded-sm p-8 lg:p-12 bg-gradient-to-r from-[#1a0f2e]/50 to-transparent dark:from-[#1a0f2e]/30">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                    
                    <div class="space-y-4">
                        <span class="block text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">
                            7th Annual . Two Editions . 2026
                        </span>
                        <h3 class="text-2xl lg:text-3xl font-serif font-bold text-white leading-snug max-w-2xl">
                            GRC & FinCrime Prevention Awards & Summit — London, 6 November · Nairobi, 20 November
                        </h3>
                    </div>

                    <a 
                        href="#" 
                        class="inline-flex items-center px-8 py-4 text-sm font-bold tracking-wider uppercase text-white bg-[#c41e3a] rounded-sm hover:bg-[#a01830] transition-all duration-200 whitespace-nowrap group"
                    >
                        Awards & Summit
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                </div>
            </div>

        </div>
    </section>
</div>