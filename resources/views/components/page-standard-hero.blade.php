@php
    $routeName = request()->route()?->getName();

    $map = [
        'institucional' => [
            'eyebrow' => 'Gestion institucional',
            'title' => 'Informacion institucional',
            'summary' => 'Conozca autoridades, reglamentos y convenios del Colegio Regional de Obstetras III Lima-Callao.',
            'cta1' => ['text' => 'Ver quienes somos', 'route' => 'institucional.quienes-somos'],
            'cta2' => ['text' => 'Ver normatividad', 'route' => 'institucional.normatividad'],
        ],
        'contacto' => [
            'eyebrow' => 'Canales de atencion',
            'title' => 'Contactanos',
            'summary' => 'Atencion directa para consultas institucionales, tramites y soporte para colegiados.',
            'cta1' => ['text' => 'Ir al formulario', 'href' => '#contacto-formulario'],
            'cta2' => ['text' => 'Llamar ahora', 'href' => 'tel:+51982520891'],
        ],
        'tramites' => [
            'eyebrow' => 'Tramites y servicios',
            'title' => 'Gestion de tramites',
            'summary' => 'Revise requisitos, plazos y pasos para colegiatura, habilidad, carne y mesa de partes.',
            'cta1' => ['text' => 'Ir al catalogo', 'href' => '#tramites-contenido'],
            'cta2' => ['text' => 'Mesa de partes', 'route' => 'tramites.mesa-partes'],
        ],
        'colegiados' => [
            'eyebrow' => 'Servicios para colegiados',
            'title' => 'Servicios y consultas',
            'summary' => 'Acceda a buscador, listados oficiales y guia de uso para consultas institucionales.',
            'cta1' => ['text' => 'Buscar obstetra', 'route' => 'colegiados.buscador'],
            'cta2' => ['text' => 'Ver listados', 'route' => 'colegiados.listados'],
        ],
        'capacitacion' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Capacitacion institucional',
            'summary' => 'Encuentre cursos, congresos y calendario academico para su actualizacion profesional.',
            'cta1' => ['text' => 'Ver cursos', 'route' => 'capacitacion.cursos'],
            'cta2' => ['text' => 'Ver calendario', 'route' => 'capacitacion.calendario'],
        ],
        'actualidad' => [
            'eyebrow' => 'Informacion institucional',
            'title' => 'Actualidad y comunicados',
            'summary' => 'Revise noticias, comunicados y eventos oficiales del colegio en un solo lugar.',
            'cta1' => ['text' => 'Ver noticias', 'route' => 'actualidad.noticias'],
            'cta2' => ['text' => 'Ver comunicados', 'route' => 'actualidad.comunicados'],
        ],
        'normativa' => [
            'eyebrow' => 'Normativa y cumplimiento',
            'title' => 'Marco normativo',
            'summary' => 'Consulte leyes, reglamentos y guias para el ejercicio profesional y la gestion institucional.',
            'cta1' => ['text' => 'Ir al repositorio', 'route' => 'normativa.repositorio'],
            'cta2' => ['text' => 'Ver leyes', 'route' => 'normativa.leyes'],
        ],
        'admin.intranet' => [
            'eyebrow' => 'Portal privado',
            'title' => 'Intranet institucional',
            'summary' => 'Acceda a su perfil, tramites, pagos y documentos en un entorno seguro.',
            'cta1' => ['text' => 'Ver perfil', 'route' => 'portal.colegiado.perfil'],
            'cta2' => ['text' => 'Ver tramites', 'route' => 'portal.colegiado.tramites'],
        ],
        'terminos' => [
            'eyebrow' => 'Marco legal',
            'title' => 'Terminos y condiciones',
            'summary' => 'Revise las condiciones de uso del portal institucional y sus responsabilidades.',
            'cta1' => ['text' => 'Ver politica de privacidad', 'route' => 'privacidad'],
            'cta2' => ['text' => 'Ir a contacto', 'route' => 'contacto'],
        ],
        'privacidad' => [
            'eyebrow' => 'Marco legal',
            'title' => 'Politica de privacidad',
            'summary' => 'Conozca como tratamos y protegemos sus datos personales en los servicios del portal.',
            'cta1' => ['text' => 'Ver terminos y condiciones', 'route' => 'terminos'],
            'cta2' => ['text' => 'Ir a contacto', 'route' => 'contacto'],
        ],
    ];

    $heroAds = [
        [
            'tipo' => 'Informacion institucional',
            'titulo' => 'Actualidad y comunicados',
            'descripcion' => 'Revise noticias, comunicados y eventos oficiales del colegio en un solo lugar.',
            'cta_text' => 'Ver comunicados',
            'cta_href' => route('actualidad.comunicados'),
            'tone' => 'informacion',
            'image' => asset('assets/img/ads/ads_01.jpeg'),
            'duration_ms' => 5000,
            'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.12) 0%, rgba(22,30,55,0.28) 100%)',
        ],
        [
            'tipo' => 'Desarrollo profesional',
            'titulo' => 'Capacitacion institucional',
            'descripcion' => 'Encuentre cursos, congresos y calendario academico para su actualizacion profesional.',
            'cta_text' => 'Ver cursos',
            'cta_href' => route('capacitacion.cursos'),
            'tone' => 'desarrollo',
            'image' => asset('assets/img/ads/ads_02.jpeg'),
            'duration_ms' => 9000,
            'overlay' => 'linear-gradient(170deg, rgba(12,72,98,0.12) 0%, rgba(15,23,42,0.26) 100%)',
        ],
        [
            'tipo' => 'Desarrollo profesional',
            'titulo' => 'Capacitacion institucional',
            'descripcion' => 'Encuentre cursos, congresos y calendario academico para su actualizacion profesional.',
            'cta_text' => 'Ver calendario',
            'cta_href' => route('capacitacion.calendario'),
            'tone' => 'calendario',
            'image' => asset('assets/img/ads/ads_03.jpeg'),
            'duration_ms' => 6500,
            'overlay' => 'linear-gradient(170deg, rgba(26,78,59,0.12) 0%, rgba(15,23,42,0.26) 100%)',
        ],
        [
            'tipo' => 'Tramites y servicios',
            'titulo' => 'Gestion de tramites',
            'descripcion' => 'Revise requisitos, plazos y pasos para colegiatura, habilidad, carne y mesa de partes.',
            'cta_text' => 'Mesa de partes',
            'cta_href' => route('tramites.mesa-partes'),
            'tone' => 'tramites',
            'image' => asset('assets/img/ads/ads_04.jpeg'),
            'duration_ms' => 4200,
            'overlay' => 'linear-gradient(170deg, rgba(148,79,8,0.14) 0%, rgba(15,23,42,0.28) 100%)',
        ],
        [
            'tipo' => 'Normativa y cumplimiento',
            'titulo' => 'Marco normativo',
            'descripcion' => 'Consulte leyes, reglamentos y guias para el ejercicio profesional y la gestion institucional.',
            'cta_text' => 'Ir al repositorio',
            'cta_href' => route('normativa.repositorio'),
            'tone' => 'normativa',
            'image' => asset('assets/img/ads/ads_05.jpeg'),
            'duration_ms' => 8000,
            'overlay' => 'linear-gradient(170deg, rgba(67,56,202,0.12) 0%, rgba(15,23,42,0.26) 100%)',
        ],
    ];

    $hero = $map[$routeName] ?? null;

    if (!$hero && is_string($routeName)) {
        $prefixFallbacks = [
            'institucional.' => 'institucional',
            'tramites.' => 'tramites',
            'colegiados.' => 'colegiados',
            'capacitacion.' => 'capacitacion',
            'actualidad.' => 'actualidad',
            'normativa.' => 'normativa',
            'portal.colegiado.' => 'admin.intranet',
        ];

        foreach ($prefixFallbacks as $prefix => $fallbackKey) {
            if (str_starts_with($routeName, $prefix) && isset($map[$fallbackKey])) {
                $hero = $map[$fallbackKey];
                break;
            }
        }
    }
@endphp

@if ($hero)
    @php($cta1Href = $hero['cta1']['href'] ?? (!empty($hero['cta1']['route']) ? route($hero['cta1']['route']) : null))
    @php($cta2Href = $hero['cta2']['href'] ?? (!empty($hero['cta2']['route']) ? route($hero['cta2']['route']) : null))
    @php($cta1IsAnchor = is_string($cta1Href) && str_starts_with($cta1Href, '#'))

    <section class="relative overflow-hidden min-h-0 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                <div class="lg:col-span-7 flex self-start">
                    <div class="w-full rounded-sm border border-slate-200 bg-white p-5 sm:p-6 md:p-7 shadow-inst">
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.14em] text-primary">{{ $hero['eyebrow'] }}</p>
                        <h1 class="mt-3 text-3xl md:text-4xl font-black tracking-tight leading-tight text-secondary">{{ $hero['title'] }}</h1>
                        <div class="mt-3 h-[3px] w-20 bg-brand-gold-light"></div>
                        <p class="mt-4 text-base md:text-lg leading-relaxed text-slate-700">{{ $hero['summary'] }}</p>

                        <div class="mt-6 flex flex-col sm:flex-row gap-2.5">
                            @if (!empty($hero['cta1']['text']) && $cta1Href)
                                <a href="{{ $cta1Href }}" class="inline-flex min-h-[44px] items-center justify-center gap-2 rounded-sm bg-brand-gold px-5 py-2.5 text-sm sm:text-base font-bold text-primary transition-colors hover:bg-brand-gold-light {{ $routeName === 'contacto' && $cta1IsAnchor ? 'inst-btn-scroll-guide' : '' }}">
                                    <span>{{ $hero['cta1']['text'] }}</span>
                                    @if ($routeName === 'contacto' && $cta1IsAnchor)
                                        <span aria-hidden="true" class="material-icons-outlined text-lg">south</span>
                                    @endif
                                </a>
                            @endif
                            @if (!empty($hero['cta2']['text']) && $cta2Href)
                                <a href="{{ $cta2Href }}" class="inline-flex min-h-[44px] items-center justify-center rounded-sm border border-primary px-5 py-2.5 text-sm sm:text-base font-bold text-primary transition-colors hover:bg-brand-gold-soft">
                                    {{ $hero['cta2']['text'] }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <aside class="lg:col-span-5 flex self-start">
                    <div
                        x-data="{
                            ads: @js($heroAds),
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
                        @mouseleave="schedule()"
                        class="w-full rounded-sm border border-slate-200 bg-white shadow-inst overflow-hidden"
                    >
                        <div class="relative inst-hero-ads-stage">
                            <template x-for="(ad, idx) in ads" :key="idx">
                                <article
                                    class="absolute inset-0 transition-all duration-500 ease-[cubic-bezier(.2,.7,.2,1)]"
                                    :class="idx === current ? 'opacity-100 translate-y-0 pointer-events-auto' : 'opacity-0 translate-y-1 pointer-events-none'"
                                    :aria-hidden="idx === current ? 'false' : 'true'"
                                >
                                    <div class="absolute inset-0 bg-slate-900"></div>
                                    <img :src="ad.image" :alt="ad.titulo" class="absolute inset-0 h-full w-full object-contain object-center">
                                    <div class="absolute inset-0" :style="`background: ${ad.overlay};`"></div>
                                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/72 via-black/15 to-transparent"></div>
                                    <div class="relative z-10 h-full flex items-end p-4 sm:p-5">
                                        <a
                                            :href="ad.cta_href"
                                            class="inline-flex min-h-[44px] w-fit items-center justify-center rounded-sm px-4 py-2 text-sm font-bold text-white transition-colors"
                                            :class="{
                                                'bg-primary hover:bg-primary-dark': ad.tone === 'informacion',
                                                'bg-cyan-700 hover:bg-cyan-800': ad.tone === 'desarrollo',
                                                'bg-emerald-700 hover:bg-emerald-800': ad.tone === 'calendario',
                                                'bg-brand-gold hover:bg-brand-gold-light !text-white': ad.tone === 'tramites',
                                                'bg-indigo-700 hover:bg-indigo-800': ad.tone === 'normativa'
                                            }"
                                            x-text="ad.cta_text"
                                        ></a>
                                    </div>
                                </article>
                            </template>

                            <div class="inst-hero-ads-dots" aria-label="Indicadores de publicidad">
                                <template x-for="(ad, idx) in ads" :key="`dot-${idx}`">
                                    <button
                                        type="button"
                                        @click="go(idx)"
                                        class="inst-hero-ads-dot"
                                        :class="idx === current ? 'is-active' : ''"
                                        :aria-label="`Ir a publicidad ${idx + 1}`"
                                        :aria-current="idx === current ? 'true' : 'false'"
                                    >
                                        <template x-if="idx === current">
                                            <span
                                                class="inst-hero-ads-dot-progress"
                                                :key="`progress-${idx}-${progressKey}`"
                                                :style="reducedMotion ? '' : `animation: heroDotDrain ${ads[current]?.duration_ms ?? 6000}ms linear forwards;`"
                                            ></span>
                                        </template>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endif
