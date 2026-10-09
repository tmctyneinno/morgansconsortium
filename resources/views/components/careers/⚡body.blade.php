<?php

use Livewire\Component;

new class extends Component
{
    public array $intro = [
        'People join THE MORGANS for a role and stay for the group. An analyst at OysterChecks moves into advisory; a producer on the Awards builds programmes for the Institute; an engineer at Tyneside Innovation ships platforms used by three other divisions.',
        'We hire in our offices in Lagos, London and New York, staff engagements across five regions, and develop everyone against the same standard — with mentorship, sponsored certification and genuine mobility between businesses and continents.',
    ];

    public array $stats = [
        ['number' => '11', 'label' => 'Businesses to grow across'],
        ['number' => '3',  'label' => 'Offices hiring'],
        ['number' => '5',  'label' => 'Regions of engagement'],
        ['number' => '1',  'label' => 'Standard everywhere'],
    ];

    public array $features = [
        [
            'label' => 'Grow',
            'title' => 'Sponsored development',
            'description' => "Certification pathways and places on the group's own executive programmes.",
        ],
        [
            'label' => 'Move',
            'title' => 'Mobility by design',
            'description' => 'Structured moves between divisions and regions as your career develops.',
        ],
        [
            'label' => 'Matter',
            'title' => 'Work that lands',
            'description' => 'Client work that reaches boards, regulators and communities — not the bottom of a drawer.',
        ],
    ];

    public array $steps = [
        [
            'label' => '1. Apply',
            'title' => 'Via Portrec Resourcing',
            'description' => "Roles across the group are advertised through Portrec, the group's own talent brand.",
        ],
        [
            'label' => '2. Verify',
            'title' => 'Screened via OysterChecks',
            'description' => "Every candidate is screened through the group's own platform — fast, fair and to one standard.",
        ],
        [
            'label' => '3. Meet',
            'title' => 'Panel & offer',
            'description' => 'Structured interviews with the hiring division, a group-level panel for senior roles, and a clear offer.',
        ],
        [
            'label' => '4. Grow',
            'title' => 'Across the group',
            'description' => 'Onboarding, a mentor, sponsored certification — and eleven businesses to build a career across.',
        ],
    ];
};
?>

<div>
    {{-- ========================================== --}}
    {{-- WORKING HERE --}}
    {{-- ========================================== --}}
    <section id="working-here" class="scroll-mt-28 bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="grid gap-10 lg:grid-cols-2 lg:gap-16">
                <div>
                    <div class="flex items-center gap-4">
                        <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                        <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                            Working Here
                        </span>
                    </div>

                    <h2 class="mt-3 font-serif text-3xl font-bold leading-[1.2] tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                        Careers that cross borders — and businesses.
                    </h2>
                </div>

                <div class="space-y-5 text-[14px] leading-relaxed text-[#1e3a5f]/80 dark:text-gray-300 lg:pt-1">
                    @foreach ($intro as $paragraph)
                        <p wire:key="intro-{{ $loop->index }}">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>

            {{-- Stats --}}
            <dl class="mt-12 grid grid-cols-2 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-4">
                @foreach ($stats as $stat)
                    <div wire:key="stat-{{ $loop->index }}" class="bg-white px-5 py-6 dark:bg-[#050a14]">
                        <dd class="font-serif text-4xl font-semibold text-[#1e3a5f] dark:text-gray-50">
                            {{ $stat['number'] }}
                        </dd>
                        <dt class="mt-4 text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f]/80 dark:text-gray-400">
                            {{ $stat['label'] }}
                        </dt>
                    </div>
                @endforeach
            </dl>

            {{-- Features --}}
            <div class="mt-8 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-3">
                @foreach ($features as $feature)
                    <div
                        wire:key="feature-{{ $loop->index }}"
                        class="group bg-white px-5 pb-8 pt-5 transition-colors duration-300 hover:bg-gray-50 dark:bg-[#050a14] dark:hover:bg-gray-900"
                    >
                        <span class="font-serif text-[11px] font-medium uppercase italic tracking-[0.15em] text-[#c41e3a] dark:text-[#ef4565]">
                            {{ $feature['label'] }}
                        </span>

                        <h3 class="mt-4 font-serif text-lg font-bold text-[#1e3a5f] transition-colors duration-300 group-hover:text-[#c41e3a] dark:text-gray-50 dark:group-hover:text-[#ef4565]">
                            {{ $feature['title'] }}
                        </h3>

                        <p class="mt-3 text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- HOW HIRING WORKS --}}
    {{-- ========================================== --}}
    <section id="hiring-process" class="scroll-mt-28 bg-[#faf9f6] transition-colors duration-300 dark:bg-[#080f1e]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    How Hiring Works
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                Four steps, no mystery.
            </h2>

            <ol class="mt-10 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($steps as $step)
                    <li
                        wire:key="step-{{ $loop->index }}"
                        class="bg-[#faf9f6] px-5 pb-8 pt-5 transition-colors duration-300 hover:bg-white dark:bg-[#080f1e] dark:hover:bg-[#0b1526]"
                    >
                        <span class="font-serif text-[11px] italic text-[#c41e3a] dark:text-[#ef4565]">
                            {{ $step['label'] }}
                        </span>

                        <h3 class="mt-4 font-serif text-base font-bold leading-snug text-[#1e3a5f] dark:text-gray-50">
                            {{ $step['title'] }}
                        </h3>

                        <p class="mt-3 text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $step['description'] }}
                        </p>
                    </li>
                @endforeach
            </ol>

            {{-- Actions --}}
            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a
                    href="{{ route('connect') }}"
                    wire:navigate
                    class="group inline-flex items-center justify-between gap-6 border border-gray-400 bg-white px-8 py-3.5 text-[10px] font-bold uppercase tracking-[0.2em] text-[#1e3a5f] transition-colors hover:border-[#1e3a5f] hover:bg-[#1e3a5f] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#c41e3a] dark:border-gray-600 dark:bg-transparent dark:text-gray-100 dark:hover:border-white dark:hover:bg-white dark:hover:text-[#1e3a5f]"
                >
                    Register your interest
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>

                <a
                    href="https://portrec.ng/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group inline-flex items-center justify-between gap-6 border border-gray-400 bg-white px-8 py-3.5 text-[10px] font-bold uppercase tracking-[0.2em] text-[#1e3a5f] transition-colors hover:border-[#1e3a5f] hover:bg-[#1e3a5f] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#c41e3a] dark:border-gray-600 dark:bg-transparent dark:text-gray-100 dark:hover:border-white dark:hover:bg-white dark:hover:text-[#1e3a5f]"
                >
                    Openings via Portrec
                    <svg class="h-3 w-3 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- CLOSING QUOTE --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-14 sm:px-6 lg:px-8 lg:py-16">
            <figure class="border-l-[3px] border-[#b01c34] py-1 pl-8 dark:border-[#ef4565]">
                <blockquote class="max-w-lg font-serif text-3xl italic leading-[1.25] text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                    People join THE MORGANS for a role. They stay for the group.
                </blockquote>
                <figcaption class="mt-6 text-xs font-medium uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400">
                    Careers at the group
                </figcaption>
            </figure>
        </div>
    </section>
</div>