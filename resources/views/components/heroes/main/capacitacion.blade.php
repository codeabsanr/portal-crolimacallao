@php
    $hero = [
        'eyebrow' => 'Desarrollo profesional obstétrico',
        'title' => 'Capacitación para práctica clínica y crecimiento profesional',
        'summary' => 'Elija rutas de aprendizaje según su etapa profesional: actualización clínica, gestión de servicios, investigación y preparación para ascenso laboral.',
        'cta1' => ['text' => 'Elegir cursos', 'route' => 'capacitacion.cursos'],
        'cta2' => ['text' => 'Planificar calendario', 'route' => 'capacitacion.calendario'],
    ];
    $theme = [
        'trace' => 'inst-trace-invert-a',
        'overlay' => 'bg-[radial-gradient(circle_at_78%_20%,rgba(186,124,0,0.2),transparent_48%)]',
        'accentText' => 'text-brand-gold-light',
        'divider' => 'bg-brand-gold-light',
        'cta1' => 'bg-primary-soft hover:bg-primary text-white',
        'cta2' => 'border-brand-gold-light/45 hover:border-brand-gold-light',
    ];
    $breadcrumb = ['section' => 'Capacitación', 'current' => 'Ruta de formación'];
    $ads = [
        ['tipo' => 'Cursos', 'titulo' => 'Oferta vigente', 'cta_text' => 'Ver cursos', 'cta_href' => route('capacitacion.cursos'), 'tone' => 'desarrollo', 'image' => asset('assets/img/ads/ads_02.jpeg'), 'duration_ms' => 9000, 'overlay' => 'linear-gradient(170deg, rgba(15,126,176,0.2) 0%, rgba(102,2,25,0.2) 100%)'],
        ['tipo' => 'Agenda', 'titulo' => 'Calendario académico', 'cta_text' => 'Ver calendario', 'cta_href' => route('capacitacion.calendario'), 'tone' => 'calendario', 'image' => asset('assets/img/ads/ads_03.jpeg'), 'duration_ms' => 6500, 'overlay' => 'linear-gradient(170deg, rgba(20,147,203,0.2) 0%, rgba(102,2,25,0.18) 100%)'],
        ['tipo' => 'Archivo', 'titulo' => 'Programas finalizados', 'cta_text' => 'Ver archivo', 'cta_href' => route('capacitacion.archivo'), 'tone' => 'informacion', 'image' => asset('assets/img/ads/ads_05.jpeg'), 'duration_ms' => 7000, 'overlay' => 'linear-gradient(170deg, rgba(15,126,176,0.2) 0%, rgba(77,2,19,0.2) 100%)'],
    ];
@endphp

<x-heroes.main.render :hero="$hero" :theme="$theme" :breadcrumb="$breadcrumb" :ads="$ads" />
