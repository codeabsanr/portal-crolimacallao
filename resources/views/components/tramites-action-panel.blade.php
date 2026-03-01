@props([
    'title' => 'Registrar y monitorear',
    'sectionLabel' => 'Acciones',
    'primaryLabel' => 'Registrar expediente',
    'primaryHref' => '#',
    'primaryIcon' => 'description',
    'secondaryLabel' => 'Seguimiento del trámite',
    'secondaryHref' => '#',
    'secondaryIcon' => 'timeline',
    'tertiaryLabel' => 'Orientación institucional',
    'tertiaryHref' => '#',
    'tertiaryIcon' => 'support_agent',
    'referenceCode' => null,
    'referenceHref' => null,
    'referenceLabel' => 'Código de referencia',
    'referenceIcon' => 'tag',
    'hintText' => 'Si aún no iniciaste, registra tu expediente para continuar el flujo.',
    'hintCtaLabel' => 'Ir a la acción sugerida',
    'hintCtaHref' => null,
    'hintIcon' => 'lightbulb',
    'idleMs' => 14000,
])

<aside class="inst-card p-5 sm:p-6 border border-primary/20 bg-white inst-stack-tight"
    x-data="{
        idle: false,
        mobileOpen: false,
        timer: null,
        start() {
            this.reset();
        },
        reset() {
            this.idle = false;
            if (this.timer) clearTimeout(this.timer);
            this.timer = setTimeout(() => { this.idle = true; }, {{ (int) $idleMs }});
        }
    }"
    x-init="start()"
    @mousemove.window="reset()"
    @keydown.window="reset()"
    @touchstart.window="reset()">
    <p class="inst-kicker">{{ $sectionLabel }}</p>
    <h3 class="text-xl sm:text-2xl font-black text-text-main">{{ $title }}</h3>

    <a href="{{ $primaryHref }}"
        class="inst-btn-primary !w-full !justify-start !gap-2.5 !px-4 transition-shadow"
        :class="idle ? 'ring-2 ring-brand-gold/40 shadow-[0_12px_24px_-16px_rgba(186,124,0,0.8)]' : ''">
        <span class="material-icons-outlined text-base">{{ $primaryIcon }}</span>
        <span>{{ $primaryLabel }}</span>
    </a>

    <a href="{{ $secondaryHref }}" class="inst-btn-secondary !w-full !justify-start !gap-2.5 !px-4">
        <span class="material-icons-outlined text-base">{{ $secondaryIcon }}</span>
        <span>{{ $secondaryLabel }}</span>
    </a>

    <a href="{{ $tertiaryHref }}" class="inst-btn-secondary !w-full !justify-start !gap-2.5 !px-4">
        <span class="material-icons-outlined text-base">{{ $tertiaryIcon }}</span>
        <span>{{ $tertiaryLabel }}</span>
    </a>

    <div x-cloak x-show="idle" x-transition.opacity.duration.300ms class="rounded-sm border border-brand-gold/35 bg-brand-gold-soft/35 p-3">
        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold inline-flex items-center gap-1.5">
            <span class="material-icons-outlined text-[1rem]">{{ $hintIcon }}</span>Sugerencia
        </p>
        <p class="text-sm text-text-main mt-1">{{ $hintText }}</p>
        @if ($hintCtaHref)
            <a href="{{ $hintCtaHref }}" class="inst-link mt-1.5 inline-flex items-center gap-1.5 text-sm">
                <span class="material-icons-outlined text-[1rem]">north_east</span>{{ $hintCtaLabel }}
            </a>
        @endif
    </div>

    @if ($referenceCode)
        <div class="border-t border-primary/15 pt-4">
            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $referenceLabel }}</p>
            @if ($referenceHref)
                <a class="inst-link inline-flex items-center gap-2 mt-2 break-all" href="{{ $referenceHref }}">
                    <span class="material-icons-outlined text-base text-primary">{{ $referenceIcon }}</span>{{ $referenceCode }}
                </a>
            @else
                <p class="inline-flex items-center gap-2 mt-2 text-text-main break-all">
                    <span class="material-icons-outlined text-base text-primary">{{ $referenceIcon }}</span>{{ $referenceCode }}
                </p>
            @endif
        </div>
    @endif

    {{-- Dock móvil estilo programa de capacitación: CTA principal persistente + panel de acciones --}}
    <div class="fixed bottom-0 inset-x-0 z-[65] lg:hidden border-t border-primary/20 bg-white/95 backdrop-blur-sm">
        <div class="px-4 py-3 grid grid-cols-[1fr_auto] gap-2 items-center">
            <a href="{{ $primaryHref }}"
                class="inst-btn !w-full !min-h-[46px] !bg-primary !text-white hover:!bg-primary-dark !font-black !text-sm !justify-center"
                :class="idle ? 'ring-2 ring-brand-gold/40 shadow-[0_12px_24px_-16px_rgba(186,124,0,0.85)]' : ''">
                <span class="material-icons-outlined text-base">{{ $primaryIcon }}</span>
                <span>{{ $primaryLabel }}</span>
            </a>

            <button type="button"
                class="inst-btn-secondary !min-h-[46px] !px-3.5 !py-2 !justify-center"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen.toString()"
                aria-controls="tramites-mobile-actions-panel">
                <span class="material-icons-outlined text-[1.15rem]" x-text="mobileOpen ? 'expand_more' : 'tune'"></span>
            </button>
        </div>

        <div id="tramites-mobile-actions-panel"
            x-cloak
            x-show="mobileOpen"
            x-transition.opacity.duration.180ms
            class="border-t border-primary/15 px-4 pb-[max(1rem,env(safe-area-inset-bottom))]">
            <div class="pt-2.5 space-y-2.5">
                <a href="{{ $secondaryHref }}" class="inst-btn-secondary !w-full !justify-start !gap-2.5 !px-4">
                    <span class="material-icons-outlined text-base">{{ $secondaryIcon }}</span>
                    <span>{{ $secondaryLabel }}</span>
                </a>
                <a href="{{ $tertiaryHref }}" class="inst-btn-secondary !w-full !justify-start !gap-2.5 !px-4">
                    <span class="material-icons-outlined text-base">{{ $tertiaryIcon }}</span>
                    <span>{{ $tertiaryLabel }}</span>
                </a>
                @if ($referenceCode)
                    <div class="border border-primary/15 p-2.5 bg-primary-tint/15">
                        <p class="text-[11px] uppercase tracking-[0.12em] text-primary font-bold">{{ $referenceLabel }}</p>
                        @if ($referenceHref)
                            <a class="inst-link inline-flex items-center gap-2 mt-1 break-all text-sm" href="{{ $referenceHref }}">
                                <span class="material-icons-outlined text-base text-primary">{{ $referenceIcon }}</span>{{ $referenceCode }}
                            </a>
                        @else
                            <p class="inline-flex items-center gap-2 mt-1 text-sm text-text-main break-all">
                                <span class="material-icons-outlined text-base text-primary">{{ $referenceIcon }}</span>{{ $referenceCode }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</aside>
