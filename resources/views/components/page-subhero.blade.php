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

<section class="relative overflow-hidden inst-bg-brand-grid text-text-main">
    {{-- Barra decorativa dorada superior --}}
    <div class="absolute inset-x-0 top-0 h-[3px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>

    {{-- Capas de profundidad --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_72%_44%,rgba(102,2,25,0.08),transparent_56%)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_24%_88%,rgba(186,124,0,0.08),transparent_40%)] pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-8 items-center">
            <div class="inst-stack-tight">
                {{-- Breadcrumb / enlace de regreso --}}
                @if ($backHref)
                    <a href="{{ $backHref }}"
                       class="inline-flex min-h-[44px] items-center gap-1.5 text-text-main/80 hover:text-primary text-xs font-semibold uppercase tracking-[0.14em] transition-colors group">
                        <span class="material-icons-outlined text-base group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
                        {{ $backLabel }}
                    </a>
                @endif

                {{-- Eyebrow --}}
                @if ($eyebrow)
                    <p class="inst-eyebrow text-primary drop-shadow-sm">
                        {{ $eyebrow }}
                    </p>
                @endif

                {{-- Título h1 --}}
                @if ($title)
                    <h1 class="inst-title text-text-main">
                        {{ $title }}
                    </h1>
                    <div class="h-[3px] w-16 bg-primary"></div>
                @endif

                {{-- Subtítulo --}}
                @if ($subtitle)
                    <p class="max-w-2xl text-text-main text-sm sm:text-base leading-relaxed">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>

            {{-- Ícono decorativo desktop --}}
            @if ($icon)
                <div class="hidden lg:flex items-center justify-center w-28 h-28 rounded-full
                            border border-primary/20 bg-primary-tint/55 backdrop-blur-sm shrink-0"
                     aria-hidden="true">
                    <span class="material-icons-outlined text-[3.5rem] text-primary/35">{{ $icon }}</span>
                </div>
            @endif
        </div>
    </div>
</section>



