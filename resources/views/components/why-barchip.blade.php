<section class="bg-surface relative px-4 py-6 md:px-6 md:py-12 lg:px-[100px] lg:py-[48px] overflow-hidden">
    <!-- Top right square pattern vector -->
    <img src="{{ asset('images/pattern-square.svg') }}" alt="" class="absolute top-0 right-0 max-w-[150px] lg:max-w-[224px] pointer-events-none hidden md:block opacity-70" />

    <div class="max-w-[1366px] mx-auto flex flex-col gap-6 relative z-10">

        {{-- Section header --}}
        <div class="flex flex-col gap-1">
            <p class="text-brand font-semibold text-sm md:text-base leading-normal uppercase tracking-wide">
                Why BarChip
            </p>
            <h2 class="text-ink font-medium text-2xl md:text-3xl lg:text-[32px] leading-[1.2]">
                BarChip Fibre for Concrete
            </h2>
        </div>

        {{-- Feature grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <x-feature-card title="Prevent Corrosion"
                            description="Resistant to rust, acids, and marine environments">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6
                                 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623
                                 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152
                                 c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Increase Residual Strength"
                            description="Maintains structural integrity after cracking">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Improve Crack Control"
                            description="Uniform stress distribution and controlled cracking">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0
                                 M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5
                                 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3
                                 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Low Carbon & Easy to Use"
                            description="Lower carbon footprint than steel, safe and practical">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09
                                 L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813
                                 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5
                                 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375
                                 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0
                                 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456
                                 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Reduce Time & Cost"
                            description="No need for rebar fabrication or installation">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Enhance Durability"
                            description="Extends the service life of concrete structures">
                <x-slot:icon>
                    <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

        </div>
    </div>
</section>
