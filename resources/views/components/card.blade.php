@props([
    'title',
    'description',
    'icon',
    'link' => null,
    'linkText' => 'Ver más',
])

<article {{ $attributes->merge(['class' => 'group inst-card p-7 sm:p-8 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] h-full flex flex-col transition-[border-color,box-shadow,background-color,transform] duration-300 hover:-translate-y-[2px] hover:border-primary hover:shadow-[0_22px_34px_-24px_rgba(102,2,25,0.52)]']) }}>
    <div class="h-11 w-11 bg-primary/10 text-primary flex items-center justify-center mb-5 transition-colors duration-300 group-hover:bg-brand-gold-soft">
        <span class="material-icons-outlined">{{ $icon }}</span>
    </div>

    <h3 class="text-text-main text-[1.2rem] font-black mb-3 leading-tight">{{ $title }}</h3>

    <p class="text-text-main leading-relaxed mb-6">
        {{ $description }}
    </p>

    @if ($link)
        <a class="inst-btn-secondary !px-4 !py-2 mt-auto self-start !border-primary !text-primary hover:!bg-brand-gold-soft" href="{{ $link }}">
            {{ $linkText }}
        </a>
    @endif
</article>


