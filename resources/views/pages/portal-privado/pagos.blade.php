@extends('layouts.app')

@section('meta_description', 'Portal privado del colegiado - Pagos')

@section('content')
<section class="py-10 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="inst-card p-5 md:p-6 border-primary/25">
            <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold">Portal colegiado privado</p>
            <h1 class="mt-2 text-3xl md:text-4xl font-black text-secondary">Pagos</h1>
            <p class="mt-2 text-text-main">Controla cuotas, comprobantes y movimientos.</p>
            @include('pages.portal-privado.partials.nav')
        </div>

        <div class="grid md:grid-cols-3 gap-4">
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Saldo pendiente</p>
                <p class="mt-1 text-2xl font-black text-primary">S/ 0.00</p>
            </article>
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Ultimo pago</p>
                <p class="mt-1 text-2xl font-black text-secondary">S/ 120.00</p>
                <p class="text-sm text-text-main">Enero 2026</p>
            </article>
            <article class="inst-card p-5 border-primary/20">
                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Estado financiero</p>
                <p class="mt-1 text-2xl font-black text-emerald-700">Al dia</p>
            </article>
        </div>
    </div>
</section>
@endsection


