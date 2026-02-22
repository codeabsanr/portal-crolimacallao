@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $leyes = [
                    ['norma' => 'Ley N. 28686', 'tema' => 'Ley del trabajo de la obstetra', 'vigencia' => 'Vigente'],
                    ['norma' => 'Ley N. 27853', 'tema' => 'Ley de trabajo de la obstetra', 'vigencia' => 'Vigente'],
                    ['norma' => 'Ley N. 26842', 'tema' => 'Ley general de salud', 'vigencia' => 'Vigente'],
                ];
            @endphp
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-5">Listado referencial</h2>
                <div class="space-y-3">
                    @foreach ($leyes as $ley)
                        <article class="border border-slate-200 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">{{ $ley['norma'] }}</p>
                            <h3 class="text-slate-900 text-lg mt-1">{{ $ley['tema'] }}</h3>
                            <p class="text-sm text-slate-600 mt-1">Estado: {{ $ley['vigencia'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

