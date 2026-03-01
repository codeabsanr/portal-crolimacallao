@props([
    'eyebrow'   => '',
    'title'     => '',
    'subtitle'  => '',
    'backRoute' => '',
    'backLabel' => 'Volver',
    'icon'      => '',
])

@php
    $backHref = $backRoute ? route($backRoute) : null;
    $routeName = request()->route()?->getName() ?? '';

    $sectionKey = 'default';
    if (str_starts_with($routeName, 'tramites.')) {
        $sectionKey = 'tramites';
    } elseif (str_starts_with($routeName, 'capacitacion.')) {
        $sectionKey = 'capacitacion';
    } elseif (str_starts_with($routeName, 'colegiados.')) {
        $sectionKey = 'colegiados';
    } elseif (str_starts_with($routeName, 'actualidad.')) {
        $sectionKey = 'actualidad';
    } elseif (str_starts_with($routeName, 'normativa.')) {
        $sectionKey = 'normativa';
    }

    $themes = [
        'tramites' => [
            'label' => 'Trámites',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/15 text-brand-gold-light',
            'iconRing' => 'border-brand-gold-light/35 bg-brand-gold-soft/15',
            'iconText' => 'text-brand-gold-light/70',
            'traceClass' => 'inst-trace-invert-a',
        ],
        'capacitacion' => [
            'label' => 'Capacitación',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/15 text-brand-gold-light',
            'iconRing' => 'border-brand-gold-light/35 bg-brand-gold-soft/15',
            'iconText' => 'text-brand-gold-light/70',
            'traceClass' => 'inst-trace-invert-b',
        ],
        'colegiados' => [
            'label' => 'Colegiados',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/15 text-brand-gold-light',
            'iconRing' => 'border-brand-gold-light/35 bg-brand-gold-soft/15',
            'iconText' => 'text-brand-gold-light/70',
            'traceClass' => 'inst-trace-invert-a',
        ],
        'actualidad' => [
            'label' => 'Actualidad',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/15 text-brand-gold-light',
            'iconRing' => 'border-brand-gold-light/35 bg-brand-gold-soft/15',
            'iconText' => 'text-brand-gold-light/70',
            'traceClass' => 'inst-trace-invert-b',
        ],
        'normativa' => [
            'label' => 'Normativa',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/15 text-brand-gold-light',
            'iconRing' => 'border-brand-gold-light/35 bg-brand-gold-soft/15',
            'iconText' => 'text-brand-gold-light/70',
            'traceClass' => 'inst-trace-invert-a',
        ],
        'default' => [
            'label' => 'Institucional',
            'accentText' => 'text-brand-gold-light',
            'accentDivider' => 'bg-brand-gold-light',
            'chipClasses' => 'border-brand-gold-light/70 bg-brand-gold-soft/20 text-brand-gold-light',
            'iconRing' => 'border-white/15 bg-white/5',
            'iconText' => 'text-white/25',
            'traceClass' => 'inst-trace-invert-a',
        ],
    ];

    $theme = $themes[$sectionKey] ?? $themes['default'];
@endphp

<section class="relative overflow-hidden inst-bg-brand-grid {{ $theme['traceClass'] }} text-white">
    {{-- Barra decorativa dorada superior --}}
    <div class="absolute inset-x-0 top-0 h-[3px] bg-brand-gold"></div>

    {{-- Capas de profundidad --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_72%_44%,rgba(102,2,25,0.12),transparent_56%)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_24%_88%,rgba(186,124,0,0.1),transparent_40%)] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-6 sm:gap-8 items-center">
            <div class="inst-stack-tight">
                @if ($backHref)
                    <a href="{{ $backHref }}"
                        class="inline-flex min-h-[44px] items-center gap-1.5 text-white/75 hover:text-white text-xs font-semibold uppercase tracking-[0.14em] transition-colors group">
                        <span class="material-icons-outlined text-base group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
                        {{ $backLabel }}
                    </a>
                @endif

                {{-- Eyebrow --}}
                @if ($eyebrow)
                    <p class="inst-eyebrow text-brand-gold-light drop-shadow-sm">
                        {{ $eyebrow }}
                    </p>
                @endif

                <span class="inline-flex w-fit items-center gap-1.5 border px-2.5 py-1 text-[10px] font-black uppercase tracking-[0.1em] {{ $theme['chipClasses'] }}">
                    <span class="material-icons-outlined text-sm">verified</span>
                    {{ $theme['label'] }}
                </span>

                {{-- Título h1 --}}
                @if ($title)
                    <h1 class="inst-title text-white">
                        {{ $title }}
                    </h1>
                    <div class="h-[3px] w-16 {{ $theme['accentDivider'] }}"></div>
                @endif

                {{-- Subtítulo --}}
                @if ($subtitle)
                    <p class="max-w-2xl text-white/90 text-sm sm:text-base leading-relaxed">
                        {{ $subtitle }}
                    </p>
                @endif

                <button type="button"
                    class="inst-scroll-cue-btn"
                    aria-label="Desplazar al siguiente contenido"
                    onclick="window.scrollBy({ top: Math.max(window.innerHeight * 0.72, 420), behavior: 'smooth' });">
                    <span class="inst-scroll-cue-label">Desplazar</span>
                    <span class="inst-scroll-cue-arrows" aria-hidden="true">
                        <span class="material-icons-outlined inst-scroll-cue-icon">expand_more</span>
                        <span class="material-icons-outlined inst-scroll-cue-icon inst-scroll-cue-icon--delay">expand_more</span>
                    </span>
                </button>
            </div>

            {{-- Ícono decorativo desktop --}}
            @if ($icon)
                <div class="hidden lg:flex items-center justify-center w-28 h-28 rounded-full border backdrop-blur-sm shrink-0 {{ $theme['iconRing'] }}"
                    aria-hidden="true">
                    <span class="material-icons-outlined text-[3.5rem] {{ $theme['iconText'] }}">{{ $icon }}</span>
                </div>
            @endif
        </div>
    </div>

</section>



