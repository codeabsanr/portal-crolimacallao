@php
    $hero = [
        'eyebrow' => 'Canales de atencion',
        'title' => 'Contactanos',
        'summary' => 'Atencion directa para consultas institucionales, tramites y soporte para colegiados.',
        'cta1' => ['text' => 'Ir al formulario', 'href' => '#contacto-formulario'],
        'cta2' => ['text' => 'Llamar ahora', 'href' => 'tel:+51982520891'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-b',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.2),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-brand-gold hover:bg-brand-gold-light text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Contacto', 'current' => 'Canales de atención'];
    $ads = [
        ['tipo' => 'Atención', 'titulo' => 'Canales disponibles', 'cta_text' => 'Ir a contacto', 'cta_href' => route('contacto'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 6000, 'overlay' => 'linear-gradient(170deg, rgba(186,124,0,0.25) 0%, rgba(102,2,25,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
