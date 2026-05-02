<nav class="bg-white sticky top-0 z-50 shadow-[0_2px_7.5px_rgba(0,0,0,0.15)] px-4 md:px-6 lg:px-[100px]">
    <div class="max-w-[1366px] w-full mx-auto py-3 flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 shrink-0">
            <img src="{{ asset('images/logo.png') }}"
                alt="PT Micro Fibertech Indonesia logo"
                class="w-6 h-6 md:w-12 md:h-12 rounded-full object-cover">
            <span class="font-semibold text-ink text-sm md:text-base leading-normal whitespace-nowrap block">
                PT Micro Fibertech Indonesia
            </span>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden md:flex items-center gap-4">
            <div class="flex items-center gap-6 text-muted text-sm font-normal">
                <a href="#home" class="hover:text-brand transition-colors">Home</a>
                <a href="#product" class="hover:text-brand transition-colors">Product</a>
                <a href="#contact" class="hover:text-brand transition-colors">Contact</a>
            </div>

            <div class="w-px h-8 bg-border mx-2"></div>

            <a href="mailto:info@microfibertech.com"
                data-contact-link
                class="bg-brand text-white text-sm px-4 py-2 flex items-center gap-1 hover:bg-brand/90 transition-colors">
                Contact Me
                <x-icon.arrow-right class="w-5 h-5" />
            </a>
        </div>

        {{-- Mobile hamburger --}}
        <button id="mobile-menu-btn"
            class="md:hidden flex flex-col gap-1.5 p-1"
            aria-label="Toggle menu">
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
            <span class="block w-6 h-0.5 bg-ink transition-all"></span>
        </button>
    </div>

    {{-- Mobile menu overlay --}}
    <div id="mobile-menu"
        class="fixed inset-0 z-[60] bg-black/60 backdrop-blur-[6px] hidden md:hidden flex flex-col items-center">

        {{-- Header inside menu (identical to main navbar but with close icon) --}}
        <div class="bg-white w-full shadow-[0_2px_7.5px_rgba(0,0,0,0.15)]">
            <div class="px-4 py-3 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 shrink-0">
                    <img src="{{ asset('images/logo.png') }}"
                        alt="PT Micro Fibertech Indonesia logo"
                        class="w-6 h-6 rounded-full object-cover">
                    <span class="font-semibold text-ink text-sm leading-normal whitespace-nowrap block">
                        PT Micro Fibertech Indonesia
                    </span>
                </a>
                <button id="mobile-menu-close"
                    class="p-1 flex flex-col gap-1.5"
                    aria-label="Close menu">
                    <x-icon.x class="w-6 h-6 text-ink" />
                </button>
            </div>
        </div>

        {{-- Menu content --}}
        <div class="w-full px-4 pt-6 flex flex-col gap-6 items-start">
            <div class="flex flex-col gap-6 text-white text-sm font-normal w-full">
                <a href="#home" class="hover:text-brand transition-colors py-1">Home</a>
                <a href="#product" class="hover:text-brand transition-colors py-1">Product</a>
                <a href="#contact" class="hover:text-brand transition-colors py-1">Contact</a>
            </div>

            <div class="w-full h-px bg-white/20"></div>

            <a href="mailto:info@microfibertech.com"
                data-contact-link
                class="bg-brand text-white text-sm px-4 py-2.5 flex items-center justify-center gap-1 hover:bg-brand/90 transition-colors w-full">
                Contact Me
                <x-icon.arrow-right class="w-5 h-5" />
            </a>
        </div>
    </div>
</nav>

<script>
    const menu = document.getElementById('mobile-menu');
    const openBtn = document.getElementById('mobile-menu-btn');
    const closeBtn = document.getElementById('mobile-menu-close');

    openBtn.addEventListener('click', () => {
        menu.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scroll
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.add('hidden');
        document.body.style.overflow = ''; // Restore scroll
    });

    // Close on link click
    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            document.body.style.overflow = '';
        });
    });

    // Contact buttons: try native email client, fall back to Gmail web if nothing opens
    document.querySelectorAll('[data-contact-link]').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            window.location.href = 'mailto:info@microfibertech.com';
            setTimeout(() => {
                if (document.hasFocus()) {
                    window.open('https://mail.google.com/mail/?view=cm&fs=1&to=info@microfibertech.com', '_blank');
                }
            }, 500);
        });
    });
</script>