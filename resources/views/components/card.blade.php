@props([
    'title',
    'description',
    'icon',
    'link' => null,
    'linkText' => 'Ver más',
])

<article {{ $attributes->merge(['class' => 'group inst-card p-6 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] h-full flex flex-col transition-[border-color,box-shadow,background-color] duration-300 hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)]']) }}>
    <div class="h-10 w-10 bg-primary/10 text-primary flex items-center justify-center mb-4 transition-colors duration-300 group-hover:bg-brand-gold-soft">
        <span class="material-icons-outlined">{{ $icon }}</span>
    </div>

    <h3 class="text-slate-900 mb-2 leading-tight">{{ $title }}</h3>

    <p class="text-slate-600 mb-5">
        {{ $description }}
    </p>

    @if ($link)
        <a class="inst-btn-secondary !px-4 !py-2 mt-auto self-start !border-primary !text-primary hover:!bg-brand-gold-soft" href="{{ $link }}">
            {{ $linkText }}
        </a>
    @endif
</article>
