<?php

use Livewire\Component;

new class extends Component
{
    public $stats = [
        ['number' => '25+', 'label' => 'YEARS ADVISING INSTITUTIONS'],
        ['number' => '4', 'label' => 'CONTINENTS OF ENGAGEMENT'],
        ['number' => '3', 'label' => 'LINES OF DEFENSE ASSURED'],
    ];

    public $capabilities = [
        ['id' => 'M.01.01', 'title' => 'Governance & board advisory', 'desc' => 'Board effectiveness reviews, governance frameworks and director development for regulated and listed entities.'],
        ['id' => 'M.01.02', 'title' => 'Enterprise risk management', 'desc' => 'Risk appetite design, ERM frameworks, stress-testing support and continuous control monitoring.'],
        ['id' => 'M.01.03', 'title' => 'Regulatory compliance', 'desc' => 'Compliance programme design, independent reviews, regulator remediation and horizon scanning across jurisdictions.'],
        ['id' => 'M.01.04', 'title' => 'Financial crime prevention', 'desc' => 'AML/CFT programme audits, sanctions and fraud risk assessments, transaction-monitoring optimisation and investigations support.'],
        ['id' => 'M.01.05', 'title' => 'Internal audit & assurance', 'desc' => 'Co-sourced and outsourced internal audit, quality assurance reviews and third-party risk assurance.'],
        ['id' => 'M.01.06', 'title' => 'ESG & resilience', 'desc' => 'ESG reporting readiness, operational resilience and enterprise-resilience programmes for regulated institutions.'],
    ];

    public $sectors = ['Banking', 'Insurance', 'Fintech & Payments', 'Asset Management', 'Public Sector', 'Energy & Infrastructure'];

    public $relatedDivisions = [
        [
            'id' => 'M02. TECHNOLOGY',
            'title' => 'OysterChecks — Risk & Assurance Intelligence',
            'desc' => 'A unified, AI-driven risk and assurance intelligence platform — real-time identity verification, global background screening, KYC/ KYB, AM...',
            'link' => '#'
        ],
        [
            'id' => 'M02. INSTITUTIONAL',
            'title' => 'TMC Institute — Executive Education',
            'desc' => "The group's executive education arm — board-level programmes, professional certification pathways and bespoke corporate academies, delivered to...",
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
                <div class="lg:col-span-7 space-y-6 text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                    <p>Advisory & Assurance is the intellectual heart of the group: an independent practice advising boards, executives and regulators on governance, enterprise risk, regulatory compliance and financial-crime prevention.</p>
                    <p>Our consultants have conducted independent compliance reviews, BSA/AML audits and control assessments for global banking groups, central institutions and growth-stage financial firms across four continents — combining international standards with deep knowledge of the jurisdictions where our clients actually operate.</p>
                </div>
            </div>

            {{-- Stats Row --}}
            <div class="grid grid-cols-1 md:grid-cols-3 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                @foreach($stats as $index => $stat)
                    <div class="p-8 lg:p-10 {{ $index < 2 ? 'border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800' : '' }}">
                        <div class="text-4xl lg:text-5xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-2">{{ $stat['number'] }}</div>
                        <div class="text-xs font-bold tracking-[0.15em] uppercase text-[#c41e3a]">{{ $stat['label'] }}</div>
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
                <div class="hidden sm:block w-1 bg-[#c41e3a] self-stretch min-h-[100px] rounded-sm flex-shrink-0"></div>
                <div>
                    <blockquote class="text-2xl lg:text-3xl font-serif italic text-[#1e3a5f] dark:text-white leading-snug mb-6">
                        Independence is not a service line. It is the reason boards and regulators pick up the phone.
                    </blockquote>
                    <cite class="block not-italic text-xs font-bold tracking-[0.2em] uppercase text-[#1e3a5f]/60 dark:text-gray-500">
                        Advisory & Assurance — M.01
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
            <div class="mb-8">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Sectors Served</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">Industries we work in.</h2>
                
                <div class="flex flex-wrap gap-3 mb-6">
                    @foreach($sectors as $sector)
                        <span class="px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-full text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 bg-white dark:bg-transparent">
                            {{ $sector }}
                        </span>
                    @endforeach
                </div>
                
                <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm max-w-2xl">
                    Engagements delivered across Africa, Europe, the Middle East, North America and Asia.
                </p>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- STRONGER TOGETHER --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Stronger Together</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">Where this business meets the group.</h2>
                <p class="text-[#1e3a5f]/70 dark:text-gray-400 max-w-2xl">No company in the group works alone. These are the divisions this business most often delivers alongside.</p>
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
                    <span class="block text-[#1e3a5f]/60 dark:text-gray-500 text-xs font-bold tracking-[0.2em] uppercase mb-2">Next in the Register · M.02</span>
                    <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white">OysterChecks — Risk & Assurance Intelligence</h3>
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