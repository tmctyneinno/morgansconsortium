<?php

use Livewire\Component;

new class extends Component
{
    public string $name = '';
    public string $organisation = '';
    public string $email = '';
    public string $area = '';
    public string $message = '';

    public array $offices = [
        [
            'city' => 'London',
            'region' => 'Europe',
            'address' => '85 Great Portland Street, First Floor, London W1W 7LT',
            'timezone' => 'Europe/London',
        ],
        [
            'city' => 'Lagos',
            'region' => 'Africa',
            'address' => '2nd Floor, 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos',
            'timezone' => 'Africa/Lagos',
        ],
        [
            'city' => 'New York',
            'region' => 'United States',
            'address' => 'US office — serving clients across the Americas. Address available on enquiry.',
            'timezone' => 'America/New_York',
        ],
    ];

    public array $steps = [
        [
            'label' => 'Within one business day',
            'title' => 'We acknowledge',
            'description' => 'Your enquiry is logged and routed to the right company — or combination of companies — in the group.',
        ],
        [
            'label' => 'Within three business days',
            'title' => 'The right team responds',
            'description' => 'A senior member of the relevant division comes back to you with initial thinking, not a holding reply.',
        ],
        [
            'label' => 'Then',
            'title' => 'We meet',
            'description' => "A scoping conversation — in person or online, in your time zone — and a clear proposal if there's a fit.",
        ],
    ];

    public function submit(): void
    {
        $this->validate([
            'name' => 'required|string|max:120',
            'organisation' => 'nullable|string|max:160',
            'email' => 'required|email|max:190',
            'area' => 'nullable|string|max:160',
            'message' => 'required|string|min:10|max:3000',
        ]);

        // Handle the enquiry here (store it, send a notification, etc.).

        $this->reset(['name', 'organisation', 'email', 'area', 'message']);
        session()->flash('success', 'Message sent successfully.');
    }
};
?>

<div>
    {{-- ========================================== --}}
    {{-- GROUP OFFICES --}}
    {{-- ========================================== --}}
    <section class="bg-white transition-colors duration-300 dark:bg-[#050a14]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div class="flex items-center gap-4">
                <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                    Group Offices
                </span>
            </div>

            <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                Three offices. Five regions. One conversation away.
            </h2>

            {{-- Offices (1px gaps over a tinted background draw the borders) --}}
            <div class="mt-10 grid grid-cols-1 gap-px overflow-hidden border border-gray-300 bg-gray-300 dark:border-gray-700 dark:bg-gray-700 md:grid-cols-3">
                @foreach ($offices as $office)
                    <div
                        wire:key="office-{{ $loop->index }}"
                        class="bg-white px-5 py-5 transition-colors duration-300 hover:bg-gray-50 dark:bg-[#050a14] dark:hover:bg-gray-900"
                    >
                        <h3 class="font-serif text-lg font-semibold text-[#1e3a5f] dark:text-gray-50">
                            {{ $office['city'] }}
                        </h3>
                        <span class="mt-1.5 block text-[9px] font-bold uppercase tracking-[0.15em] text-[#b01c34] dark:text-[#ef4565]">
                            {{ $office['region'] }}
                        </span>

                        <p class="mt-4 min-h-[2.5rem] text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $office['address'] }}
                        </p>

                        <div
                            class="mt-4 flex items-center gap-3"
                            x-data="{
                                time: '--:--',
                                tz: @js($office['timezone']),
                                tick() {
                                    this.time = new Date().toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', timeZone: this.tz });
                                }
                            }"
                            x-init="tick(); setInterval(() => tick(), 15000)"
                        >
                            <span class="text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f]/70 dark:text-gray-500">Local time</span>
                            <span class="text-sm font-bold tabular-nums tracking-wider text-[#1e3a5f] dark:text-gray-50" x-text="time"></span>
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="mt-5 max-w-md text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                Regional engagement teams — Dubai &middot; Nairobi &middot; Cork &middot; Singapore — serve clients
                across the Middle East, East Africa, wider Europe and Asia.
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- PROCESS + CONTACT FORM --}}
    {{-- ========================================== --}}
    <section class="bg-[#faf9f6] transition-colors duration-300 dark:bg-[#080f1e]">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">

                {{-- Process --}}
                <div>
                    <div class="flex items-center gap-4">
                        <span class="h-[2px] w-12 bg-[#c41e3a] dark:bg-[#ef4565]"></span>
                        <span class="text-xs font-medium uppercase italic tracking-wide text-[#c41e3a] dark:text-[#ef4565]">
                            What Happens Next
                        </span>
                    </div>

                    <h2 class="mt-3 font-serif text-3xl font-bold leading-tight tracking-tight text-[#1e3a5f] dark:text-gray-50 lg:text-4xl">
                        A clear path from message to meeting.
                    </h2>

                    <ol class="relative mt-10 space-y-9">
                        <span class="absolute bottom-0 left-[5px] top-2 w-px bg-[#1e3a5f]/25 dark:bg-gray-700" aria-hidden="true"></span>

                        @foreach ($steps as $step)
                            <li wire:key="step-{{ $loop->index }}" class="relative pl-9">
                                <span
                                    class="absolute left-0 top-[3px] z-10 h-[11px] w-[11px] rounded-full bg-[#b01c34] ring-4 ring-[#faf9f6] dark:bg-[#ef4565] dark:ring-[#080f1e]"
                                    aria-hidden="true"
                                ></span>

                                <span class="block text-[10px] font-bold uppercase tracking-[0.15em] text-[#b01c34] dark:text-[#ef4565]">
                                    {{ $step['label'] }}
                                </span>
                                <h3 class="mt-1.5 font-serif text-xl font-semibold text-[#1e3a5f] dark:text-gray-50">
                                    {{ $step['title'] }}
                                </h3>
                                <p class="mt-2 max-w-sm text-[12px] leading-relaxed text-gray-500 dark:text-gray-400">
                                    {{ $step['description'] }}
                                </p>
                            </li>
                        @endforeach
                    </ol>
                </div>

                {{-- Form --}}
                <div class="self-start rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-colors duration-300 dark:border-gray-800 dark:bg-[#0b1526] sm:p-8">
                    <form wire:submit="submit" class="space-y-5" novalidate>

                        @php
                            $inputClasses = 'mt-2 block w-full rounded-md border border-gray-300 bg-white px-3 py-2.5 text-sm text-[#1e3a5f] transition-colors placeholder:text-gray-400 focus:border-[#c41e3a] focus:outline-none focus:ring-1 focus:ring-[#c41e3a] dark:border-gray-700 dark:bg-[#080f1e] dark:text-gray-100 dark:placeholder:text-gray-600 dark:focus:border-[#ef4565] dark:focus:ring-[#ef4565]';
                            $labelClasses = 'block text-[10px] font-bold uppercase tracking-[0.15em] text-[#1e3a5f]/80 dark:text-gray-300';
                        @endphp

                        <div>
                            <label for="contact-name" class="{{ $labelClasses }}">Full Name</label>
                            <input id="contact-name" type="text" wire:model="name" autocomplete="name" class="{{ $inputClasses }}">
                            @error('name') <p class="mt-1.5 text-xs text-[#c41e3a] dark:text-[#ff7a91]" role="alert">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="contact-organisation" class="{{ $labelClasses }}">Organisation</label>
                            <input id="contact-organisation" type="text" wire:model="organisation" autocomplete="organization" class="{{ $inputClasses }}">
                            @error('organisation') <p class="mt-1.5 text-xs text-[#c41e3a] dark:text-[#ff7a91]" role="alert">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="contact-email" class="{{ $labelClasses }}">Email Address</label>
                            <input id="contact-email" type="email" wire:model="email" autocomplete="email" class="{{ $inputClasses }}">
                            @error('email') <p class="mt-1.5 text-xs text-[#c41e3a] dark:text-[#ff7a91]" role="alert">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="contact-area" class="{{ $labelClasses }}">Which area is this about?</label>
                            <input id="contact-area" type="text" wire:model="area" class="{{ $inputClasses }}">
                            @error('area') <p class="mt-1.5 text-xs text-[#c41e3a] dark:text-[#ff7a91]" role="alert">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="contact-message" class="{{ $labelClasses }}">Message</label>
                            <textarea id="contact-message" wire:model="message" rows="4" class="{{ $inputClasses }} resize-none"></textarea>
                            @error('message') <p class="mt-1.5 text-xs text-[#c41e3a] dark:text-[#ff7a91]" role="alert">{{ $message }}</p> @enderror
                        </div>

                        <div class="pt-1">
                            <button
                                type="submit"
                                wire:loading.attr="disabled"
                                wire:target="submit"
                                class="group inline-flex items-center justify-center gap-2 rounded-sm bg-[#b01c34] px-6 py-3.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white transition-colors hover:bg-[#c41e3a] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#c41e3a] focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60 dark:focus-visible:ring-offset-[#0b1526]"
                            >
                                <span wire:loading.remove wire:target="submit">Send Message</span>
                                <span wire:loading wire:target="submit">Sending…</span>
                                <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </div>

                        @if (session()->has('success'))
                            <p class="text-sm text-emerald-600 dark:text-emerald-400" role="status">
                                {{ session('success') }}
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>