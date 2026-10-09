<?php

use Livewire\Component;

new class extends Component
{
    public array $institutions = [
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
};
?>

<div>
    <section class="bg-[#0f1d35] transition-colors duration-300 dark:bg-[#050d1a]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div>
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#e0334f]"></span>
                    <span class="text-xs font-medium uppercase italic tracking-wide text-[#e0334f]">
                        Institutional Bodies
                    </span>
                </div>

                <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-white lg:text-4xl">
                    The institutions the group convenes.
                </h2>

                <p class="mt-4 max-w-4xl text-sm leading-relaxed text-gray-300 dark:text-gray-400">
                    Beyond its operating companies, THE MORGANS architects and stewards professional institutions that
                    set standards, educate practitioners and convene the global governance, risk, compliance and
                    financial-crime prevention community.
                </p>
            </div>

            {{-- Institution cards (1px gaps over a tinted background draw the borders) --}}
            <div class="mt-10 grid grid-cols-1 gap-px border border-white/20 bg-white/20 md:grid-cols-2 dark:border-white/10 dark:bg-white/10">
                @foreach ($institutions as $institution)
                    <div
                        wire:key="institution-{{ $loop->index }}"
                        class="group flex flex-col bg-[#0f1d35] p-6 transition-colors duration-300 hover:bg-[#14264a] dark:bg-[#050d1a] dark:hover:bg-[#0a1628] lg:p-8"
                    >
                        <span class="font-serif text-xs font-medium uppercase italic tracking-[0.15em] text-[#e0334f]">
                            {{ $institution['label'] }}
                        </span>

                        <h3 class="mt-4 font-serif text-lg font-semibold leading-snug text-white">
                            {{ $institution['title'] }}
                        </h3>

                        <p class="mt-3 flex-1 text-[13px] leading-relaxed text-gray-300 dark:text-gray-400">
                            {{ $institution['description'] }}
                        </p>

                        <a
                            href="{{ $institution['link']['url'] }}"
                            class="group/link mt-6 inline-flex items-center gap-1.5 self-start text-[10px] font-bold uppercase tracking-[0.15em] text-[#e0334f] transition-colors hover:text-[#ff6b84] focus:outline-none focus-visible:underline"
                        >
                            {{ $institution['link']['text'] }}
                            <svg class="h-2.5 w-2.5 transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Awards banner --}}
            <div class="mt-12 rounded-lg border border-[#c41e3a]/30 bg-gradient-to-r from-[#c41e3a]/15 via-[#c41e3a]/5 to-transparent p-6 dark:border-[#c41e3a]/25 dark:from-[#c41e3a]/10 lg:p-8">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div class="max-w-xl">
                        <span class="block text-[10px] font-bold uppercase tracking-[0.2em] text-[#e0334f]">
                            7th Annual &middot; Two Editions &middot; 2026
                        </span>
                        <h3 class="mt-3 font-serif text-xl font-semibold leading-snug text-white lg:text-2xl">
                            GRC & FinCrime Prevention Awards & Summit — London, 6 November &middot; Nairobi, 20 November
                        </h3>
                    </div>

                    <a
                        href="#"
                        class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-md bg-[#b01c34] px-6 py-3 text-[11px] font-bold uppercase tracking-[0.15em] text-white shadow-lg shadow-black/20 transition-all duration-200 hover:bg-[#c41e3a] focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0f1d35] dark:focus-visible:ring-offset-[#050d1a]"
                    >
                        Awards & Summit
                        <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>