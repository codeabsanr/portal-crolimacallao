@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Carné institucional" title="Carné del Colegiado"
            subtitle="Emisión, renovación o duplicado con flujo guiado y validación institucional."
            icon="credit_card" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-6xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Solicitud rápida" title="Complete este formulario inicial"
                        subtitle="Datos básicos para orientar su trámite de carné." />
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" class="inst-input" placeholder="Número de colegiatura" />
                        <select class="inst-input">
                            <option>Tipo de solicitud</option>
                            <option>Nuevo</option>
                            <option>Renovación</option>
                            <option>Duplicado</option>
                        </select>
                        <input type="email" class="inst-input" placeholder="Correo de contacto" />
                        <button type="button" class="inst-btn-primary">Enviar solicitud</button>
                    </form>
                </div>

                <article class="inst-card p-6 border border-primary/20 bg-white">
                    <p class="inst-kicker">Siguiente paso</p>
                    <h3 class="text-xl font-black text-text-main mt-1">Después del registro</h3>
                    <ul class="mt-3 space-y-2 text-sm text-text-main">
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">arrow_right_alt</span>Validación de datos y documentos.</li>
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">arrow_right_alt</span>Confirmación de pago y emisión.</li>
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">arrow_right_alt</span>Notificación para recojo o entrega digital según modalidad.</li>
                    </ul>
                </article>
            </div>
        </section>
    </main>
@endsection
