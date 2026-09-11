<?php

use Livewire\Component;

new class extends Component
{
    public $clients = [
        ['name' => 'BNP Paribas'],
        ['name' => 'Deutsche Bank'],
        ['name' => 'HSBC'],
        ['name' => 'Santander'],
        ['name' => 'Societe Generale'],
        ['name' => 'ING Bank'],
        ['name' => 'RBS'],
        ['name' => 'State Bank of India'],
        ['name' => 'Sonali Bank UK'],
        ['name' => 'Ghana International Bank'],
        ['name' => 'NHS'],
        ['name' => 'EFCC'],
        ['name' => 'KPMG'],
        ['name' => 'Ernst & Young'],
        ['name' => 'Parkway MFB'],
        ['name' => 'IFMA'],
    ];

    public $testimonials = [
        [
            'quote' => 'An exceptional and independent review of our compliance policies a pleasure to work with a fine institution and the utmost professionalism of their consultants.',
            'role' => 'Senior Manager, Advisory',
            'company' => 'Deutsche Bank'
        ],
        [
            'quote' => 'Our BSA/AML audits were conducted in an organised, professional manner, with in-depth reports and constructive suggestions for improvement. A valuable resource for our bank.',
            'role' => 'Chief Risk Officer',
            'company' => 'Ghana International Bank'
        ],
        [
            'quote' => 'Every meeting was productive and insightful, and the team was quick to respond and resolve issues the whole company is very professional. I am glad we chose to work with THE MORGANS.',
            'role' => 'Deputy CEO',
            'company' => 'State Bank of India Bank'
        ],
    ];
};
?>

<div>
    <section class="py-20 lg:py-25 bg-white dark:bg-gray-950 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Section --}}
            <div class="mb-10 max-w-4xl">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="h-[2px] w-12 bg-[#c41e3a]"></div>
                    <span class="text-[#c41e3a] text-xs font-bold tracking-[0.2em] uppercase">Selected Client Relationships</span>
                </div>
                
                <h2 class="text-4xl lg:text-4xl xl:text-4xl font-serif font-bold text-[#1e3a5f] dark:text-white leading-tight">
                    Trusted by Institutions Worldwide.
                </h2>
            </div>

            {{-- Client Grid --}}
            <div class="mb-20 border border-gray-200 dark:border-gray-800 rounded-sm overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @php
                        $clientCount = count($clients);
                        $lastRowStart = $clientCount - ($clientCount % 5 ?: 5);
                    @endphp

                    @foreach($clients as $index => $client)
                        <div class="p-8 lg:p-10 flex items-center justify-center {{ $index < $lastRowStart ? 'border-b border-gray-200 dark:border-gray-800' : '' }} {{ ($index + 1) % 5 !== 0 ? 'border-r border-gray-200 dark:border-gray-800' : '' }} hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors duration-300">
                            <span class="text-[#1e3a5f] dark:text-gray-300 font-serif font-semibold text-sm lg:text-base text-center">
                                {{ $client['name'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Testimonials --}}
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                @foreach($testimonials as $testimonial)
                    <div class="space-y-6">
                        {{-- Red Quote Mark --}}
                        <div class="text-[#c41e3a] text-5xl font-serif leading-none">"</div>
                        
                        {{-- Quote Text --}}
                        <p class="text-[#1e3a5f]/80 dark:text-gray-300 leading-relaxed text-sm lg:text-base">
                            {{ $testimonial['quote'] }}
                        </p>

                        {{-- Attribution --}}
                        <div class="pt-4 border-t-2 border-[#c41e3a]">
                            <div class="font-bold text-[#1e3a5f] dark:text-white text-sm lg:text-base">
                                {{ $testimonial['role'] }}
                            </div>
                            <div class="text-[#1e3a5f]/60 dark:text-gray-400 text-sm mt-1">
                                {{ $testimonial['company'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</div>
