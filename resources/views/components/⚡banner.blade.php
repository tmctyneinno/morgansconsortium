<?php

use Livewire\Component;

new class extends Component
{
    public string $leading = '';
    public string $title = '';
    public string $subtitle = '';
    public bool $entryTable = false;
    
    // New properties for the register table
    public string $registerEntry = '';
    public string $category = '';
    public string $brandSite = '';
    public string $brandUrl = '';
};
?>

<div>
    <section class="relative bg-gradient-to-br from-[#0C1832] to-[#070F20] dark:from-[#050a14] dark:to-[#020408] py-20 lg:py-20 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6">
            <div>
                
                {{-- Top Label with Red Accent --}}
                <div class="flex items-center space-x-4 mb-8">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase"> {{ $leading }} </span>
                </div> 

                {{-- Main Heading --}}
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-white leading-tight mb-8">
                    {{ $title }}
                </h1>

                {{-- Description --}}
                <p class="text-lg text-gray-300 dark:text-gray-400 leading-relaxed max-w-3xl mb-12">
                    {{ $subtitle }}
                </p>

                {{-- Register Entry Table --}}
                @if($entryTable)
                <div class="w-full border border-gray-600/30 dark:border-gray-700/50 rounded-sm overflow-hidden bg-white/5 dark:bg-white/5 backdrop-blur-sm">
                    <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-gray-600/30 dark:divide-gray-700/50">
                        
                        {{-- Register Entry --}}
                        <div class="p-6 lg:p-8">
                            <span class="block text-gray-400 dark:text-gray-500 text-xs font-bold tracking-[0.15em] uppercase mb-2">
                                Register Entry
                            </span>
                            <span class="text-xl lg:text-2xl font-serif font-bold text-white">
                                {{ $registerEntry }}
                            </span>
                        </div>

                        {{-- Category --}}
                        <div class="p-6 lg:p-8">
                            <span class="block text-gray-400 dark:text-gray-500 text-xs font-bold tracking-[0.15em] uppercase mb-2">
                                Category
                            </span>
                            <span class="text-xl lg:text-2xl font-serif font-bold text-white">
                                {{ $category }}
                            </span>
                        </div>

                        {{-- Brand Site --}}
                        <div class="p-6 lg:p-8">
                            <span class="block text-gray-400 dark:text-gray-500 text-xs font-bold tracking-[0.15em] uppercase mb-2">
                                Brand Site
                            </span>
                            <a 
                                href="{{ $brandUrl }}" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center text-xl lg:text-2xl font-serif font-bold text-[#c41e3a] hover:text-red-400 transition-colors group"
                            >
                                {{ $brandSite }}
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

                @endif
            </div>
        </div>
    </section>
</div>