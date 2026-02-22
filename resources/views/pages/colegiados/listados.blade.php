@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $listados = [
                    ['nombre' => 'Padron de obstetras habiles', 'periodo' => 'Febrero 2026', 'registros' => 2431],
                    ['nombre' => 'Padron de nuevas colegiaturas', 'periodo' => 'Enero 2026', 'registros' => 62],
                    ['nombre' => 'Padron de especialidades registradas', 'periodo' => '2025', 'registros' => 488],
                ];
            @endphp
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-5">Documentos disponibles</h2>
                <div class="space-y-3">
                    @foreach ($listados as $item)
                        <article class="border border-slate-200 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                            <div>
                                <h3 class="text-slate-900 text-lg font-bold">{{ $item['nombre'] }}</h3>
                                <p class="text-sm text-slate-600">Periodo: {{ $item['periodo'] }} | Registros: {{ $item['registros'] }}</p>
                            </div>
                            <a href="{{ route('colegiados') }}" class="inst-btn-secondary !px-4 !py-2">Ver resumen</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

