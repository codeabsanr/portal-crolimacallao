@props([
    'eyebrow'  => '',
    'title'    => '',
    'subtitle' => '',
    'align'    => 'left',
])

@php
    $alignClass  = $align === 'center' ? 'text-center mx-auto' : '';
    $barAlignClass = $align === 'center' ? 'mx-auto' : '';
@endphp

<div class="mb-8 {{ $alignClass }} max-w-3xl">
    @if ($eyebrow)
        <p class="inst-eyebrow text-primary mb-2">
            {{ $eyebrow }}
        </p>
    @endif

    @if ($title)
        <h2 class="inst-title text-text-main leading-tight">
            {{ $title }}
        </h2>
        <div class="mt-3 h-[3px] w-16 bg-brand-gold-light {{ $barAlignClass }}"></div>
    @endif

    @if ($subtitle)
        <p class="inst-subtitle mt-4">
            {{ $subtitle }}
        </p>
    @endif
</div>


