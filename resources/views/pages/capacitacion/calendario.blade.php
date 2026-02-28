@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Calendario" title="Calendario Académico 2026"
            subtitle="Fechas, vacantes y modalidades de todos los cursos, talleres y webinars programados." icon="event"
            backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                @php
                    $calendario = [
                        ['mes' => 'Marzo 2026', 'actividad' => 'Taller de monitoreo fetal', 'vacantes' => 40],
                        ['mes' => 'Abril 2026', 'actividad' => 'Curso de gestión perinatal', 'vacantes' => 35],
                        ['mes' => 'Mayo 2026', 'actividad' => 'Seminario de bioética obstétrica', 'vacantes' => 80],
                    ];
                @endphp
                <x-page-section-intro eyebrow="Agenda" title="Actividades programadas"
                    subtitle="Revise la oferta vigente y reserve su cupo con anticipación." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    @foreach ($calendario as $item)
                        <article class="inst-card p-6 border-l-4 border-primary">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $item['mes'] }}</p>
                            <h3 class="text-text-main mt-2">{{ $item['actividad'] }}</h3>
                            <p class="text-sm text-text-main mt-2">Vacantes: {{ $item['vacantes'] }}</p>
                            <a href="{{ route('contacto') }}" class="inst-btn-secondary mt-4 !text-xs !py-2">Inscribirme</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection




