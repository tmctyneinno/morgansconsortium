<?php

use Livewire\Component;

new class extends Component
{
    public array $regions = [
        [
            'name' => 'Africa',
            'cities' => [
                ['name' => 'Lagos', 'is_primary' => true, 'label' => 'office'],
                ['name' => 'Nairobi', 'is_primary' => false],
                ['name' => 'Accra', 'is_primary' => false],
                ['name' => 'Johannesburg', 'is_primary' => false],
            ],
        ],
        [
            'name' => 'Europe',
            'cities' => [
                ['name' => 'London', 'is_primary' => true, 'label' => 'office'],
                ['name' => 'Ipswich', 'is_primary' => false],
                ['name' => 'Cork', 'is_primary' => false],
                ['name' => 'Frankfurt', 'is_primary' => false],
            ],
        ],
        [
            'name' => 'America',
            'cities' => [
                ['name' => 'New York', 'is_primary' => true, 'label' => 'US Office'],
                ['name' => 'Toronto', 'is_primary' => false],
                ['name' => 'Houston', 'is_primary' => false],
            ],
        ],
        [
            'name' => 'Middle East',
            'cities' => [
                ['name' => 'Dubai', 'is_primary' => false],
                ['name' => 'Abu Dhabi', 'is_primary' => false],
                ['name' => 'Riyadh', 'is_primary' => false],
            ],
        ],
        [
            'name' => 'Asia',
            'cities' => [
                ['name' => 'Singapore', 'is_primary' => false],
                ['name' => 'Mumbai', 'is_primary' => false],
                ['name' => 'Hong Kong', 'is_primary' => false],
            ],
        ],
    ];
};
?>

<div>
    <section class="bg-white transition-colors duration-300 dark:bg-gray-950">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div class="max-w-3xl">
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                    <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                        Global Footprint
                    </span>
                </div>

                <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                    Offices on three continents. Working on five.
                </h2>

                <p class="mt-4 max-w-xl text-sm leading-relaxed text-[#1e3a5f]/80 dark:text-gray-400">
                    Group offices anchor each region, with engagement teams, partner networks and screening coverage
                    extending across borders wherever clients need us.
                </p>
            </div>

            {{-- Regions grid (1px gaps over a tinted background draw the borders at every breakpoint) --}}
            <div class="mt-12 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-2 lg:grid-cols-5">
                @foreach ($regions as $region)
                    <div
                        wire:key="region-{{ $loop->index }}"
                        class="p-6 transition-colors duration-300 hover:bg-gray-50 dark:hover:bg-gray-900 md:last:col-span-2 lg:last:col-span-1
                            {{ $loop->odd ? 'bg-white dark:bg-gray-950' : 'bg-[#faf9f6] dark:bg-gray-900/60' }}"
                    >
                        <h3 class="font-serif text-xl font-bold text-[#1e3a5f] dark:text-gray-50">
                            {{ $region['name'] }}
                        </h3>

                        <ul class="mt-4 space-y-3 text-[13px]">
                            @foreach ($region['cities'] as $city)
                                <li>
                                    @if ($city['is_primary'])
                                        <span class="font-medium text-[#c41e3a] dark:text-[#ef4565]">
                                            {{ $city['name'] }}
                                            @if (! empty($city['label']))
                                                <span class="font-normal">- {{ $city['label'] }}</span>
                                            @endif
                                        </span>
                                    @else
                                        <span class="text-[#1e3a5f]/90 dark:text-gray-300">
                                            {{ $city['name'] }}
                                        </span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>