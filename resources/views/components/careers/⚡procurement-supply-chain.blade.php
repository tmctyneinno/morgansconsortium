<?php

use Livewire\Component;

new class extends Component
{
     public $stats = [
        ['number' => '7th', 'label' => 'ANNUAL EDITION'],
        ['number' => '2', 'label' => 'GLOBAL EDITIONS IN 2026'],
        ['number' => '6', 'label' => 'AWARD PILLARS'],
        ['number' => '40+', 'label' => 'CATEGORIES'],
    ];

    public $capabilities = [
        ['id' => 'M.04.01', 'title' => 'Two global editions', 'desc' => 'Europe — London, 6 November 2026. Africa — Nairobi, 20 November 2026. One standard across both.'],
        ['id' => 'M.04.02', 'title' => 'Six award pillars', 'desc' => 'GRC & FinCrime achievement, sector excellence, individual leadership, women in GRC, media, and providers & lifetime achievement.'],
        ['id' => 'M.04.03', 'title' => 'Transparent process', 'desc' => 'Open nomination, public voting, independent judging against published criteria, and a black-tie gala finale.'],
        ['id' => 'M.04.04', 'title' => 'The summit', 'desc' => 'Plenary sessions, masterclasses and closed-door regulatory tracks alongside each awards evening.'],
        ['id' => 'M.04.05', 'title' => 'Sponsorship & partnership', 'desc' => "Institutional partnership programmes that align brands with the profession's agenda."],
        ['id' => 'M.04.06', 'title' => 'Proceedings & publications', 'desc' => 'Summit white papers and proceedings that outlive the event itself.'],
    ];

    public $sectors = ['Financial Services', 'Regulators', 'Professional Bodies', 'Technology Partners', 'Academia', 'Media'];

    public $relatedDivisions = [
        [
            'id' => 'M.03. INSTITUTIONAL',
            'title' => 'TMC Institute — Executive Education',
            'desc' => "The group's executive education arm — board-level programmes, professional certification pathways and bespoke corporate academies, delivered to...",
            'link' => '#'
        ],
        [
            'id' => 'M.05. INSTITUTIONAL',
            'title' => 'WGRCFP — Women in GRC & FinCrime Prevention',
            'desc' => 'A worldwide community and structured mentorship programme advancing women in governance, risk, compliance and financial-crime prevention — with...',
            'link' => '#'
        ],
    ];


};
?>

<div>
   <div class="bg-white dark:bg-[#050a14] transition-colors duration-300">
    
    {{-- ========================================== --}}
    {{-- HEADER & INTRO --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 mb-16">
                <div class="lg:col-span-5">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                        <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">The Business</span>
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                        What this company does.
                    </h1>
                </div>
                <div class="lg:col-span-7 space-y-6 text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed text-sm lg:text-base">
                    <p>
                       The Procurement & Supply Chain division manages sourcing programmes for corporates, institutions and public bodies: category strategy, tender management, supplier negotiation and contract lifecycle management, executed with complete transparency.
                    </p>
                    <p>
                      With supplier networks across four continents — and OysterChecks screening every counterparty before award — clients gain global reach without global risk.
                    </p>
                </div>
            </div>

            {{-- Stats Row --}}
            <div class="grid grid-cols-2 md:grid-cols-4 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                @foreach($stats as $index => $stat)
                    <div class="p-8 lg:p-10 {{ $index < 3 ? 'border-r border-gray-200 dark:border-gray-800' : '' }} text-center md:text-left">
                        <div class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-2">{{ $stat['number'] }}</div>
                        <div class="text-[10px] font-bold tracking-[0.15em] uppercase text-[#c41e3a]">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- QUOTE SECTION --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24 bg-gray-50 dark:bg-[#080f1e] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-start space-x-8 max-w-4xl">
                <div class="hidden sm:block w-1 bg-[#c41e3a] self-stretch min-h-[150px] rounded-sm flex-shrink-0"></div>
                <div>
                    <blockquote class="text-3xl lg:text-4xl font-serif italic text-[#1e3a5f] dark:text-white leading-snug mb-6">
                        Recognition means nothing unless the judging is beyond question. Ours is independent, published and conflict-free.
                    </blockquote>
                    <cite class="block not-italic text-xs font-bold tracking-[0.2em] uppercase text-[#1e3a5f]/60 dark:text-gray-500">
                        GRC & FinCrime Prevention Awards & Summit — M.04
                    </cite>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- CAPABILITIES --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Capabilities</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white">Where we're engaged.</h2>
            </div>

            <div class="grid md:grid-cols-2 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                @foreach($capabilities as $index => $cap)
                    <div class="p-8 lg:p-10 {{ $index < 4 ? 'border-b border-gray-200 dark:border-gray-800' : '' }} {{ $index % 2 === 0 ? 'md:border-r border-gray-200 dark:border-gray-800' : '' }} hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300">
                        <span class="block text-[#c41e3a] text-xs font-bold tracking-wider mb-3">{{ $cap['id'] }}</span>
                        <h3 class="text-xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-3">{{ $cap['title'] }}</h3>
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">{{ $cap['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- SECTORS SERVED --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24 bg-gray-50 dark:bg-[#080f1e] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Sectors Served</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">Industries we work in.</h2>
                
                <div class="flex flex-wrap gap-3 mb-6">
                    @foreach($sectors as $sector)
                        <span class="px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-full text-[10px] font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 bg-white dark:bg-transparent">
                            {{ $sector }}
                        </span>
                    @endforeach
                </div>
                
                <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm max-w-2xl">
                    Two editions in 2026 — London and Nairobi — with further editions planned across the group's footprint.
                </p>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- STRONGER TOGETHER --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Stronger Together</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">Where this business meets the group.</h2>
                <p class="text-[#1e3a5f]/70 dark:text-gray-400 max-w-2xl text-sm">No company in the group works alone. These are the divisions this business most often delivers alongside.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($relatedDivisions as $div)
                    <div class="p-8 lg:p-10 border border-gray-200 dark:border-gray-800 rounded-sm hover:border-[#c41e3a]/50 dark:hover:border-[#c41e3a]/50 transition-colors duration-300 group">
                        <span class="block text-[#c41e3a] text-xs font-bold tracking-wider mb-4">{{ $div['id'] }}</span>
                        <h3 class="text-xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">{{ $div['title'] }}</h3>
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed mb-6">{{ $div['desc'] }}</p>
                        <a href="{{ $div['link'] }}" class="inline-flex items-center text-xs font-bold tracking-wider uppercase text-[#c41e3a] hover:text-[#a01830] transition-colors group/link">
                            Visit Division
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- NEXT IN REGISTER --}}
    {{-- ========================================== --}}
    <section class="py-12 pb-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border border-gray-200 dark:border-gray-800 rounded-sm p-8 lg:p-12 flex flex-col md:flex-row justify-between items-center gap-6 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300">
                <div>
                    <span class="block text-[#1e3a5f]/60 dark:text-gray-500 text-xs font-bold tracking-[0.2em] uppercase mb-2">Next in the Register · M.05</span>
                    <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white">WGRCFP — Women in GRC & FinCrime Prevention</h3>
                </div>
                <a href="#" class="inline-flex items-center px-8 py-3 border border-[#1e3a5f] dark:border-white text-[#1e3a5f] dark:text-white text-xs font-bold tracking-[0.15em] uppercase rounded-sm hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#050a14] transition-all duration-200 group">
                    Visit Division
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    </div>
</div>