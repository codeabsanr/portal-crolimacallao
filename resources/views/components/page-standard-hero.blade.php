@php
    $routeName = request()->route()?->getName() ?? '';

    $subheroRoutes = [
        'tramites.habilidad',
        'tramites.colegiatura',
        'tramites.registros',
        'tramites.carne',
        'tramites.mesa-partes',
        'capacitacion.cursos',
        'capacitacion.calendario',
        'capacitacion.congresos',
        'capacitacion.archivo',
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

    if (in_array($routeName, $subheroRoutes, true)) {
        $heroComponent = null;
    } else {
        $map = [
            'institucional' => 'institucional',
            'tramites' => 'tramites',
            'colegiados' => 'colegiados',
            'capacitacion' => 'capacitacion',
            'actualidad' => 'actualidad',
            'normativa' => 'normativa',
            'contacto' => 'contacto',
            'admin.intranet' => 'admin-intranet',
            'terminos' => 'terminos',
            'privacidad' => 'privacidad',
        ];

        $heroComponent = $map[$routeName] ?? null;

        if (!$heroComponent) {
            $prefixFallbacks = [
                'institucional.' => 'institucional',
                'tramites.' => 'tramites',
                'colegiados.' => 'colegiados',
                'capacitacion.' => 'capacitacion',
                'actualidad.' => 'actualidad',
                'normativa.' => 'normativa',
                'portal.colegiado.' => 'admin-intranet',
            ];

            foreach ($prefixFallbacks as $prefix => $fallbackComponent) {
                if (str_starts_with($routeName, $prefix)) {
                    $heroComponent = $fallbackComponent;
                    break;
                }
            }
        }
    }
@endphp

@if ($heroComponent)
    @includeIf("components.heroes.main.$heroComponent")
@endif
