@props(['title', 'description'])

<div class="bg-white border border-border flex flex-col gap-4 p-4">

    {{-- Icon badge --}}
    <div class="bg-brand-light p-3 rounded-lg w-fit">
        {{ $icon }}
    </div>

    {{-- Text --}}
    <div class="flex flex-col gap-1">
        <h3 class="text-brand font-semibold text-lg leading-normal">{{ $title }}</h3>
        <p class="text-muted text-sm leading-relaxed">{{ $description }}</p>
    </div>

</div>
