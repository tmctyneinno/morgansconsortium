<?php

use Livewire\Component;

new class extends Component
{
    public array $pillars = [
        [
            'index' => '1. Multi-industry',
            'title' => 'Eleven lines of business',
            'body'  => 'Advisory, risk intelligence, education, events, technology, talent, procurement, property, facilities and brand production — each a business in its own right.',
            'link'  => 'The Group Register',
            'route' => 'group',
        ],
        [
            'index' => '2. Global',
            'title' => 'Four continents, one standard',
            'body'  => 'Offices in Lagos, London and New York anchor operations, partners and client engagements across Africa, Europe, the Middle East, the Americas and Asia.',
            'link'  => 'Our Footprint',
            'route' => 'group',
        ],
        [
            'index' => '3. Institutional',
            'title' => 'Governed, not merely managed',
            'body'  => 'An advisory council and experienced leadership hold every group company to the same standard of integrity and rigour.',
            'link'  => 'Leadership & Council',
            'route' => 'group',
        ],
    ];

    public array $stats = [
        ['value' => '10+', 'label' => 'Years of Experience'],
        ['value' => '3',   'label' => 'Regional Offices'],
        ['value' => '20+', 'label' => 'Global Partners'],
        ['value' => '5',   'label' => 'Continents'],
        ['value' => '11',  'label' => 'Group Businesses'],
    ];
};
?>

<div>
    <section class="bg-white transition-colors duration-300 dark:bg-gray-950">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">

            {{-- Heading & description --}}
            <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-4">
                        <span class="h-[2px] w-14 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                        <span class="text-sm font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                            Who are we?
                        </span>
                    </div>

                    <h2 class="mt-4 font-serif text-4xl font-bold leading-[1.15] tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-[2.6rem]">
                        From consultancy roots to a diversified global group.
                    </h2>
                </div>

                <div class="space-y-5 text-[15px] leading-relaxed text-[#1e3a5f]/80 dark:text-gray-300 lg:col-span-7 lg:pt-3">
                    <p>
                        THE MORGANS began as a consultancy. Today it is a group of independent companies operating
                        eleven distinct lines of business — from advisory and assurance to enterprise technology,
                        real estate, education, global events and workforce solutions.
                    </p>
                    <p>
                        Each company in the group — OysterChecks, Tyneside Innovation, Portrec Resourcing, Tyneprints
                        and the group's institutional bodies among them — runs on its own strength in its own
                        industry. What binds them is a single standard: disciplined governance, uncompromising
                        integrity, and a habit of finding the pivot points where focused change compounds into
                        accelerated performance for our clients — wherever in the world they operate.
                    </p>
                </div>
            </div>

            {{-- Pillars --}}
            <div class="mt-14 grid overflow-hidden border border-gray-300 dark:border-gray-700 md:grid-cols-3">
                @foreach ($pillars as $pillar)
                    <div
                        wire:key="pillar-{{ $loop->index }}"
                        class="group flex flex-col border-gray-300 bg-white p-6 transition-colors duration-300 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-950 dark:hover:bg-gray-900 {{ ! $loop->last ? 'border-b md:border-b-0 md:border-r' : '' }}"
                    >
                        <span class="font-serif text-xs italic text-[#c41e3a] dark:text-[#ef4565]">
                            {{ $pillar['index'] }}
                        </span>

                        <h3 class="mt-5 font-serif text-lg font-bold text-[#1e3a5f] dark:text-gray-50">
                            {{ $pillar['title'] }}
                        </h3>

                        <p class="mt-3 flex-1 text-[13px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $pillar['body'] }}
                        </p>

                        <a
                            href="{{ route($pillar['route']) }}"
                            wire:navigate
                            class="group/link mt-5 inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-[0.15em] text-[#c41e3a] transition-colors hover:text-[#8f1429] focus:outline-none focus-visible:underline dark:text-[#ef4565] dark:hover:text-[#ff8da1]"
                        >
                            {{ $pillar['link'] }}
                            <svg class="h-3 w-3 transition-transform duration-200 group-hover/link:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Stats band --}}
        <div class="border-y border-gray-300 transition-colors duration-300 dark:border-gray-700">
            <dl class="mx-auto grid max-w-5xl grid-cols-2 gap-y-8 px-4 py-10 text-center sm:px-6 md:grid-cols-5 lg:px-8">
                @foreach ($stats as $stat)
                    <div wire:key="stat-{{ $loop->index }}">
                        <dd class="font-serif text-4xl font-semibold text-[#1e3a5f] dark:text-gray-50 lg:text-5xl">
                            {{ $stat['value'] }}
                        </dd>
                        <dt class="mt-2 text-sm text-[#1e3a5f]/80 dark:text-gray-400 lg:text-base">
                            {{ $stat['label'] }}
                        </dt>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>
</div>