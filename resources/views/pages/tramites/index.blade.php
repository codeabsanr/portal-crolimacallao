@extends('layouts.app')

@section('content')
    <section class="bg-primary text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="material-icons-outlined text-6xl opacity-80 mb-4">assignment</span>
            <h1 class="text-5xl font-extrabold mb-6">Trámites</h1>
            <p class="text-xl opacity-90">Servicios y requisitos para el colegiado.</p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card id="habilidad" title="Habilidad" icon="verified" description="Certificado de habilidad profesional."
                link="{{ url('tramites/habilidad') }}" />
            <x-card id="colegiatura" title="Colegiatura" icon="school" description="Inscripción en el Colegio."
                link="{{ url('tramites/colegiatura') }}" />
            <x-card id="registros" title="Registros" icon="workspace_premium" description="Especialidades y postgrados."
                link="{{ url('tramites/registros') }}" />
            <x-card title="Carné" icon="credit_card" description="Emisión de identificación."
                link="{{ url('tramites/carne') }}" />
            <x-card id="mesa-partes" title="Mesa de Partes" icon="forward_to_inbox" description="Trámites virtuales."
                link="{{ url('tramites/mesa-partes') }}" />
            <x-card title="Preguntas" icon="help_outline" description="Dudas frecuentes."
                link="{{ url('tramites/faq') }}" />
        </div>

        <!-- Mesa de Partes & FAQ -->
        <section class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div
                class="bg-primary text-white p-8 lg:p-12 rounded-sm shadow-sm relative overflow-hidden flex flex-col justify-between group">
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-icons-outlined text-4xl">cloud_upload</span>
                        <h2 class="text-3xl font-bold">Mesa de Partes Virtual</h2>
                    </div>
                    <p class="text-lg text-primary-light mb-8 max-w-sm">
                        Envíe sus documentos y solicitudes en línea las 24 horas del día sin necesidad de acercarse a
                        nuestra sede.
                    </p>
                </div>
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-bold rounded-sm hover:bg-white hover:text-primary focus:outline-none transition-colors w-max relative z-10">
                    Ingresar Ahora <span class="material-icons-outlined ml-2">open_in_new</span>
                </a>
                <span
                    class="material-icons-outlined absolute -bottom-8 -right-8 text-9xl text-primary-dark opacity-50 group-hover:scale-110 transition-transform duration-500">description</span>
            </div>

            <div
                class="bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 p-8 lg:p-12 rounded-sm shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-icons-outlined text-primary text-3xl">help_outline</span>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Preguntas Frecuentes (FAQ)</h2>
                </div>
                <ul class="space-y-4">
                    <li>
                        <details class="group/faq text-lg text-slate-600 dark:text-slate-300">
                            <summary
                                class="font-bold text-slate-900 dark:text-white cursor-pointer hover:text-primary transition-colors flex items-center justify-between">
                                ¿Cuánto tiempo demora el trámite de colegiatura?
                                <span
                                    class="material-icons-outlined group-open/faq:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <p class="mt-2 text-base">El proceso de colegiatura ordinaria toma aproximadamente 15 días
                                hábiles desde la recepción física de todos los documentos en nuestra sede.</p>
                        </details>
                    </li>
                    <li class="border-t border-gray-200 dark:border-gray-700 pt-4">
                        <details class="group/faq text-lg text-slate-600 dark:text-slate-300">
                            <summary
                                class="font-bold text-slate-900 dark:text-white cursor-pointer hover:text-primary transition-colors flex items-center justify-between">
                                ¿Cómo puedo pagar mis cuotas atrasadas?
                                <span
                                    class="material-icons-outlined group-open/faq:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <p class="mt-2 text-base">Puede realizar el pago a través de nuestra Intranet (Portal del
                                Colegiado) o generando un ticket de atención mediante la Mesa de Partes Virtual.</p>
                        </details>
                    </li>
                    <li class="border-t border-gray-200 dark:border-gray-700 pt-4">
                        <details class="group/faq text-lg text-slate-600 dark:text-slate-300">
                            <summary
                                class="font-bold text-slate-900 dark:text-white cursor-pointer hover:text-primary transition-colors flex items-center justify-between">
                                ¿El certificado de habilidad se envía por correo?
                                <span
                                    class="material-icons-outlined group-open/faq:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <p class="mt-2 text-base">Sí, el certificado de habilidad cuenta con código QR y firma digital,
                                y es enviado automáticamente al correo registrado en un plazo máximo de 24 a 48 horas.</p>
                        </details>
                    </li>
                </ul>
            </div>
        </section>
    </section>
@endsection