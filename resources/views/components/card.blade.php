@props([
    'title',
    'description',
    'icon',
    'link' => null,
    'linkText' => 'Ver más',
])

<article {{ $attributes->merge(['class' => 'inst-card p-6 border-l-4 border-primary h-full flex flex-col']) }}>
    <div class="h-10 w-10 bg-primary/10 text-primary flex items-center justify-center mb-4">
        <span class="material-icons-outlined">{{ $icon }}</span>
    </div>

    <h3 class="text-slate-900 mb-2 leading-tight">{{ $title }}</h3>

    <p class="text-slate-600 mb-5">
        {{ $description }}
    </p>

    @if ($link)
        <a class="inst-btn-secondary !px-4 !py-2 mt-auto self-start" href="{{ $link }}">
            {{ $linkText }}
        </a>
    @endif
</article>
