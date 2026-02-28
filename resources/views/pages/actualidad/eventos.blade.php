@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Actualidad / Eventos" title="Agenda de Eventos y Actividades"
            subtitle="Calendario de webinars, jornadas académicas, asambleas y actividades institucionales del CRO III."
            icon="calendar_month" backRoute="actualidad" backLabel="Volver a Actualidad" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                @php
                    $eventos = [
                        ['fecha' => '2026-03-04', 'actividad' => 'Webinar de salud materna', 'modalidad' => 'Virtual'],
                        ['fecha' => '2026-03-15', 'actividad' => 'Asamblea regional ordinaria', 'modalidad' => 'Presencial'],
                        ['fecha' => '2026-04-02', 'actividad' => 'Taller de actualización normativa', 'modalidad' => 'Híbrida'],
                    ];
                @endphp
                <div class="inst-card p-6 md:p-8 inst-stack-tight">
                    <x-page-section-intro eyebrow="Agenda institucional" title="Próximas actividades"
                        subtitle="Revise las fechas y reserve su participación con anticipación." />
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="text-left border-b border-slate-200">
                                    <th class="py-2 pr-4 font-bold text-text-main">Fecha</th>
                                    <th class="py-2 pr-4 font-bold text-text-main">Actividad</th>
                                    <th class="py-2 font-bold text-text-main">Modalidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eventos as $evento)
                                    <tr class="border-b border-slate-100">
                                        <td class="py-3 pr-4 text-text-main">{{ $evento['fecha'] }}</td>
                                        <td class="py-3 pr-4 text-text-main font-medium">{{ $evento['actividad'] }}</td>
                                        <td class="py-3 text-text-main">{{ $evento['modalidad'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('actualidad') }}#eventos" class="inst-btn-primary">Ver portada de actualidad</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection




