@php
    $hero = [
        'eyebrow' => 'Portal privado',
        'title' => 'Intranet institucional',
        'summary' => 'Acceda a su perfil, tramites, pagos y documentos en un entorno seguro.',
        'cta1' => ['text' => 'Ver perfil', 'route' => 'portal.colegiado.perfil'],
        'cta2' => ['text' => 'Ver tramites', 'route' => 'portal.colegiado.tramites'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-a',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.14),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-secondary hover:bg-primary text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Intranet', 'current' => 'Portal del colegiado'];
    $ads = [
        ['tipo' => 'Intranet', 'titulo' => 'Gestión de perfil', 'cta_text' => 'Ir al portal', 'cta_href' => route('portal.colegiado'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_03.jpeg'), 'duration_ms' => 6200, 'overlay' => 'linear-gradient(170deg, rgba(75,95,209,0.25) 0%, rgba(102,2,25,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
