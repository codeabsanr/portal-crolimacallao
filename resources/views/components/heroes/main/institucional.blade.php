@php
    $hero = [
        'eyebrow' => 'Gestion institucional',
        'title' => 'Informacion institucional',
        'summary' => 'Conozca autoridades, reglamentos y convenios del Colegio Regional de Obstetras III Lima-Callao.',
        'cta1' => ['text' => 'Ver quienes somos', 'route' => 'institucional.quienes-somos'],
        'cta2' => ['text' => 'Ver normatividad', 'route' => 'institucional.normatividad'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-b',
        'overlay' => 'bg-[radial-gradient(circle_at_80%_18%,rgba(255,214,150,0.14),transparent_46%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-brand-gold-light hover:bg-brand-gold text-white',
        'cta2' => 'border-brand-gold-light/40 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Institucional', 'current' => 'Portada institucional'];
    $ads = [
        ['tipo' => 'Institucional', 'titulo' => 'Consejo directivo', 'cta_text' => 'Ver consejo', 'cta_href' => route('institucional.consejo-directivo'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_01.jpeg'), 'duration_ms' => 5000, 'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.16) 0%, rgba(186,124,0,0.22) 100%)'],
        ['tipo' => 'Normativa', 'titulo' => 'Compendio de normas', 'cta_text' => 'Ver compendio', 'cta_href' => route('institucional.compendio-de-normas'), 'tone' => 'normativa', 'image' => asset('assets/img/ads/ads_05.jpeg'), 'duration_ms' => 7000, 'overlay' => 'linear-gradient(170deg, rgba(102,2,25,0.15) 0%, rgba(186,124,0,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
