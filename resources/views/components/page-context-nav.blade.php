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

@if ($currentLabel && !request()->routeIs('home'))
    <section class="border-b border-slate-200 bg-white/96 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
                <nav aria-label="Breadcrumb" class="text-xs sm:text-sm text-slate-600">
                    <ol class="flex flex-wrap items-center gap-y-1 gap-x-2">
                        <li><a href="{{ route('home') }}" class="text-slate-500 hover:text-primary transition-colors">Inicio</a></li>
                        <li class="text-slate-300">/</li>
                        @if ($sectionLabel && $sectionRoute && !request()->routeIs($sectionRoute))
                            <li><a href="{{ route($sectionRoute) }}" class="text-slate-500 hover:text-primary transition-colors">{{ $sectionLabel }}</a></li>
                            <li class="text-slate-300">/</li>
                        @elseif ($sectionLabel)
                            <li class="text-slate-500">{{ $sectionLabel }}</li>
                            <li class="text-slate-300">/</li>
                        @endif
                        @if ($parentLabel && $parentRoute)
                            <li><a href="{{ route($parentRoute) }}" class="text-slate-500 hover:text-primary transition-colors">{{ $parentLabel }}</a></li>
                            <li class="text-slate-300">/</li>
                        @endif
                        <li class="font-semibold text-slate-900" aria-current="page">{{ $currentLabel }}</li>
                    </ol>
                </nav>

                @php
                    $backRoute = $parentRoute ?? $sectionRoute ?? 'home';
                    $backLabel = $parentLabel ?? $sectionLabel ?? 'Inicio';
                @endphp
                <a href="{{ route($backRoute) }}"
                    class="inline-flex items-center justify-center gap-1.5 border border-slate-300 bg-white px-3 py-2 text-xs sm:text-sm font-semibold text-slate-700 transition-[border-color,background-color,color,transform] duration-300 ease-[cubic-bezier(.2,.7,.2,1)] hover:border-primary hover:bg-primary/5 hover:text-primary hover:-translate-y-[1px] min-h-[44px]">
                    <span class="material-icons-outlined text-base">arrow_back</span>
                    <span>Volver a {{ $backLabel }}</span>
                </a>
            </div>
        </div>
    </section>
@endif
