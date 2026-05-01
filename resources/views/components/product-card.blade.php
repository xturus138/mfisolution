@props([
    'image',
    'imageAlt' => '',
    'logo',
    'logoAlt' => '',
    'description',
    'href' => '#',
])

<div class="flex flex-col gap-3 bg-white">

    {{-- Product photo --}}
    <div class="h-[200px] overflow-hidden bg-white shrink-0">
        <img src="{{ $image }}"
             alt="{{ $imageAlt }}"
             class="w-full h-full object-cover">
    </div>

    {{-- Card body --}}
    <div class="flex flex-col gap-2 p-3">

        {{-- Product name logo --}}
        <img src="{{ $logo }}"
             alt="{{ $logoAlt }}"
             class="h-6 object-contain object-left">

        {{-- Description --}}
        <p class="text-muted text-base leading-relaxed">{{ $description }}</p>

        {{-- See More link --}}
        <a href="{{ $href }}"
           class="flex items-center gap-2 text-brand text-base leading-normal hover:gap-3 transition-all group">
            See More
            <x-icon.arrow-right class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" />
        </a>
    </div>

</div>
