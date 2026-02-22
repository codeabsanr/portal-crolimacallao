@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative overflow-hidden bg-secondary text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(186,124,0,0.22),transparent_42%),radial-gradient(circle_at_85%_0%,rgba(102,2,25,0.7),transparent_40%)]"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
                <p class="text-sm uppercase tracking-[0.16em] text-brand-gold-light font-bold mb-4">Gestión institucional</p>
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-white">Trámites y servicios al colegiado</h1>
                        <p class="mt-5 text-white/90 max-w-2xl">
                            Realice sus solicitudes con una ruta clara: requisitos, registro, validación y respuesta.
                            Diseñado para obstetras con atención administrativa ágil y formal.
                        </p>
                    </div>
                    <div class="inst-card p-6 bg-white/10 border-white/20">
                        <h2 class="text-2xl font-bold text-white mb-4">Canales disponibles</h2>
                        <ul class="space-y-3 text-white/90">
                            <li class="inline-flex items-center gap-2"><span class="material-icons-outlined">cloud_upload</span>Mesa de Partes Virtual</li>
                            <li class="inline-flex items-center gap-2"><span class="material-icons-outlined">account_circle</span>Portal del Colegiado</li>
                            <li class="inline-flex items-center gap-2"><span class="material-icons-outlined">support_agent</span>Atención administrativa en sede</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <h2 class="inst-section-title">Catálogo de trámites</h2>
                    <p class="text-slate-600 mt-2">Seleccione el trámite según su necesidad profesional.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <x-card id="habilidad" title="Habilidad profesional" icon="verified"
                        description="Emisión y renovación del certificado de habilidad con validación institucional."
                        link="{{ url('tramites/habilidad') }}" linkText="Iniciar trámite" />

                    <x-card id="colegiatura" title="Colegiatura" icon="school"
                        description="Inscripción formal al colegio con requisitos documentales y evaluación administrativa."
                        link="{{ url('tramites/colegiatura') }}" linkText="Iniciar trámite" />

                    <x-card id="registros" title="Registros académicos" icon="workspace_premium"
                        description="Registro de especialidades, maestrías y doctorados para actualización de perfil."
                        link="{{ url('tramites/registros') }}" linkText="Iniciar trámite" />

                    <x-card title="Carné institucional" icon="credit_card"
                        description="Emisión, renovación o duplicado del carné del colegiado."
                        link="{{ url('tramites/carne') }}" linkText="Iniciar trámite" />

                    <x-card id="mesa-partes" title="Mesa de Partes Virtual" icon="forward_to_inbox"
                        description="Presentación y seguimiento de documentos administrativos en línea."
                        link="{{ url('tramites/mesa-partes') }}" linkText="Ingresar" />

                    <x-card title="Asesoría y consultas" icon="help_outline"
                        description="Orientación sobre requisitos, plazos, pagos y estado de sus solicitudes."
                        link="{{ route('contacto') }}" linkText="Contactar" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-8">
                    <div class="lg:col-span-3 inst-card p-8 border-t-4 border-primary">
                        <h2 class="inst-section-title mb-4">Proceso general de atención</h2>
                        <ol class="space-y-4">
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">1</span>
                                <p class="text-slate-700"><strong>Registro:</strong> Ingrese su solicitud por canal virtual o presencial.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">2</span>
                                <p class="text-slate-700"><strong>Verificación:</strong> Validación de requisitos y observaciones, si corresponde.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">3</span>
                                <p class="text-slate-700"><strong>Pago y regularización:</strong> Confirmación de tasas, cuotas y documentación final.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">4</span>
                                <p class="text-slate-700"><strong>Respuesta:</strong> Emisión de constancia, certificado o resolución administrativa.</p>
                            </li>
                        </ol>
                    </div>

                    <aside class="lg:col-span-2 inst-card p-8 bg-primary text-white border-primary">
                        <h2 class="text-white text-2xl font-black mb-3">Mesa de Partes 24/7</h2>
                        <p class="text-white/90 mb-6">Envíe expedientes y documentos sin ir a sede. Atención administrativa continua.</p>
                        <a href="{{ url('tramites/mesa-partes') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Ir a Mesa de Partes</a>
                        <div class="mt-5 pt-5 border-t border-white/20 text-sm text-white/80 space-y-2">
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base">mail</span>tramitedocumentario@crolimacallao.org.pe</p>
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base">call</span>+51 982 520 891</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="inst-section-title text-center mb-8">Preguntas frecuentes</h2>
                <div class="inst-card p-6 md:p-8">
                    <ul class="space-y-5">
                        <x-faq-item question="¿Cuánto demora la colegiatura?">
                            El plazo referencial es de 15 días hábiles desde la recepción de documentos completos.
                        </x-faq-item>
                        <x-faq-item question="¿Cómo regularizo cuotas pendientes?" class="border-t border-slate-200 pt-5">
                            Puede gestionar pago y validación en el Portal del Colegiado o vía mesa de partes.
                        </x-faq-item>
                        <x-faq-item question="¿El certificado de habilidad es digital?" class="border-t border-slate-200 pt-5">
                            Sí, se emite con validación institucional y puede ser remitido por correo registrado.
                        </x-faq-item>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
