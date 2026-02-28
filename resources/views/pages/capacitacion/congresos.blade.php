@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Congresos" title="Congresos para actualización científica y networking"
            subtitle="Participe en jornadas que conectan evidencia clínica, gestión sanitaria y crecimiento profesional."
            icon="festival" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Valor para la obstetra" title="¿Por qué asistir a congresos?"
                    subtitle="Más allá de la actualización, fortalecen red profesional y visibilidad académica." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Beneficio 1</p>
                        <p class="font-bold text-text-main mt-1">Actualización de evidencia</p>
                        <p class="text-sm text-text-main mt-2">Integre nuevas prácticas en atención materno perinatal.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Beneficio 2</p>
                        <p class="font-bold text-text-main mt-1">Red profesional</p>
                        <p class="text-sm text-text-main mt-2">Conecte con docentes, investigadoras y líderes de servicio.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Beneficio 3</p>
                        <p class="font-bold text-text-main mt-1">Perfil curricular</p>
                        <p class="text-sm text-text-main mt-2">Fortalezca sustentación para ascenso, docencia o concursos.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Eventos vigentes" title="Agenda de congresos activos"
                    subtitle="Revise fechas y modalidad para elegir la mejor opción según su disponibilidad." />

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-7">
                    @forelse ($currentConferences as $item)
                        <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                            <div class="flex items-start justify-between gap-3">
                                <p class="inst-kicker">Congreso</p>
                                <span class="text-[11px] font-semibold uppercase tracking-[0.1em] border border-primary/25 px-2 py-1 text-primary-dark bg-primary-tint/30">
                                    {{ $item['status_label'] }}
                                </span>
                            </div>
                            <h3 class="text-xl font-black text-text-main leading-tight">{{ $item['title'] }}</h3>
                            <p class="text-sm text-text-main">{{ $item['summary'] }}</p>
                            <ul class="space-y-1 text-sm text-text-main">
                                <li><strong>Inicio:</strong> {{ $item['start_date'] }}</li>
                                <li><strong>Duración:</strong> {{ $item['duration'] }}</li>
                                <li><strong>Modalidad:</strong> {{ $item['modality'] }}</li>
                                <li><strong>Vacantes:</strong> {{ $item['seats'] }}</li>
                            </ul>
                            <div class="flex gap-2">
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="inst-btn-primary !py-2.5 !text-sm !w-full">Ver detalle</a>
                                <a href="{{ route('contacto') }}"
                                    class="inst-btn-secondary !py-2.5 !text-sm !w-full">Consultar inscripción</a>
                            </div>
                        </article>
                    @empty
                        <p class="text-text-main lg:col-span-2">No hay congresos vigentes en este momento.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <article class="inst-card p-6 md:p-8 border border-primary/20 bg-white">
                    <div class="flex flex-wrap items-end justify-between gap-3">
                        <div>
                            <p class="inst-kicker">Histórico</p>
                            <h3 class="text-2xl font-black text-text-main">Congresos finalizados</h3>
                            <p class="text-text-main mt-1">Explore líneas temáticas y prepárese para la siguiente convocatoria.</p>
                        </div>
                        <a href="{{ route('capacitacion.archivo') }}" class="inst-btn-secondary !py-2.5">Ver archivo completo</a>
                    </div>
                    @if (!empty($archivedConferences))
                        <ul class="mt-5 divide-y divide-primary/15 border border-primary/15">
                            @foreach (array_slice($archivedConferences, 0, 5) as $item)
                                <li class="p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <div>
                                        <p class="font-bold text-text-main">{{ $item['title'] }}</p>
                                        <p class="text-sm text-text-main/85">{{ $item['month_label'] }} · {{ $item['modality'] }}</p>
                                    </div>
                                    <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}" class="inst-link">Ver detalle</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </article>
            </div>
        </section>
    </main>
@endsection
