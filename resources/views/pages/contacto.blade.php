@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative overflow-hidden bg-secondary text-white">
            <div class="absolute inset-0 opacity-50 bg-[radial-gradient(circle_at_10%_20%,rgba(186,124,0,0.18),transparent_36%),radial-gradient(circle_at_85%_0%,rgba(102,2,25,0.75),transparent_44%)]"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10 text-center">
                <h1 class="text-white">Contáctanos</h1>
                <p class="text-base md:text-lg text-white/85 mt-4 max-w-3xl mx-auto">Estamos aquí para escucharte. Encuentra nuestra información institucional o envíanos un mensaje directo.</p>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-8 items-start">
                    <aside class="lg:col-span-2 space-y-4">
                        <h2 class="text-3xl font-black text-slate-900 mb-3">Información institucional</h2>

                        <article class="inst-card p-5 flex gap-4">
                            <div class="h-11 w-11 rounded bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <span class="material-icons-outlined">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Dirección física</h3>
                                <p class="text-slate-600">Mariscal Sucre 1351, Pueblo Libre, Lima, Perú</p>
                            </div>
                        </article>

                        <article class="inst-card p-5 flex gap-4">
                            <div class="h-11 w-11 rounded bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <span class="material-icons-outlined">call</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Central telefónica</h3>
                                <p class="text-slate-600">(01) 463-0000</p>
                                <p class="text-slate-600">+51 982 520 891</p>
                            </div>
                        </article>

                        <article class="inst-card p-5 flex gap-4">
                            <div class="h-11 w-11 rounded bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <span class="material-icons-outlined">mail</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Correo institucional</h3>
                                <p class="text-slate-600 break-all">tramitedocumentario@crolimacallao.org.pe</p>
                            </div>
                        </article>

                        <article class="inst-card p-5 flex gap-4">
                            <div class="h-11 w-11 rounded bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <span class="material-icons-outlined">schedule</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Horario de atención</h3>
                                <p class="text-slate-600">Lunes a viernes: 09:00 - 17:30</p>
                                <p class="text-slate-600">Sábados: 09:00 - 12:00</p>
                            </div>
                        </article>
                    </aside>

                    <section class="lg:col-span-3 inst-card p-6 md:p-8 border-t-4 border-t-primary">
                        <h2 class="text-3xl font-black text-slate-900 mb-6">Envíanos un mensaje</h2>
                        <form action="#" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="contacto-nombre" class="block text-sm font-bold uppercase tracking-[0.08em] text-slate-700 mb-2">Nombre completo</label>
                                    <input id="contacto-nombre" name="nombre" type="text" placeholder="Ej. Ana García Pérez" class="inst-input" required>
                                </div>
                                <div>
                                    <label for="contacto-correo" class="block text-sm font-bold uppercase tracking-[0.08em] text-slate-700 mb-2">Correo electrónico</label>
                                    <input id="contacto-correo" name="email" type="email" placeholder="ejemplo@correo.com" class="inst-input" required>
                                </div>
                            </div>

                            <div>
                                <label for="contacto-asunto" class="block text-sm font-bold uppercase tracking-[0.08em] text-slate-700 mb-2">Motivo de consulta</label>
                                <select id="contacto-asunto" name="asunto" class="inst-input" required>
                                    <option value="">Seleccione una opción</option>
                                    <option>Consulta general</option>
                                    <option>Colegiatura</option>
                                    <option>Mesa de partes</option>
                                    <option>Capacitación</option>
                                    <option>Normativa y documentos</option>
                                </select>
                            </div>

                            <div>
                                <label for="contacto-mensaje" class="block text-sm font-bold uppercase tracking-[0.08em] text-slate-700 mb-2">Mensaje</label>
                                <textarea id="contacto-mensaje" name="mensaje" rows="6" class="inst-input" placeholder="Escriba aquí su consulta detalladamente..." required></textarea>
                            </div>

                            <button type="submit" class="inst-btn-primary !w-full !text-base">Enviar mensaje <span class="material-icons-outlined">send</span></button>
                            <p class="text-xs text-slate-500">Al enviar el formulario, aceptas el tratamiento de datos para atención institucional.</p>
                        </form>
                    </section>
                </div>
            </div>
        </section>

        <section class="py-12 bg-slate-200/70">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-6">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900">Nuestra ubicación</h2>
                    <p class="text-slate-600 mt-2">Visítanos en nuestra sede central de Pueblo Libre.</p>
                </div>
                <div class="inst-card overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps?q=Mariscal%20Sucre%201351%20Pueblo%20Libre%20Lima&output=embed"
                        class="w-full h-[320px] md:h-[420px] border-0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Ubicación CRO III Lima-Callao">
                    </iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
