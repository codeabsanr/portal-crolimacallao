@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-5">Checklist de requisitos</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="border border-slate-200 p-3">Solicitud simple firmada.</li>
                    <li class="border border-slate-200 p-3">Constancia de no adeudo institucional.</li>
                    <li class="border border-slate-200 p-3">Voucher de pago por derecho de tramite.</li>
                </ul>
                <a href="{{ route('tramites') }}#habilidad" class="inst-btn-primary mt-6">Volver al catalogo</a>
            </div>
        </div>
    </section>
</main>
@endsection

