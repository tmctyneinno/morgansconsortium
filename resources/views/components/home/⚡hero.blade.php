<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <section class="relative isolate flex min-h-screen items-center overflow-hidden bg-slate-900 dark:bg-slate-950">

        {{-- Background image + adaptive overlay --}}
        <div class="absolute inset-0 -z-10">
            <img
                src="{{ asset('assets/images/hero-background.png') }}"
                alt="The Morgans global group headquarters"
                class="h-full w-full object-cover"
                fetchpriority="high"
            >
            {{-- Light: navy tint | Dark: deeper, richer overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-[#1e3a5f]/90 via-[#1e3a5f]/65 to-[#1e3a5f]/30 transition-colors duration-300 dark:from-slate-950/95 dark:via-slate-950/80 dark:to-slate-950/50"></div>
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-black/40 to-transparent dark:from-black/60"></div>
        </div>

        <div class="mx-auto w-full max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="max-w-3xl">

                {{-- Eyebrow --}}
                <div class="flex items-center gap-3">
                    <span class="h-px w-12 bg-[#e0334f] dark:bg-[#ef4565]"></span>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#ff6b84] dark:text-[#ff7a91]">
                        The Morgans &middot; Global Group Holding
                    </span>
                </div>

                {{-- Heading --}}
                <h1 class="mt-6 font-serif text-4xl font-semibold leading-[1.1] tracking-tight text-white sm:text-5xl lg:text-6xl dark:text-gray-50">
                    A global group. Eleven lines of business.
                    <span class="italic text-[#ff6b84] dark:text-[#ff7a91]">One standard.</span>
                </h1>

                {{-- Description --}}
                <p class="mt-6 max-w-2xl text-base leading-relaxed text-white/80 sm:text-lg dark:text-gray-300">
                    THE MORGANS is a diversified group of independent companies operating across financial services,
                    technology, real estate, education, events and enterprise services, serving clients on four
                    continents from offices in Lagos, London and New York.
                </p>

                {{-- CTAs --}}
                <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                    <a
                        href="{{ route('group') }}"
                        wire:navigate
                        class="group inline-flex items-center justify-center gap-2 rounded-md bg-[#c41e3a] px-7 py-3.5 text-xs font-semibold uppercase tracking-[0.15em] text-white shadow-lg shadow-[#c41e3a]/25 transition-all duration-200 hover:bg-[#a01830] focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900 dark:bg-[#d92546] dark:hover:bg-[#c41e3a] dark:focus-visible:ring-gray-200"
                    >
                        Explore The Group Register
                        <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a
                        href="{{ route('group') }}"
                        wire:navigate
                        class="inline-flex items-center justify-center rounded-md border border-white/40 bg-white/5 px-7 py-3.5 text-xs font-semibold uppercase tracking-[0.15em] text-white backdrop-blur-sm transition-all duration-200 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900 dark:border-gray-500 dark:text-gray-100 dark:hover:bg-gray-800/60"
                    >
                        About The Group
                    </a>
                </div>
            </div>

          
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-6 left-1/2 hidden -translate-x-1/2 animate-bounce sm:block" aria-hidden="true">
            <svg class="h-6 w-6 text-white/60 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>
</div>