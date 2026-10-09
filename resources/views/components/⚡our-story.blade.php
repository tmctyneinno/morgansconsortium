<?php

use Livewire\Component;

new class extends Component
{
    public array $paragraphs = [
        'THE MORGANS began more than twenty-five years ago as a professional practice serving financial institutions. What followed was not diversification for its own sake, but a pattern: each time clients trusted us with a new problem — screening a counterparty, building a platform, staging a summit, developing a property — we built a business capable of solving it to the same standard.',
        'Today the group operates eleven distinct lines of business across financial services, technology, real estate, education, events and enterprise services. Its companies include OysterChecks, the AI-driven risk and assurance intelligence platform; Tyneside Innovation, the technology and digital agency; Portrec Resourcing, the talent and workforce brand; Tyneprints, the print and brand-production house; and the institutional bodies that convene the global GRC profession.',
        'We are no longer a consultancy. We are a group of companies — and the discipline that built the first practice now governs all eleven.',
    ];

    public array $stats = [
        ['value' => '25', 'suffix' => '+', 'label' => 'Years Serving Clients'],
        ['value' => '11', 'suffix' => '',  'label' => 'Lines of Business'],
        ['value' => '3',  'suffix' => '',  'label' => 'Group Offices'],
        ['value' => '5',  'suffix' => '',  'label' => 'Regions of Operation'],
    ];
};
?>

<div>
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Heading & story --}}
            <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-4">
                        <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                        <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                            Our Story
                        </span>
                    </div>

                    <h2 class="mt-3 font-serif text-3xl font-bold leading-[1.15] tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                        From one practice to a global group.
                    </h2>
                </div>

                <div class="space-y-5 text-[15px] leading-relaxed text-[#1e3a5f]/80 dark:text-gray-300 lg:col-span-7 lg:pt-1">
                    @foreach ($paragraphs as $paragraph)
                        <p wire:key="story-{{ $loop->index }}">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>

            {{-- Stats (1px gaps over a tinted background draw the dividers) --}}
            <dl class="mt-14 grid grid-cols-2 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-4">
                @foreach ($stats as $stat)
                    <div
                        wire:key="stat-{{ $loop->index }}"
                        class="bg-white px-6 py-8 transition-colors duration-300 hover:bg-gray-50 dark:bg-[#050a14] dark:hover:bg-gray-900"
                    >
                        <dd class="font-serif text-4xl font-semibold text-[#1e3a5f] dark:text-gray-50 lg:text-5xl">
                            {{ $stat['value'] }}@if ($stat['suffix'] !== '')<span class="ml-0.5 text-2xl font-normal lg:text-3xl">{{ $stat['suffix'] }}</span>@endif
                        </dd>
                        <dt class="mt-4 text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f]/70 dark:text-gray-400">
                            {{ $stat['label'] }}
                        </dt>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>
</div>