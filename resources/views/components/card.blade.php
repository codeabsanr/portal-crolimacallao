@props(['title', 'description', 'icon', 'link', 'linkText' => 'Ver más'])

<div
    class="bg-surface-light dark:bg-surface-dark p-8 rounded-md shadow-sm hover:shadow-lg transition-shadow border-l-4 border-primary group cursor-pointer relative overflow-hidden">
    <div
        class="absolute top-4 right-4 bg-red-50 dark:bg-slate-700 p-3 rounded-full group-hover:bg-primary group-hover:text-white transition-colors text-primary dark:text-red-400">
        <span class="material-icons-outlined text-3xl">{{ $icon }}</span>
    </div>

    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 mt-2">{{ $title }}</h3>

    <p class="text-slate-600 dark:text-slate-300 mb-8 text-lg leading-relaxed">
        {{ $description }}
    </p>

    @if(isset($link))
        <a class="inline-flex items-center text-primary font-bold text-lg hover:underline decoration-2 underline-offset-4"
            href="{{ $link }}">
            {{ $linkText }} <span class="material-icons-outlined ml-2">arrow_forward</span>
        </a>
    @endif
</div>