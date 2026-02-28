@php
    $hero = [
        'eyebrow' => 'Informacion institucional',
        'title' => 'Actualidad y comunicados',
        'summary' => 'Revise noticias, comunicados y eventos oficiales del colegio en un solo lugar.',
        'cta1' => ['text' => 'Ver noticias', 'route' => 'actualidad.noticias'],
        'cta2' => ['text' => 'Ver comunicados', 'route' => 'actualidad.comunicados'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-b',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.18),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary-dark hover:bg-primary text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Actualidad', 'current' => 'Portada de actualidad'];
    $ads = [
        ['tipo' => 'Noticias', 'titulo' => 'Boletín institucional', 'cta_text' => 'Ver noticias', 'cta_href' => route('actualidad.noticias'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 5000, 'overlay' => 'linear-gradient(170deg, rgba(200,100,42,0.25) 0%, rgba(102,2,25,0.2) 100%)'],
        ['tipo' => 'Eventos', 'titulo' => 'Agenda institucional', 'cta_text' => 'Ver eventos', 'cta_href' => route('actualidad.eventos'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_03.jpeg'), 'duration_ms' => 6500, 'overlay' => 'linear-gradient(170deg, rgba(219,120,61,0.22) 0%, rgba(102,2,25,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
