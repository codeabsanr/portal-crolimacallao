@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Carné institucional" title="Carné del Colegiado"
            subtitle="Emisión, renovación o duplicado de carné con requisitos claros y seguimiento por expediente."
            icon="credit_card" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Modalidades disponibles" title="¿Qué tipo de solicitud corresponde?"
                    subtitle="Seleccione la modalidad correcta para evitar observaciones en registro y validación." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Emisión inicial</p>
                        <p class="text-sm text-text-main mt-2">Para colegiatura recién aprobada con alta activa en padrón.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Renovación</p>
                        <p class="text-sm text-text-main mt-2">Para carné vencido o por actualización de vigencia institucional.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Duplicado</p>
                        <p class="text-sm text-text-main mt-2">Para pérdida, deterioro o reposición por cambio de datos.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:gap-7">
                <article class="lg:col-span-2 inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Requisitos mínimos" title="Documentación para trámite de carné"
                        subtitle="Preparar estos requisitos antes del registro mejora tiempos de atención." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Solicitud según modalidad (emisión, renovación o duplicado).</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>DNI vigente y número de colegiatura activo.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Comprobante de pago por derecho de emisión.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Formato o declaración por pérdida en caso de duplicado.</span></li>
                    </ul>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Plazo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">2 a 4 días hábiles</p>
                        </div>
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Resultado esperado</p>
                            <p class="text-text-main mt-1 font-semibold">Emisión de carné o notificación de recojo</p>
                        </div>
                    </div>
                </article>

                <x-tramites-action-panel
                    title="Registrar y monitorear"
                    primary-label="Registrar expediente"
                    :primary-href="route('tramites.mesa-partes')"
                    primary-icon="upload_file"
                    secondary-label="Seguimiento del trámite"
                    :secondary-href="route('tramites.tracking', ['tipo' => 'carne'])"
                    secondary-icon="timeline"
                    tertiary-label="Orientación institucional"
                    :tertiary-href="route('contacto')"
                    tertiary-icon="support_agent"
                    reference-code="CAR-2026-00231"
                    :reference-href="route('tramites.tracking', ['tipo' => 'carne', 'codigo' => 'CAR-2026-00231'])"
                    hint-text="Si solicitas emisión o duplicado, registra expediente y revisa el estado del carné."
                    hint-cta-label="Abrir seguimiento"
                    :hint-cta-href="route('tramites.tracking', ['tipo' => 'carne'])" />
            </div>
        </section>
    </main>
@endsection
