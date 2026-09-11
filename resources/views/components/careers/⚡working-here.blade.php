<?php

use Livewire\Component;

new class extends Component
{
   
    public $stats = [
        ['number' => '11', 'label' => 'BUSINESS TO GROW ACROSS'],
        ['number' => '3', 'label' => 'OFFICES HIRING'],
        ['number' => '5', 'label' => 'REGIONS OF ENGAGEMENTS'],
        ['number' => '1', 'label' => 'STANDARD EVERYWHERE'],
    ];

    public $features = [
        [
            'label' => 'GROW',
            'title' => 'Sponsored development',
            'description' => "Certification pathways and places on the group's own executive programmes."
        ],
        [
            'label' => 'MOVE',
            'title' => 'Mobility by design',
            'description' => 'Structured moves between divisions and regions as your career develops.'
        ],
        [
            'label' => 'MATTER',
            'title' => 'Work that lands',
            'description' => 'Client work that reaches boards, regulators and communities — not the bottom of a drawer.'
        ],
    ];
}

?>

<div> 
   <section id="working-here" class="scroll-mt-32 py-20 lg:py-32 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 mb-20">
                
                {{-- Left Side: Heading --}}
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                        <span class="text-[#c41e3a] text-sm font-bold tracking-[0.15em] uppercase">Working Here</span>
                    </div>
                    
                    <h2 class="text-3xl lg:text-4xl xl:text-5xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-[1.1]">
                        Careers that cross borders and businesses.
                    </h2>
                </div>

                {{-- Right Side: Description Text --}}
                <div class="space-y-6 pt-2 lg:pt-4">
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        People join THE MORGANS for a role and stay for the group. An analyst at OysterChecks moves into advisory; a producer on the Awards builds programmes for the Institute; an engineer at Tyneside Innovation ships platforms used by three other divisions.
                    </p>
                    <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed">
                        We hire in our offices in Lagos, London and New York, staff engagements across five regions, and develop everyone against the same standard — with mentorship, sponsored certification and genuine mobility between businesses and continents.
                    </p>
                </div>
            </div>

            {{-- Stats Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden mb-12">
                
                @foreach($stats as $index => $stat)
                    <div class="p-8 lg:p-10 {{ $index < 3 ? 'border-r border-gray-200 dark:border-gray-800' : '' }} bg-white dark:bg-[#050a14] transition-colors duration-300">
                        <div class="text-4xl lg:text-5xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4">
                            {{ $stat['number'] }}
                        </div>
                        <div class="text-xs font-bold tracking-[0.15em] uppercase text-[#1e3a5f]/70 dark:text-gray-400">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Features Grid --}}
            <div class="grid md:grid-cols-3 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                
                @foreach($features as $index => $feature)
                    <div class="p-8 lg:p-10 {{ $index < 2 ? 'border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800' : '' }} bg-white dark:bg-[#050a14] hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300 group">
                        
                        {{-- Red Label --}}
                        <span class="block text-[#c41e3a] italic font-serif text-sm mb-4 tracking-wider">
                            {{ $feature['label'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-xl lg:text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-4 group-hover:text-[#c41e3a] dark:group-hover:text-[#c41e3a] transition-colors duration-300">
                            {{ $feature['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                            {{ $feature['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>

        </div>
    </section>
</div>
