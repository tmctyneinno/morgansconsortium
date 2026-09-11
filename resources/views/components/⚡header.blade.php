<?php

use Livewire\Component;

new class extends Component
{

    public $activeLink = 'home';
    public $mobileMenuOpen = false;

    public function mount()
    {
        if (request()->routeIs('advisory-assurance', 'risk-assurance-intelligence')) {
            $this->activeLink = 'the-group';

            return;
        }

        $this->activeLink = request()->routeIs('about', 'institutions', 'careers', 'connect')
            ? request()->route()->getName()
            : 'home';
    }

    public function setActiveLink($link)
    {
        $this->activeLink = $link;
    }

    public function toggleMobileMenu()
    {
        $this->mobileMenuOpen = !$this->mobileMenuOpen;
    }

}
?>

<div>
    {{-- Top Bar with World Clocks --}}
    <div class="bg-[#1e3a5f] dark:bg-gray-950 border-b border-[#0f1f33] dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-10 text-xs">
                {{-- World Clocks --}}
                <div class="flex items-center space-x-6" x-data="{
                    times: {
                        lagos: '',
                        london: '',
                        newyork: '',
                        dubai: ''
                    },
                    updateTime() {
                        const options = { 
                            hour: '2-digit', 
                            minute: '2-digit', 
                            hour12: false,
                            timeZone: 'Africa/Lagos'
                        };
                        this.times.lagos = new Intl.DateTimeFormat('en-US', options).format(new Date());
                        
                        options.timeZone = 'Europe/London';
                        this.times.london = new Intl.DateTimeFormat('en-US', options).format(new Date());
                        
                        options.timeZone = 'America/New_York';
                        this.times.newyork = new Intl.DateTimeFormat('en-US', options).format(new Date());
                        
                        options.timeZone = 'Asia/Dubai';
                        this.times.dubai = new Intl.DateTimeFormat('en-US', options).format(new Date());
                    }
                }" x-init="updateTime(); setInterval(updateTime, 1000)">
                    <div class="flex items-center space-x-2">
                        <span class="text-[#c41e3a] font-semibold">LAGOS</span>
                        <span class="text-gray-300" x-text="times.lagos"></span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-[#c41e3a] font-semibold">LONDON</span>
                        <span class="text-gray-300" x-text="times.london"></span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-[#c41e3a] font-semibold">NEW YORK</span>
                        <span class="text-gray-300" x-text="times.newyork"></span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-[#c41e3a] font-semibold">DUBAI</span>
                        <span class="text-gray-300" x-text="times.dubai"></span>
                    </div>
                </div>
                
                {{-- Tagline --}}
                <div class="hidden md:block">
                    <span class="text-gray-300 tracking-wider text-xs uppercase">A Global Group of Companies</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Header --}}
    <header class="bg-white dark:bg-gray-900 shadow-sm border-b border-gray-100 dark:border-gray-800 sticky top-10 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                {{-- Logo Section --}}
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        {{-- Shield Logo SVG --}}
                        <img class="h-10" src="/assets/logo.png" alt="Logo">
                    </a>
                </div>

                {{-- Desktop Navigation --}}
                <nav class="hidden md:flex items-center space-x-6">
                    <a 
                        href="{{ route('home') }}"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'home' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Home
                    </a>
                    <a 
                        href="{{ route('about') }}"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'about' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        About
                    </a>
                    <a 
                        wire:click.prevent="setActiveLink('the-group')"
                        href="#"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'the-group' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        The Group
                    </a>
                    <a 
                        href="{{ route('institutions') }}"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'institutions' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Institutions
                    </a>
                    <a 
                        wire:click.prevent="setActiveLink('clients')"
                        href="#"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'clients' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Clients
                    </a>
                    <div class="group relative">
                        <a
                            href="{{ route('careers') }}"
                            class="flex items-center gap-1 text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'careers' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                            aria-haspopup="true"
                        > 
                            Careers
                            <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <div class="invisible absolute left-1/2 top-full z-50 w-100 -translate-x-1/2 pt-5 opacity-0 transition-all duration-200 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                            <div class="border border-gray-100 bg-white p-2 shadow-xl dark:border-gray-700 dark:bg-gray-900">
                                <a href="{{ route('advisory-assurance') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Advisory & Assurance</a>
                                <a href="{{ route('risk-assurance-intelligence') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Risk & Assurance Intelligence</a>
                                <a href="{{ route('tmc-institute') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">TMC Institute - Executive Education</a>
                                <a href="{{ route('grc-fincrime-prevention-awards-summit') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">GRC & FinCrime Prevention Awards & Summit</a>
                                <a href="{{ route('wgrcfp') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">WGRCFP — Women in GRC & FinCrime Prevention</a>
                                <a href="{{ route('portrec-resourcing') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Portrec Resourcing — Talent & Workforce</a>
                                <a href="{{ route('tyneside-innovation') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Tyneside Innovation — Technology & Digital</a>
                                <a href="{{ route('procurement-supply-chain') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Procurement & Supply Chain</a>
                                <a href="{{ route('real-estate-property-development') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Real Estate & Property Development</a>
                                <a href="{{ route('facilities-infrastructure-management') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Facilities & Infrastructure Management</a>
                                <a href="{{ route('tyneprints') }}" class="block px-2 py-3 text-sm font-semibold text-[#1e3a5f] transition-colors hover:bg-gray-50 hover:text-[#c41e3a] dark:text-gray-200 dark:hover:bg-gray-800">Tyneprints — Print & Brand Production</a>
                               
                            </div>
                        </div>
                    </div>
                    <a 
                        href="{{ route('connect') }}"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'connect' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Connect
                    </a>
                </nav>

                {{-- Right Side: Theme Toggle + CTA Button --}}
                <div class="hidden md:flex items-center space-x-4">
                    <x-theme-toggle />
                    <a 
                        href="#"
                        class="inline-block px-6 py-2.5 text-sm font-semibold tracking-wider uppercase text-[#1e3a5f] dark:text-white border-2 border-[#1e3a5f] dark:border-white rounded-md hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#1e3a5f] transition-all duration-200"
                    >
                        Speak With Us
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <div class="md:hidden flex items-center space-x-2">
                    <x-theme-toggle />
                    <button 
                        wire:click="toggleMobileMenu"
                        type="button" 
                        class="p-2 rounded-md text-[#1e3a5f] dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    >
                        <svg x-show="!$wire.mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="$wire.mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="$wire.mobileMenuOpen" x-cloak class="md:hidden border-t border-gray-200 dark:border-gray-700">
            <div class="px-4 py-4 space-y-3">
                <a 
                    href="{{ route('home') }}"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'home' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Home
                </a>
                <a 
                    href="{{ route('about') }}"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'about' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    About
                </a>
                <a 
                    wire:click.prevent="setActiveLink('the-group')"
                    href="#"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'the-group' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    The Group
                </a>
                <a 
                    href="{{ route('institutions') }}"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'institutions' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Institutions
                </a>
                <a 
                    wire:click.prevent="setActiveLink('clients')"
                    href="#"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'clients' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Clients
                </a>
                <a 
                    href="{{ route('careers') }}"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'careers' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Careers
                </a>
                <div class="-mt-2 ml-4 space-y-1 border-l border-gray-200 pl-4 dark:border-gray-700">
                    <a href="{{ route('careers') }}#working-here" class="block py-1.5 text-sm text-[#1e3a5f]/75 dark:text-gray-400">Working Here</a>
                    <a href="{{ route('careers') }}#hiring-process" class="block py-1.5 text-sm text-[#1e3a5f]/75 dark:text-gray-400">How Hiring Works</a>
                    <a href="https://portrec.ng/" target="_blank" rel="noopener noreferrer" class="block py-1.5 text-sm text-[#1e3a5f]/75 dark:text-gray-400">Current Openings ↗</a>
                </div>
                <a
                    href="{{ route('connect') }}"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'connect' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Connect
                </a>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                    <a 
                        href="#"
                        class="block w-full text-center px-6 py-2.5 text-sm font-semibold tracking-wider uppercase text-[#1e3a5f] dark:text-white border-2 border-[#1e3a5f] dark:border-white rounded-md hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#1e3a5f] transition-all duration-200"
                    >
                        Speak With Us
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
