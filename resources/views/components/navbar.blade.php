<nav class="bg-white sticky top-0 z-50 shadow-[0_2px_7.5px_rgba(0,0,0,0.15)]">
    <div class="max-w-[1366px] mx-auto px-6 lg:px-[100px] py-3 flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 shrink-0">
            <img src="{{ asset('images/logo.png') }}"
                 alt="PT Micro Fibertech Indonesia logo"
                 class="w-12 h-12 rounded-full object-cover">
            <span class="font-semibold text-ink text-base leading-normal whitespace-nowrap hidden sm:block">
                PT Micro Fibertech Indonesia
            </span>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden md:flex items-center gap-4">
            <div class="flex items-center gap-6 text-muted text-sm font-normal">
                <a href="#home"    class="hover:text-brand transition-colors">Home</a>
                <a href="#product" class="hover:text-brand transition-colors">Product</a>
                <a href="#contact" class="hover:text-brand transition-colors">Contact</a>
            </div>

            <div class="w-px h-8 bg-border mx-2"></div>

            <a href="#contact"
               class="bg-brand text-white text-sm px-4 py-2 flex items-center gap-1 hover:bg-brand/90 transition-colors">
                Contact Me
                <x-icon.arrow-right class="w-5 h-5" />
            </a>
        </div>

        {{-- Mobile hamburger --}}
        <button id="mobile-menu-btn"
                class="md:hidden flex flex-col gap-1.5 p-2"
                aria-label="Toggle menu">
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu"
         class="md:hidden hidden border-t border-border bg-white px-6 py-4 flex flex-col gap-4 text-sm text-muted">
        <a href="#home"    class="hover:text-brand transition-colors">Home</a>
        <a href="#product" class="hover:text-brand transition-colors">Product</a>
        <a href="#contact" class="hover:text-brand transition-colors">Contact</a>
        <a href="#contact"
           class="bg-brand text-white px-4 py-2 text-center w-full hover:bg-brand/90 transition-colors">
            Contact Me
        </a>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
