@props([
    'sectionLabel' => null,
    'sectionRoute' => null,
    'parentLabel' => null,
    'parentRoute' => null,
    'currentLabel' => null,
])

@php
    $routeName = request()->route()?->getName();

    $map = [
        'institucional' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Portada institucional'],
        'institucional.quienes-somos' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Quiénes somos'],
        'institucional.consejo-directivo' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Consejo directivo'],
        'institucional.resena-historica' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Reseña histórica'],
        'institucional.simbolos' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Símbolos'],
        'institucional.compendio-de-normas' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Compendio de normas'],
        'institucional.reglamento' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Reglamento'],
        'institucional.normatividad' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Normatividad'],
        'institucional.convenios' => ['sectionLabel' => 'Institucional', 'sectionRoute' => 'institucional', 'currentLabel' => 'Convenios'],

        'tramites' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'currentLabel' => 'Catálogo de trámites'],
        'tramites.faq' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Preguntas frecuentes'],
        'tramites.habilidad' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Habilidad profesional'],
        'tramites.colegiatura' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Colegiatura'],
        'tramites.registros' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Registros académicos'],
        'tramites.carne' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Carné institucional'],
        'tramites.mesa-partes' => ['sectionLabel' => 'Trámites', 'sectionRoute' => 'tramites', 'parentLabel' => 'Catálogo de trámites', 'parentRoute' => 'tramites', 'currentLabel' => 'Mesa de partes virtual'],

        'colegiados' => ['sectionLabel' => 'Colegiados', 'sectionRoute' => 'colegiados', 'currentLabel' => 'Servicios para colegiados'],
        'colegiados.buscador' => ['sectionLabel' => 'Colegiados', 'sectionRoute' => 'colegiados', 'parentLabel' => 'Servicios para colegiados', 'parentRoute' => 'colegiados', 'currentLabel' => 'Buscador de obstetra'],
        'colegiados.listados' => ['sectionLabel' => 'Colegiados', 'sectionRoute' => 'colegiados', 'parentLabel' => 'Servicios para colegiados', 'parentRoute' => 'colegiados', 'currentLabel' => 'Listados oficiales'],
        'colegiados.guia' => ['sectionLabel' => 'Colegiados', 'sectionRoute' => 'colegiados', 'parentLabel' => 'Servicios para colegiados', 'parentRoute' => 'colegiados', 'currentLabel' => 'Guía de uso'],

        'capacitacion' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'currentLabel' => 'Oferta de capacitación'],
        'capacitacion.calendario' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Calendario'],
        'capacitacion.cursos' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Cursos'],
        'capacitacion.congresos' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Congresos'],
        'capacitacion.archivo' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Archivo'],
        'capacitacion.aula-virtual' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Aula virtual'],
        'capacitacion.programa' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Detalle de programa'],
        'capacitacion.programa.preview' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Vista previa'],

        'actualidad' => ['sectionLabel' => 'Actualidad', 'sectionRoute' => 'actualidad', 'currentLabel' => 'Portada de actualidad'],
        'actualidad.noticias' => ['sectionLabel' => 'Actualidad', 'sectionRoute' => 'actualidad', 'parentLabel' => 'Portada de actualidad', 'parentRoute' => 'actualidad', 'currentLabel' => 'Noticias'],
        'actualidad.eventos' => ['sectionLabel' => 'Actualidad', 'sectionRoute' => 'actualidad', 'parentLabel' => 'Portada de actualidad', 'parentRoute' => 'actualidad', 'currentLabel' => 'Eventos'],
        'actualidad.comunicados' => ['sectionLabel' => 'Actualidad', 'sectionRoute' => 'actualidad', 'parentLabel' => 'Portada de actualidad', 'parentRoute' => 'actualidad', 'currentLabel' => 'Comunicados'],

        'normativa' => ['sectionLabel' => 'Normativa', 'sectionRoute' => 'normativa', 'currentLabel' => 'Portada normativa'],
        'normativa.leyes' => ['sectionLabel' => 'Normativa', 'sectionRoute' => 'normativa', 'parentLabel' => 'Portada normativa', 'parentRoute' => 'normativa', 'currentLabel' => 'Leyes'],
        'normativa.reglamentos' => ['sectionLabel' => 'Normativa', 'sectionRoute' => 'normativa', 'parentLabel' => 'Portada normativa', 'parentRoute' => 'normativa', 'currentLabel' => 'Reglamentos'],
        'normativa.guias' => ['sectionLabel' => 'Normativa', 'sectionRoute' => 'normativa', 'parentLabel' => 'Portada normativa', 'parentRoute' => 'normativa', 'currentLabel' => 'Guías'],
        'normativa.repositorio' => ['sectionLabel' => 'Normativa', 'sectionRoute' => 'normativa', 'parentLabel' => 'Portada normativa', 'parentRoute' => 'normativa', 'currentLabel' => 'Repositorio'],

        'admin.intranet' => ['sectionLabel' => 'Intranet', 'sectionRoute' => 'admin.intranet', 'currentLabel' => 'Portal del colegiado'],
        'contacto' => ['sectionLabel' => 'Contacto', 'sectionRoute' => 'contacto', 'currentLabel' => 'Canales de atención'],
        'terminos' => ['sectionLabel' => 'Legal', 'sectionRoute' => 'terminos', 'currentLabel' => 'Términos y condiciones'],
        'privacidad' => ['sectionLabel' => 'Legal', 'sectionRoute' => 'privacidad', 'currentLabel' => 'Política de privacidad'],
    ];

    $context = $map[$routeName] ?? null;
    $sectionLabel = $sectionLabel ?? ($context['sectionLabel'] ?? null);
    $sectionRoute = $sectionRoute ?? ($context['sectionRoute'] ?? null);
    $parentLabel = $parentLabel ?? ($context['parentLabel'] ?? null);
    $parentRoute = $parentRoute ?? ($context['parentRoute'] ?? null);
    $currentLabel = $currentLabel ?? ($context['currentLabel'] ?? null);
@endphp

@php
    $subheroRoutes = [
        'tramites.habilidad', 'tramites.colegiatura', 'tramites.registros',
        'tramites.carne', 'tramites.mesa-partes',
        'capacitacion.cursos', 'capacitacion.calendario',
        'capacitacion.congresos', 'capacitacion.archivo', 'capacitacion.aula-virtual', 'capacitacion.programa', 'capacitacion.programa.preview',
        'colegiados.buscador', 'colegiados.listados', 'colegiados.guia',
        'normativa.leyes', 'normativa.reglamentos', 'normativa.guias', 'normativa.repositorio',
        'actualidad.noticias', 'actualidad.eventos', 'actualidad.comunicados',
    ];
@endphp
@if ($currentLabel && !request()->routeIs('home') && !in_array($routeName, $subheroRoutes))
    <section class="relative border-b border-primary/15 bg-gradient-to-b from-white via-white to-primary-tint/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 md:py-5">
            <div class="flex flex-col gap-2.5 md:flex-row md:items-center md:justify-between">
                <nav aria-label="Breadcrumb"
                    class="rounded-none border border-primary/20 bg-white px-3 py-2 text-xs text-text-main shadow-[0_10px_24px_-26px_rgba(77,2,19,0.55)] backdrop-blur-sm md:text-sm">
                    <ol class="flex flex-wrap items-center gap-y-1 gap-x-1">
                        <li><a href="{{ route('home') }}"
                                class="inline-flex min-h-[34px] items-center rounded-none border border-transparent px-2 py-1 font-semibold text-text-main transition-colors duration-150 hover:border-primary/25 hover:bg-primary-tint hover:text-primary">Inicio</a>
                        </li>
                        <li class="text-primary/65">
                            <span class="material-icons-outlined text-[0.95rem] leading-none">chevron_right</span>
                        </li>
                        @if ($sectionLabel && $sectionRoute && !request()->routeIs($sectionRoute))
                            <li><a href="{{ route($sectionRoute) }}"
                                    class="inline-flex min-h-[34px] items-center rounded-none border border-transparent px-2 py-1 font-semibold text-text-main transition-colors duration-150 hover:border-primary/25 hover:bg-primary-tint hover:text-primary">{{ $sectionLabel }}</a>
                            </li>
                            <li class="text-primary/65">
                                <span class="material-icons-outlined text-[0.95rem] leading-none">chevron_right</span>
                            </li>
                        @elseif ($sectionLabel)
                            <li class="inline-flex min-h-[34px] items-center rounded-none bg-primary-tint px-2 py-1 font-medium text-primary">
                                {{ $sectionLabel }}
                            </li>
                            <li class="text-primary/65">
                                <span class="material-icons-outlined text-[0.95rem] leading-none">chevron_right</span>
                            </li>
                        @endif
                        @if ($parentLabel && $parentRoute)
                            <li><a href="{{ route($parentRoute) }}"
                                    class="inline-flex min-h-[34px] items-center rounded-none border border-transparent px-2 py-1 font-semibold text-text-main transition-colors duration-150 hover:border-primary/25 hover:bg-primary-tint hover:text-primary">{{ $parentLabel }}</a>
                            </li>
                            <li class="text-primary/65">
                                <span class="material-icons-outlined text-[0.95rem] leading-none">chevron_right</span>
                            </li>
                        @endif
                        <li class="inline-flex min-h-[34px] items-center rounded-none border border-primary/25 bg-primary-tint px-2 py-1 font-semibold text-primary-dark"
                            aria-current="page">{{ $currentLabel }}</li>
                    </ol>
                </nav>

                @php
                    $backRoute = $parentRoute ?? $sectionRoute ?? 'home';
                    $backLabel = $parentLabel ?? $sectionLabel ?? 'Inicio';
                    $isOnSectionRoot = $sectionRoute && request()->routeIs($sectionRoute);
                    $showBackButton = !$isOnSectionRoot;
                @endphp
                @if ($showBackButton)
                    <a href="{{ route($backRoute) }}"
                        class="group inline-flex min-h-[40px] items-center justify-center gap-1.5 rounded-none border border-primary/20 bg-white px-3 py-2 text-xs font-semibold text-primary-dark shadow-[0_12px_24px_-20px_rgba(77,2,19,0.55)] transition-[border-color,background-color,color,transform,box-shadow] duration-200 ease-out hover:-translate-y-[1px] hover:border-primary/40 hover:bg-primary-tint/60 hover:text-primary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 focus-visible:ring-offset-2 md:text-sm">
                        <span
                            class="inline-flex items-center justify-center text-primary transition-colors group-hover:text-primary-dark">
                            <span class="material-icons-outlined text-base leading-none">arrow_back</span>
                        </span>
                        <span class="whitespace-nowrap">Volver a {{ $backLabel }}</span>
                    </a>
                @endif
            </div>
        </div>
    </section>
@endif


