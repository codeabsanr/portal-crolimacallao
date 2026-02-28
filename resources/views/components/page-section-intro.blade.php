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
        <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.16em] text-primary mb-2">
            {{ $eyebrow }}
        </p>
    @endif

    @if ($title)
        <h2 class="inst-section-title text-slate-900 leading-tight">
            {{ $title }}
        </h2>
        <div class="mt-3 h-[3px] w-16 bg-brand-gold-light {{ $barAlignClass }}"></div>
    @endif

    @if ($subtitle)
        <p class="mt-4 text-slate-600 text-sm sm:text-base leading-relaxed">
            {{ $subtitle }}
        </p>
    @endif
</div>
