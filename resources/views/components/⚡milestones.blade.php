<?php

use Livewire\Component;

new class extends Component
{
    public array $milestones = [
        [
            'label' => 'The Founding Years',
            'title' => 'A practice built on trust',
            'description' => 'The original advisory practice earns its reputation conducting independent compliance reviews and audits for international banking groups — the standard that still defines the group.',
        ],
        [
            'label' => 'The Technology Era',
            'title' => 'Tyneside Innovation & digital delivery',
            'description' => 'The group builds its own technology and digital agency, taking product-grade engineering to more than two thousand clients — and laying the foundations for its platform businesses.',
        ],
        [
            'label' => '2020',
            'title' => 'The Awards are founded',
            'description' => 'The GRC & Financial Crime Prevention Awards & Summit is founded, convening the profession and recognising excellence across six pillars.',
        ],
        [
            'label' => 'The Platform & Institutions Era',
            'title' => 'OysterChecks, IGRCFP, WGRCFP and the Institute',
            'description' => 'The group launches its unified risk-intelligence platform and stewards the professional institutions that educate, mentor and set standards for practitioners worldwide.',
        ],
        [
            'label' => '2026',
            'title' => 'A global group',
            'description' => 'Offices in Lagos, London and New York anchor eleven lines of business; the Awards stage two global editions — London on 6 November and Nairobi on 20 November.',
        ],
    ];
};
?>

<div>
    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    Milestones
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                How the group took shape.
            </h2>

            {{-- Timeline --}}
            <ol class="relative mt-12 space-y-10">
                {{-- Vertical line, running from the first dot to the end of the last item --}}
                <span class="absolute bottom-0 left-[5px] top-2 w-px bg-[#1e3a5f]/25 dark:bg-gray-700" aria-hidden="true"></span>

                @foreach ($milestones as $milestone)
                    <li wire:key="milestone-{{ $loop->index }}" class="group relative pl-9">
                        {{-- Dot --}}
                        <span
                            class="absolute left-0 top-[3px] z-10 h-[11px] w-[11px] rounded-full bg-[#b01c34] ring-4 ring-[#faf9f6] transition-transform duration-300 group-hover:scale-125 dark:bg-[#ef4565] dark:ring-[#050a14]"
                            aria-hidden="true"
                        ></span>

                        <span class="block text-[10px] font-bold uppercase tracking-[0.15em] text-[#b01c34] dark:text-[#ef4565]">
                            {{ $milestone['label'] }}
                        </span>

                        <h3 class="mt-1.5 font-serif text-xl font-semibold leading-snug text-[#1e3a5f] dark:text-gray-50">
                            {{ $milestone['title'] }}
                        </h3>

                        <p class="mt-2 max-w-xl text-[13px] leading-relaxed text-[#1e3a5f]/70 dark:text-gray-400">
                            {{ $milestone['description'] }}
                        </p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>
</div>