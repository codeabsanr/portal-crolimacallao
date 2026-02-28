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
            'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.16) 0%, rgba(186,124,0,0.22) 100%)',
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
            'overlay' => 'linear-gradient(170deg, rgba(140,15,47,0.16) 0%, rgba(186,124,0,0.2) 100%)',
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
            'overlay' => 'linear-gradient(170deg, rgba(128,3,32,0.16) 0%, rgba(186,124,0,0.2) 100%)',
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
            'overlay' => 'linear-gradient(170deg, rgba(186,124,0,0.22) 0%, rgba(102,2,25,0.2) 100%)',
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
            'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.16) 0%, rgba(186,124,0,0.22) 100%)',
        ],
    ];

    $hero = $map[$routeName] ?? null;

    // Subpages with their own x-page-subhero should NOT inherit the parent section hero
    $subheroRoutes = [
        'tramites.habilidad',
        'tramites.colegiatura',
        'tramites.registros',
        'tramites.carne',
        'tramites.mesa-partes',
        'capacitacion.cursos',
        'capacitacion.calendario',
        'capacitacion.congresos',
        'capacitacion.aula-virtual',
        'capacitacion.programa',
        'capacitacion.programa.preview',
        'colegiados.buscador',
        'colegiados.listados',
        'colegiados.guia',
        'normativa.leyes',
        'normativa.reglamentos',
        'normativa.guias',
        'normativa.repositorio',
        'actualidad.noticias',
        'actualidad.eventos',
        'actualidad.comunicados',
    ];

    if (!$hero && is_string($routeName) && !in_array($routeName, $subheroRoutes)) {
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

<section class="relative overflow-hidden inst-bg-brand-grid inst-trace-invert-b text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_22%,rgba(102,2,25,0.16),transparent_48%)]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-7 flex self-start">
                <div class="w-full inst-stack-tight">
                    <p class="inst-eyebrow text-brand-gold-light">{{ $hero['eyebrow'] }}</p>
                    <h1 class="inst-title text-white">{{ $hero['title'] }}</h1>
                    <div class="h-[3px] w-20 bg-brand-gold-light"></div>
                    <p class="inst-subtitle text-white/90">{{ $hero['summary'] }}</p>

                    <div class="flex flex-col sm:flex-row gap-3">
                        @if (!empty($hero['cta1']['text']) && $cta1Href)
                            <a href="{{ $cta1Href }}"
                                class="inline-flex min-h-[44px] items-center justify-center gap-2 rounded-sm bg-brand-gold-light px-6 py-2.5 text-sm sm:text-base font-bold text-white transition-colors hover:bg-brand-gold shadow-lg hover:shadow-xl {{ $routeName === 'contacto' && $cta1IsAnchor ? 'inst-btn-scroll-guide' : '' }}">
                                <span>{{ $hero['cta1']['text'] }}</span>
                                @if ($routeName === 'contacto' && $cta1IsAnchor)
                                    <span aria-hidden="true" class="material-icons-outlined text-lg">south</span>
                                @endif
                            </a>
                        @endif
                        @if (!empty($hero['cta2']['text']) && $cta2Href)
                            <a href="{{ $cta2Href }}"
                                class="inline-flex min-h-[44px] items-center justify-center rounded-sm border border-brand-gold-light/40 bg-white/5 px-6 py-2.5 text-sm sm:text-base font-bold text-white transition-colors hover:bg-white/10 hover:border-brand-gold-light backdrop-blur-sm">
                                {{ $hero['cta2']['text'] }}
                            </a>
                        @endif
                    </div>

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
            </div>

            <aside class="lg:col-span-5 flex flex-col self-start gap-2.5">
                <div x-data="{
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
                        }" x-init="start()" @mouseenter="stop()" @mouseleave="schedule()">

                    {{-- ── Card visual: imagen full-bleed ───────────────── --}}
                    <div class="relative inst-hero-ads-stage rounded-sm overflow-hidden
                                shadow-[0_22px_40px_-20px_rgba(0,0,0,0.65)] ring-1 ring-white/10 group">

                        <template x-for="(ad, idx) in ads" :key="idx">
                            <article
                                class="absolute inset-0 transition-all duration-500 ease-[cubic-bezier(.2,.7,.2,1)]"
                                :class="idx === current ? 'opacity-100 translate-y-0 pointer-events-auto' : 'opacity-0 translate-y-1 pointer-events-none'"
                                :aria-hidden="idx === current ? 'false' : 'true'">
                                <div class="absolute inset-0 bg-primary-dark"></div>
                                <img :src="ad.image" :alt="ad.titulo"
                                    class="absolute inset-0 h-full w-full object-contain object-center">
                                <div class="absolute inset-0" :style="`background: ${ad.overlay};`"></div>

                                {{-- Badge de categoría — top left --}}
                                <div class="absolute top-3 left-3 z-10">
                                    <span class="inline-flex px-2.5 py-1 text-[10px] font-black uppercase
                                                 tracking-[0.12em] text-white bg-primary rounded-sm shadow"
                                        x-text="ad.tipo"></span>
                                </div>
                            </article>
                        </template>

                        {{-- Dots navegación --}}
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

                    {{-- ── CTA fuera del card ────────────────────────────── --}}
                    <a :href="ads[current].cta_href" class="flex w-full items-center justify-center gap-2 min-h-[44px] px-5 py-3
                              text-sm font-bold uppercase tracking-[0.1em] text-white
                              transition-[background-color,opacity,box-shadow] duration-200 hover:opacity-90 shadow"
                        :class="{
                           'bg-primary hover:bg-primary-dark':          ads[current].tone === 'informacion',
                           'bg-primary-soft hover:bg-primary':           ads[current].tone === 'desarrollo',
                           'bg-primary-light hover:bg-primary':          ads[current].tone === 'calendario',
                           'bg-brand-gold hover:bg-brand-gold-light':   ads[current].tone === 'tramites',
                           'bg-primary hover:bg-primary-dark':           ads[current].tone === 'normativa'
                       }" x-text="ads[current].cta_text"></a>
                </div>
            </aside>
        </div>
    </div>

</section>
@endif



