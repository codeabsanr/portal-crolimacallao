@extends('layouts.app')

@section('meta_description', 'Portal privado del colegiado - Documentos')

@section('content')
<section class="py-10 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="inst-card p-5 md:p-6 border-primary/25">
            <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold">Portal colegiado privado</p>
            <h1 class="mt-2 text-3xl md:text-4xl font-black text-secondary">Documentos</h1>
            <p class="mt-2 text-text-main">Descarga constancias y archivos administrativos.</p>
            @include('pages.portal-privado.partials.nav')
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Disponible</p>
                <p class="mt-1 text-xl font-black text-secondary">Constancia de habilidad</p>
                <button type="button" class="mt-3 inst-btn-secondary !px-4 !py-2 !text-xs">Descargar PDF</button>
            </article>
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Disponible</p>
                <p class="mt-1 text-xl font-black text-secondary">Reporte de pagos anuales</p>
                <button type="button" class="mt-3 inst-btn-secondary !px-4 !py-2 !text-xs">Descargar PDF</button>
            </article>
        </div>
    </div>
</section>
@endsection


