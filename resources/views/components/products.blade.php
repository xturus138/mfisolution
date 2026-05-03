@php
$products = [
    [
        'image'       => asset('images/products/barchip-46.jpg'),
        'imageAlt'    => 'BarChip MQ58 synthetic fibre',
        'logo'        => asset('images/products/logo-46.png'),
        'logoAlt'     => 'BarChip MQ58',
        'description' => 'Triple-threat fibre for pavement and industrial floors: residual strength, crack control, and fibre-free surface finish',
        'modalKey'    => 'barchip-46',
    ],
    [
        'image'       => asset('images/products/barchip-48.jpg'),
        'imageAlt'    => 'BarChip 48 synthetic fibre',
        'logo'        => asset('images/products/logo-48.png'),
        'logoAlt'     => 'BarChip 48',
        'description' => 'Versatile concrete fibre for tunnel segments, precast elements, and concrete track slabs',
        'modalKey'    => 'barchip-48',
    ],
    [
        'image'       => asset('images/products/barchip-macro.jpg'),
        'imageAlt'    => 'BarChip 54 synthetic fibre',
        'logo'        => asset('images/products/logo-macro.png'),
        'logoAlt'     => 'BarChip 54',
        'description' => 'High-performance synthetic fibre engineered for shotcrete, tunnels, and slope stabilisation',
        'modalKey'    => 'barchip-macro',
    ],
    [
        'image'       => asset('images/products/barchip-65.jpg'),
        'imageAlt'    => 'BarChip R65 synthetic fibre',
        'logo'        => asset('images/products/logo-65.png'),
        'logoAlt'     => 'BarChip R65',
        'description' => 'Eco-friendly shotcrete fibre made from recycled material — high performance with a significantly lower carbon footprint',
        'modalKey'    => 'barchip-65',
    ],
];
@endphp

<section id="product"
         class="relative px-4 py-6 md:px-6 md:py-12 lg:px-[100px] lg:py-[48px] overflow-hidden">

    {{-- Subtle background texture --}}
    <img src="{{ asset('images/products-bg.jpg') }}"
         alt=""
         aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover opacity-[0.16] pointer-events-none">

    <div class="relative z-10 max-w-[1366px] mx-auto flex flex-col gap-6">

        {{-- Section header --}}
        <div class="flex flex-col gap-1">
            <p class="text-brand font-semibold text-sm md:text-base leading-normal uppercase tracking-wide">
                Product Section
            </p>
            <h2 class="text-ink font-medium text-2xl md:text-3xl lg:text-[32px] leading-[1.2]">
                Barchip Series
            </h2>
        </div>

        {{-- Product grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-product-card
                    :image="$product['image']"
                    :imageAlt="$product['imageAlt']"
                    :logo="$product['logo']"
                    :logoAlt="$product['logoAlt']"
                    :description="$product['description']"
                    :modalKey="$product['modalKey']"
                />
            @endforeach
        </div>

    </div>

    {{-- Product Modal --}}
    <x-product-modal />
</section>
