@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Registros académicos" title="Registro de Especialidades y Grados"
            subtitle="Actualización oficial de información académica con validación documentaria y trazabilidad de expediente."
            icon="workspace_premium" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Alcance del trámite" title="¿Qué información se actualiza?"
                    subtitle="Registro de especialidades, segundas especialidades, maestrías, doctorados y certificaciones académicas reconocidas." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Actualización</p>
                        <p class="font-bold text-text-main mt-1">Especialidades</p>
                        <p class="text-sm text-text-main mt-2">Incorporación de especialidades y programas de formación adicional.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Actualización</p>
                        <p class="font-bold text-text-main mt-1">Grados académicos</p>
                        <p class="text-sm text-text-main mt-2">Registro de maestrías, doctorados y certificaciones afines.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Actualización</p>
                        <p class="font-bold text-text-main mt-1">Perfil institucional</p>
                        <p class="text-sm text-text-main mt-2">Consolidación de datos para consultas y reportes institucionales.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:gap-7">
                <article class="lg:col-span-2 inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Checklist oficial" title="Documentación requerida"
                        subtitle="Presente archivos legibles y vigentes para reducir observaciones." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Título o diploma legalizado.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Constancia de egreso o sustentación.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>DNI vigente y ficha de datos actualizada.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Comprobante de pago del derecho de trámite.</span></li>
                    </ul>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Plazo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">4 a 6 días hábiles</p>
                        </div>
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Resultado esperado</p>
                            <p class="text-text-main mt-1 font-semibold">Actualización de perfil académico institucional</p>
                        </div>
                    </div>
                </article>

                <x-tramites-action-panel
                    title="Registrar y verificar"
                    primary-label="Registrar expediente"
                    :primary-href="route('tramites.mesa-partes')"
                    primary-icon="upload_file"
                    secondary-label="Seguimiento del trámite"
                    :secondary-href="route('tramites.tracking', ['tipo' => 'registros'])"
                    secondary-icon="timeline"
                    tertiary-label="Orientación institucional"
                    :tertiary-href="route('contacto')"
                    tertiary-icon="support_agent"
                    reference-code="REG-2026-00092"
                    :reference-href="route('tramites.tracking', ['tipo' => 'registros', 'codigo' => 'REG-2026-00092'])"
                    hint-text="Primero registra el expediente, luego revisa seguimiento para confirmar validación."
                    hint-cta-label="Ir a seguimiento"
                    :hint-cta-href="route('tramites.tracking', ['tipo' => 'registros'])" />
            </div>
        </section>
    </main>
@endsection
