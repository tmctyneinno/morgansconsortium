<?php

use Livewire\Component;

new class extends Component
{
    public $steps = [
        [
            'number' => '1',
            'label' => 'Apply',
            'title' => 'Via Portrec Resourcing',
            'description' => 'Roles across the group are advertised through Portrec, the group\'s own talent brand.'
        ],
        [
            'number' => '2',
            'label' => 'Verify',
            'title' => 'Screened via OysterChecks',
            'description' => 'Every candidate is screened through the group\'s own platform — fast, fair and to one standard.'
        ],
        [
            'number' => '3',
            'label' => 'Meet',
            'title' => 'Panel & offer',
            'description' => 'Structured interviews with the hiring division, a group-level panel for senior roles, and a clear offer.'
        ],

        [
            'number' => '4',
            'label' => 'Grow',
            'title' => 'Across the group',
            'description' => 'Onboarding, a mentor, sponsored certification — and eleven businesses to build a career across.'
        ],
    ];
};
?>

<div> 
    <section id="hiring-process" class="scroll-mt-32 py-10 lg:py-25 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-12 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">How Hiring Works</span>
                </div>
                
                <h2 class="text-4xl lg:text-5xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                    Four steps, no mystery.
                </h2>
            </div>

            {{-- Steps Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden mb-12">
                
                @foreach($steps as $index => $step)
                    <div class="p-6 lg:p-5 {{ $index < 3 ? 'border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-800' : '' }} {{ $index < 2 ? 'md:border-b lg:border-b-0' : '' }} hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300 group">
                        
                        {{-- Red Number & Label --}}
                        <span class="block text-[#c41e3a] italic font-serif text-sm mb-4">
                            {{ $step['number'] }}. {{ $step['label'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-lg font-serif font-bold text-[#1e3a5f] dark:text-white mb-4 group-hover:text-[#c41e3a] dark:group-hover:text-[#c41e3a] transition-colors duration-300">
                            {{ $step['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                            {{ $step['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 mb-24">
                <a 
                    href="#" 
                    class="inline-flex items-center justify-center px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase text-[#1e3a5f] dark:text-white border border-[#1e3a5f] dark:border-white rounded-sm hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#050a14] transition-all duration-200 group"
                >
                    Register Your Interest
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                
                <a 
                    href="https://portrec.ng/" 
                    class="inline-flex items-center justify-center px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase text-[#1e3a5f] dark:text-white border border-[#1e3a5f] dark:border-white rounded-sm hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#050a14] transition-all duration-200 group"
                >
                    Openings Via Portrec
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

            {{-- Closing Quote Section --}}
            <div class="flex items-start space-x-8 lg:space-x-12 max-w-5xl pt-8 border-t border-gray-200 dark:border-gray-800">
                
                {{-- Red Vertical Line --}}
                <div class="hidden sm:block w-1.5 bg-[#c41e3a] self-stretch min-h-[100px] rounded-sm flex-shrink-0"></div>

                {{-- Content --}}
                <div class="space-y-8">
                    <blockquote class="text-2xl lg:text-2xl xl:text-3xl font-serif italic text-[#1e3a5f] dark:text-white leading-snug">
                        People join THE MORGANS for a role. They stay for the group.
                    </blockquote>
                    
                    <cite class="block not-italic text-xs lg:text-sm font-bold tracking-[0.2em] uppercase text-[#1e3a5f]/60 dark:text-gray-400">
                        Careers At The Group
                    </cite>
                </div>

            </div>

        </div>
    </section>
</div>
