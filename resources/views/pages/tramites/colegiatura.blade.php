@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Colegiatura" title="Proceso de Colegiatura"
            subtitle="Inscripción formal al Colegio de Obstetras. Documentación, evaluación y alta en el padrón oficial."
            icon="school" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Pasos del proceso" title="¿Cómo colegiarme?"
                    subtitle="Siga los tres pasos del proceso de colegiatura para completar su inscripción oficial." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div
                            class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">
                            1</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">description</span>
                        <h3 class="text-text-main font-black mt-2">Registro y carga</h3>
                        <p class="text-sm text-text-main mt-2">Ingrese sus datos, cargue los documentos requeridos y
                            registre su solicitud en el portal.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary mt-4 !text-xs !py-2">Solicitar
                            orientación</a>
                    </div>
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div
                            class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">
                            2</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">fact_check</span>
                        <h3 class="text-text-main font-black mt-2">Revisión administrativa</h3>
                        <p class="text-sm text-text-main mt-2">Los documentos son validados por el área administrativa. Se
                            emitirán observaciones si corresponde.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary mt-4 !text-xs !py-2">Consultar
                            estado</a>
                    </div>
                    <div class="inst-card p-6 border-t-4 border-primary">
                        <div
                            class="h-10 w-10 rounded-full bg-primary text-white text-lg font-black flex items-center justify-center mb-4">
                            3</div>
                        <span class="material-icons-outlined text-primary text-2xl mb-2">task_alt</span>
                        <h3 class="text-text-main font-black mt-2">Alta en el padrón</h3>
                        <p class="text-sm text-text-main mt-2">Una vez aprobada, su colegiatura queda registrada. Puede
                            verificar su estado en el buscador oficial.</p>
                        <a href="{{ route('colegiados.buscador') }}" class="inst-btn-secondary mt-4 !text-xs !py-2">Ver
                            buscador</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection




