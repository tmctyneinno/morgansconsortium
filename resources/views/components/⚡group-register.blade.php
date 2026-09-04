<?php

use Livewire\Component;

new class extends Component
{
    public $divisions = [
        [
            'id' => '01',
            'title' => 'Advisory & Assurance',
            'category' => 'ADVISORY',
            'description' => "The group's international advisory practice — governance, enterprise risk, regulatory compliance and financial-crime prevention for banks, insurers, fintechs and public institutions worldwide.",
            'links' => [['text' => 'VISIT DIVISION', 'url' => '#']]
        ],
        [
            'id' => '02',
            'title' => 'OysterChecks - Risk & Assurance Intelligence',
            'category' => 'TECHNOLOGY',
            'description' => "A unified, AI-driven risk and assurance intelligence platform — real-time identity verification, global background screening, KYC/KYB, AML surveillance and continuous control monitoring, built to help organisations prove trust in real time.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'OYSTERCHECKS.COM', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '03',
            'title' => 'TMC Institute',
            'category' => 'INSTITUTIONAL',
            'description' => "The group's executive education arm — board-level programmes, professional certification pathways and bespoke corporate academies, delivered to international cohorts in person and online.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'TMCINSTITUTE.COM', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '04',
            'title' => 'GRC & FinCrime Prevention Awards & Summit',
            'category' => 'INSTITUTIONAL',
            'description' => "The profession's flagship awards and summit — now in its 7th annual edition, staged across two global editions in 2026: London on 6 November and Nairobi on 20 November, with six award pillars and 40+ categories.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'GRCFINCRIMEAWARDS.COM', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '05',
            'title' => 'WGRCFP - Women in GRC & FinCrime Prevention',
            'category' => 'INSTITUTIONAL',
            'description' => "A worldwide community and structured mentorship programme advancing women in governance, risk, compliance and financial-crime prevention — with measured outcomes, not just good intentions.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'WGRCFP.ORG', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '06',
            'title' => 'Portrec Resourcing - Talent & Workforce',
            'category' => 'ENTERPRISE SERVICES',
            'description' => "The group's recruitment and workforce brand — executive search, specialist recruitment and managed outsourcing, with dedicated candidate portals serving markets on multiple continents.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'PORTREC.CO.UK', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '07',
            'title' => 'Tyneside Innovation - Technology & Digital',
            'category' => 'TECHNOLOGY',
            'description' => "The group's technology and digital agency — web and app development, enterprise IT solutions, digital marketing, SEO and brand design, with more than 2,000 clients served across three continents.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'TYNESIDEINNOVATION.COM', 'url' => '#', 'external' => true]
            ]
        ],
        [
            'id' => '08',
            'title' => 'Procurement & Supply Chain',
            'category' => 'ENTERPRISE SERVICES',
            'description' => "International sourcing, negotiation and supply-chain management run with the transparency and value discipline of an institutional buyer — from single tenders to full category management.",
            'links' => [['text' => 'VISIT DIVISION', 'url' => '#']]
        ],
        [
            'id' => '09',
            'title' => 'Real Estate & Property Development',
            'category' => 'ENTERPRISE SERVICES',
            'description' => "Development, investment and asset management across residential and commercial portfolios — pairing high-growth markets with institutional discipline and independently verified diligence.",
            'links' => [['text' => 'VISIT DIVISION', 'url' => '#']]
        ],
        [
            'id' => '10',
            'title' => 'Facilities & Infrastructure Management',
            'category' => 'ENTERPRISE SERVICES',
            'description' => "Integrated facilities management for estates, offices and operational sites — keeping mission-critical environments running safely, efficiently and to a single global standard.",
            'links' => [['text' => 'VISIT DIVISION', 'url' => '#']]
        ],
        [
            'id' => '11',
            'title' => 'Tyneprints - Print & Brand Production',
            'category' => 'ENTERPRISE SERVICES',
            'description' => "The group's print and brand-production house — an online print platform delivering business stationery, large-format signage, corporate gifts and event collateral to homes and businesses, with instant quotes and doorstep delivery.",
            'links' => [
                ['text' => 'VISIT DIVISION', 'url' => '#'],
                ['text' => 'TYNEPRINTS.COM', 'url' => '#', 'external' => true]
            ]
        ],
    ];
};
?>

<div>
    <section class="py-20 lg:py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Section --}}
        <div class="mb-6 max-w-3xl">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">The Group Register</span>
            </div>
            
            <h2 class="text-5xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">
                Eleven lines of business, one register.
            </h2>
            
            <p class="text-lg text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed">
                Each entry below is an operating company or division of the group. Select an entry to read its remit, or visit the brand directly.
            </p>
        </div>

        {{-- List Section --}}
        <div class="border-t border-gray-200 dark:border-gray-800">
            @foreach($divisions as $division)
                <div class="group border-b border-gray-200 dark:border-gray-800 py-5 lg:py-5 hover:bg-white dark:hover:bg-gray-800/50 transition-colors duration-300">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                        
                        {{-- Index Number --}}
                        <div class="lg:col-span-1">
                            <span class="text-[#c41e3a] font-serif font-bold text-sm tracking-wider">M.{{ $division['id'] }}</span>
                        </div>

                        {{-- Content (Title & Description) --}}
                        <div class="lg:col-span-7 space-y-0">
                            <h3 class="text-2xl lg:text-3xl font-serif font-bold text-[#1e3a5f] dark:text-white group-hover:text-[#c41e3a] dark:group-hover:text-[#c41e3a] transition-colors duration-300">
                                {{ $division['title'] }}
                            </h3>
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed text-sm lg:text-base">
                                {{ $division['description'] }}
                            </p>
                        </div>

                        {{-- Meta (Category & Links) --}}
                        <div class="lg:col-span-4 flex flex-col justify-between items-start lg:items-end space-y-6 lg:space-y-0">
                            
                            {{-- Category Tag --}}
                            <div class="flex items-center space-x-3">
                                <span class="px-3 py-1 text-[10px] font-bold tracking-widest uppercase border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 rounded-full">
                                    {{ $division['category'] }}
                                </span>
                                <div class="h-px w-8 bg-gray-300 dark:bg-gray-600"></div>
                            </div>

                            {{-- Links --}}
                            <div class="flex flex-col items-start lg:items-end space-y-2">
                                @foreach($division['links'] as $link)
                                    <a 
                                        href="{{ $link['url'] }}" 
                                        class="inline-flex items-center text-xs font-bold tracking-wider uppercase text-[#c41e3a] hover:text-[#a01830] dark:hover:text-red-400 transition-colors group/link"
                                    >
                                        {{ $link['text'] }}
                                        @if(isset($link['external']))
                                            <svg class="w-3 h-3 ml-1 transform group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        @else
                                            <svg class="w-3 h-3 ml-1 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</div>