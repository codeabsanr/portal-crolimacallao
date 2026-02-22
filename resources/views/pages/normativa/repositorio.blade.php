@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
                    <input type="text" class="inst-input md:col-span-2" placeholder="Palabra clave" />
                    <select class="inst-input"><option>Tipo de documento</option><option>Ley</option><option>Reglamento</option><option>Guia</option></select>
                    <button type="button" class="inst-btn-primary">Buscar</button>
                </div>
                <div class="mt-6 space-y-3">
                    <article class="border border-slate-200 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">REG-2026-003</p>
                        <h3 class="text-slate-900 text-lg">Lineamientos para tramite de colegiatura</h3>
                        <p class="text-sm text-slate-600">Actualizado: 2026-01-22</p>
                    </article>
                    <article class="border border-slate-200 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">GUI-2025-011</p>
                        <h3 class="text-slate-900 text-lg">Manual de mesa de partes virtual</h3>
                        <p class="text-sm text-slate-600">Actualizado: 2025-11-08</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

