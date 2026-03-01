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

                <aside class="inst-card p-5 sm:p-6 border border-primary/20 bg-white inst-stack-tight">
                    <p class="inst-kicker">Acciones</p>
                    <h3 class="text-xl sm:text-2xl font-black text-text-main">Registrar y verificar</h3>
                    <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary !w-full">Registrar expediente</a>
                    <a href="{{ route('tramites.tracking', ['tipo' => 'registros']) }}" class="inst-btn-secondary !w-full">Seguimiento del trámite</a>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full">Orientación institucional</a>
                    <div class="border-t border-primary/15 pt-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Código de referencia</p>
                        <a class="inst-link inline-flex items-center gap-2 mt-2 break-all"
                            href="{{ route('tramites.tracking', ['tipo' => 'registros', 'codigo' => 'REG-2026-00092']) }}">
                            <span class="material-icons-outlined text-base text-primary">tag</span>REG-2026-00092
                        </a>
                    </div>
                </aside>
            </div>
        </section>
    </main>
@endsection
