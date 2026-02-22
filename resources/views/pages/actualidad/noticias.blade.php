@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $items = [
                    ['titulo' => 'Jornada de actualizacion clinica regional', 'fecha' => '18 Feb 2026', 'estado' => 'Publicado'],
                    ['titulo' => 'Comunicado sobre mesa de partes digital', 'fecha' => '12 Feb 2026', 'estado' => 'Vigente'],
                    ['titulo' => 'Convocatoria para comites tecnicos 2026', 'fecha' => '04 Feb 2026', 'estado' => 'Abierto'],
                ];
            @endphp
            <div class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-5">Ultimas noticias</h2>
                <div class="space-y-4">
                    @foreach ($items as $item)
                        <article class="border border-slate-200 p-4 hover:shadow-sm transition-[box-shadow,border-color] duration-300">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <h3 class="text-slate-900 text-lg font-bold">{{ $item['titulo'] }}</h3>
                                <span class="text-xs uppercase tracking-[0.12em] px-2 py-1 border border-primary/25 text-primary">{{ $item['estado'] }}</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-2">Fecha: {{ $item['fecha'] }}</p>
                        </article>
                    @endforeach
                </div>
                <div class="mt-6">
                    <a href="{{ route('actualidad') }}" class="inst-btn-secondary">Volver a actualidad</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

