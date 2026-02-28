@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Carné institucional" title="Carné del Colegiado"
            subtitle="Solicite la emisión, renovación o duplicado de su carné institucional de forma rápida y en línea."
            icon="credit_card" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section bg-background-light">
            <div class="max-w-6xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Formulario" title="Solicitud rápida"
                        subtitle="Complete los datos a continuación para iniciar el proceso de emisión o renovación de su carné." />
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
            </div>
        </section>
    </main>
@endsection

