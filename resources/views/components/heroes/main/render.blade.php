@props([
    'hero' => [],
    'theme' => [],
    'ads' => [],
    'breadcrumb' => null,
])

@php
    $cta1Href = $hero['cta1']['href'] ?? (!empty($hero['cta1']['route']) ? route($hero['cta1']['route']) : null);
    $cta2Href = $hero['cta2']['href'] ?? (!empty($hero['cta2']['route']) ? route($hero['cta2']['route']) : null);
    $cta1IsAnchor = is_string($cta1Href) && str_starts_with($cta1Href, '#');
    $routeName = request()->route()?->getName();
@endphp

<section class="relative overflow-hidden inst-bg-brand-grid {{ $theme['trace'] }} text-white">
    <div class="absolute inset-0 {{ $theme['overlay'] }}"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-7 flex self-start">
                <div class="w-full inst-stack-tight">
                    @if ($breadcrumb)
                        <nav aria-label="Breadcrumb principal"
                            class="inline-flex w-fit items-center gap-2 border border-white/25 bg-white/5 px-3 py-2 text-xs sm:text-sm font-semibold backdrop-blur-sm">
                            <a href="{{ route('home') }}" class="text-white hover:text-white/85 transition-colors">Inicio</a>
                            <span class="material-icons-outlined text-base leading-none text-white/80">chevron_right</span>
                            <span class="text-white/90">{{ $breadcrumb['section'] }}</span>
                            <span class="material-icons-outlined text-base leading-none text-white/80">chevron_right</span>
                            <span class="{{ $theme['accentText'] }}">{{ $breadcrumb['current'] }}</span>
                        </nav>
                    @endif

                    <p class="inst-eyebrow {{ $theme['accentText'] }}">{{ $hero['eyebrow'] }}</p>
                    <h1 class="inst-title text-white">{{ $hero['title'] }}</h1>
                    <div class="h-[3px] w-20 {{ $theme['divider'] }}"></div>
                    <p class="inst-subtitle text-white/90">{{ $hero['summary'] }}</p>

                    <div class="flex flex-col sm:flex-row gap-3">
                        @if (!empty($hero['cta1']['text']) && $cta1Href)
                            <a href="{{ $cta1Href }}"
                                class="inline-flex min-h-[44px] items-center justify-center gap-2 rounded-sm px-6 py-2.5 text-sm sm:text-base font-bold transition-colors shadow-lg hover:shadow-xl {{ $theme['cta1'] }} {{ $routeName === 'contacto' && $cta1IsAnchor ? 'inst-btn-scroll-guide' : '' }}">
                                <span>{{ $hero['cta1']['text'] }}</span>
                                @if ($routeName === 'contacto' && $cta1IsAnchor)
                                    <span aria-hidden="true" class="material-icons-outlined text-lg">south</span>
                                @endif
                            </a>
                        @endif
                        @if (!empty($hero['cta2']['text']) && $cta2Href)
                            <a href="{{ $cta2Href }}"
                                class="inline-flex min-h-[44px] items-center justify-center rounded-sm border bg-white/5 px-6 py-2.5 text-sm sm:text-base font-bold text-white transition-colors hover:bg-white/10 backdrop-blur-sm {{ $theme['cta2'] }}">
                                {{ $hero['cta2']['text'] }}
                            </a>
                        @endif
                    </div>

                    <button type="button" class="inst-scroll-cue-btn" aria-label="Desplazar al siguiente contenido"
                        onclick="window.scrollBy({ top: Math.max(window.innerHeight * 0.72, 420), behavior: 'smooth' });">
                        <span class="inst-scroll-cue-label">Desplazar</span>
                        <span class="inst-scroll-cue-arrows" aria-hidden="true">
                            <span class="material-icons-outlined inst-scroll-cue-icon">expand_more</span>
                            <span class="material-icons-outlined inst-scroll-cue-icon inst-scroll-cue-icon--delay">expand_more</span>
                        </span>
                    </button>
                </div>
            </div>

            <aside class="lg:col-span-5 flex flex-col self-start gap-2.5">
                <div x-data="{
                            ads: @js($ads),
                            current: 0,
                            timer: null,
                            progressKey: 0,
                            reducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
                            next() {
                                if (this.ads.length <= 1) return;
                                this.current = (this.current + 1) % this.ads.length;
                                this.progressKey++;
                                this.schedule();
                            },
                            go(index) {
                                this.current = index;
                                this.progressKey++;
                                this.schedule();
                            },
                            schedule() {
                                this.stop();
                                if (this.ads.length <= 1 || this.reducedMotion) return;
                                const delay = this.ads[this.current]?.duration_ms ?? 6000;
                                this.timer = setTimeout(() => this.next(), delay);
                            },
                            start() {
                                if (!this.ads.length) return;
                                this.progressKey++;
                                this.schedule();
                            },
                            stop() {
                                if (this.timer) {
                                    clearTimeout(this.timer);
                                    this.timer = null;
                                }
                            }
                        }"
                    x-init="start()"
                    @mouseenter="stop()"
                    @mouseleave="schedule()">
                    <div class="relative inst-hero-ads-stage rounded-sm overflow-hidden shadow-[0_22px_40px_-20px_rgba(0,0,0,0.65)] ring-1 ring-white/10 group">
                        <template x-for="(ad, idx) in ads" :key="idx">
                            <article class="absolute inset-0 transition-all duration-500 ease-[cubic-bezier(.2,.7,.2,1)]"
                                :class="idx === current ? 'opacity-100 translate-y-0 pointer-events-auto' : 'opacity-0 translate-y-1 pointer-events-none'"
                                :aria-hidden="idx === current ? 'false' : 'true'">
                                <div class="absolute inset-0 bg-primary-dark"></div>
                                <img :src="ad.image" :alt="ad.titulo" class="absolute inset-0 h-full w-full object-contain object-center">
                                <div class="absolute inset-0" :style="`background: ${ad.overlay};`"></div>
                                <div class="absolute top-3 left-3 z-10">
                                    <span class="inline-flex px-2.5 py-1 text-[10px] font-black uppercase tracking-[0.12em] text-white bg-primary rounded-sm shadow"
                                        x-text="ad.tipo"></span>
                                </div>
                            </article>
                        </template>

                        <div class="inst-hero-ads-dots" aria-label="Indicadores de publicidad">
                            <template x-for="(ad, idx) in ads" :key="`dot-${idx}`">
                                <button type="button" @click="go(idx)" class="inst-hero-ads-dot"
                                    :class="idx === current ? 'is-active' : ''"
                                    :aria-label="`Ir a publicidad ${idx + 1}`"
                                    :aria-current="idx === current ? 'true' : 'false'">
                                    <template x-if="idx === current">
                                        <span class="inst-hero-ads-dot-progress" :key="`progress-${idx}-${progressKey}`"
                                            :style="reducedMotion ? '' : `animation: heroDotDrain ${ads[current]?.duration_ms ?? 6000}ms linear forwards;`"></span>
                                    </template>
                                </button>
                            </template>
                        </div>
                    </div>

                    <a :href="ads[current].cta_href"
                        class="flex w-full items-center justify-center gap-2 min-h-[44px] px-5 py-3 text-sm font-bold uppercase tracking-[0.1em] text-white transition-[background-color,opacity,box-shadow] duration-200 hover:opacity-90 shadow"
                        :class="{
                            'bg-primary hover:bg-primary-dark': ads[current].tone === 'informacion',
                            'bg-primary-soft hover:bg-primary': ads[current].tone === 'desarrollo',
                            'bg-primary-light hover:bg-primary': ads[current].tone === 'calendario',
                            'bg-brand-gold hover:bg-brand-gold-light': ads[current].tone === 'tramites',
                            'bg-primary hover:bg-primary-dark': ads[current].tone === 'normativa'
                        }"
                        x-text="ads[current].cta_text"></a>
                </div>
            </aside>
        </div>
    </div>
</section>
