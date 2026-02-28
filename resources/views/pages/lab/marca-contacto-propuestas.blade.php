@extends('layouts.app')

@section('content')
    <main id="main" class="bg-background-light">
        <section class="border-b border-slate-200 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-10">
                <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Propuesta única de rediseño</p>
                <h1 class="text-text-main mt-2">Hero de contacto con objetivo operativo</h1>
                <p class="mt-3 text-text-main max-w-4xl">
                    <strong>Fin:</strong> que una persona elija canal y ejecute una acción en menos de 20 segundos.
                    La composición prioriza claridad, ruta y confianza institucional.
                </p>
            </div>
        </section>

        <section class="py-8 md:py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <article class="inst-card overflow-hidden border-slate-300">
                    <div class="grid lg:grid-cols-[1.08fr_0.92fr]">
                        <div class="relative p-6 md:p-10 text-white bg-[linear-gradient(125deg,#4d0213_0%,#660219_45%,#660219_100%)]">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_16%_14%,rgba(248,236,208,0.18),transparent_32%),radial-gradient(circle_at_88%_78%,rgba(186,124,0,0.18),transparent_34%)]"></div>
                            <div class="relative z-10">
                                <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold">Canales de atención</p>
                                <h2 class="text-white mt-2 text-4xl md:text-5xl font-black leading-[1.06]">Contáctanos</h2>
                                <p class="mt-4 text-white/90 text-base md:text-lg max-w-2xl">
                                    Te guiamos por el canal correcto según tu necesidad: trámite, soporte o seguimiento documentario.
                                </p>

                                <div class="mt-6 grid sm:grid-cols-3 gap-3">
                                    <div class="border border-white/20 bg-white/10 p-3">
                                        <p class="text-xs uppercase tracking-[0.13em] text-white/75">Paso 1</p>
                                        <p class="font-bold mt-1">Elige canal</p>
                                    </div>
                                    <div class="border border-white/20 bg-white/10 p-3">
                                        <p class="text-xs uppercase tracking-[0.13em] text-white/75">Paso 2</p>
                                        <p class="font-bold mt-1">Registra solicitud</p>
                                    </div>
                                    <div class="border border-white/20 bg-white/10 p-3">
                                        <p class="text-xs uppercase tracking-[0.13em] text-white/75">Paso 3</p>
                                        <p class="font-bold mt-1">Haz seguimiento</p>
                                    </div>
                                </div>

                                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                    <a href="{{ route('tramites') }}" class="inst-btn border-white bg-white text-primary hover:bg-brand-gold-soft w-full sm:w-auto justify-between">
                                        Ver trámites
                                        <span class="material-icons-outlined text-base">arrow_forward</span>
                                    </a>
                                    <a href="{{ route('admin.intranet') }}" class="inst-btn-secondary border-white text-white hover:bg-white/10 w-full sm:w-auto justify-between">
                                        Ir a intranet
                                        <span class="material-icons-outlined text-base">login</span>
                                    </a>
                                </div>

                                <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm md:text-base text-white/90">
                                    <p class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-brand-gold-light">check_circle</span>Atención institucional</p>
                                    <p class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-brand-gold-light">check_circle</span>Mesa de partes</p>
                                    <p class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-brand-gold-light">check_circle</span>Soporte al colegiado</p>
                                </div>
                            </div>
                        </div>

                        <aside class="bg-white p-6 md:p-8 border-t lg:border-t-0 lg:border-l border-slate-200">
                            <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Resumen institucional</p>

                            <div class="mt-4 space-y-3">
                                <div class="inst-card p-4 border-l-4 border-primary">
                                    <p class="text-xs uppercase tracking-[0.13em] text-text-main">Teléfono</p>
                                    <p class="text-2xl font-black text-text-main mt-1">+51 982 520 891</p>
                                </div>
                                <div class="inst-card p-4 border-l-4 border-secondary">
                                    <p class="text-xs uppercase tracking-[0.13em] text-text-main">Correo</p>
                                    <p class="text-xl md:text-2xl font-black text-text-main mt-1 break-words">tramitedocumentario@crolimacallao.org.pe</p>
                                </div>
                                <div class="inst-card p-4 border-l-4 border-brand-gold">
                                    <p class="text-xs uppercase tracking-[0.13em] text-text-main">Atención</p>
                                    <p class="text-2xl font-black text-text-main mt-1">Virtual y presencial</p>
                                </div>
                            </div>

                            <div class="mt-5 border-t border-slate-200 pt-4">
                                <p class="text-xs uppercase tracking-[0.14em] text-text-main">Ruta recomendada</p>
                                <div class="mt-2 grid gap-2">
                                    <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary !w-full !justify-between !px-4 !py-2.5">
                                        Enviar documento
                                        <span class="material-icons-outlined text-base">upload_file</span>
                                    </a>
                                    <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full !justify-between !px-4 !py-2.5">
                                        Hablar con soporte
                                        <span class="material-icons-outlined text-base">support_agent</span>
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
        </section>
    </main>
@endsection



