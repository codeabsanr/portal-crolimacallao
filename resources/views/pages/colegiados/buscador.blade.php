@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-5">Busqueda rapida</h2>
                <div class="grid grid-cols-1 md:grid-cols-[1fr_auto] gap-3">
                    <input type="text" class="inst-input" placeholder="Nombres, apellidos o numero de colegiatura" />
                    <button class="inst-btn-primary">Consultar</button>
                </div>
                <div class="mt-6 border border-slate-200 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] text-slate-500">Resultado simulado</p>
                    <p class="text-slate-900 font-bold mt-2">OBS-01425 | Maria Elena Ramos Caceres</p>
                    <p class="text-sm text-slate-600">Estado: Habil | Vigencia: 31/12/2026 | Region: Lima-Callao</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

