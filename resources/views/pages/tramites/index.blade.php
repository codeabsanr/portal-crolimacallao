@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="tramites-contenido" class="scroll-mt-28 py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <h2 class="inst-section-title">Catálogo de trámites</h2>
                    <div class="mt-2 h-[3px] w-20 bg-brand-gold-light"></div>
                    <p class="text-slate-600 mt-3">Seleccione el trámite según su necesidad profesional.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <x-card id="habilidad" title="Habilidad profesional" icon="verified"
                        description="Emisión y renovación del certificado de habilidad con validación institucional."
                        link="{{ url('tramites/habilidad') }}" linkText="Iniciar trámite"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />

                    <x-card id="colegiatura" title="Colegiatura" icon="school"
                        description="Inscripción formal al colegio con requisitos documentales y evaluación administrativa."
                        link="{{ url('tramites/colegiatura') }}" linkText="Iniciar trámite"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />

                    <x-card id="registros" title="Registros académicos" icon="workspace_premium"
                        description="Registro de especialidades, maestrías y doctorados para actualización de perfil."
                        link="{{ url('tramites/registros') }}" linkText="Iniciar trámite"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />

                    <x-card title="Carné institucional" icon="credit_card"
                        description="Emisión, renovación o duplicado del carné del colegiado."
                        link="{{ url('tramites/carne') }}" linkText="Iniciar trámite"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />

                    <x-card id="mesa-partes" title="Mesa de Partes Virtual" icon="forward_to_inbox"
                        description="Presentación y seguimiento de documentos administrativos en línea."
                        link="{{ url('tramites/mesa-partes') }}" linkText="Ingresar"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />

                    <x-card title="Asesoría y consultas" icon="help_outline"
                        description="Orientación sobre requisitos, plazos, pagos y estado de sus solicitudes."
                        link="{{ route('contacto') }}" linkText="Contactar"
                        class="border-primary/30 bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow] duration-300" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-[linear-gradient(180deg,#ffffff_0%,#f8f4ea_100%)]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-8">
                    <div class="lg:col-span-3 rounded-xl border border-primary/25 bg-white p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold">Ruta de atención</p>
                        <h2 class="text-secondary text-3xl md:text-4xl font-black tracking-tight mt-1 mb-4">Proceso general de atención</h2>
                        <div class="mb-5 h-[3px] w-20 bg-brand-gold-light"></div>
                        <ol class="space-y-4">
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">1</span>
                                <p class="text-slate-700"><strong class="text-secondary">Registro:</strong> Ingrese su solicitud por canal virtual o presencial.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">2</span>
                                <p class="text-slate-700"><strong class="text-secondary">Verificación:</strong> Validación de requisitos y observaciones, si corresponde.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">3</span>
                                <p class="text-slate-700"><strong class="text-secondary">Pago y regularización:</strong> Confirmación de tasas, cuotas y documentación final.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-7 w-7 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">4</span>
                                <p class="text-slate-700"><strong class="text-secondary">Respuesta:</strong> Emisión de constancia, certificado o resolución administrativa.</p>
                            </li>
                        </ol>
                    </div>

                    <aside class="lg:col-span-2 rounded-xl border border-primary/30 p-8 bg-inst-hero text-white shadow-[0_22px_40px_-30px_rgba(15,23,42,0.55)] relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>
                        <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-semibold mb-2">Canal preferente</p>
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

        <section class="py-10 md:py-14 bg-[linear-gradient(180deg,#f7f9fc_0%,#eef3fa_100%)]">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="inst-section-title text-center">Preguntas frecuentes</h2>
                <div class="mx-auto mt-2 mb-8 h-[3px] w-24 bg-brand-gold-light"></div>
                <div class="rounded-xl border border-primary/20 bg-white p-6 md:p-8 shadow-[0_18px_34px_-30px_rgba(15,23,42,0.45)]">
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

