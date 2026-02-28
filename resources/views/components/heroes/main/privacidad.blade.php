@php
    $hero = [
        'eyebrow' => 'Marco legal',
        'title' => 'Politica de privacidad',
        'summary' => 'Conozca como tratamos y protegemos sus datos personales en los servicios del portal.',
        'cta1' => ['text' => 'Ver terminos y condiciones', 'route' => 'terminos'],
        'cta2' => ['text' => 'Ir a contacto', 'route' => 'contacto'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-a',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(102,2,25,0.2),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary-dark hover:bg-primary text-white',
        'cta2' => 'border-primary/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Legal', 'current' => 'Política de privacidad'];
    $ads = [
        ['tipo' => 'Legal', 'titulo' => 'Uso de datos', 'cta_text' => 'Ver términos', 'cta_href' => route('terminos'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_05.jpeg'), 'duration_ms' => 5800, 'overlay' => 'linear-gradient(170deg, rgba(122,122,122,0.25) 0%, rgba(77,2,19,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
