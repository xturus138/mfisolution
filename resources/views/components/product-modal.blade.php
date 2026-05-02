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

{{-- Transparent click-trap backdrop (no dark overlay, no blur) --}}
<div id="productModalBackdrop"
     class="fixed inset-0 hidden z-40"
     onclick="closeProductModal()">
</div>

{{-- Modal panel --}}
<div id="productModal"
     class="fixed inset-0 hidden z-50 overflow-hidden flex items-center justify-center p-4">
    <div class="bg-surface rounded-lg shadow-xl w-full max-w-3xl max-h-[90vh] overflow-hidden flex flex-col"
         onclick="event.stopPropagation()">

        {{-- Sticky header --}}
        <div class="bg-surface border-b border-border px-4 py-4 flex gap-6 items-start shrink-0">

            {{-- Product image --}}
            <div class="shrink-0 size-20 overflow-hidden rounded">
                <img id="modalProductImage"
                     src=""
                     alt=""
                     class="size-full object-cover">
            </div>

            {{-- Product info --}}
            <div class="flex-1 min-w-0 flex flex-col gap-2 justify-center">
                <img id="modalProductLogo"
                     src=""
                     alt=""
                     class="h-6 object-contain object-left">
                <p id="modalProductDescription"
                   class="text-muted text-base leading-relaxed">
                </p>
            </div>

            {{-- Close button --}}
            <button onclick="closeProductModal()"
                    class="shrink-0 text-ink hover:text-brand transition-colors p-1"
                    aria-label="Close modal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Single scrollable section list --}}
        <div class="flex-1 overflow-y-auto">
            <div id="modalSections" class="flex flex-col">
                {{-- Two-column rows (title | content) populated by JavaScript --}}
            </div>
        </div>
    </div>
</div>

<script>
const productData = @json($products);

function openProductModal(productKey) {
    const product = productData[productKey];
    if (!product) return;

    document.getElementById('modalProductImage').src = product.image;
    document.getElementById('modalProductImage').alt = product.imageAlt;
    document.getElementById('modalProductLogo').src = product.logo;
    document.getElementById('modalProductLogo').alt = product.logoAlt;
    document.getElementById('modalProductDescription').textContent = product.description;

    const container = document.getElementById('modalSections');
    container.innerHTML = '';

    product.sections.forEach(section => {
        const row = document.createElement('div');
        row.className = 'flex gap-4 items-start border-b border-[#ededed] p-3';

        const titleEl = document.createElement('p');
        titleEl.className = 'shrink-0 w-48 text-[#ff6a00] font-semibold text-base leading-relaxed';
        titleEl.textContent = section.title;

        const contentEl = document.createElement('p');
        contentEl.className = 'flex-1 text-[#616161] text-sm leading-relaxed whitespace-pre-wrap';
        contentEl.textContent = section.content;

        row.appendChild(titleEl);
        row.appendChild(contentEl);
        container.appendChild(row);
    });

    document.getElementById('productModal').classList.remove('hidden');
    document.getElementById('productModalBackdrop').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeProductModal() {
    document.getElementById('productModal').classList.add('hidden');
    document.getElementById('productModalBackdrop').classList.add('hidden');
    document.body.style.overflow = '';
}

// Close modal on Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeProductModal();
    }
});
</script>
