@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="inst-section bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="grid lg:grid-cols-3 gap-6 md:gap-7">
                    <article class="lg:col-span-2 rounded-xl border border-primary/25 bg-white p-6 md:p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold">Respuestas clave</p>
                        <h2 class="text-secondary text-3xl md:text-4xl font-black tracking-tight mt-1">Trámites más consultados</h2>
                        <div class="mt-3 h-[3px] w-20 bg-brand-gold-light"></div>
                        <p class="mt-4 text-slate-600">Encuentre respuestas rápidas antes de iniciar su solicitud formal.</p>

                        <div class="mt-6 rounded-xl border border-primary/20 bg-[linear-gradient(180deg,#ffffff_0%,#fbf4f7_100%)] p-5 md:p-6">
                            <ul class="space-y-5">
                                <x-faq-item question="¿Cuánto demora la colegiatura?">
                                    El plazo referencial es de 15 días hábiles desde la recepción de documentos completos.
                                </x-faq-item>
                                <x-faq-item question="¿Cómo regularizo cuotas pendientes?" class="border-t border-slate-200 pt-5">
                                    Puede gestionar pago y validación en el Portal del Colegiado o vía Mesa de Partes.
                                </x-faq-item>
                                <x-faq-item question="¿El certificado de habilidad se entrega digital?" class="border-t border-slate-200 pt-5">
                                    Sí. Se emite con validación institucional y puede remitirse al correo registrado.
                                </x-faq-item>
                                <x-faq-item question="¿Puedo presentar documentos de forma virtual?" class="border-t border-slate-200 pt-5">
                                    Sí. Puede registrar su solicitud por Mesa de Partes Virtual y hacer seguimiento con su código.
                                </x-faq-item>
                                <x-faq-item question="¿Qué hago si mi expediente tiene observaciones?" class="border-t border-slate-200 pt-5">
                                    Revise el detalle de observaciones, subsane los requisitos y vuelva a presentar el expediente por el mismo canal.
                                </x-faq-item>
                            </ul>
                        </div>
                    </article>

                    <aside class="rounded-xl border border-primary/30 bg-inst-hero text-white p-6 md:p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.55)] relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>
                        <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-semibold">Soporte directo</p>
                        <h3 class="text-2xl font-black mt-2">¿Aún tienes dudas?</h3>
                        <p class="mt-3 text-white/90">Te orientamos para elegir el trámite correcto y completar requisitos sin contratiempos.</p>

                        <div class="mt-6 space-y-3">
                            <a href="{{ route('tramites') }}" class="inst-btn !w-full !bg-white !text-primary hover:!bg-brand-gold-soft">Volver al catálogo</a>
                            <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full !border-white !text-white hover:!bg-white/10">Contactar soporte</a>
                        </div>

                        <div class="mt-6 border-t border-white/20 pt-5 space-y-2 text-sm text-white/85">
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-brand-gold-light">mail</span>tramitedocumentario@crolimacallao.org.pe</p>
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-brand-gold-light">call</span>+51 982 520 891</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="inst-section bg-[linear-gradient(180deg,#faf3f5_0%,#f3e7eb_100%)] border-y border-slate-200">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="grid md:grid-cols-3 gap-4">
                    <article class="rounded-xl border border-primary/20 bg-white p-5">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Pagos</p>
                        <h3 class="mt-2 text-xl font-black text-secondary">Tasas y validación</h3>
                        <p class="mt-2 text-sm text-slate-600">Los pagos se confirman según el canal declarado en su solicitud.</p>
                    </article>
                    <article class="rounded-xl border border-primary/20 bg-white p-5">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Documentos</p>
                        <h3 class="mt-2 text-xl font-black text-secondary">Formato y legibilidad</h3>
                        <p class="mt-2 text-sm text-slate-600">Presente archivos completos y legibles para evitar observaciones.</p>
                    </article>
                    <article class="rounded-xl border border-primary/20 bg-white p-5">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Seguimiento</p>
                        <h3 class="mt-2 text-xl font-black text-secondary">Respuesta institucional</h3>
                        <p class="mt-2 text-sm text-slate-600">Conserve su código para consultar estado y notificaciones del trámite.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection




