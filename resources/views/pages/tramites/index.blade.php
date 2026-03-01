@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="tramites-contenido" class="scroll-mt-28 inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Ruta de uso" title="Elija el trámite correcto en 1 minuto"
                    subtitle="Diseñamos esta portada para que una obstetra identifique rápido qué trámite necesita, qué preparar y por dónde iniciarlo." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">quiz</span>
                        </span>
                        <p class="inst-kicker">Paso 1</p>
                        <h3 class="text-xl font-black text-text-main">Identifique su necesidad</h3>
                        <p class="text-sm text-text-main">Habilidad, colegiatura, carné, registros o presentación documentaria.</p>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">folder_open</span>
                        </span>
                        <p class="inst-kicker">Paso 2</p>
                        <h3 class="text-xl font-black text-text-main">Prepare requisitos</h3>
                        <p class="text-sm text-text-main">Revise checklist y valide documentos para evitar observaciones.</p>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">task_alt</span>
                        </span>
                        <p class="inst-kicker">Paso 3</p>
                        <h3 class="text-xl font-black text-text-main">Registre y haga seguimiento</h3>
                        <p class="text-sm text-text-main">Use canal virtual o soporte para cerrar su trámite con trazabilidad.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Catálogo de trámites" title="Seleccione su trámite y avance sin fricción"
                    subtitle="Cada tarjeta muestra el objetivo del trámite y su punto de inicio." />

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-7">
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

                    <x-card title="Asesoría y consultas" icon="support_agent"
                        description="Orientación para elegir trámite, validar documentos y evitar reprocesos."
                        link="{{ route('contacto') }}" linkText="Contactar soporte" />
                </div>
            </div>
        </section>

        <section class="inst-section bg-[linear-gradient(180deg,#ffffff_0%,#f8f4ea_100%)]">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-5 gap-8 lg:gap-10">
                    <article class="lg:col-span-3 rounded-xl border border-primary/25 bg-white p-5 sm:p-6 lg:p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="inst-kicker text-primary">Guía paso a paso</p>
                        <h2 class="inst-title text-secondary mt-1 mb-4">Cómo funciona un trámite</h2>
                        <div class="mb-5 h-[3px] w-20 bg-brand-gold-light"></div>
                        <ol class="space-y-4 leading-relaxed text-text-main">
                            <li class="flex gap-3">
                                <span class="h-8 w-8 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">1</span>
                                <p><strong class="text-secondary">Elección:</strong> seleccione trámite y revise su checklist oficial.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-8 w-8 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">2</span>
                                <p><strong class="text-secondary">Registro:</strong> cargue o presente documentación por canal habilitado.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-8 w-8 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">3</span>
                                <p><strong class="text-secondary">Validación:</strong> subsane observaciones y confirme pago si aplica.</p>
                            </li>
                            <li class="flex gap-3">
                                <span class="h-8 w-8 rounded-full bg-primary text-white ring-2 ring-brand-gold-light/60 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">4</span>
                                <p><strong class="text-secondary">Resultado:</strong> reciba constancia, certificado o resolución.</p>
                            </li>
                        </ol>
                    </article>

                    <aside class="lg:col-span-2 rounded-xl border border-primary/30 p-5 sm:p-6 lg:p-8 bg-inst-hero text-white shadow-[0_22px_40px_-30px_rgba(15,23,42,0.55)] relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-brand-gold"></div>
                        <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-semibold mb-2">Canal prioritario</p>
                        <h2 class="text-white text-2xl font-black mb-3">Mesa de Partes 24/7</h2>
                        <p class="text-white/90 mb-6">Si su trámite requiere expediente o documento formal, este canal acelera el registro y seguimiento.</p>
                        <a href="{{ url('tramites/mesa-partes') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Ir a Mesa de Partes</a>
                        <div class="mt-5 pt-5 border-t border-white/20 text-sm text-white/80 space-y-2">
                            <p class="inline-flex items-start gap-2 break-all"><span class="material-icons-outlined text-base mt-0.5">mail</span>tramitedocumentario@crolimacallao.org.pe</p>
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base">call</span>+51 982 520 891</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section id="tramites-faq" class="scroll-mt-28 inst-section bg-[linear-gradient(180deg,#faf3f5_0%,#f3e7eb_100%)]">
            <div class="max-w-5xl mx-auto">
                <div class="rounded-xl border border-primary/20 bg-white p-5 sm:p-6 md:p-8 shadow-[0_18px_34px_-30px_rgba(15,23,42,0.45)] text-center">
                    <p class="inst-kicker text-primary">Antes de enviar</p>
                    <h2 class="inst-title text-secondary mt-2">Preguntas frecuentes</h2>
                    <div class="mx-auto mt-3 h-[3px] w-24 bg-brand-gold-light"></div>
                    <p class="mt-4 text-text-main">Revise respuestas rápidas para reducir errores, observaciones y tiempos de espera.</p>
                    <a href="{{ route('tramites.faq') }}" class="inst-btn-primary mt-6 !px-6 !py-2.5">Ver preguntas frecuentes</a>
                </div>
            </div>
        </section>
    </main>
@endsection
