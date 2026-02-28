@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Registros académicos" title="Registro de Especialidades y Grados"
            subtitle="Documentación para el registro de especialidades, maestrías y doctorados en el perfil del colegiado."
            icon="workspace_premium" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inst-card p-6 md:p-8">
                    <x-page-section-intro eyebrow="Documentación" title="Documentos aceptados"
                        subtitle="Presente los siguientes documentos para actualizar su perfil académico en el padrón institucional." />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-slate-700">
                        <div class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span>
                            <span>Título o diploma legalizado.</span>
                        </div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span>
                            <span>Constancia de egreso o sustentación.</span>
                        </div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span>
                            <span>DNI vigente y ficha de datos.</span>
                        </div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span>
                            <span>Comprobante de pago del derecho.</span>
                        </div>
                    </div>
                    <a href="{{ route('tramites') }}" class="inst-btn-primary mt-6">Volver al catálogo</a>
                </div>
            </div>
        </section>
    </main>
@endsection