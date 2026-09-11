<?php

use Livewire\Component;

new class extends Component
{
    public $name = '';
    public $organisation = '';
    public $email = '';
    public $area = '';
    public $message = '';

    public function submit()
    {
        // Handle form submission logic here
        $this->reset();
        session()->flash('success', 'Message sent successfully.');
    }
};
?>

<div>
    {{-- ========================================== --}}
    {{-- GROUP OFFICES SECTION --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-20 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header --}}
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Group Offices</span>
                </div>
                <h2 class="text-2xl lg:text-3xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                    Three offices. Five regions. One conversation away.
                </h2>
            </div>

            {{-- Offices Grid --}}
            <div class="grid md:grid-cols-3 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden mb-8">
                
                {{-- London --}}
                <div class="p-8 lg:p-10 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-[#050a14]">
                    <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-2">London</h3>
                    <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-4">Europe</span>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm mb-6 leading-relaxed">
                        85 Great Portland Street, First Floor, London W1W 7LT
                    </p>
                    <div class="flex items-center space-x-2 text-xs font-bold tracking-wider uppercase text-[#1e3a5f]/60 dark:text-gray-500">
                        <span>Local Time</span>
                        <span class="text-[#1e3a5f] dark:text-white text-lg font-serif" x-data="{ time: '' }" x-init="setInterval(() => { time = new Date().toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', timeZone: 'Europe/London' }) }, 1000)" x-text="time"></span>
                    </div>
                </div>

                {{-- Lagos --}}
                <div class="p-8 lg:p-10 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-[#050a14]">
                    <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-2">Lagos</h3>
                    <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-4">Africa</span>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm mb-6 leading-relaxed">
                        2nd Floor, 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos
                    </p>
                    <div class="flex items-center space-x-2 text-xs font-bold tracking-wider uppercase text-[#1e3a5f]/60 dark:text-gray-500">
                        <span>Local Time</span>
                        <span class="text-[#1e3a5f] dark:text-white text-lg font-serif" x-data="{ time: '' }" x-init="setInterval(() => { time = new Date().toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', timeZone: 'Africa/Lagos' }) }, 1000)" x-text="time"></span>
                    </div>
                </div>

                {{-- New York --}}
                <div class="p-8 lg:p-10 bg-white dark:bg-[#050a14]">
                    <h3 class="text-2xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-2">New York</h3>
                    <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-4">United States</span>
                    <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm mb-6 leading-relaxed">
                        US office — serving clients across the Americas. Address available on enquiry.
                    </p>
                    <div class="flex items-center space-x-2 text-xs font-bold tracking-wider uppercase text-[#1e3a5f]/60 dark:text-gray-500">
                        <span>Local Time</span>
                        <span class="text-[#1e3a5f] dark:text-white text-lg font-serif" x-data="{ time: '' }" x-init="setInterval(() => { time = new Date().toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', timeZone: 'America/New_York' }) }, 1000)" x-text="time"></span>
                    </div>
                </div>

            </div>

            <p class="text-sm text-[#1e3a5f]/60 dark:text-gray-500 max-w-2xl">
                Regional engagement teams — Dubai · Nairobi · Cork · Singapore — serve clients across the Middle East, East Africa, wider Europe and Asia.
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- CONTACT FORM & PROCESS SECTION --}}
    {{-- ========================================== --}}
    <section class="py-20 lg:py-24 bg-gray-50 dark:bg-[#080f1e] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                
                {{-- Left Column: Process Timeline --}}
                <div>
                    <div class="mb-12">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                            <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">What Happens Next</span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                            A clear path from message to meeting.
                        </h2>
                    </div>

                    <div class="relative space-y-12">
                        {{-- Vertical Line --}}
                        <div class="absolute left-[11px] top-2 bottom-2 w-[2px] bg-gray-300 dark:bg-gray-700 transition-colors duration-300"></div>

                        {{-- Step 1 --}}
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-1.5 w-6 h-6 rounded-full bg-[#c41e3a] z-10 ring-4 ring-gray-50 dark:ring-[#080f1e]"></div>
                            <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-2">Within One Business Day</span>
                            <h3 class="text-xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-3">We acknowledge</h3>
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                                Your enquiry is logged and routed to the right company — or combination of companies — in the group.
                            </p>
                        </div>

                        {{-- Step 2 --}}
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-1.5 w-6 h-6 rounded-full bg-[#c41e3a] z-10 ring-4 ring-gray-50 dark:ring-[#080f1e]"></div>
                            <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-2">Within Three Business Days</span>
                            <h3 class="text-xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-3">The Right Team Responds</h3>
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                                A senior member of the relevant division comes back to you with initial thinking, not a holding reply.
                            </p>
                        </div>

                        {{-- Step 3 --}}
                        <div class="relative pl-12">
                            <div class="absolute left-0 top-1.5 w-6 h-6 rounded-full bg-[#c41e3a] z-10 ring-4 ring-gray-50 dark:ring-[#080f1e]"></div>
                            <span class="block text-[#c41e3a] text-xs font-bold tracking-wider uppercase mb-2">Then</span>
                            <h3 class="text-xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-3">We Meet</h3>
                            <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                                A scoping conversation — in person or online, in your time zone — and a clear proposal if there's a fit.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Contact Form --}}
                <div class="bg-white dark:bg-[#0b1526] p-8 lg:p-12 rounded-sm border border-gray-200 dark:border-gray-800 shadow-sm">
                    <form wire:submit.prevent="submit" class="space-y-6">
                        
                        <div>
                            <label class="block text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" wire:model="name" class="w-full px-4 py-3 bg-transparent border border-gray-300 dark:border-gray-700 rounded-sm text-[#1e3a5f] dark:text-white focus:outline-none focus:border-[#c41e3a] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 mb-2">Organisation</label>
                            <input type="text" wire:model="organisation" class="w-full px-4 py-3 bg-transparent border border-gray-300 dark:border-gray-700 rounded-sm text-[#1e3a5f] dark:text-white focus:outline-none focus:border-[#c41e3a] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 mb-2">Email Address</label>
                            <input type="email" wire:model="email" class="w-full px-4 py-3 bg-transparent border border-gray-300 dark:border-gray-700 rounded-sm text-[#1e3a5f] dark:text-white focus:outline-none focus:border-[#c41e3a] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 mb-2">Which area is this about?</label>
                            <input type="text" wire:model="area" class="w-full px-4 py-3 bg-transparent border border-gray-300 dark:border-gray-700 rounded-sm text-[#1e3a5f] dark:text-white focus:outline-none focus:border-[#c41e3a] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold tracking-wider uppercase text-[#1e3a5f] dark:text-gray-300 mb-2">Message</label>
                            <textarea wire:model="message" rows="4" class="w-full px-4 py-3 bg-transparent border border-gray-300 dark:border-gray-700 rounded-sm text-[#1e3a5f] dark:text-white focus:outline-none focus:border-[#c41e3a] transition-colors resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-[#c41e3a] text-white text-xs font-bold tracking-[0.15em] uppercase rounded-sm hover:bg-[#a01830] transition-colors flex items-center justify-center group">
                            Send Message
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>

                        @if (session()->has('success'))
                            <div class="text-green-600 dark:text-green-400 text-sm mt-4">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>