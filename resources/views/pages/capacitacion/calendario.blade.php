@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Calendario" title="Calendario académico para planificar sin fricción"
            subtitle="Organice su formación según turnos, carga laboral y metas del año."
            icon="event" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Uso recomendado" title="Planifique en 3 decisiones"
                    subtitle="Defina prioridad, confirme fechas y reserve cupo con anticipación." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">1. Prioridad</p>
                        <p class="font-bold text-text-main mt-1">Qué necesita ahora</p>
                        <p class="text-sm text-text-main mt-2">Emergencias clínicas, gestión o investigación.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">2. Disponibilidad</p>
                        <p class="font-bold text-text-main mt-1">Qué puede sostener</p>
                        <p class="text-sm text-text-main mt-2">Cruce fechas con guardias y responsabilidades.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">3. Acción</p>
                        <p class="font-bold text-text-main mt-1">Inscribirse a tiempo</p>
                        <p class="text-sm text-text-main mt-2">Evite quedarse sin vacante en programas clave.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Agenda vigente" title="Actividades programadas"
                    subtitle="Información mínima necesaria para decidir en minutos." />
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-7">
                    @forelse ($calendario as $item)
                        <article class="inst-card p-6 border-l-4 border-primary inst-stack-tight">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $item['mes'] }}</p>
                            <h3 class="text-text-main">{{ $item['actividad'] }}</h3>
                            <p class="text-xs inline-flex border border-primary/20 px-2 py-1 font-semibold uppercase tracking-[0.1em] text-primary-dark bg-primary-tint/35 w-fit">
                                {{ $item['status_label'] }}
                            </p>
                            <p class="text-sm text-text-main">Vacantes: {{ $item['vacantes'] }}</p>
                            <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}" class="inst-btn-secondary !text-xs !py-2">Ver programa</a>
                        </article>
                    @empty
                        <p class="text-text-main md:col-span-2 xl:col-span-3">No hay actividades vigentes en el calendario actual.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
