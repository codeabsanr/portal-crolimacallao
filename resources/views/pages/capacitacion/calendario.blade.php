@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $calendario = [
                    ['mes' => 'Marzo 2026', 'actividad' => 'Taller de monitoreo fetal', 'vacantes' => 40],
                    ['mes' => 'Abril 2026', 'actividad' => 'Curso de gestion perinatal', 'vacantes' => 35],
                    ['mes' => 'Mayo 2026', 'actividad' => 'Seminario de bioetica obstetrica', 'vacantes' => 80],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($calendario as $item)
                    <article class="inst-card p-6 border-l-4 border-primary">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $item['mes'] }}</p>
                        <h3 class="text-slate-900 mt-2">{{ $item['actividad'] }}</h3>
                        <p class="text-sm text-slate-600 mt-2">Vacantes: {{ $item['vacantes'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

