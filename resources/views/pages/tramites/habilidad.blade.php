@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Habilidad profesional" title="Certificado de Habilidad Profesional"
            subtitle="Guía práctica para emitir o renovar su habilidad sin reprocesos."
            icon="verified" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Guía rápida" title="Resuelva este trámite en 3 acciones"
                    subtitle="Checklist, registro y seguimiento para completar la solicitud correctamente." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Acción 1</p>
                        <p class="font-bold text-text-main mt-1">Prepare documentos</p>
                        <p class="text-sm text-text-main mt-2">Solicitud, no adeudo y comprobante de pago.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Acción 2</p>
                        <p class="font-bold text-text-main mt-1">Registre la solicitud</p>
                        <p class="text-sm text-text-main mt-2">Use el canal digital o acérquese según indicación.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Acción 3</p>
                        <p class="font-bold text-text-main mt-1">Monitoree estado</p>
                        <p class="text-sm text-text-main mt-2">Verifique observaciones y cierre del trámite.</p>
                    </article>
                </div>

                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Checklist oficial" title="Documentos requeridos"
                        subtitle="Complete cada ítem antes de registrar para evitar observaciones." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Solicitud simple firmada.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Constancia de no adeudo institucional.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Voucher de pago por derecho de trámite.</span></li>
                    </ul>
                    <div class="flex flex-col sm:flex-row gap-3 mt-3">
                        <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary">Registrar por Mesa de Partes</a>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary">Solicitar orientación</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
