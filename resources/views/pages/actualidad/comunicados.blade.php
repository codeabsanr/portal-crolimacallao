@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Actualidad / Comunicados" title="Comunicados Oficiales"
            subtitle="Pronunciamientos, avisos y comunicaciones formales del Consejo Directivo y la secretaría institucional."
            icon="campaign" backRoute="actualidad" backLabel="Volver a Actualidad" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                @php
                    $comunicados = [
                        ['codigo' => 'COM-2026-014', 'asunto' => 'Actualización de horarios de atención', 'estado' => 'Vigente'],
                        ['codigo' => 'COM-2026-010', 'asunto' => 'Lineamientos de regularización administrativa', 'estado' => 'Vigente'],
                        ['codigo' => 'COM-2025-089', 'asunto' => 'Cierre anual de trámites', 'estado' => 'Histórico'],
                    ];
                @endphp
                <x-page-section-intro eyebrow="Canal oficial" title="Comunicados institucionales"
                    subtitle="Información verificada y actualizada sobre decisiones, avisos y pronunciamientos institucionales." />
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-7">
                    @foreach ($comunicados as $item)
                        <article
                            class="inst-card p-6 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $item['codigo'] }}</p>
                            <h3 class="text-text-main mt-2">{{ $item['asunto'] }}</h3>
                            <p class="text-sm text-text-main mt-2">Estado: {{ $item['estado'] }}</p>
                            <a href="{{ route('contacto') }}" class="inst-btn-secondary !px-4 !py-2 mt-4">Solicitar detalle</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection




