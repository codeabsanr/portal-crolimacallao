@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-5">Documentos aceptados</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-slate-700">
                    <div class="border border-slate-200 p-4">Titulo o diploma legalizado.</div>
                    <div class="border border-slate-200 p-4">Constancia de egreso o sustentacion.</div>
                    <div class="border border-slate-200 p-4">DNI vigente y ficha de datos.</div>
                    <div class="border border-slate-200 p-4">Comprobante de pago del derecho.</div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

