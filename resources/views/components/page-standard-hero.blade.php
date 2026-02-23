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

    $officialEmail = 'tramitedocumentario@crolimacallao.org.pe';
    $officialPhoneDisplay = '+51 982 520 891';
    $officialPhoneHref = '+51982520891';

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
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
                <div class="lg:col-span-7 flex">
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

                <aside class="lg:col-span-5 flex">
                    <div class="w-full rounded-sm border border-slate-200 bg-white p-5 sm:p-6 md:p-7 shadow-inst">
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.14em] text-brand-gold">Contacto unico</p>
                        <p class="mt-2 text-2xl md:text-3xl font-black leading-tight text-primary">Te respondemos por canal oficial</p>

                        <div class="mt-5 space-y-2.5">
                            <a href="mailto:{{ $officialEmail }}" class="flex min-h-[44px] items-center gap-2.5 rounded-sm bg-brand-gold-soft/70 px-3.5 py-2.5 text-primary transition-colors hover:bg-brand-gold-soft">
                                <span class="material-icons-outlined text-brand-gold text-[1.25rem] shrink-0">mail</span>
                                <span class="min-w-0 break-words text-base md:text-lg font-semibold leading-relaxed">{{ $officialEmail }}</span>
                            </a>
                            <a href="tel:{{ $officialPhoneHref }}" class="flex min-h-[44px] items-center gap-2.5 rounded-sm bg-brand-gold-soft/70 px-3.5 py-2.5 text-primary transition-colors hover:bg-brand-gold-soft">
                                <span class="material-icons-outlined text-brand-gold text-[1.25rem] shrink-0">call</span>
                                <span class="min-w-0 break-words text-base md:text-lg font-semibold leading-relaxed">{{ $officialPhoneDisplay }}</span>
                            </a>
                        </div>

                        <p class="mt-4 text-base md:text-lg leading-relaxed text-primary">Elige el canal que prefieras y te orientamos segun tu consulta.</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endif
