<?php

use Livewire\Component;

new class extends Component
{
    public $values = [
        [
            'title' => 'Integrity, Absolutely',
            'description' => "We advise the world's institutions on integrity. We hold ourselves to a standard we would be willing to audit."
        ],
        [
            'title' => 'Independence with accountability',
            'description' => "Each company runs on its own strength — and answers to the group's governance for how it does so."
        ],
        [
            'title' => 'Excellence, everywhere equally',
            'description' => 'The same standard in Lagos as in London, in Nairobi as in New York. Geography is never an excuse.'
        ],
        [
            'title' => 'People before positions',
            'description' => 'We develop practitioners, mentor the next generation and widen access to every profession we touch.'
        ],
    ];
};
?>

<div>
    <section class="py-15 lg:py-25 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Strength & Values</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                    What Every Group Company Answers to
                </h2>
            </div>

            {{-- Values Grid --}}
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                
                @foreach($values as $value)
                    <div class="flex items-start space-x-6 group">
                        
                        {{-- Red Vertical Line --}}
                        <div class="hidden sm:block w-1 bg-[#c41e3a] self-stretch min-h-[80px] rounded-sm flex-shrink-0 transition-colors duration-300"></div>

                        {{-- Content --}}
                        <div class="space-y-3 flex-1">
                            <h3 class="text-xl lg:text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-snug group-hover:text-[#c41e3a] dark:group-hover:text-[#c41e3a] transition-colors duration-300">
                                {{ $value['title'] }}
                            </h3>
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 leading-relaxed text-sm lg:text-base">
                                {{ $value['description'] }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>