@php
$products = [
    'barchip-46' => [
        'logo'        => asset('images/products/logo-46.png'),
        'logoAlt'     => 'BarChip 46',
        'image'       => asset('images/products/barchip-46.jpg'),
        'imageAlt'    => 'BarChip 46 synthetic fibre',
        'description' => 'Light-duty fibre for general concrete applications',
        'sections'    => [
            [
                'title' => 'Overview',
                'content' => 'Easy-to-use concrete fibre designed for pumping applications and beam-tested structural performance.',
            ],
            [
                'title' => 'Key Applications',
                'content' => "• Tunnel segments\n• Precast elements\n• Concrete track slabs",
            ],
            [
                'title' => 'Dosage',
                'content' => '2.5 – 5 kg / m³, Adjust based on required performance',
            ],
            [
                'title' => 'Pumping',
                'content' => 'Compatible with 50 mm rubber hose, Ensure smooth flow through hopper',
            ],
            [
                'title' => 'Mixing Method',
                'content' => "• Add directly with packaging\n• Mix with water first\n• Add dry materials\n• Use high-speed mixing\n• Optimize with specialist",
            ],
            [
                'title' => 'Handling & Storage',
                'content' => "• 2.5 kg biodegradable bags\n• 440 kg per pallet\n• Weather-protected packaging\n• Store dry if separated",
            ],
            [
                'title' => 'Standards',
                'content' => "ASTM C1116 – Type III\nEN 14889-2",
            ],
        ],
    ],
    'barchip-48' => [
        'logo'        => asset('images/products/logo-48.png'),
        'logoAlt'     => 'BarChip 48',
        'image'       => asset('images/products/barchip-48.jpg'),
        'imageAlt'    => 'BarChip 48 synthetic fibre',
        'description' => 'Ideal for slabs and standard industrial flooring',
        'sections'    => [
            [
                'title' => 'Overview',
                'content' => 'Mid-range fibre providing excellent performance for standard industrial and commercial applications.',
            ],
            [
                'title' => 'Key Applications',
                'content' => "• Industrial floors\n• Warehouse slabs\n• Commercial pavements",
            ],
            [
                'title' => 'Dosage',
                'content' => '3.5 – 6 kg / m³, Adjust based on required performance',
            ],
            [
                'title' => 'Pumping',
                'content' => 'Compatible with 50 mm rubber hose, Ensure smooth flow through hopper',
            ],
            [
                'title' => 'Mixing Method',
                'content' => "• Add directly with packaging\n• Mix with water first\n• Add dry materials\n• Use high-speed mixing\n• Optimize with specialist",
            ],
            [
                'title' => 'Handling & Storage',
                'content' => "• 2.5 kg biodegradable bags\n• 440 kg per pallet\n• Weather-protected packaging\n• Store dry if separated",
            ],
            [
                'title' => 'Standards',
                'content' => "ASTM C1116 – Type III\nEN 14889-2",
            ],
        ],
    ],
    'barchip-macro' => [
        'logo'        => asset('images/products/logo-macro.png'),
        'logoAlt'     => 'BarChip Macro',
        'image'       => asset('images/products/barchip-macro.jpg'),
        'imageAlt'    => 'BarChip Macro synthetic fibre',
        'description' => 'High-performance fibre for heavy load structures',
        'sections'    => [
            [
                'title' => 'Overview',
                'content' => 'Premium long-fibre reinforcement designed for heavy-duty structural applications and load-bearing concrete.',
            ],
            [
                'title' => 'Key Applications',
                'content' => "• Heavy load structures\n• Bridges and viaducts\n• Thick concrete sections",
            ],
            [
                'title' => 'Dosage',
                'content' => '4.5 – 8 kg / m³, Adjust based on required performance',
            ],
            [
                'title' => 'Pumping',
                'content' => 'Compatible with 50 mm rubber hose, Ensure smooth flow through hopper',
            ],
            [
                'title' => 'Mixing Method',
                'content' => "• Add directly with packaging\n• Mix with water first\n• Add dry materials\n• Use high-speed mixing\n• Optimize with specialist",
            ],
            [
                'title' => 'Handling & Storage',
                'content' => "• 2.5 kg biodegradable bags\n• 440 kg per pallet\n• Weather-protected packaging\n• Store dry if separated",
            ],
            [
                'title' => 'Standards',
                'content' => "ASTM C1116 – Type III\nEN 14889-2",
            ],
        ],
    ],
    'barchip-65' => [
        'logo'        => asset('images/products/logo-65.png'),
        'logoAlt'     => 'BarChip 65',
        'image'       => asset('images/products/barchip-65.jpg'),
        'imageAlt'    => 'BarChip 65 synthetic fibre',
        'description' => 'Engineered for demanding structural reinforcement',
        'sections'    => [
            [
                'title' => 'Overview',
                'content' => 'Ultra-high-performance fibre for the most demanding structural reinforcement applications.',
            ],
            [
                'title' => 'Key Applications',
                'content' => "• Structural reinforcement\n• High-stress elements\n• Specialized applications",
            ],
            [
                'title' => 'Dosage',
                'content' => '5.0 – 10 kg / m³, Adjust based on required performance',
            ],
            [
                'title' => 'Pumping',
                'content' => 'Compatible with 50 mm rubber hose, Ensure smooth flow through hopper',
            ],
            [
                'title' => 'Mixing Method',
                'content' => "• Add directly with packaging\n• Mix with water first\n• Add dry materials\n• Use high-speed mixing\n• Optimize with specialist",
            ],
            [
                'title' => 'Handling & Storage',
                'content' => "• 2.5 kg biodegradable bags\n• 440 kg per pallet\n• Weather-protected packaging\n• Store dry if separated",
            ],
            [
                'title' => 'Standards',
                'content' => "ASTM C1116 – Type III\nEN 14889-2",
            ],
        ],
    ],
];
@endphp

<style>
/* ── Backdrop ─────────────────────────────────────────── */
#productModalBackdrop {
    background: rgba(0,0,0,0.30);
    opacity: 0;
    transition: opacity 0.3s ease;
}
#productModalBackdrop.pm-open { opacity: 1; }

/* ── Panel base ───────────────────────────────────────── */
#pm-panel {
    will-change: transform, opacity;
}

/* ── Mobile: bottom sheet ─────────────────────────────── */
@media (max-width: 767px) {
    #productModal { align-items: flex-end; }

    #pm-panel {
        width: 100%;
        max-height: 90svh;
        border-radius: 20px 20px 0 0;
        transform: translateY(100%);
        transition: transform 0.42s cubic-bezier(0.32, 0.72, 0, 1);
    }
    #pm-panel.pm-open { transform: translateY(0); }

    /* Dragging — disable transition so it follows finger */
    #pm-panel.pm-dragging { transition: none; }
}

/* ── Desktop: centred panel (Figma 800×484) ───────────── */
@media (min-width: 768px) {
    #productModal { align-items: center; justify-content: center; }

    #pm-panel {
        width: 800px;
        height: 484px;
        border-radius: 8px;
        opacity: 0;
        transform: scale(0.97) translateY(8px);
        transition: opacity 0.22s ease, transform 0.22s ease;
    }
    #pm-panel.pm-open {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    #pm-scroll { height: 376px; }
}

/* ── Section rows (responsive layout) ────────────────── */
.pm-row {
    display: flex;
    flex-direction: column;
    gap: 2px;
    padding: 12px 16px;
    border-bottom: 1px solid #ededed;
}
@media (min-width: 640px) {
    .pm-row {
        flex-direction: row;
        gap: 16px;
        padding: 12px;
    }
}

.pm-row-title {
    color: #ff6a00;
    font-weight: 600;
    font-size: 13px;
    line-height: 1.5;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    flex-shrink: 0;
}
@media (min-width: 640px) {
    .pm-row-title {
        font-size: 16px;
        text-transform: none;
        letter-spacing: 0;
        width: 200px;
    }
}

.pm-row-content {
    color: #616161;
    font-size: 14px;
    line-height: 1.6;
    white-space: pre-wrap;
    flex: 1;
    min-width: 0;
}

/* ── Staggered row fade-in ────────────────────────────── */
@keyframes pm-row-in {
    from { opacity: 0; transform: translateY(6px); }
    to   { opacity: 1; transform: translateY(0); }
}
.pm-row { animation: pm-row-in 0.28s ease both; }
</style>

{{-- Overlay --}}
<div id="productModalBackdrop"
     class="fixed inset-0 hidden z-40"
     onclick="closeProductModal()">
</div>

{{-- Modal --}}
<div id="productModal"
     class="fixed inset-0 hidden z-50 flex">

    <div id="pm-panel"
         class="bg-surface shadow-2xl flex flex-col overflow-hidden"
         onclick="event.stopPropagation()">

        {{-- Drag handle (mobile only) --}}
        <div class="flex justify-center pt-3 pb-1 shrink-0 md:hidden" id="pm-handle">
            <div style="width:36px;height:4px;border-radius:9999px;background:#d1d5db"></div>
        </div>

        {{-- Header: 108px on desktop, auto on mobile --}}
        <div class="bg-surface border-b border-border flex items-start shrink-0 gap-4 px-4 py-4 md:gap-6 md:h-[108px] md:pt-[16px] md:pb-[12px]">

            {{-- Product image --}}
            <div class="shrink-0 rounded overflow-hidden bg-[#d9d9d9]"
                 style="width:56px;height:56px">
                <img id="modalProductImage" src="" alt=""
                     style="width:100%;height:100%;object-fit:cover">
            </div>

            {{-- Info --}}
            <div class="flex-1 min-w-0 flex flex-col justify-center gap-1 md:gap-2 md:h-full">
                <img id="modalProductLogo" src="" alt=""
                     class="object-contain object-left"
                     style="height:22px;max-width:88px">
                <p id="modalProductDescription"
                   class="leading-snug"
                   style="color:#616161;font-size:13px;line-height:1.5">
                </p>
            </div>

            {{-- Close --}}
            <button onclick="closeProductModal()"
                    class="shrink-0 hover:text-brand transition-colors"
                    style="color:#0a0a0a;padding:2px"
                    aria-label="Close">
                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Scrollable section list --}}
        <div id="pm-scroll" class="overflow-y-auto flex-1">
            <div id="modalSections" class="flex flex-col"></div>
        </div>

    </div>
</div>

<script>
const productData = @json($products);

/* ── Helpers ─────────────────────────────────────── */
const $ = id => document.getElementById(id);
const isMobile = () => window.innerWidth < 768;

let _closing = false;

/* ── Open ────────────────────────────────────────── */
function openProductModal(productKey) {
    const product = productData[productKey];
    if (!product) return;
    _closing = false;

    // Populate header
    $('modalProductImage').src = product.image;
    $('modalProductImage').alt = product.imageAlt;
    $('modalProductLogo').src  = product.logo;
    $('modalProductLogo').alt  = product.logoAlt;
    $('modalProductDescription').textContent = product.description;

    // Populate section rows with staggered animation delay
    const container = $('modalSections');
    container.innerHTML = '';
    product.sections.forEach((section, i) => {
        const row = document.createElement('div');
        row.className = 'pm-row';
        row.style.animationDelay = `${i * 40}ms`;

        const title = document.createElement('p');
        title.className = 'pm-row-title';
        title.textContent = section.title;

        const content = document.createElement('p');
        content.className = 'pm-row-content';
        content.textContent = section.content;

        row.appendChild(title);
        row.appendChild(content);
        container.appendChild(row);
    });

    // Show hidden elements
    $('productModal').classList.remove('hidden');
    $('productModalBackdrop').classList.remove('hidden');
    document.body.style.overflow = 'hidden';

    // Trigger transitions on next paint
    requestAnimationFrame(() => requestAnimationFrame(() => {
        $('pm-panel').classList.add('pm-open');
        $('productModalBackdrop').classList.add('pm-open');
    }));
}

/* ── Close ───────────────────────────────────────── */
function closeProductModal() {
    if (_closing) return;
    _closing = true;

    const panel = $('pm-panel');
    panel.classList.remove('pm-open');
    $('productModalBackdrop').classList.remove('pm-open');

    // Wait for the longest transition (420ms mobile / 220ms desktop)
    const delay = isMobile() ? 430 : 240;
    setTimeout(() => {
        $('productModal').classList.add('hidden');
        $('productModalBackdrop').classList.add('hidden');
        document.body.style.overflow = '';
        // Reset any inline transform left over from drag
        panel.style.transform = '';
        _closing = false;
    }, delay);
}

/* ── Swipe-to-dismiss (mobile) ───────────────────── */
(function () {
    const panel = $('pm-panel');
    let startY = 0, currentY = 0, active = false;

    panel.addEventListener('touchstart', e => {
        // Only initiate drag from the handle or header
        const handle = $('pm-handle');
        if (!handle) return;
        const scrollEl = $('pm-scroll');
        if (scrollEl && scrollEl.scrollTop > 0) return; // let scroll run first
        startY = e.touches[0].clientY;
        currentY = startY;
        active = true;
        panel.classList.add('pm-dragging');
    }, { passive: true });

    panel.addEventListener('touchmove', e => {
        if (!active || !isMobile()) return;
        currentY = e.touches[0].clientY;
        const delta = Math.max(0, currentY - startY);
        panel.style.transform = `translateY(${delta}px)`;
        // Dim backdrop proportionally
        const progress = Math.min(delta / 200, 1);
        $('productModalBackdrop').style.opacity = String(0.30 * (1 - progress));
    }, { passive: true });

    panel.addEventListener('touchend', () => {
        if (!active) return;
        active = false;
        panel.classList.remove('pm-dragging');
        const delta = currentY - startY;

        if (delta > 90) {
            // Threshold met — close
            panel.style.transform = '';
            $('productModalBackdrop').style.opacity = '';
            closeProductModal();
        } else {
            // Snap back
            panel.style.transform = '';
            $('productModalBackdrop').style.opacity = '';
        }
    });
})();

/* ── Keyboard ────────────────────────────────────── */
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeProductModal();
});
</script>
