<?php

use Livewire\Component;

new class extends Component
{
    public string $intro = 'The group is led by an experienced executive team and overseen by an Advisory Council drawn from senior practitioners, regulators and academics across its markets. The Council reviews group strategy, upholds professional standards across all eleven lines of business, and holds each operating company to the same institutional bar.';

    public array $bodies = [
        [
            'label' => 'Executive',
            'title' => 'Group Executive Leadership',
            'description' => 'Sets group strategy, allocates capital across the eleven lines of business and leads flagship client relationships across regions.',
        ],
        [
            'label' => 'Council',
            'title' => 'The Advisory Council',
            'description' => "Independent senior figures who review standards, governance and direction — the group's conscience as much as its counsel.",
        ],
    ];

    public array $stats = [
        ['value' => '11',   'label' => 'Companies, one standard'],
        ['value' => '2',    'label' => 'Tiers of oversight'],
        ['value' => '100%', 'label' => 'Council independence'],
        ['value' => '0',    'label' => 'Exceptions tolerated'],
    ];
};
?>

<div>
    <section class="bg-[#0C1832] transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#e0334f]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#e0334f]">
                    Leadership &amp; Governance
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-white lg:text-4xl">
                Governed, not merely managed.
            </h2>

            <p class="mt-5 max-w-4xl text-sm leading-relaxed text-gray-300 dark:text-gray-400">
                {{ $intro }}
            </p>

            {{-- Governing bodies (1px gaps over a tinted background draw the borders) --}}
            <div class="mt-8 grid grid-cols-1 gap-px border border-white/20 bg-white/20 dark:border-white/10 dark:bg-white/10 md:grid-cols-2">
                @foreach ($bodies as $body)
                    <div
                        wire:key="body-{{ $loop->index }}"
                        class="bg-[#0C1832] px-6 py-6 transition-colors duration-300 hover:bg-[#10204a] dark:bg-[#050a14] dark:hover:bg-[#0a1628]"
                    >
                        <span class="font-serif text-[11px] font-medium uppercase italic tracking-[0.2em] text-[#e0334f]">
                            {{ $body['label'] }}
                        </span>

                        <h3 class="mt-4 font-serif text-lg font-semibold text-white">
                            {{ $body['title'] }}
                        </h3>

                        <p class="mt-3 max-w-md text-[13px] leading-relaxed text-gray-300 dark:text-gray-400">
                            {{ $body['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            {{-- Stats --}}
            <dl class="mt-5 grid grid-cols-2 gap-px border border-white/20 bg-white/20 dark:border-white/10 dark:bg-white/10 md:grid-cols-4">
                @foreach ($stats as $stat)
                    <div wire:key="stat-{{ $loop->index }}" class="bg-[#0C1832] px-6 py-6 dark:bg-[#050a14]">
                        <dd class="font-serif text-4xl font-semibold text-white">
                            {{ $stat['value'] }}
                        </dd>
                        <dt class="mt-4 text-[10px] font-bold uppercase tracking-[0.15em] text-white">
                            {{ $stat['label'] }}
                        </dt>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>
</div>