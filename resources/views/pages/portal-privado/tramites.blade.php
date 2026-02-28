@extends('layouts.app')

@section('meta_description', 'Portal privado del colegiado - Tramites')

@section('content')
<section class="py-10 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="inst-card p-5 md:p-6 border-primary/25">
            <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold">Portal colegiado privado</p>
            <h1 class="mt-2 text-3xl md:text-4xl font-black text-secondary">Mis tramites</h1>
            <p class="mt-2 text-text-main">Seguimiento y gestion de solicitudes internas.</p>
            @include('pages.portal-privado.partials.nav')
        </div>

        <div class="grid md:grid-cols-2 gap-4">
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Tramite activo</p>
                <p class="mt-1 text-xl font-black text-secondary">Constancia de habilidad profesional</p>
                <p class="mt-2 text-sm text-text-main">Estado: En revision administrativa</p>
            </article>
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Tramite reciente</p>
                <p class="mt-1 text-xl font-black text-secondary">Actualizacion de datos profesionales</p>
                <p class="mt-2 text-sm text-text-main">Estado: Aprobado</p>
            </article>
        </div>
    </div>
</section>
@endsection



