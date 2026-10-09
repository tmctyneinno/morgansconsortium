<?php

use Livewire\Component;

new class extends Component
{
    public array $divisions = [
        [
            'id' => '01',
            'title' => 'Advisory & Assurance',
            'category' => 'Advisory',
            'description' => "The group's international advisory practice — governance, enterprise risk, regulatory compliance and financial-crime prevention for banks, insurers, fintechs and public institutions worldwide.",
            'links' => [['text' => 'Visit Division', 'url' => 'advisory-assurance']],
        ],
        [
            'id' => '02',
            'title' => 'OysterChecks - Risk & Assurance Intelligence',
            'category' => 'Technology',
            'description' => 'A unified, AI-driven risk and assurance intelligence platform — real-time identity verification, global background screening, KYC/KYB, AML surveillance and continuous control monitoring, built to help organisations prove trust in real time.',
            'links' => [
                ['text' => 'Visit Division', 'url' => 'oysterChecks'],
                ['text' => 'OysterChecks.com', 'url' => 'oysterChecks', 'external' => true],
            ],
        ],
        [
            'id' => '03',
            'title' => 'TMC Institute',
            'category' => 'Institutional',
            'description' => "The group's executive education arm — board-level programmes, professional certification pathways and bespoke corporate academies, delivered to international cohorts in person and online.",
            'links' => [
                ['text' => 'Visit Division', 'url' => 'tmc-institute'],
                ['text' => 'TMCInstitute.com', 'url' => 'tmc-institute', 'external' => true],
            ],
        ],
        [
            'id' => '04',
            'title' => 'GRC & FinCrime Prevention Awards & Summit',
            'category' => 'Institutional',
            'description' => "The profession's flagship awards and summit — now in its 7th annual edition, staged across two global editions in 2026: London on 6 November and Nairobi on 20 November, with six award pillars and 40+ categories.",
            'links' => [
                ['text' => 'Visit Division', 'url' => 'grc-fincrime-prevention-awards-summit'],
                ['text' => 'GRCFinCrimeAwards.com', 'url' => 'grc-fincrime-prevention-awards-summit', 'external' => true],
            ],
        ],
        [
            'id' => '05',
            'title' => 'WGRCFP - Women in GRC & FinCrime Prevention',
            'category' => 'Institutional',
            'description' => 'A worldwide community and structured mentorship programme advancing women in governance, risk, compliance and financial-crime prevention — with measured outcomes, not just good intentions.',
            'links' => [
                ['text' => 'Visit Division', 'url' => 'wgrcfp'],
                ['text' => 'WGRCFP.org', 'url' => 'wgrcfp', 'external' => true],
            ],
        ],
        [
            'id' => '06',
            'title' => 'Portrec Resourcing - Talent & Workforce',
            'category' => 'Enterprise Services',
            'description' => "The group's recruitment and workforce brand — executive search, specialist recruitment and managed outsourcing, with dedicated candidate portals serving markets on multiple continents.",
            'links' => [
                ['text' => 'Visit Division', 'url' => 'portrec-resourcing'],
                ['text' => 'Portrec.co.uk', 'url' => 'portrec-resourcing', 'external' => true],
            ],
        ],
        [
            'id' => '07',
            'title' => 'Tyneside Innovation - Technology & Digital',
            'category' => 'Technology',
            'description' => "The group's technology and digital agency — web and app development, enterprise IT solutions, digital marketing, SEO and brand design, with more than 2,000 clients served across three continents.",
            'links' => [
                ['text' => 'Visit Division', 'url' => 'tyneside-innovation'],
                ['text' => 'TynesideInnovation.com', 'url' => 'tyneside-innovation', 'external' => true],
            ],
        ],
        [
            'id' => '08',
            'title' => 'Procurement & Supply Chain',
            'category' => 'Enterprise Services',
            'description' => 'International sourcing, negotiation and supply-chain management run with the transparency and value discipline of an institutional buyer — from single tenders to full category management.',
            'links' => [['text' => 'Visit Division', 'url' => 'procurement-supply-chain']],
        ],
        [
            'id' => '09',
            'title' => 'Real Estate & Property Development',
            'category' => 'Enterprise Services',
            'description' => 'Development, investment and asset management across residential and commercial portfolios — pairing high-growth markets with institutional discipline and independently verified diligence.',
            'links' => [['text' => 'Visit Division', 'url' => '#']],
        ],
        [
            'id' => '10',
            'title' => 'Facilities & Infrastructure Management',
            'category' => 'Enterprise Services',
            'description' => 'Integrated facilities management for estates, offices and operational sites — keeping mission-critical environments running safely, efficiently and to a single global standard.',
            'links' => [['text' => 'Visit Division', 'url' => 'facilities-infrastructure-management']],
        ],
        [
            'id' => '11',
            'title' => 'Tyneprints - Print & Brand Production',
            'category' => 'Enterprise Services',
            'description' => "The group's print and brand-production house — an online print platform delivering business stationery, large-format signage, corporate gifts and event collateral to homes and businesses, with instant quotes and doorstep delivery.",
            'links' => [
                ['text' => 'Visit Division', 'url' => 'tyneprints'],
                ['text' => 'Tyneprints.com', 'url' => 'tyneprints', 'external' => true],
            ],
        ],
    ];
};
?>

<div>
    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-gray-950">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div class="max-w-2xl">
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                    <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                        The Group Register
                    </span>
                </div>

                <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                    Eleven lines of business, one register.
                </h2>

                <p class="mt-4 max-w-lg text-sm leading-relaxed text-[#1e3a5f]/80 dark:text-gray-400">
                    Each entry below is an operating company or division of the group. Select an entry to read its
                    remit, or visit the brand directly.
                </p>
            </div>

            {{-- Register list --}}
            <ul class="mt-10 border-t border-gray-300 dark:border-gray-700">
                @foreach ($divisions as $division)
                    <li
                        wire:key="division-{{ $division['id'] }}"
                        class="group border-b border-gray-300 transition-colors duration-300 hover:bg-white dark:border-gray-700 dark:hover:bg-gray-900"
                    >
                        <div class="grid grid-cols-12 items-center gap-x-4 gap-y-3 px-1 py-5 sm:px-3">

                            {{-- Index --}}
                            <div class="col-span-12 sm:col-span-1">
                                <span class="font-serif text-[11px] font-semibold tracking-wider text-[#c41e3a] dark:text-[#ef4565]">
                                    M.{{ $division['id'] }}
                                </span>
                            </div>

                            {{-- Category + title --}}
                            <div class="col-span-12 sm:col-span-7">
                                <span class="inline-block rounded-full border border-gray-300 px-2.5 py-0.5 text-[9px] font-medium uppercase tracking-[0.15em] text-gray-500 dark:border-gray-600 dark:text-gray-400">
                                    {{ $division['category'] }}
                                </span>

                                <h3 class="mt-1.5 font-serif text-lg font-semibold leading-snug text-[#1e3a5f] transition-colors duration-300 group-hover:text-[#c41e3a] dark:text-gray-50 dark:group-hover:text-[#ef4565] lg:text-xl">
                                    {{ $division['title'] }}
                                </h3>
                            </div>

                            {{-- Links --}}
                            <div class="col-span-12 flex flex-col items-start gap-1.5 sm:col-span-4 sm:items-end sm:pr-4">
                                @foreach ($division['links'] as $link)
                                    <a
                                        href="{{ $link['url'] === '#' ? '#' : url($link['url']) }}"
                                        wire:navigate
                                        class="group/link inline-flex items-center gap-1 text-[10px] font-bold uppercase tracking-[0.15em] text-[#c41e3a] transition-colors hover:text-[#8f1429] focus:outline-none focus-visible:underline dark:text-[#ef4565] dark:hover:text-[#ff8da1]"
                                    >
                                        {{ $link['text'] }}

                                        @if (! empty($link['external']))
                                            <svg class="h-2.5 w-2.5 transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        @else
                                            <svg class="h-2.5 w-2.5 transition-transform duration-200 group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>