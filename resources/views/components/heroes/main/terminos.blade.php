@php
    $hero = [
        'eyebrow' => 'Marco legal',
        'title' => 'Terminos y condiciones',
        'summary' => 'Revise las condiciones de uso del portal institucional y sus responsabilidades.',
        'cta1' => ['text' => 'Ver politica de privacidad', 'route' => 'privacidad'],
        'cta2' => ['text' => 'Ir a contacto', 'route' => 'contacto'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-b',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(102,2,25,0.2),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary-dark hover:bg-primary text-white',
        'cta2' => 'border-primary/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Legal', 'current' => 'Términos y condiciones'];
    $ads = [
        ['tipo' => 'Legal', 'titulo' => 'Políticas del portal', 'cta_text' => 'Ver privacidad', 'cta_href' => route('privacidad'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 5800, 'overlay' => 'linear-gradient(170deg, rgba(122,122,122,0.25) 0%, rgba(77,2,19,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
