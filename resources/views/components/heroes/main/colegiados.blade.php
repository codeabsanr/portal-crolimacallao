@php
    $hero = [
        'eyebrow' => 'Servicios para colegiados',
        'title' => 'Servicios y consultas',
        'summary' => 'Acceda a buscador, listados oficiales y guía de uso para consultas institucionales.',
        'cta1' => ['text' => 'Buscar obstetra', 'route' => 'colegiados.buscador'],
        'cta2' => ['text' => 'Ver listados', 'route' => 'colegiados.listados'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-b',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.14),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary hover:bg-primary-dark text-white',
        'cta2' => 'border-primary/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Colegiados', 'current' => 'Servicios para colegiados'];
    $ads = [
        ['tipo' => 'Colegiados', 'titulo' => 'Buscador oficial', 'cta_text' => 'Buscar', 'cta_href' => route('colegiados.buscador'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 5200, 'overlay' => 'linear-gradient(170deg, rgba(15,111,79,0.28) 0%, rgba(102,2,25,0.18) 100%)'],
        ['tipo' => 'Listados', 'titulo' => 'Padrones institucionales', 'cta_text' => 'Ver listados', 'cta_href' => route('colegiados.listados'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_03.jpeg'), 'duration_ms' => 6500, 'overlay' => 'linear-gradient(170deg, rgba(13,95,68,0.25) 0%, rgba(102,2,25,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
