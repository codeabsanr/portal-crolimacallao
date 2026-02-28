@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Actualidad / Noticias" title="Noticias Institucionales"
            subtitle="Comunicados, acuerdos, novedades y publicaciones oficiales del CRO III Lima-Callao." icon="newspaper"
            backRoute="actualidad" backLabel="Volver a Actualidad" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                @php
                    $items = [
                        ['titulo' => 'Jornada de actualización clínica regional', 'fecha' => '18 Feb 2026', 'estado' => 'Publicado'],
                        ['titulo' => 'Comunicado sobre mesa de partes digital', 'fecha' => '12 Feb 2026', 'estado' => 'Vigente'],
                        ['titulo' => 'Convocatoria para comités técnicos 2026', 'fecha' => '04 Feb 2026', 'estado' => 'Abierto'],
                    ];
                @endphp
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Publicaciones recientes" title="Últimas noticias"
                        subtitle="Información actualizada sobre las actividades y decisiones institucionales del Colegio." />
                    <div class="space-y-4">
                        @foreach ($items as $item)
                            <article
                                class="border border-slate-200 p-4 hover:shadow-sm transition-[box-shadow,border-color] duration-300 hover:border-primary/30">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <h3 class="text-text-main text-lg font-bold">{{ $item['titulo'] }}</h3>
                                    <span
                                        class="text-xs uppercase tracking-[0.12em] px-2 py-1 border border-primary/25 text-primary">{{ $item['estado'] }}</span>
                                </div>
                                <p class="text-sm text-text-main mt-2">Fecha: {{ $item['fecha'] }}</p>
                            </article>
                        @endforeach
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('actualidad') }}" class="inst-btn-secondary">Volver a Actualidad</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection



