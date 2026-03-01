@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Colegiatura" title="Proceso de Colegiatura"
            subtitle="Guía oficial para inscripción institucional con requisitos, etapas y seguimiento del expediente."
            icon="school" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Uso del trámite" title="¿Cuándo corresponde iniciar colegiatura?"
                    subtitle="Este trámite aplica para inscripción inicial y regularización de registro profesional." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">assignment_ind</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Primera inscripción</p>
                        <p class="text-sm text-text-main mt-2">Para obtener alta institucional y registro en padrón del colegio.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">apartment</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Requisito institucional</p>
                        <p class="text-sm text-text-main mt-2">Cuando una entidad solicita número de colegiatura vigente para contratación.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">verified_user</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Regularización de expediente</p>
                        <p class="text-sm text-text-main mt-2">Para completar requisitos observados y continuar evaluación administrativa.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:gap-7">
                <article class="lg:col-span-2 inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Ruta del trámite" title="Colegiatura en 4 etapas"
                        subtitle="Flujo institucional para reducir observaciones y mejorar tiempos de atención." />
                    <ol class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="border border-primary/20 p-4">
                            <p class="inst-kicker">Etapa 1</p>
                            <p class="font-bold text-text-main mt-1">Registro de expediente</p>
                            <p class="text-sm text-text-main mt-1">Ingreso de solicitud y anexos por canal habilitado.</p>
                        </li>
                        <li class="border border-primary/20 p-4">
                            <p class="inst-kicker">Etapa 2</p>
                            <p class="font-bold text-text-main mt-1">Control documentario</p>
                            <p class="text-sm text-text-main mt-1">Validación de requisitos formales y consistencia de soportes.</p>
                        </li>
                        <li class="border border-primary/20 p-4">
                            <p class="inst-kicker">Etapa 3</p>
                            <p class="font-bold text-text-main mt-1">Evaluación administrativa</p>
                            <p class="text-sm text-text-main mt-1">Revisión interna para aprobación de colegiatura.</p>
                        </li>
                        <li class="border border-primary/20 p-4">
                            <p class="inst-kicker">Etapa 4</p>
                            <p class="font-bold text-text-main mt-1">Alta y notificación</p>
                            <p class="text-sm text-text-main mt-1">Registro en padrón institucional y comunicación de resultado.</p>
                        </li>
                    </ol>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Plazo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">7 a 10 días hábiles</p>
                        </div>
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Canal recomendado</p>
                            <p class="text-text-main mt-1 font-semibold">Mesa de Partes virtual</p>
                        </div>
                    </div>
                </article>

                <x-tramites-action-panel
                    title="Registrar y monitorear"
                    primary-label="Registrar expediente"
                    :primary-href="route('tramites.mesa-partes')"
                    primary-icon="upload_file"
                    secondary-label="Seguimiento del trámite"
                    :secondary-href="route('tramites.tracking', ['tipo' => 'colegiatura'])"
                    secondary-icon="timeline"
                    tertiary-label="Orientación institucional"
                    :tertiary-href="route('contacto')"
                    tertiary-icon="support_agent"
                    reference-code="COL-2026-00158"
                    :reference-href="route('tramites.tracking', ['tipo' => 'colegiatura', 'codigo' => 'COL-2026-00158'])"
                    hint-text="Si ya reuniste requisitos, registra el expediente y luego monitorea el avance."
                    hint-cta-label="Abrir Mesa de Partes"
                    :hint-cta-href="route('tramites.mesa-partes')" />
            </div>
        </section>
    </main>
@endsection
