@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Normativa / Guías técnicas" title="Guías Técnicas de Referencia"
            subtitle="Documentos de referencia para la práctica obstétrica y la gestión de servicios de salud."
            icon="import_contacts" backRoute="normativa" backLabel="Volver a Normativa" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Documentos" title="Guías disponibles"
                        subtitle="Materiales de referencia actualizados para el ejercicio profesional y la gestión institucional." />
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 shrink-0">description</span>
                            <span class="text-text-main">Guía para certificación de habilidad profesional.</span>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 shrink-0">description</span>
                            <span class="text-text-main">Guía de atención administrativa para colegiatura.</span>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 shrink-0">description</span>
                            <span class="text-text-main">Guía de archivo documentario y mesa de partes.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection



