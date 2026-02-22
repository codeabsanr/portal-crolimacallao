@props([
    'question',
])

<li {{ $attributes }}>
    <details class="group">
        <summary class="cursor-pointer list-none flex items-center justify-between font-semibold text-slate-900">
            {{ $question }}
            <span class="material-icons-outlined group-open:rotate-180 transition-transform">expand_more</span>
        </summary>
        <p class="mt-2 text-slate-600">
            {{ $slot }}
        </p>
    </details>
</li>
