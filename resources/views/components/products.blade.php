@php
$products = [
    [
        'image'       => asset('images/products/barchip-46.jpg'),
        'imageAlt'    => 'BarChip 46 synthetic fibre',
        'logo'        => asset('images/products/logo-46.png'),
        'logoAlt'     => 'BarChip 46',
        'description' => 'Light-duty fibre for general concrete applications',
        'href'        => '#',
    ],
    [
        'image'       => asset('images/products/barchip-48.jpg'),
        'imageAlt'    => 'BarChip 48 synthetic fibre',
        'logo'        => asset('images/products/logo-48.png'),
        'logoAlt'     => 'BarChip 48',
        'description' => 'Ideal for slabs and standard industrial flooring',
        'href'        => '#',
    ],
    [
        'image'       => asset('images/products/barchip-macro.jpg'),
        'imageAlt'    => 'BarChip Macro synthetic fibre',
        'logo'        => asset('images/products/logo-macro.png'),
        'logoAlt'     => 'BarChip Macro',
        'description' => 'High-performance fibre for heavy load structures',
        'href'        => '#',
    ],
    [
        'image'       => asset('images/products/barchip-65.jpg'),
        'imageAlt'    => 'BarChip 65 synthetic fibre',
        'logo'        => asset('images/products/logo-65.png'),
        'logoAlt'     => 'BarChip 65',
        'description' => 'Engineered for demanding structural reinforcement',
        'href'        => '#',
    ],
];
@endphp

<section id="product"
         class="relative px-6 lg:px-[100px] py-12 lg:py-[48px] overflow-hidden">

    {{-- Subtle background texture --}}
    <img src="{{ asset('images/products-bg.jpg') }}"
         alt=""
         aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover opacity-[0.16] pointer-events-none">

    <div class="relative z-10 max-w-[1366px] mx-auto flex flex-col gap-6">

        {{-- Section header --}}
        <div class="flex flex-col gap-1">
            <p class="text-brand font-semibold text-base leading-normal uppercase tracking-wide">
                Product Section
            </p>
            <h2 class="text-ink font-medium text-3xl lg:text-[32px] leading-[1.2]">
                Seri Barchip
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
                    :href="$product['href']"
                />
            @endforeach
        </div>

    </div>
</section>
