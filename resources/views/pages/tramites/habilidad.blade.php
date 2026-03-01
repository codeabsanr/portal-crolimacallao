@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Habilidad profesional" title="Certificado de Habilidad Profesional"
            subtitle="Información oficial para profesionales de obstetricia: requisitos, tiempos y seguimiento del expediente."
            icon="verified" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="¿Cuándo corresponde este trámite?" title="Solicite habilidad profesional cuando una entidad la requiera vigente"
                    subtitle="Contenido preparado con enfoque institucional para reducir observaciones y reprocesos." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">business_center</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Inicio o renovación de contrato</p>
                        <p class="text-sm text-text-main mt-2">Cuando una institución solicita constancia vigente para incorporación o continuidad laboral.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">gavel</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Concurso o convocatoria</p>
                        <p class="text-sm text-text-main mt-2">Para acreditar condición profesional en procesos públicos o privados.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-11 w-11 items-center justify-center border border-primary/20 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-primary text-[1.65rem]">hospital</span>
                        </span>
                        <p class="inst-kicker">Caso frecuente</p>
                        <p class="font-bold text-text-main mt-1">Gestiones con clínicas y redes</p>
                        <p class="text-sm text-text-main mt-2">Para actualizar el estado profesional ante redes, clínicas y entidades de salud.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Guía paso a paso" title="Trámite de habilidad en 4 etapas"
                    subtitle="Secuencia visual para reducir errores y saber exactamente qué ocurre en cada etapa." />

                <ol class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-5">
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">fact_check</span>
                        </span>
                        <p class="inst-kicker">Paso 1</p>
                        <p class="font-bold text-text-main mt-1">Valide requisitos</p>
                        <p class="text-sm text-text-main mt-2">Confirme no adeudo y documentos en formato legible.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10"><span class="material-icons-outlined text-primary">arrow_forward</span></span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">description</span>
                        </span>
                        <p class="inst-kicker">Paso 2</p>
                        <p class="font-bold text-text-main mt-1">Registre solicitud</p>
                        <p class="text-sm text-text-main mt-2">Registrar el expediente por Mesa de Partes virtual con datos completos y legibles.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10"><span class="material-icons-outlined text-primary">arrow_forward</span></span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">payments</span>
                        </span>
                        <p class="inst-kicker">Paso 3</p>
                        <p class="font-bold text-text-main mt-1">Valide pago y datos</p>
                        <p class="text-sm text-text-main mt-2">La unidad administrativa verifica la información cargada.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10"><span class="material-icons-outlined text-primary">arrow_forward</span></span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">verified</span>
                        </span>
                        <p class="inst-kicker">Paso 4</p>
                        <p class="font-bold text-text-main mt-1">Emisión y descarga</p>
                        <p class="text-sm text-text-main mt-2">Si no hay observaciones, se emite la constancia digital de habilidad.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:gap-7">
                <article class="lg:col-span-2 inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Checklist oficial" title="Requisitos y validaciones"
                        subtitle="Marca cada ítem antes de iniciar para evitar observaciones." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Solicitud simple firmada.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Constancia de no adeudo institucional.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Voucher de pago por derecho de trámite.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>DNI vigente y datos de contacto actualizados.</span></li>
                    </ul>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Tiempo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">3 a 5 días hábiles</p>
                        </div>
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Canal recomendado</p>
                            <p class="text-text-main mt-1 font-semibold">Mesa de Partes virtual</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Costo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">Según tarifario institucional vigente</p>
                            <p class="text-xs text-text-main/80 mt-1">Validado al momento del registro del expediente.</p>
                        </div>
                        <div class="border border-primary/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Resultado del trámite</p>
                            <p class="text-text-main mt-1 font-semibold">Constancia digital de habilidad</p>
                            <p class="text-xs text-text-main/80 mt-1">Incluye validación institucional para verificación externa.</p>
                        </div>
                    </div>
                </article>

                <x-tramites-action-panel
                    title="Registro y seguimiento"
                    primary-label="Registrar solicitud"
                    :primary-href="route('tramites.mesa-partes')"
                    primary-icon="upload_file"
                    secondary-label="Seguimiento del trámite"
                    :secondary-href="route('tramites.tracking', ['tipo' => 'habilidad'])"
                    secondary-icon="timeline"
                    tertiary-label="Solicitar orientación"
                    :tertiary-href="route('contacto')"
                    tertiary-icon="support_agent"
                    reference-label="Prueba seguimiento (demo)"
                    reference-code="HAB-2026-00421"
                    :reference-href="route('tramites.tracking', ['tipo' => 'habilidad', 'codigo' => 'HAB-2026-00421'])"
                    hint-text="En esta página, el siguiente paso esperado es registrar solicitud y validar su estado."
                    hint-cta-label="Registrar ahora"
                    :hint-cta-href="route('tramites.mesa-partes')" />
            </div>
        </section>

        <section class="inst-section bg-[linear-gradient(180deg,#ffffff_0%,#f8f4ea_100%)]">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-6 md:gap-7">
                    <article class="inst-card p-6 md:p-8 border border-primary/20">
                        <p class="inst-kicker">Transparencia del proceso</p>
                        <h2 class="inst-title text-text-main mt-1">¿Qué verás en el seguimiento?</h2>
                        <ul class="mt-4 space-y-3 text-text-main">
                            <li class="flex items-start gap-3"><span class="material-icons-outlined text-primary mt-0.5">timeline</span><span>Etapa exacta del trámite y área responsable.</span></li>
                            <li class="flex items-start gap-3"><span class="material-icons-outlined text-primary mt-0.5">update</span><span>Última actualización con fecha y hora.</span></li>
                            <li class="flex items-start gap-3"><span class="material-icons-outlined text-primary mt-0.5">description</span><span>Estado de validación de documentos clave.</span></li>
                        </ul>
                    </article>
                    <article class="inst-card p-6 md:p-8 border border-primary/20 bg-inst-hero text-white relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-brand-gold"></div>
                        <p class="text-xs uppercase tracking-[0.12em] text-brand-gold-light font-bold">Siguiente paso recomendado</p>
                        <h3 class="text-2xl font-black mt-2">Consultar estado del expediente</h3>
                        <p class="mt-3 text-white/90">Consulta el estado con el código de expediente y revise cada etapa del trámite en línea.</p>
                        <a href="{{ route('tramites.tracking', ['tipo' => 'habilidad']) }}" class="inst-btn mt-5 !bg-white !text-primary hover:!bg-brand-gold-soft">Ir a seguimiento</a>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection
