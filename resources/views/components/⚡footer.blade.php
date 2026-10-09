<?php

use Livewire\Component;

new class extends Component
{
    public string $email = '';

    public array $groupLinks = [
        ['label' => 'Advisory & Assurance', 'route' => 'advisory-assurance'],
        ['label' => 'OysterChecks', 'route' => 'risk-assurance-intelligence'],
        ['label' => 'TMC Institute', 'route' => null],
        ['label' => 'GRC & FinCrime Prevention Awards & Summit', 'route' => null],
        ['label' => 'WGRCFP', 'route' => null],
        ['label' => 'Portrec: Resourcing', 'route' => null],
        ['label' => 'Tyneside Innovation', 'route' => null],
        ['label' => 'View the full register', 'route' => null],
    ];

    public array $companyLinks = [
        ['label' => 'About THE MORGANS', 'route' => null],
        ['label' => 'Leadership & Council', 'route' => null],
        ['label' => 'Institutional Bodies', 'route' => null],
        ['label' => 'Careers', 'route' => null],
        ['label' => 'Contact us', 'route' => null],
        ['label' => 'Privacy policy', 'route' => null],
    ];

    public array $socials = [
        ['label' => 'LinkedIn', 'url' => '#'],
        ['label' => 'Facebook', 'url' => '#'],
        ['label' => 'Instagram', 'url' => '#'],
    ];

    public function subscribe(): void
    {
        $this->validate(['email' => 'required|email']);

        // Subscription logic goes here (e.g. store the address / call your mailing provider).

        $this->reset('email');
        session()->flash('message', 'Thank you for subscribing!');
    }
};
?>

<div>
    {{-- ========================================== --}}
    {{-- CTA SECTION --}}
    {{-- ========================================== --}}
    <section class="relative overflow-hidden bg-[#1C2A59] transition-colors duration-300 dark:bg-[#172554]">

        {{-- Decorative rings --}}
        <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full border border-[#c41e3a]/30 dark:border-[#c41e3a]/20" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -right-8 -top-14 h-60 w-60 rounded-full border border-[#c41e3a]/40 dark:border-[#c41e3a]/25" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-5xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <h2 class="max-w-xl font-serif text-2xl font-semibold leading-snug text-white sm:text-3xl">
                    Wherever you operate, we would love to help your business
                    <span class="italic text-[#e0334f]">thrive</span>.
                </h2>

                <a
                    href="#"
                    class="group inline-flex shrink-0 items-center justify-center gap-3 self-start rounded-md bg-[#b01c34] px-9 py-4 text-[11px] font-bold uppercase tracking-[0.2em] text-white shadow-lg shadow-black/20 transition-all duration-200 hover:bg-[#c41e3a] focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#1C2A59] dark:focus-visible:ring-offset-[#172554] lg:self-auto"
                >
                    Get In Touch
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- FOOTER --}}
    {{-- ========================================== --}}
    <footer class="bg-[#0C1832] text-gray-400 transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 pb-8 pt-14 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-12 lg:gap-8">

                {{-- Brand --}}
                <div class="lg:col-span-4">
                    <img src="{{ asset('assets/footer_logo.png') }}" alt="THE MORGANS" class="h-10 w-auto">
                    <p class="mt-5 max-w-xs text-sm leading-relaxed text-gray-400 dark:text-gray-500">
                        A global group of companies helping organisations discover the pivot points of accelerated
                        performance, growth and profitability.
                    </p>
                </div>

                {{-- The Group --}}
                <nav class="lg:col-span-3" aria-label="The Group">
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.15em] text-[#e0334f]">The Group</h4>
                    <ul class="mt-5 space-y-3 text-[13px]">
                        @foreach ($groupLinks as $link)
                            <li wire:key="group-link-{{ $loop->index }}">
                                <a
                                    href="{{ $link['route'] ? route($link['route']) : '#' }}"
                                    @if ($link['route']) wire:navigate @endif
                                    class="transition-colors hover:text-white focus:outline-none focus-visible:text-white focus-visible:underline"
                                >
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                {{-- Company --}}
                <nav class="lg:col-span-2" aria-label="Company">
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.15em] text-[#e0334f]">Company</h4>
                    <ul class="mt-5 space-y-3 text-[13px]">
                        @foreach ($companyLinks as $link)
                            <li wire:key="company-link-{{ $loop->index }}">
                                <a
                                    href="{{ $link['route'] ? route($link['route']) : '#' }}"
                                    class="transition-colors hover:text-white focus:outline-none focus-visible:text-white focus-visible:underline"
                                >
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                {{-- Newsletter --}}
                <div class="lg:col-span-3">
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.15em] text-[#e0334f]">Connect With Us</h4>
                    <p class="mt-5 text-[13px] text-gray-300 dark:text-gray-400">Sign up for our newsletter</p>

                    <form wire:submit="subscribe" class="mt-3 flex" novalidate>
                        <label for="newsletter-email" class="sr-only">Email address</label>
                        <input
                            id="newsletter-email"
                            type="email"
                            wire:model="email"
                            placeholder="Your email address"
                            autocomplete="email"
                            class="min-w-0 flex-1 border border-white/15 bg-transparent px-3 py-2.5 text-[13px] text-white placeholder-gray-500 transition-colors focus:border-[#e0334f] focus:outline-none dark:border-white/10"
                        >
                        <button
                            type="submit"
                            wire:loading.attr="disabled"
                            wire:target="subscribe"
                            class="whitespace-nowrap bg-[#b01c34] px-4 py-2.5 text-[10px] font-bold uppercase tracking-wider text-white transition-colors hover:bg-[#c41e3a] focus:outline-none focus-visible:ring-2 focus-visible:ring-white disabled:cursor-not-allowed disabled:opacity-60"
                        >
                            Sign Up
                        </button>
                    </form>

                    @error('email')
                        <p class="mt-2 text-xs text-[#ff6b84]" role="alert">{{ $message }}</p>
                    @enderror

                    @if (session()->has('message'))
                        <p class="mt-2 text-xs text-emerald-400" role="status">{{ session('message') }}</p>
                    @endif

                    <p class="mt-3 text-xs leading-relaxed text-gray-500 dark:text-gray-600">
                        By signing up, I agree that THE MORGANS and its affiliates may use my contact details to send
                        me communications.
                    </p>
                </div>
            </div>

            {{-- Bottom bar --}}
            <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-6 text-xs text-gray-500 dark:border-white/5 dark:text-gray-600 md:flex-row">
                <p class="text-center md:text-left">
                    Copyright &copy; 2020&ndash;2026 THE MORGANS. All rights reserved. &middot; Lagos &middot; London &middot; New York
                </p>

                <ul class="flex gap-6">
                    @foreach ($socials as $social)
                        <li wire:key="social-{{ $loop->index }}">
                            <a
                                href="{{ $social['url'] }}"
                                class="text-[11px] font-bold uppercase tracking-wider text-gray-400 transition-colors hover:text-white dark:text-gray-500"
                            >
                                {{ $social['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </footer>
</div>