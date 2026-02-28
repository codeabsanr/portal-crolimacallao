@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Registros académicos" title="Registro de Especialidades y Grados"
            subtitle="Actualice su perfil académico institucional para fortalecer trazabilidad profesional."
            icon="workspace_premium" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-6xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 inst-stack-tight">
                    <x-page-section-intro eyebrow="Checklist" title="Documentos aceptados"
                        subtitle="Presente documentos legibles y completos para evitar observaciones." />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-text-main">
                        <div class="flex items-start gap-3 border border-slate-200 p-4"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span><span>Título o diploma legalizado.</span></div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span><span>Constancia de egreso o sustentación.</span></div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span><span>DNI vigente y ficha de datos.</span></div>
                        <div class="flex items-start gap-3 border border-slate-200 p-4"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_circle</span><span>Comprobante de pago del derecho.</span></div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 mt-4">
                        <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary">Registrar expediente</a>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary">Resolver dudas</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
