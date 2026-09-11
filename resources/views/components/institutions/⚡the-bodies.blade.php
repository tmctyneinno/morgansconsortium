<?php

use Livewire\Component;

new class extends Component
{
    public $institutions = [
        [
            'label' => 'IGRCFP',
            'title' => 'The International Institute of Governance, Risk, Compliance & Financial Crime Prevention',
            'description' => "Professional standards, international fellowships and the IGRCFP Scholarship Programme — building the profession's next generation across every region the group serves.",
            'link' => ['text' => 'IGRCFP.ORG', 'url' => 'https://igrcfp.org/']
        ],
        [
            'label' => 'WGRCFP',
            'title' => 'Women in GRC & Financial Crime Prevention',
            'description' => 'A global community and structured mentorship programme with measured outcomes — readiness assessment, matched pairing and a nine-month progress framework.',
            'link' => ['text' => 'WGRCFP.ORG', 'url' => 'https://wgrcfp.org/']
        ],
        [
            'label' => 'THE AWARDS',
            'title' => 'GRC & FinCrime Prevention Awards & Summit',
            'description' => "The profession's flagship convening, in association with the IGRCFP — 7th annual edition, six pillars, 40+ categories, staged across London and Nairobi in 2026.",
            'link' => ['text' => 'GRCFINCRIMEAWARDS.COM', 'url' => 'https://grcfincrimeawards.com/']
        ],
        [
            'label' => 'THE INSTITUTE',
            'title' => 'Executive Education & Professional Development',
            'description' => 'Flagship executive programmes on insurance governance, financial integrity and enterprise resilience, delivered to international cohorts in person and online.',
            'link' => ['text' => 'TMCINSTITUTE.COM', 'url' => 'https://tmcinstitute.com/']
        ],
    ];

    public $stats = [
        ['number' => '7th', 'label' => 'ANNUAL AWARDS EDITION'],
        ['number' => '2', 'label' => 'GLOBAL EDITIONS IN 2026'],
        ['number' => '6', 'label' => 'AWARD PILLARS'],
        ['number' => '40+', 'label' => 'CATEGORIES'],
    ];

    public $editions = [
        [
            'tag' => 'Save the date · 6 November 2026',
            'title' => 'Europe Edition — London',
            'description' => 'Summit and black-tie gala at the London Marriott — convening regulators, bankers and compliance leaders from across Europe.',
            'link' => ['text' => 'VIEW EUROPE EDITION', 'url' => 'https://grcfincrimeawards.com']
        ],
        [
            'tag' => 'Voting live · 20 November 2026',
            'title' => 'Africa Edition — Nairobi',
            'description' => "Summit and gala at the Nairobi Marriott, Upper Hill — the continent's flagship convening for GRC and financial-crime prevention.",
            'link' => ['text' => 'VIEW AFRICA EDITION', 'url' => 'https://grcfincrimeawards.com']
        ],
    ];
};
?>

<div>
    <section class="py-20 lg:py-25 bg-[#0b1526] dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">The Bodies</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-white leading-tight">
                    Four institutions, one purpose.
                </h2>
            </div>

            {{-- 2x2 Grid of Institution Cards --}}
            <div class="grid md:grid-cols-2 border border-gray-600/30 dark:border-gray-700/50 rounded-sm overflow-hidden mb-16">
                
                @foreach($institutions as $index => $institution)
                    <div class="p-8 lg:p-10 {{ $index < 2 ? 'border-b border-gray-600/30 dark:border-gray-700/50 md:border-b-0' : '' }} {{ $index % 2 === 0 ? 'md:border-r border-gray-600/30 dark:border-gray-700/50' : '' }} hover:bg-white/5 dark:hover:bg-white/5 transition-colors duration-300 group">
                        
                        {{-- Red Label --}}
                        <span class="block text-[#c41e3a] italic font-serif text-sm lg:text-base mb-4 tracking-wider">
                            {{ $institution['label'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-xl lg:text-1xl font-serif font-bold text-white mb-4 leading-snug">
                            {{ $institution['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-gray-300 dark:text-gray-400 text-sm lg:text-base leading-relaxed mb-6">
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

            {{-- Statistics Row --}}
            <div class="grid grid-cols-2 md:grid-cols-4 border border-gray-600/30 dark:border-gray-700/50 rounded-sm overflow-hidden mb-20">
                
                @foreach($stats as $index => $stat)
                    <div class="p-8 lg:p-10 {{ $index < 3 ? 'border-r border-gray-600/30 dark:border-gray-700/50' : '' }} bg-white/5 dark:bg-white/5">
                        <div class="text-3xl lg:text-4xl font-serif font-bold text-white mb-3">
                            {{ $stat['number'] }}
                        </div>
                        <div class="text-xs font-bold tracking-[0.15em] uppercase text-gray-400 dark:text-gray-500">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Calendar Section --}}
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">The 2026 Calendar</span>
                </div>
                
                <h2 class="text-4xl lg:text-5xl font-serif font-bold text-white leading-tight">
                    Two Editions. One Global Standard.
                </h2>
            </div>

            {{-- Edition Cards --}}
            <div class="grid md:grid-cols-2 gap-6">
                
                @foreach($editions as $edition)
                    <div class="border border-[#c41e3a]/30 dark:border-[#c41e3a]/20 rounded-sm p-8 lg:p-10 bg-gradient-to-br from-[#1a0f2e]/30 to-transparent dark:from-[#1a0f2e]/20 hover:from-[#1a0f2e]/50 dark:hover:from-[#1a0f2e]/40 transition-all duration-300 group">
                        
                        <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-4">
                            {{ $edition['tag'] }}
                        </span>

                        <h3 class="text-2xl lg:text-3xl font-serif font-bold text-white mb-4">
                            {{ $edition['title'] }}
                        </h3>

                        <p class="text-gray-300 dark:text-gray-400 text-sm leading-relaxed mb-8">
                            {{ $edition['description'] }}
                        </p>

                        <a 
                            href="{{ $edition['link']['url'] }}" 
                            class="inline-flex items-center text-xs font-bold tracking-wider uppercase text-[#c41e3a] hover:text-red-400 transition-colors group/link"
                        >
                            {{ $edition['link']['text'] }}
                            <svg class="w-3 h-3 ml-1 transform group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                    </div>
                @endforeach

            </div>

        </div>
    </section>
</div>