@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $eventos = [
                    ['fecha' => '2026-03-04', 'actividad' => 'Webinar de salud materna', 'modalidad' => 'Virtual'],
                    ['fecha' => '2026-03-15', 'actividad' => 'Asamblea regional ordinaria', 'modalidad' => 'Presencial'],
                    ['fecha' => '2026-04-02', 'actividad' => 'Taller de actualizacion normativa', 'modalidad' => 'Hibrida'],
                ];
            @endphp
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-5">Agenda del trimestre</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="text-left border-b border-slate-200">
                                <th class="py-2 pr-4 font-bold text-slate-700">Fecha</th>
                                <th class="py-2 pr-4 font-bold text-slate-700">Actividad</th>
                                <th class="py-2 font-bold text-slate-700">Modalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pr-4 text-slate-700">{{ $evento['fecha'] }}</td>
                                    <td class="py-3 pr-4 text-slate-900 font-medium">{{ $evento['actividad'] }}</td>
                                    <td class="py-3 text-slate-600">{{ $evento['modalidad'] }}</td>
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

