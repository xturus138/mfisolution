<footer id="contact" class="relative shadow-[0_2px_7.5px_rgba(0,0,0,0.15)] px-4 py-6 md:px-6 md:py-8 lg:px-[100px] overflow-hidden">

    {{-- Subtle background texture --}}
    <img src="{{ asset('images/footer-bg.jpg') }}"
         alt=""
         aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-events-none">

    <div class="relative z-10 max-w-[1366px] mx-auto flex flex-col gap-6">

        {{-- Top row: brand + links --}}
        <div class="flex flex-col lg:flex-row items-start justify-between gap-10">

            {{-- Brand block --}}
            <div class="flex flex-col gap-3 max-w-sm">
                <p class="text-brand font-medium text-xl md:text-2xl lg:text-[26px] leading-[1.2]">
                    PT Micro Fibertech Indonesia
                </p>
                <p class="text-muted text-sm leading-relaxed">
                    Citra Tower North Tower Lt. 3 Unit C1&ndash;C3, Jl. Benyamin Suaeb
                    (Jl. Casa Kav A6), Kebon Kosong, Kemayoran, Jakarta Pusat 10630
                </p>
            </div>

            {{-- Link columns --}}
            <div class="flex flex-col md:flex-row gap-6 md:gap-12 text-sm">

                {{-- Contact --}}
                <div class="flex flex-col gap-4">
                    <p class="text-brand font-semibold uppercase tracking-wide">Contact Us</p>
                    <a href="mailto:info@mfisolution.id"
                       class="text-muted hover:text-brand transition-colors">
                        info@mfisolution.id
                    </a>
                    <a href="tel:+628118200044"
                       class="text-muted hover:text-brand transition-colors">
                        0811-8200-044
                    </a>
                </div>

                {{-- Menu --}}
                <div class="flex flex-col gap-4">
                    <p class="text-brand font-semibold uppercase tracking-wide">Menu</p>
                    <a href="#home"    class="text-muted hover:text-brand transition-colors">Home</a>
                    <a href="#product" class="text-muted hover:text-brand transition-colors">Product</a>
                    <a href="#contact" class="text-muted hover:text-brand transition-colors">Contact</a>
                </div>

            </div>
        </div>

        {{-- Divider --}}
        <hr class="border-border">

        {{-- Copyright --}}
        <p class="text-muted text-sm md:text-base leading-normal text-center">
            Copyright &copy; PT Micro Fibertech Indonesia. All rights reserved.
        </p>

    </div>
</footer>
