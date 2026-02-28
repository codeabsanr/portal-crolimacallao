@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Colegiados / Listados oficiales" title="Padrones Institucionales"
            subtitle="Padrones oficiales de obstetras hábiles, nuevas colegiaturas y especialidades registradas del CRO III."
            icon="format_list_bulleted" backRoute="colegiados" backLabel="Volver a Colegiados" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                @php
                    $listados = [
                        ['nombre' => 'Padrón de obstetras hábiles', 'periodo' => 'Febrero 2026', 'registros' => 2431],
                        ['nombre' => 'Padrón de nuevas colegiaturas', 'periodo' => 'Enero 2026', 'registros' => 62],
                        ['nombre' => 'Padrón de especialidades registradas', 'periodo' => '2025', 'registros' => 488],
                    ];
                @endphp
                <div class="inst-card p-6 md:p-8 inst-stack-tight">
                    <x-page-section-intro eyebrow="Documentos disponibles" title="Listados y padrones"
                        subtitle="Consulte los padrones oficiales actualizados del Colegio Regional de Obstetras III Lima-Callao." />
                    <div class="space-y-3">
                        @foreach ($listados as $item)
                            <article
                                class="border border-slate-200 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                <div>
                                    <h3 class="text-slate-900 text-lg font-bold">{{ $item['nombre'] }}</h3>
                                    <p class="text-sm text-slate-600">Período: {{ $item['periodo'] }} | Registros:
                                        {{ $item['registros'] }}</p>
                                </div>
                                <a href="{{ route('colegiados') }}" class="inst-btn-secondary !px-4 !py-2 shrink-0">Ver
                                    resumen</a>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

