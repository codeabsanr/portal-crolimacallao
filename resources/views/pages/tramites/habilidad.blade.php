@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Habilidad profesional" title="Certificado de Habilidad Profesional"
            subtitle="Requisitos, plazos y proceso de emisión y renovación del certificado con validación institucional."
            icon="verified" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Documentación" title="Checklist de requisitos"
                        subtitle="Prepare los siguientes documentos antes de iniciar su solicitud para agilizar el proceso." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3">
                            <span
                                class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span>
                            <span>Solicitud simple firmada.</span>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3">
                            <span
                                class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span>
                            <span>Constancia de no adeudo institucional.</span>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3">
                            <span
                                class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span>
                            <span>Voucher de pago por derecho de trámite.</span>
                        </li>
                    </ul>
                    <a href="{{ route('tramites') }}#habilidad" class="inst-btn-primary mt-6">Volver al catálogo</a>
                </div>
            </div>
        </section>
    </main>
@endsection



