@props([
    'question',
])

<li {{ $attributes }}>
    <details class="group">
        <summary class="cursor-pointer list-none flex items-center justify-between font-semibold text-secondary hover:text-primary transition-colors">
            {{ $question }}
            <span class="material-icons-outlined text-brand-gold group-open:rotate-180 transition-transform">expand_more</span>
        </summary>
        <p class="mt-2 text-text-main leading-relaxed">
            {{ $slot }}
        </p>
    </details>
</li>


