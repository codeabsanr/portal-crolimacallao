@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Colegiatura" title="Proceso de Colegiatura"
            subtitle="Ruta guiada para completar inscripción formal al colegio."
            icon="school" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Pasos del proceso" title="¿Cómo colegiarme?"
                    subtitle="Siga este flujo para reducir observaciones y tiempos de validación." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">1</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">description</span>
                        <h3 class="text-text-main font-black mt-2">Registro y carga</h3>
                        <p class="text-sm text-text-main mt-2">Ingrese datos, adjunte documentos y registre su solicitud.</p>
                    </div>
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">2</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">fact_check</span>
                        <h3 class="text-text-main font-black mt-2">Revisión administrativa</h3>
                        <p class="text-sm text-text-main mt-2">El área correspondiente valida y notifica observaciones si aplica.</p>
                    </div>
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">3</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">task_alt</span>
                        <h3 class="text-text-main font-black mt-2">Alta en padrón</h3>
                        <p class="text-sm text-text-main mt-2">Aprobado el proceso, su colegiatura queda registrada oficialmente.</p>
                    </div>
                </div>

                <article class="inst-card p-6 md:p-8 border border-primary/20 bg-white">
                    <p class="inst-kicker">Acción rápida</p>
                    <h3 class="text-2xl font-black text-text-main mt-1">Canales de apoyo para completar su colegiatura</h3>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-3">
                        <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary !w-full">Registrar expediente</a>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full">Consultar requisitos</a>
                        <a href="{{ route('colegiados.buscador') }}" class="inst-btn-secondary !w-full">Verificar estado</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
@endsection
