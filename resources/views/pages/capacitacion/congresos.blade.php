@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Congresos" title="Congresos y Jornadas Científicas"
            subtitle="Eventos académicos regionales y nacionales de obstetricia para fortalecer el conocimiento profesional."
            icon="festival" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Eventos vigentes" title="Agenda de congresos"
                    subtitle="Conferencias activas para inscripción y participación." />

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
                                <li><strong>Modalidad:</strong> {{ $item['modality'] }}</li>
                                <li><strong>Vacantes:</strong> {{ $item['seats'] }}</li>
                            </ul>
                            <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                class="inst-btn-primary !py-2.5 !text-sm !w-full">Ver detalle del evento</a>
                        </article>
                    @empty
                        <p class="text-text-main lg:col-span-2">No hay congresos vigentes en este momento.</p>
                    @endforelse
                </div>

                <article class="inst-card p-6 md:p-8 border border-primary/20 bg-white">
                    <div class="flex flex-wrap items-end justify-between gap-3">
                        <div>
                            <p class="inst-kicker">Histórico</p>
                            <h3 class="text-2xl font-black text-text-main">Congresos finalizados</h3>
                            <p class="text-text-main mt-1">Revisa ediciones anteriores y sus temáticas.</p>
                        </div>
                        <a href="{{ route('capacitacion.archivo') }}" class="inst-btn-secondary !py-2.5">Ver archivo completo</a>
                    </div>
                    @if (!empty($archivedConferences))
                        <ul class="mt-5 divide-y divide-primary/15 border border-primary/15">
                            @foreach (array_slice($archivedConferences, 0, 4) as $item)
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




