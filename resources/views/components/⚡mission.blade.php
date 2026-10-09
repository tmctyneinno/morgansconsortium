<?php

use Livewire\Component;

new class extends Component
{
    public string $mission = 'To help organisations everywhere discover the pivot points of accelerated performance, growth and profitability — and to build, in every industry we enter, businesses worthy of institutional trust.';

    public array $pillars = [
        [
            'subtitle' => 'Diagnose',
            'title' => 'Find the pivot point',
            'description' => 'Every engagement begins with diagnosis — locating the few changes that compound into outsized results.',
        ],
        [
            'subtitle' => 'Deliver',
            'title' => 'Execute with discipline',
            'description' => 'Customised, rigorous delivery — driving outcomes faster than the market expects, without cutting a single corner.',
        ],
        [
            'subtitle' => 'Endure',
            'title' => 'Build what lasts',
            'description' => 'We build capabilities, institutions and assets designed to outlive the engagement — and often, to outlive us.',
        ],
    ];

    public string $principle = "We advise the world's institutions on integrity. We hold ourselves to a standard we would be willing to audit.";

    public array $values = [
        [
            'title' => 'Integrity, Absolutely',
            'description' => "We advise the world's institutions on integrity. We hold ourselves to a standard we would be willing to audit.",
        ],
        [
            'title' => 'Independence with accountability',
            'description' => "Each company runs on its own strength — and answers to the group's governance for how it does so.",
        ],
        [
            'title' => 'Excellence, everywhere equally',
            'description' => 'The same standard in Lagos as in London, in Nairobi as in New York. Geography is never an excuse.',
        ],
        [
            'title' => 'People before positions',
            'description' => 'We develop practitioners, mentor the next generation and widen access to every profession we touch.',
        ],
    ];
};
?>

<div>
    {{-- ========================================== --}}
    {{-- MISSION --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    Mission
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold uppercase tracking-tight text-[#1e3a5f] dark:text-gray-50">
                Our Mission
            </h2>

            <p class="mt-6 max-w-2xl font-serif text-xl leading-snug text-[#1e3a5f]/90 dark:text-gray-200 lg:text-2xl">
                {{ $mission }}
            </p>

            {{-- Pillars (1px gaps over a tinted background draw the borders) --}}
            <div class="mt-12 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-3">
                @foreach ($pillars as $pillar)
                    <div
                        wire:key="pillar-{{ $loop->index }}"
                        class="bg-white px-6 pb-10 pt-6 transition-colors duration-300 hover:bg-gray-50 dark:bg-[#050a14] dark:hover:bg-gray-900"
                    >
                        <span class="font-serif text-[11px] italic text-[#c41e3a] dark:text-[#ef4565]">
                            {{ $pillar['subtitle'] }}
                        </span>

                        <h3 class="mt-5 font-serif text-lg font-bold text-[#1e3a5f] dark:text-gray-50">
                            {{ $pillar['title'] }}
                        </h3>

                        <p class="mt-3 text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $pillar['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- FIRST PRINCIPLE --}}
    {{-- ========================================== --}}
    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-[#0a1424]">
        <div class="mx-auto max-w-5xl px-4 py-12 sm:px-6 lg:px-8 lg:py-14">
            <figure class="border-l-[3px] border-[#b01c34] py-1 pl-8 dark:border-[#ef4565]">
                <blockquote class="max-w-lg font-serif text-3xl italic leading-[1.25] text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                    {{ $principle }}
                </blockquote>
            </figure>

            <p class="mt-6 pl-9 text-xs font-medium uppercase tracking-[0.15em] text-gray-500 dark:text-gray-400">
                The group&rsquo;s first principle
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- STRENGTH & VALUES --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    Strength &amp; Values
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                What Every Group Company Answers to
            </h2>

            <dl class="mt-10 grid gap-x-12 gap-y-6 md:grid-cols-2">
                @foreach ($values as $value)
                    <div wire:key="value-{{ $loop->index }}" class="border-l-2 border-[#b01c34] pl-5 dark:border-[#ef4565]">
                        <dt class="font-serif text-lg font-semibold text-[#1e3a5f] dark:text-gray-50">
                            {{ $value['title'] }}
                        </dt>
                        <dd class="mt-1.5 max-w-sm text-[13px] leading-relaxed text-[#1e3a5f]/75 dark:text-gray-400">
                            {{ $value['description'] }}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>
</div>