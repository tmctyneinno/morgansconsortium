<?php

use Livewire\Component;

new class extends Component
{
    public array $intro = [
        'Markets are built by companies; professions are built by institutions. THE MORGANS invests in both.',
        "The bodies below operate with their own governance, faculties and memberships — supported by the group's infrastructure and held to its standard. Together they educate thousands of practitioners, convene the profession's flagship events on two continents, and open doors for those the profession has historically left waiting outside.",
    ];

    public array $bodies = [
        [
            'label' => 'IGRCFP',
            'title' => 'The International Institute of Governance, Risk, Compliance & Financial Crime Prevention',
            'description' => "Professional standards, international fellowships and the IGRCFP Scholarship Programme — building the profession's next generation across every region the group serves.",
            'link' => ['text' => 'IGRCFP.org', 'url' => '#'],
        ],
        [
            'label' => 'WGRCFP',
            'title' => 'Women in GRC & Financial Crime Prevention',
            'description' => 'A global community and structured mentorship programme with measured outcomes — readiness assessment, matched pairing and a nine-month progress framework.',
            'link' => ['text' => 'WGRCFP.org', 'url' => '#'],
        ],
        [
            'label' => 'The Awards',
            'title' => 'GRC & FinCrime Prevention Awards & Summit',
            'description' => "The profession's flagship convening, in association with the IGRCFP — 7th annual edition, six pillars, 40+ categories, staged across London and Nairobi in 2026.",
            'link' => ['text' => 'GRCFinCrimeAwards.com', 'url' => '#'],
        ],
        [
            'label' => 'The Institute',
            'title' => 'Executive Education & Professional Development',
            'description' => 'Flagship executive programmes on insurance governance, financial integrity and enterprise resilience, delivered to international cohorts in person and online.',
            'link' => ['text' => 'TMCInstitute.com', 'url' => '#'],
        ],
    ];

    public array $stats = [
        ['value' => '7th', 'suffix' => '',  'label' => 'Annual awards edition'],
        ['value' => '2',   'suffix' => '',  'label' => 'Global editions in 2026'],
        ['value' => '6',   'suffix' => '',  'label' => 'Award pillars'],
        ['value' => '40',  'suffix' => '+', 'label' => 'Categories'],
    ];

    public array $editions = [
        [
            'tag' => 'Save the date · 6 November 2026',
            'title' => 'Europe Edition — London',
            'description' => 'Summit and black-tie gala at the London Marriott — convening regulators, bankers and compliance leaders from across Europe.',
            'link' => ['text' => 'View Europe Edition', 'url' => '#'],
        ],
        [
            'tag' => 'Voting live · 20 November 2026',
            'title' => 'Africa Edition — Nairobi',
            'description' => "Summit and gala at the Nairobi Marriott, Upper Hill — the continent's flagship convening for GRC and financial-crime prevention.",
            'link' => ['text' => 'View Africa Edition', 'url' => '#'],
        ],
    ];

    public string $principle = 'Markets are built by companies. Professions are built by institutions. We invest in both.';

    public array $routes = [
        [
            'label' => '1. Join',
            'title' => 'Membership & Fellowship',
            'description' => 'Professional and international fellowship routes through the IGRCFP.',
        ],
        [
            'label' => '2. Nominate',
            'title' => 'Awards Nominations',
            'description' => 'Put individuals and organisations forward across six pillars and 40+ categories.',
        ],
        [
            'label' => '3. Mentor',
            'title' => 'WGRCFP Programme',
            'description' => 'Give nine months as a matched mentor — or apply as a mentee — through the measured programme.',
        ],
        [
            'label' => '4. Sponsor',
            'title' => 'Partnership',
            'description' => "Align your brand with the profession's agenda across two global editions.",
        ],
    ];
};
?>

<div>
    {{-- ========================================== --}}
    {{-- WHY INSTITUTIONS --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-14 sm:px-6 lg:px-8 lg:py-16">
            <div class="grid gap-8 lg:grid-cols-2 lg:gap-16">
                <div>
                    <div class="flex items-center gap-4">
                        <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                        <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                            Why Institutions?
                        </span>
                    </div>
                    <h2 class="mt-3 font-serif text-3xl font-bold leading-[1.2] tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                        A group that builds more than businesses.
                    </h2>
                </div>

                <div class="space-y-4 text-[13px] leading-relaxed text-[#1e3a5f]/80 dark:text-gray-300">
                    @foreach ($intro as $paragraph)
                        <p wire:key="intro-{{ $loop->index }}">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- THE BODIES + AWARDS + CALENDAR --}}
    {{-- ========================================== --}}
    <section class="bg-[#0C1832] transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#e0334f]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#e0334f]">The Bodies</span>
            </div>
            <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-white lg:text-4xl">
                Four institutions, one purpose.
            </h2>

            {{-- Bodies --}}
            <div class="mt-8 grid grid-cols-1 gap-px border border-white/20 bg-white/20 dark:border-white/10 dark:bg-white/10 md:grid-cols-2">
                @foreach ($bodies as $body)
                    <div
                        wire:key="body-{{ $loop->index }}"
                        class="group flex flex-col bg-[#0C1832] px-6 py-6 transition-colors duration-300 hover:bg-[#10204a] dark:bg-[#050a14] dark:hover:bg-[#0a1628]"
                    >
                        <span class="font-serif text-[11px] font-medium uppercase italic tracking-[0.15em] text-[#e0334f]">
                            {{ $body['label'] }}
                        </span>
                        <h3 class="mt-4 font-serif text-base font-semibold leading-snug text-white">
                            {{ $body['title'] }}
                        </h3>
                        <p class="mt-3 flex-1 text-[12px] leading-relaxed text-gray-300 dark:text-gray-400">
                            {{ $body['description'] }}
                        </p>
                        <a
                            href="{{ $body['link']['url'] }}"
                            class="group/link mt-5 inline-flex items-center gap-1.5 self-start text-[10px] font-bold uppercase tracking-[0.15em] text-[#e0334f] transition-colors hover:text-[#ff6b84] focus:outline-none focus-visible:underline"
                        >
                            {{ $body['link']['text'] }}
                            <svg class="h-2.5 w-2.5 transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Awards stats --}}
            <dl class="mt-5 grid grid-cols-2 gap-px border border-white/20 bg-white/20 dark:border-white/10 dark:bg-white/10 md:grid-cols-4">
                @foreach ($stats as $stat)
                    <div wire:key="stat-{{ $loop->index }}" class="bg-[#0C1832] px-5 py-5 dark:bg-[#050a14]">
                        <dd class="font-serif text-3xl font-semibold text-white">
                            {{ $stat['value'] }}@if ($stat['suffix'] !== '')<span class="ml-0.5 text-xl font-normal">{{ $stat['suffix'] }}</span>@endif
                        </dd>
                        <dt class="mt-3 text-[9px] font-bold uppercase tracking-[0.15em] text-white">
                            {{ $stat['label'] }}
                        </dt>
                    </div>
                @endforeach
            </dl>

            {{-- Calendar --}}
            <div class="mt-16">
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#e0334f]"></span>
                    <span class="text-xs font-medium uppercase italic tracking-wide text-[#e0334f]">The 2026 Calendar</span>
                </div>
                <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-white lg:text-4xl">
                    Two Editions. One Global Standard.
                </h2>

                <div class="mt-8 grid gap-5 md:grid-cols-2">
                    @foreach ($editions as $edition)
                        <article
                            wire:key="edition-{{ $loop->index }}"
                            class="rounded-md border border-[#c41e3a]/30 bg-gradient-to-br from-[#c41e3a]/20 via-[#c41e3a]/5 to-transparent p-5 transition-colors duration-300 hover:border-[#c41e3a]/60 dark:border-[#c41e3a]/25 dark:from-[#c41e3a]/15"
                        >
                            <span class="block text-[9px] font-bold uppercase tracking-[0.15em] text-[#e0334f]">
                                {{ $edition['tag'] }}
                            </span>
                            <h3 class="mt-4 font-serif text-lg font-semibold text-white">
                                {{ $edition['title'] }}
                            </h3>
                            <p class="mt-2 text-[12px] leading-relaxed text-gray-300 dark:text-gray-400">
                                {{ $edition['description'] }}
                            </p>
                            <a
                                href="{{ $edition['link']['url'] }}"
                                class="group mt-6 inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-[0.15em] text-gray-300 transition-colors hover:text-white focus:outline-none focus-visible:underline"
                            >
                                {{ $edition['link']['text'] }}
                                <svg class="h-2.5 w-2.5 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- PRINCIPLE --}}
    {{-- ========================================== --}}
    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-[#0a1424]">
        <div class="mx-auto max-w-5xl px-4 py-12 sm:px-6 lg:px-8 lg:py-14">
            <figure class="border-l-[3px] border-[#b01c34] py-1 pl-8 dark:border-[#ef4565]">
                <blockquote class="max-w-lg font-serif text-2xl italic leading-[1.3] text-[#1e3a5f] dark:text-gray-50 lg:text-3xl">
                    {{ $principle }}
                </blockquote>
                <figcaption class="mt-4 text-[10px] font-medium uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400">
                    Why the group convenes
                </figcaption>
            </figure>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- GET INVOLVED --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    Get Involved
                </span>
            </div>
            <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                Join, Nominate, Mentor, Sponsor.
            </h2>
            <p class="mt-4 max-w-3xl text-[13px] leading-relaxed text-[#1e3a5f]/80 dark:text-gray-400">
                Membership, fellowship, scholarship and partnership routes are open across all four bodies. Tell us
                where you'd like to contribute and we'll connect you with the right secretariat.
            </p>

            <div class="mt-8 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($routes as $route)
                    <div
                        wire:key="route-{{ $loop->index }}"
                        class="bg-white px-5 pb-8 pt-5 transition-colors duration-300 hover:bg-gray-50 dark:bg-[#050a14] dark:hover:bg-gray-900"
                    >
                        <span class="font-serif text-[11px] italic text-[#c41e3a] dark:text-[#ef4565]">
                            {{ $route['label'] }}
                        </span>
                        <h3 class="mt-4 font-serif text-base font-bold leading-snug text-[#1e3a5f] dark:text-gray-50">
                            {{ $route['title'] }}
                        </h3>
                        <p class="mt-3 text-[11px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $route['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a
                    href="{{ route('connect') }}"
                    wire:navigate
                    class="group inline-flex items-center justify-between gap-6 border border-gray-400 bg-white px-6 py-3 text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f] transition-colors hover:border-[#1e3a5f] hover:bg-[#1e3a5f] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#c41e3a] dark:border-gray-600 dark:bg-transparent dark:text-gray-100 dark:hover:border-white dark:hover:bg-white dark:hover:text-[#1e3a5f]"
                >
                    Enquire about membership
                    <svg class="h-3 w-3 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a
                    href="#"
                    class="group inline-flex items-center justify-between gap-6 border border-gray-400 bg-white px-6 py-3 text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f] transition-colors hover:border-[#1e3a5f] hover:bg-[#1e3a5f] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#c41e3a] dark:border-gray-600 dark:bg-transparent dark:text-gray-100 dark:hover:border-white dark:hover:bg-white dark:hover:text-[#1e3a5f]"
                >
                    The mentorship programme
                    <svg class="h-3 w-3 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>