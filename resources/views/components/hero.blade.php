<section id="home"
         class="relative h-[560px] lg:h-[699px] overflow-hidden flex items-center">

    {{-- Background image + overlay --}}
    <img src="{{ asset('images/hero-bg.jpg') }}"
         alt=""
         aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-[1366px] mx-auto px-6 lg:px-[100px] w-full">
        <div class="flex flex-col gap-4 max-w-[800px]">

            {{-- Badge --}}
            <div class="inline-flex self-start">
                <span class="bg-brand-light border border-brand text-brand text-xs px-4 py-2 rounded-full font-normal leading-normal">
                    Official Distributor &ndash; Indonesian
                </span>
            </div>

            {{-- Headline + subtext --}}
            <div class="flex flex-col gap-2">
                <h1 class="text-white font-bold text-4xl lg:text-[48px] leading-[1.2]">
                    Replace Steel Reinforcement with Smarter Concrete Fibre
                </h1>
                <p class="text-[#ededed] text-base lg:text-[18px] leading-relaxed">
                    BarChip synthetic fibre improves durability, reduces cost, and simplifies
                    construction&mdash;without traditional rebar.
                </p>
            </div>

            {{-- CTAs --}}
            <div class="flex flex-wrap gap-6 items-center">
                <a href="#product"
                   class="bg-brand text-white text-sm px-4 py-2 hover:bg-brand/90 transition-colors">
                    Explore Products
                </a>
                <a href="#contact"
                   class="border border-surface text-surface text-sm px-4 py-2 flex items-center gap-1
                          hover:bg-white/10 transition-colors">
                    Talk to Our Team
                    <x-icon.arrow-right class="w-5 h-5" />
                </a>
            </div>

        </div>
    </div>
</section>
