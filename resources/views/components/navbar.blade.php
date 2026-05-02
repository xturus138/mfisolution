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

    {{-- Gmail fallback toast --}}
    <div id="gmail-toast"
         style="display:none; position:fixed; bottom:24px; left:50%; transform:translateX(-50%) translateY(16px);
                background:#1a1a1a; color:#fff; border-radius:8px; padding:12px 16px;
                font-size:13px; font-family:inherit; box-shadow:0 4px 24px rgba(0,0,0,0.18);
                display:flex; align-items:center; gap:10px; z-index:9999;
                opacity:0; transition:opacity 0.2s ease, transform 0.2s ease; pointer-events:none;">
        <span>Email client not opening?</span>
        <a id="gmail-toast-link"
           href="https://mail.google.com/mail/?view=cm&fs=1&to=info@microfibertech.com"
           target="_blank" rel="noopener noreferrer"
           style="color:#ff6a00; font-weight:600; text-decoration:none; white-space:nowrap;">
            Open Gmail →
        </a>
        <button id="gmail-toast-close"
                style="background:none; border:none; color:#888; cursor:pointer; padding:0 0 0 4px; font-size:16px; line-height:1;">
            ×
        </button>
    </div>
</nav>

<script>
    const menu = document.getElementById('mobile-menu');
    const openBtn = document.getElementById('mobile-menu-btn');
    const closeBtn = document.getElementById('mobile-menu-close');

    openBtn.addEventListener('click', () => {
        menu.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.add('hidden');
        document.body.style.overflow = '';
    });

    // Close mobile menu on link click
    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            document.body.style.overflow = '';
        });
    });

    // Toast helpers
    const toast = document.getElementById('gmail-toast');
    let toastTimer = null;

    function showToast() {
        toast.style.display = 'flex';
        toast.style.pointerEvents = 'auto';
        requestAnimationFrame(() => {
            toast.style.opacity = '1';
            toast.style.transform = 'translateX(-50%) translateY(0)';
        });
        clearTimeout(toastTimer);
        toastTimer = setTimeout(hideToast, 6000);
    }

    function hideToast() {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(-50%) translateY(16px)';
        toast.style.pointerEvents = 'none';
        setTimeout(() => { toast.style.display = 'none'; }, 200);
    }

    document.getElementById('gmail-toast-close').addEventListener('click', hideToast);

    // Contact link handler — wire up ALL [data-contact-link] elements after full DOM load
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-contact-link]').forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                window.location.href = 'mailto:info@microfibertech.com';
                // Show toast after a short delay so user sees it if nothing opened
                setTimeout(showToast, 800);
            });
        });
    });
</script>