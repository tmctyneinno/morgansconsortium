<?php

use Livewire\Component;

new class extends Component
{

    public $activeLink = 'the-group';
    public $mobileMenuOpen = false;

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
                        wire:click.prevent="setActiveLink('home')"
                        href="#"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'home' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Home
                    </a>
                    <a 
                        wire:click.prevent="setActiveLink('about')"
                        href="#"
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
                        wire:click.prevent="setActiveLink('institutions')"
                        href="#"
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
                    <a 
                        wire:click.prevent="setActiveLink('careers')"
                        href="#"
                        class="text-sm font-semibold tracking-wider uppercase transition-colors duration-200 {{ $activeLink === 'careers' ? 'text-[#1e3a5f] dark:text-white border-b-2 border-[#c41e3a] pb-1' : 'text-[#1e3a5f] dark:text-gray-300 hover:text-[#c41e3a] dark:hover:text-white' }}"
                    >
                        Careers
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
                    wire:click.prevent="setActiveLink('home')"
                    href="#"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'home' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Home
                </a>
                <a 
                    wire:click.prevent="setActiveLink('about')"
                    href="#"
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
                    wire:click.prevent="setActiveLink('institutions')"
                    href="#"
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
                    wire:click.prevent="setActiveLink('careers')"
                    href="#"
                    class="block text-sm font-semibold tracking-wider uppercase py-2 {{ $activeLink === 'careers' ? 'text-[#c41e3a] border-l-4 border-[#c41e3a] pl-3' : 'text-[#1e3a5f] dark:text-gray-300' }}"
                >
                    Careers
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