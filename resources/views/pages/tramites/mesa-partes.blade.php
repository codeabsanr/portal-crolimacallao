@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-6">
                <div class="inst-card p-6 md:p-8">
                    <h2 class="inst-section-title mb-4">Enviar expediente</h2>
                    <form class="space-y-3">
                        <input type="text" class="inst-input" placeholder="Asunto" />
                        <textarea class="inst-input min-h-[120px]" placeholder="Descripcion breve"></textarea>
                        <button type="button" class="inst-btn-primary w-full sm:w-auto">Registrar envio</button>
                    </form>
                </div>
                <aside class="inst-card p-6 md:p-8 border-primary/30 bg-primary/5">
                    <h3 class="text-slate-900">Estado de seguimiento</h3>
                    <p class="text-slate-700 mt-2">Codigo simulado: MP-2026-00421</p>
                    <p class="text-sm text-slate-600 mt-2">Ultima actualizacion: En revision documentaria.</p>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary mt-4">Contactar mesa de partes</a>
                </aside>
            </div>
        </div>
    </section>
</main>
@endsection

