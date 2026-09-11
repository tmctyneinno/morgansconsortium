<?php

use Livewire\Component;

new class extends Component
{
    public $email = '';

    public function subscribe()
    {
        // Logic to handle subscription would go here
        $this->email = ''; // Reset after submit
        session()->flash('message', 'Thank you for subscribing!');
    }
};
?>

<div>
   
    {{-- ========================================== --}}
    {{-- CTA SECTION --}}
    {{-- ========================================== --}}
    <section class="relative bg-[#1C2A59] dark:bg-[#172554] py-10 lg:py-10 overflow-hidden transition-colors duration-300">
        
        {{-- Decorative Background Circles --}}
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full border border-[#c41e3a]/20 dark:border-[#c41e3a]/10 pointer-events-none"></div>
        <div class="absolute top-10 right-10 w-72 h-72 rounded-full border border-[#c41e3a]/30 dark:border-[#c41e3a]/20 pointer-events-none"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                
                {{-- CTA Text --}}
                <div class="lg:w-2/3">
                    <h2 class="text-4xl lg:text-4xl xl:text-5xl font-serif font-bold text-white leading-tight">
                        Wherever you operate,<br>
                        we would love to help<br>
                        your business <span class="text-[#c41e3a] italic">thrive</span>.
                    </h2>
                </div>

                {{-- CTA Button --}}
                <div class="lg:w-1/3 flex justify-center lg:justify-end">
                    <a 
                        href="#" 
                        class="inline-flex items-center px-10 py-5 text-sm font-bold tracking-[0.2em] uppercase text-white bg-[#c41e3a] rounded-sm hover:bg-[#a01830] transition-all duration-200 shadow-lg shadow-[#c41e3a]/20 group"
                    >
                        Get In Touch
                        <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- FOOTER SECTION --}}
    {{-- ========================================== --}}
    <footer class="bg-[#0C1832] dark:bg-black text-gray-400 pt-20 pb-10 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
                
                {{-- Brand Column --}}
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center space-x-3">
                        {{-- Simple Logo Placeholder --}}
                        <img src="{{ asset('assets/footer_logo.png') }}" alt="THE MORGANS Logo" class="h-10 w-auto">
                     </div>
                    <p class="text-gray-400 dark:text-gray-500 leading-relaxed max-w-sm">
                        A global group of companies helping organisations discover the pivot points of accelerated performance, growth and profitability.
                    </p>
                </div>

                {{-- Links Column 1 --}}
                <div class="lg:col-span-2 lg:col-start-6">
                    <h4 class="text-[#c41e3a] text-xs font-bold tracking-[0.15em] uppercase mb-6">The Group</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('advisory-assurance') }}" class="hover:text-white transition-colors">Advisory & Assurance</a></li>
                        <li><a href="{{ route('risk-assurance-intelligence') }}" class="hover:text-white transition-colors">OysterChecks</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">TMC Institute</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">GRC & FinCrime Prevention Awards & Summit</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">WGRCFP</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Portrec: Resourcing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Tyneside Innovation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">View the full register</a></li>
                    </ul>
                </div>

                {{-- Links Column 2 --}}
                <div class="lg:col-span-2">
                    <h4 class="text-[#c41e3a] text-xs font-bold tracking-[0.15em] uppercase mb-6">The Group</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">About THE MORGANS</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Leadership & Council</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Institutional Bodies</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy policy</a></li>
                    </ul>
                </div>

                {{-- Newsletter Column --}}
                <div class="lg:col-span-3">
                    <h4 class="text-[#c41e3a] text-xs font-bold tracking-[0.15em] uppercase mb-6">Connect With Us</h4>
                    <p class="text-sm mb-4 text-gray-300 dark:text-gray-400">Sign up for our newsletter</p>
                    
                    <form wire:submit.prevent="subscribe" class="flex flex-col sm:flex-row gap-2 mb-4">
                        <input 
                            type="email" 
                            wire:model="email"
                            placeholder="Your email address" 
                            class="w-full px-4 py-3 bg-transparent border border-gray-700 dark:border-gray-800 text-white placeholder-gray-500 focus:outline-none focus:border-[#c41e3a] transition-colors text-sm"
                            required
                        >
                        <button 
                            type="submit" 
                            class="px-6 py-3 bg-[#c41e3a] text-white text-xs font-bold tracking-wider uppercase hover:bg-[#a01830] transition-colors whitespace-nowrap"
                        >
                            Sign Up
                        </button>
                    </form>
                    
                    <p class="text-xs text-gray-500 dark:text-gray-600 leading-relaxed">
                        By signing up, I agree that THE MORGANS and its affiliates may use my contact details to send me communications.
                    </p>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-gray-800 dark:border-gray-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500 dark:text-gray-600">
                <div class="text-center md:text-left">
                    Copyright &copy; 2020-2026 THE MORGANS. All rights reserved. &middot; Lagos &middot; London &middot; New York
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors font-bold tracking-wider">LINKEDIN</a>
                    <a href="#" class="hover:text-white transition-colors font-bold tracking-wider">FACEBOOK</a>
                    <a href="#" class="hover:text-white transition-colors font-bold tracking-wider">INSTAGRAM</a>
                </div>
            </div>

        </div>
    </footer>

</div>
