@php
    $hero = [
        'eyebrow' => 'Tramites para obstetras',
        'title' => 'Resuelva su trámite sin perder tiempo',
        'summary' => 'Encuentre requisitos, pasos y canales correctos para colegiatura, habilidad, carné, registros y mesa de partes.',
        'cta1' => ['text' => 'Elegir trámite', 'href' => '#tramites-contenido'],
        'cta2' => ['text' => 'Usar mesa de partes', 'route' => 'tramites.mesa-partes'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-a',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(248,236,208,0.12),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-brand-gold hover:bg-brand-gold-light text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Trámites', 'current' => 'Ruta de trámites'];
    $ads = [
        ['tipo' => 'Trámites', 'titulo' => 'Mesa de partes virtual', 'cta_text' => 'Ingresar', 'cta_href' => route('tramites.mesa-partes'), 'tone' => 'tramites', 'image' => asset('assets/img/ads/ads_04.jpeg'), 'duration_ms' => 4200, 'overlay' => 'linear-gradient(170deg, rgba(186,124,0,0.22) 0%, rgba(102,2,25,0.2) 100%)'],
        ['tipo' => 'FAQ', 'titulo' => 'Preguntas frecuentes', 'cta_text' => 'Ver FAQ', 'cta_href' => route('tramites.faq'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 6000, 'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.16) 0%, rgba(186,124,0,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
