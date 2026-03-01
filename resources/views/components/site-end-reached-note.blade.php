@php
    $routeName = request()->route()?->getName() ?? '';
    $contextAction = [
        'label' => 'Ir al inicio del portal',
        'href' => route('home'),
        'icon' => 'home',
    ];

    if (str_starts_with($routeName, 'tramites.')) {
        $contextAction = [
            'label' => 'Ir al catálogo de trámites',
            'href' => route('tramites'),
            'icon' => 'folder_open',
        ];
    } elseif (str_starts_with($routeName, 'colegiados.') || str_starts_with($routeName, 'obstetras.')) {
        $contextAction = [
            'label' => 'Ir al buscador de obstetras',
            'href' => route('obstetras.index'),
            'icon' => 'person_search',
        ];
    } elseif (str_starts_with($routeName, 'capacitacion.')) {
        $contextAction = [
            'label' => 'Ir a Capacitación',
            'href' => route('capacitacion'),
            'icon' => 'school',
        ];
    } elseif (str_starts_with($routeName, 'actualidad.')) {
        $contextAction = [
            'label' => 'Ir a Actualidad',
            'href' => route('actualidad'),
            'icon' => 'campaign',
        ];
    } elseif (str_starts_with($routeName, 'normativa.')) {
        $contextAction = [
            'label' => 'Ir a Normativa',
            'href' => route('normativa'),
            'icon' => 'gavel',
        ];
    } elseif (str_starts_with($routeName, 'institucional.')) {
        $contextAction = [
            'label' => 'Ir a Institucional',
            'href' => route('institucional'),
            'icon' => 'account_balance',
        ];
    }
@endphp

<section
    class="inst-endnote-section"
    aria-label="Opciones al finalizar la página"
>
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="inst-endnote-panel">
            <p class="inst-endnote-kicker">
                <span class="material-icons-outlined text-[1rem] leading-none">check_circle</span>
                Fin de esta sección
            </p>
            <h3 class="inst-endnote-title">¿Qué desea hacer ahora?</h3>
            <p class="inst-endnote-copy">
                Si ya revisó la información, elija la siguiente acción para continuar su gestión de manera ordenada.
            </p>
            <div class="inst-endnote-actions">
                <a
                    href="{{ $contextAction['href'] }}"
                    class="inst-btn-primary !w-full sm:!w-auto !min-h-[46px] !px-5 !py-2.5 !text-sm"
                >
                    <span class="material-icons-outlined text-[1rem]">{{ $contextAction['icon'] }}</span>
                    {{ $contextAction['label'] }}
                </a>
                <button
                    type="button"
                    onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
                    class="inst-btn-secondary !w-full sm:!w-auto !min-h-[46px] !px-5 !py-2.5 !text-sm"
                    aria-label="Subir al inicio de esta página"
                >
                    <span class="material-icons-outlined text-[1rem]">vertical_align_top</span>
                    Subir al inicio de esta página
                </button>
                <a
                    href="{{ route('tramites.faq') }}"
                    class="inst-btn-secondary !w-full sm:!w-auto !min-h-[46px] !px-5 !py-2.5 !text-sm"
                >
                    <span class="material-icons-outlined text-[1rem]">help_center</span>
                    Ver preguntas frecuentes
                </a>
            </div>
            <p class="inst-endnote-help">
                <span class="material-icons-outlined text-[1rem]">support_agent</span>
                Si requiere orientación inmediata, use el botón flotante de ayuda.
            </p>
        </div>
    </div>
</section>
