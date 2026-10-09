<?php

use Livewire\Component;

new class extends Component
{
    public string $leading = '';
    public string $title = '';
    public string $subtitle = '';
    public bool $entryTable = false;

    // Register entry table (shown only when $entryTable is true)
    public string $registerEntry = '';
    public string $category = '';
    public string $brandSite = '';
    public string $brandUrl = '';
};
?>

<div>
    <section class="relative isolate overflow-hidden bg-gradient-to-br from-[#0C1832] to-[#070F20] transition-colors duration-300 dark:from-[#050a14] dark:to-[#020408]">

        {{-- Soft highlight for depth --}}
        <div class="pointer-events-none absolute -left-24 -top-24 -z-10 h-96 w-96 rounded-full bg-[#1e3a5f]/20 blur-3xl dark:bg-[#1e3a5f]/10" aria-hidden="true"></div>

        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Eyebrow --}}
            @if ($leading !== '')
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#e0334f]"></span>
                    <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#e0334f]">
                        {{ $leading }}
                    </span>
                </div>
            @endif

            {{-- Heading --}}
            <h1 class="mt-6 max-w-3xl font-serif text-4xl font-semibold leading-[1.1] tracking-tight text-white sm:text-5xl lg:text-6xl">
                {{ $title }}
            </h1>

            {{-- Description --}}
            @if ($subtitle !== '')
                <p class="mt-6 max-w-2xl text-base leading-relaxed text-gray-300 dark:text-gray-400">
                    {{ $subtitle }}
                </p>
            @endif

            {{-- Register entry table --}}
            @if ($entryTable)
                <dl class="mt-12 grid grid-cols-1 gap-px overflow-hidden border border-white/15 bg-white/15 backdrop-blur-sm dark:border-white/10 dark:bg-white/10 sm:grid-cols-3">
                    <div class="bg-[#0C1832] px-6 py-5 dark:bg-[#050a14]">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.15em] text-gray-400 dark:text-gray-500">
                            Register Entry
                        </dt>
                        <dd class="mt-2 font-serif text-lg font-semibold text-white lg:text-xl">
                            {{ $registerEntry }}
                        </dd>
                    </div>

                    <div class="bg-[#0C1832] px-6 py-5 dark:bg-[#050a14]">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.15em] text-gray-400 dark:text-gray-500">
                            Category
                        </dt>
                        <dd class="mt-2 font-serif text-lg font-semibold text-white lg:text-xl">
                            {{ $category }}
                        </dd>
                    </div>

                    <div class="bg-[#0C1832] px-6 py-5 dark:bg-[#050a14]">
                        <dt class="text-[10px] font-bold uppercase tracking-[0.15em] text-gray-400 dark:text-gray-500">
                            Brand Site
                        </dt>
                        <dd class="mt-2">
                            @if ($brandUrl !== '')
                                <a
                                    href="{{ $brandUrl }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group inline-flex items-center gap-2 font-serif text-lg font-semibold text-[#e0334f] transition-colors hover:text-[#ff6b84] focus:outline-none focus-visible:underline lg:text-xl"
                                >
                                    {{ $brandSite }}
                                    <svg class="h-4 w-4 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            @else
                                <span class="font-serif text-lg font-semibold text-white lg:text-xl">{{ $brandSite }}</span>
                            @endif
                        </dd>
                    </div>
                </dl>
            @endif
        </div>
    </section>
</div>