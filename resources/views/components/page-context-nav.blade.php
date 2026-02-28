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
        'capacitacion.aula-virtual' => ['sectionLabel' => 'Capacitación', 'sectionRoute' => 'capacitacion', 'parentLabel' => 'Oferta de capacitación', 'parentRoute' => 'capacitacion', 'currentLabel' => 'Aula virtual'],

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
        'capacitacion.congresos', 'capacitacion.aula-virtual',
        'colegiados.buscador', 'colegiados.listados', 'colegiados.guia',
        'normativa.leyes', 'normativa.reglamentos', 'normativa.guias', 'normativa.repositorio',
        'actualidad.noticias', 'actualidad.eventos', 'actualidad.comunicados',
    ];
@endphp
@if ($currentLabel && !request()->routeIs('home') && !in_array($routeName, $subheroRoutes))
    <section class="relative border-b border-primary/20 bg-primary-mist">
        <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#D4A62A_0%,#BA7C00_48%,#D4A62A_100%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5">
            <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
                <nav aria-label="Breadcrumb" class="text-xs sm:text-sm text-text-main">
                    <ol class="flex flex-wrap items-center gap-y-1 gap-x-2">
                        <li><a href="{{ route('home') }}" class="font-medium text-text-muted hover:text-primary transition-colors">Inicio</a></li>
                        <li class="text-[#BA7C00]/80">/</li>
                        @if ($sectionLabel && $sectionRoute && !request()->routeIs($sectionRoute))
                            <li><a href="{{ route($sectionRoute) }}" class="font-medium text-text-muted hover:text-primary transition-colors">{{ $sectionLabel }}</a></li>
                            <li class="text-[#BA7C00]/80">/</li>
                        @elseif ($sectionLabel)
                            <li class="font-medium text-text-muted">{{ $sectionLabel }}</li>
                            <li class="text-[#BA7C00]/80">/</li>
                        @endif
                        @if ($parentLabel && $parentRoute)
                            <li><a href="{{ route($parentRoute) }}" class="font-medium text-text-muted hover:text-primary transition-colors">{{ $parentLabel }}</a></li>
                            <li class="text-[#BA7C00]/80">/</li>
                        @endif
                        <li class="font-bold text-primary-dark border-b-2 border-brand-gold" aria-current="page">{{ $currentLabel }}</li>
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
                        class="inline-flex items-center justify-center gap-1.5 rounded-sm border border-brand-gold/50 bg-brand-ink-soft px-3.5 py-2 text-xs sm:text-sm font-semibold text-primary-dark shadow-[0_1px_0_rgba(77,2,19,0.08)] transition-[border-color,background-color,color,transform,box-shadow] duration-300 ease-[cubic-bezier(.2,.7,.2,1)] hover:-translate-y-[1px] hover:border-brand-gold hover:bg-brand-gold-soft hover:text-primary hover:shadow-[0_10px_24px_-16px_rgba(186,124,0,0.7)] min-h-[44px]">
                        <span class="material-icons-outlined text-base">arrow_back</span>
                        <span>Volver a {{ $backLabel }}</span>
                    </a>
                @endif
            </div>
        </div>
    </section>
@endif
