@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-5">Guias disponibles (simuladas)</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="border border-slate-200 p-4">Guia para certificacion de habilidad profesional.</li>
                    <li class="border border-slate-200 p-4">Guia de atencion administrativa para colegiatura.</li>
                    <li class="border border-slate-200 p-4">Guia de archivo documentario y mesa de partes.</li>
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection

