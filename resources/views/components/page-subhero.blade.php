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
@endphp

<section class="relative overflow-hidden bg-inst-hero text-white">
    {{-- Barra decorativa dorada superior --}}
    <div class="absolute inset-x-0 top-0 h-[3px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>

    {{-- Capas de profundidad --}}
    <div class="absolute inset-0 bg-inst-hero-overlay opacity-50 mix-blend-overlay pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_50%,rgba(186,124,0,0.14),transparent_55%)] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-6 items-center">
            <div>
                {{-- Breadcrumb / enlace de regreso --}}
                @if ($backHref)
                    <a href="{{ $backHref }}"
                       class="inline-flex items-center gap-1.5 text-white/70 hover:text-white text-xs font-semibold uppercase tracking-[0.14em] transition-colors mb-4 group">
                        <span class="material-icons-outlined text-base group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
                        {{ $backLabel }}
                    </a>
                @endif

                {{-- Eyebrow --}}
                @if ($eyebrow)
                    <p class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.18em] text-brand-gold-light drop-shadow-sm">
                        {{ $eyebrow }}
                    </p>
                @endif

                {{-- Título h1 --}}
                @if ($title)
                    <h1 class="mt-2 text-[clamp(1.75rem,5vw,2.75rem)] font-black tracking-tight leading-[1.08] text-white drop-shadow-sm">
                        {{ $title }}
                    </h1>
                    <div class="mt-4 h-[3px] w-16 bg-brand-gold-light"></div>
                @endif

                {{-- Subtítulo --}}
                @if ($subtitle)
                    <p class="mt-4 max-w-2xl text-white/85 text-sm sm:text-base leading-relaxed">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>

            {{-- Ícono decorativo desktop --}}
            @if ($icon)
                <div class="hidden lg:flex items-center justify-center w-28 h-28 rounded-full
                            border border-white/15 bg-white/5 backdrop-blur-sm shrink-0"
                     aria-hidden="true">
                    <span class="material-icons-outlined text-[3.5rem] text-white/25">{{ $icon }}</span>
                </div>
            @endif
        </div>
    </div>
</section>
