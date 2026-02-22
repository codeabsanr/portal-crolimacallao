@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8">
                <h2 class="inst-section-title mb-4">Acceso al campus</h2>
                <p class="text-slate-700">Este modulo esta en implementacion. Mientras tanto, puede registrar interes y recibir aviso de activacion.</p>
                <form class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-3">
                    <input type="email" class="inst-input" placeholder="correo@ejemplo.com" />
                    <button type="button" class="inst-btn-primary">Notificarme</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

