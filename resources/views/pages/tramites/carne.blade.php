@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-5">Solicitud rapida</h2>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" class="inst-input" placeholder="Numero de colegiatura" />
                    <select class="inst-input"><option>Tipo de solicitud</option><option>Nuevo</option><option>Renovacion</option><option>Duplicado</option></select>
                    <input type="email" class="inst-input" placeholder="Correo de contacto" />
                    <button type="button" class="inst-btn-primary">Enviar solicitud</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

