<?php

use Livewire\Component;

new class extends Component
{
    public array $clients = [
        'BNP Paribas',
        'Deutsche Bank',
        'HSBC',
        'Santander',
        'Societe Generale',
        'ING Bank',
        'RBS',
        'State Bank of India',
        'Sonali Bank UK',
        'Ghana International Bank',
        'NHS',
        'EFCC',
        'KPMG',
        'Ernst & Young',
        'Parkway MFB',
        'IFMA',
    ];

    public array $testimonials = [
        [
            'quote' => 'An exceptional and independent review of our compliance policies — a pleasure to work with a fine institution and the utmost professionalism of their consultants.',
            'role' => 'Senior Manager, Advisory',
            'company' => 'Deutsche Bank',
        ],
        [
            'quote' => 'Our BSA/AML audits were conducted in an organised, professional manner, with in-depth reports and constructive suggestions for improvement. A valuable resource for our bank.',
            'role' => 'Chief Risk Officer',
            'company' => 'Ghana International Bank',
        ],
        [
            'quote' => 'Every meeting was productive and insightful, and the team was quick to respond and resolve issues — the whole company is very professional. I am glad we chose to work with THE MORGANS.',
            'role' => 'Deputy CEO',
            'company' => 'State Bank of India Bank',
        ],
    ];
};
?>

<div>
    @php
        $total = count($clients);
        // When the final row would be left with a single orphan, let it span the full row (as in the design).
        $lastSpan = trim(
            ($total % 3 === 1 ? 'md:col-span-3 ' : '') .
            ($total % 5 === 1 ? 'lg:col-span-5' : '')
        );
    @endphp

    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-gray-950">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            {{-- Header --}}
            <div>
                <div class="flex items-center gap-4">
                    <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                    <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                        Selected Client Relationships
                    </span>
                </div>

                <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                    Trusted by Institutions Worldwide.
                </h2>
            </div>

            {{-- Client grid --}}
            <div class="mt-10 grid grid-cols-2 border-l border-t border-gray-300 bg-white dark:border-gray-700 dark:bg-gray-950 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($clients as $client)
                    <div
                        wire:key="client-{{ $loop->index }}"
                        class="flex items-center justify-center border-b border-r border-gray-300 px-4 py-6 text-center transition-colors duration-300 hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-900 {{ $loop->last ? $lastSpan : '' }}"
                    >
                        <span class="font-serif text-[13px] font-semibold text-[#1e3a5f] dark:text-gray-300">
                            {{ $client }}
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- Testimonials --}}
            <div class="mt-14 grid gap-10 md:grid-cols-3 lg:gap-8">
                @foreach ($testimonials as $testimonial)
                    <figure wire:key="testimonial-{{ $loop->index }}" class="flex flex-col border-t-2 border-[#c41e3a] pt-3 dark:border-[#ef4565]">
                        <span class="font-serif text-4xl leading-none text-[#c41e3a] dark:text-[#ef4565]" aria-hidden="true">&rdquo;</span>

                        <blockquote class="mt-2 flex-1 text-sm leading-relaxed text-[#1e3a5f]/85 dark:text-gray-300">
                            {{ $testimonial['quote'] }}
                        </blockquote>

                        <figcaption class="mt-5">
                            <div class="text-sm font-semibold text-[#1e3a5f] dark:text-gray-50">
                                {{ $testimonial['role'] }}
                            </div>
                            <div class="mt-1 text-xs text-[#1e3a5f]/60 dark:text-gray-400">
                                {{ $testimonial['company'] }}
                            </div>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
</div>