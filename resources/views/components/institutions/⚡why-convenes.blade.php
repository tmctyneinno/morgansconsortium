<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <section class="py-10 lg:py-25 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-start space-x-8 lg:space-x-12 max-w-5xl">
                
                {{-- Red Vertical Line --}}
                <div class="hidden sm:block w-1.5 bg-[#c41e3a] self-stretch min-h-[100px] rounded-sm flex-shrink-0"></div>

                {{-- Content --}}
                <div class="space-y-8">
                    <blockquote class="text-2xl lg:text-3xl xl:text-4xl font-serif italic text-[#1e3a5f] dark:text-white leading-snug">
                        Markets are built by companies. Professions are built by institutions. We invest in both.
                    </blockquote>
                    
                    <cite class="block not-italic text-xs lg:text-sm font-bold tracking-[0.2em] uppercase text-[#1e3a5f]/60 dark:text-gray-400">
                        Why The Group Convenes
                    </cite>
                </div>

            </div>
        </div>
    </section>
</div>