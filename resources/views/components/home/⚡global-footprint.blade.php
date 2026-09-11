<?php

use Livewire\Component;

new class extends Component
{
    public $regions = [
        [
            'name' => 'Africa',
            'cities' => [
                ['name' => 'Lagos', 'is_primary' => true, 'label' => 'office'],
                ['name' => 'Nairobi', 'is_primary' => false],
                ['name' => 'Accra', 'is_primary' => false],
                ['name' => 'Johannesburg', 'is_primary' => false],
            ]
        ],
        [
            'name' => 'Europe',
            'cities' => [
                ['name' => 'London', 'is_primary' => true, 'label' => 'office'],
                ['name' => 'Ipswich', 'is_primary' => false],
                ['name' => 'Cork', 'is_primary' => false],
                ['name' => 'Frankfurt', 'is_primary' => false],
            ]
        ],
        [
            'name' => 'America',
            'cities' => [
                ['name' => 'New York', 'is_primary' => true, 'label' => 'US Office'],
                ['name' => 'Toronto', 'is_primary' => false],
                ['name' => 'Houston', 'is_primary' => false],
            ]
        ],
        [
            'name' => 'Middle East',
            'cities' => [
                ['name' => 'Dubai', 'is_primary' => false],
                ['name' => 'Abu Dhabi', 'is_primary' => false],
                ['name' => 'Riyadh', 'is_primary' => false],
            ]
        ],
        [
            'name' => 'Asia',
            'cities' => [
                ['name' => 'Singapore', 'is_primary' => false],
                ['name' => 'Mumbai', 'is_primary' => false],
                ['name' => 'Hong Kong', 'is_primary' => false],
            ]
        ],
    ];
};
?>

<div>
    <section class="py-20 lg:py-25 bg-white dark:bg-gray-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Global Footprint</span>
                </div>
                
                <h2 class="text-4xl lg:text-4xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6 leading-tight">
                    Offices on three continents. Working on five.
                </h2>
                
                <p class="text-lg text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed max-w-3xl">
                    Group offices anchor each region, with engagement teams, partner networks and screening coverage extending across borders wherever clients need us.
                </p>
            </div>

            {{-- Regions Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 border border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden">
                
                @foreach($regions as $index => $region)
                    <div class="p-7 lg:p-8 {{ $index < count($regions) - 1 ? 'border-r border-gray-200 dark:border-gray-800' : '' }} {{ $index < 3 ? 'md:border-b lg:border-b-0' : '' }} hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors duration-300">
                        
                        {{-- Region Name --}}
                        <h3 class="text-2xl lg:text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6">
                            {{ $region['name'] }}
                        </h3>

                        {{-- Cities List --}}
                        <ul class="space-y-3">
                            @foreach($region['cities'] as $city)
                                <li class="flex items-center">
                                    @if($city['is_primary'])
                                        <span class="text-[#c41e3a] font-semibold text-sm lg:text-base">
                                            {{ $city['name'] }}
                                            <span class="text-[#c41e3a]/70 text-xs lg:text-sm">- {{ $city['label'] }}</span>
                                        </span>
                                    @else
                                        <span class="text-[#1e3a5f]/80 dark:text-gray-300 text-sm lg:text-base">
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
