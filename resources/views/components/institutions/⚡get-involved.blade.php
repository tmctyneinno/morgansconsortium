<?php

use Livewire\Component;

new class extends Component
{
    public $opportunities = [
        [
            'number' => '1',
            'label' => 'Join',
            'title' => 'Membership & Fellowship',
            'description' => 'Professional membership and international fellowship routes through the IGRCFP.'
        ],
        [
            'number' => '2',
            'label' => 'Nominate',
            'title' => 'Awards Nominations',
            'description' => 'Put individuals and organisations forward across six pillars and 40+ categories.'
        ],
        [
            'number' => '3',
            'label' => 'Mentor',
            'title' => 'WGRCFP Programme',
            'description' => 'Give nine months as a matched mentor — or apply as a mentee — through the measured programme.'
        ],
        [
            'number' => '4',
            'label' => 'Sponsor',
            'title' => 'Partnership',
            'description' => "Align your brand with the profession's agenda across two global editions."
        ],
    ];
}; 
?>

<div>
    <section class="py-10 lg:py-25 bg-white dark:bg-[#050a14] transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-16 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Get Involved</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white mb-6 leading-tight">
                    Join, Nominate, Mentor, Sponsor.
                </h2>
                
                <p class="text-lg text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed max-w-3xl">
                    Membership, fellowship, scholarship and partnership routes are open across all four bodies. Tell us where you'd like to contribute and we'll connect you with the right secretariat.
                </p>
            </div>

            {{-- Opportunities Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden mb-12">
                
                @foreach($opportunities as $index => $opportunity)
                    <div class="p-6 lg:p-6 {{ $index < 3 ? 'border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-800' : '' }} {{ $index < 2 ? 'md:border-b lg:border-b-0' : '' }} hover:bg-gray-50 dark:hover:bg-white/5 transition-colors duration-300 group">
                        
                        {{-- Red Number & Label --}}
                        <span class="block text-[#c41e3a] italic font-serif text-sm mb-4">
                            {{ $opportunity['number'] }}. {{ $opportunity['label'] }}
                        </span>

                        {{-- Title --}}
                        <h3 class="text-l font-serif font-bold text-[#1e3a5f] dark:text-white mb-4 group-hover:text-[#c41e3a] dark:group-hover:text-[#c41e3a] transition-colors duration-300">
                            {{ $opportunity['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-[#1e3a5f]/70 dark:text-gray-400 text-sm leading-relaxed">
                            {{ $opportunity['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a 
                    href="#" 
                    class="inline-flex items-center justify-center px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase text-[#1e3a5f] dark:text-white border border-[#1e3a5f] dark:border-white rounded-sm hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#050a14] transition-all duration-200 group"
                >
                    Enquire About Membership
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                
                <a 
                    href="#" 
                    class="inline-flex items-center justify-center px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase text-[#1e3a5f] dark:text-white border border-[#1e3a5f] dark:border-white rounded-sm hover:bg-[#1e3a5f] hover:text-white dark:hover:bg-white dark:hover:text-[#050a14] transition-all duration-200 group"
                >
                    The Mentorship Programme
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>
</div>