@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $comunicados = [
                    ['codigo' => 'COM-2026-014', 'asunto' => 'Actualizacion de horarios de atencion', 'estado' => 'Vigente'],
                    ['codigo' => 'COM-2026-010', 'asunto' => 'Lineamientos de regularizacion administrativa', 'estado' => 'Vigente'],
                    ['codigo' => 'COM-2025-089', 'asunto' => 'Cierre anual de tramites', 'estado' => 'Historico'],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($comunicados as $item)
                    <article class="inst-card p-6 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $item['codigo'] }}</p>
                        <h3 class="text-slate-900 mt-2">{{ $item['asunto'] }}</h3>
                        <p class="text-sm text-slate-600 mt-2">Estado: {{ $item['estado'] }}</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary !px-4 !py-2 mt-4">Solicitar detalle</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

