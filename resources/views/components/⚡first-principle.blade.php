<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
   <section class="py-15 lg:py-20 bg-white dark:bg-[#FBFAF7] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-start space-x-8 lg:space-x-12 max-w-5xl">
                
                {{-- Red Vertical Line --}}
                {{-- Using a dedicated div for better control over height and thickness --}}
                <div class="hidden sm:block w-1.5 bg-[#c41e3a] self-stretch min-h-[200px] rounded-sm"></div>

                {{-- Content --}}
                <div class="space-y-8">
                    <blockquote class="text-2xl lg:text-3xl xl:text-4xl font-serif italic text-[#1e3a5f] dark:text-white leading-snug">
                        We advise the world's institutions on integrity. We hold ourselves to a standard we would be willing to audit.
                    </blockquote>
                    
                    <cite class="block not-italic text-xs lg:text-sm font-bold tracking-[0.2em] uppercase text-[#1e3a5f]/60 dark:text-gray-400">
                        The Group's First Principle
                    </cite>
                </div>

            </div>
        </div>
    </section>
</div>