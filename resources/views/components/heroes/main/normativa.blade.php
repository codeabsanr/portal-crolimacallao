@php
    $hero = [
        'eyebrow' => 'Normativa y cumplimiento',
        'title' => 'Marco normativo',
        'summary' => 'Consulte leyes, reglamentos y guias para el ejercicio profesional y la gestion institucional.',
        'cta1' => ['text' => 'Ir al repositorio', 'route' => 'normativa.repositorio'],
        'cta2' => ['text' => 'Ver leyes', 'route' => 'normativa.leyes'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-a',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.16),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary-soft hover:bg-primary text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Normativa', 'current' => 'Portada normativa'];
    $ads = [
        ['tipo' => 'Leyes', 'titulo' => 'Marco legal vigente', 'cta_text' => 'Ver leyes', 'cta_href' => route('normativa.leyes'), 'tone' => 'normativa', 'image' => asset('assets/img/ads/ads_05.jpeg'), 'duration_ms' => 7000, 'overlay' => 'linear-gradient(170deg, rgba(48,95,169,0.25) 0%, rgba(102,2,25,0.2) 100%)'],
        ['tipo' => 'Repositorio', 'titulo' => 'Archivo documental', 'cta_text' => 'Ir al repositorio', 'cta_href' => route('normativa.repositorio'), 'tone' => 'normativa', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 5500, 'overlay' => 'linear-gradient(170deg, rgba(61,115,200,0.23) 0%, rgba(77,2,19,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
