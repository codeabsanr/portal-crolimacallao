@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-16 md:py-24 text-center relative overflow-hidden">
        <!-- Decoración de fondo sutil -->
        <div class="absolute inset-0 opacity-10 flex justify-center items-center pointer-events-none">
            <span class="material-icons-outlined text-[20rem]">location_on</span>
        </div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <span class="inline-block p-4 rounded-full bg-white/10 backdrop-blur-sm mb-6">
                <span class="material-icons-outlined text-5xl">contact_support</span>
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">Contacte con nosotros</h1>
            <p class="text-lg md:text-2xl text-white/90 max-w-2xl mx-auto font-light">Estamos aquí para resolver sus
                consultas y guiarle en todos sus trámites institucionales.</p>
        </div>
    </section>

    <!-- Info Cards Wrapper -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 md:-mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Dirección Principal -->
            <div
                class="bg-white dark:bg-surface-dark p-6 rounded-xl shadow-lg border border-slate-100 dark:border-slate-800 text-center hover:shadow-xl transition-shadow flex flex-col items-center">
                <div
                    class="h-14 w-14 bg-red-50 dark:bg-red-900/20 text-primary rounded-full flex items-center justify-center mb-4">
                    <span class="material-icons-outlined text-2xl">business</span>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-2">Sede Principal</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Av. General Trinidad Morán No 1202, Lince, Lima</p>
            </div>

            <!-- Central Telefónica -->
            <div
                class="bg-white dark:bg-surface-dark p-6 rounded-xl shadow-lg border border-slate-100 dark:border-slate-800 text-center hover:shadow-xl transition-shadow flex flex-col items-center">
                <div
                    class="h-14 w-14 bg-red-50 dark:bg-red-900/20 text-primary rounded-full flex items-center justify-center mb-4">
                    <span class="material-icons-outlined text-2xl">phone_in_talk</span>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-2">Central Telefónica</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-1">(01) 441-3290</p>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Celular: 982 520 891</p>
            </div>

            <!-- Horario -->
            <div
                class="bg-white dark:bg-surface-dark p-6 rounded-xl shadow-lg border border-slate-100 dark:border-slate-800 text-center hover:shadow-xl transition-shadow flex flex-col items-center">
                <div
                    class="h-14 w-14 bg-red-50 dark:bg-red-900/20 text-primary rounded-full flex items-center justify-center mb-4">
                    <span class="material-icons-outlined text-2xl">schedule</span>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-2">Atención Presencial</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Lunes a Viernes</p>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">9:00 am - 5:00 pm</p>
            </div>

            <!-- Correo -->
            <div
                class="bg-white dark:bg-surface-dark p-6 rounded-xl shadow-lg border border-slate-100 dark:border-slate-800 text-center hover:shadow-xl transition-shadow flex flex-col items-center">
                <div
                    class="h-14 w-14 bg-red-50 dark:bg-red-900/20 text-primary rounded-full flex items-center justify-center mb-4">
                    <span class="material-icons-outlined text-2xl">mark_email_read</span>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-white text-lg mb-2">Buzón de Consultas</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">tramitedocumentario@<wbr>crolimacallao.org.pe</p>
            </div>
        </div>
    </div>

    <!-- Main Content: Formulario & Mapa -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-start">

            <!-- Left: Formulario -->
            <div class="lg:col-span-2">
                <div class="mb-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight mb-2">Envíenos un
                        mensaje</h2>
                    <p class="text-slate-600 dark:text-slate-400">Complete el formulario y nuestro equipo administrativo se
                        comunicará con usted a la brevedad posible.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name"
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nombres</label>
                            <input type="text" name="first_name" id="first_name" required
                                class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        </div>
                        <div>
                            <label for="last_name"
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Apellidos</label>
                            <input type="text" name="last_name" id="last_name" required
                                class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Correo
                                Electrónico</label>
                            <input type="email" name="email" id="email" required
                                class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        </div>
                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Celular /
                                Teléfono</label>
                            <input type="tel" name="phone" id="phone"
                                class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="subject"
                            class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Asunto</label>
                        <select id="subject" name="subject"
                            class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                            <option>Consulta General</option>
                            <option>Información de Colegiatura</option>
                            <option>Capacitaciones y Cursos</option>
                            <option>Habilidad Profesional</option>
                            <option>Soporte Intranet</option>
                        </select>
                    </div>

                    <div>
                        <label for="message"
                            class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Mensaje</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full rounded-md border-slate-300 dark:border-slate-700 dark:bg-surface-dark dark:text-white shadow-sm focus:border-primary focus:ring-primary sm:text-sm resize-y"></textarea>
                    </div>

                    <div>
                        <button type="button"
                            class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                            Enviar Consulta
                            <span class="material-icons-outlined ml-2 text-xl">send</span>
                        </button>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-4 text-center">
                            Al enviar este mensaje, acepta nuestra <a href="{{ route('institucional') }}"
                                class="underline hover:text-primary">política de tratamiento de datos personales</a>.
                        </p>
                    </div>
                </form>
            </div>

            <!-- Right: Mapa Interactivo -->
            <div class="lg:col-span-3 h-full min-h-[500px] flex flex-col">
                <div
                    class="bg-white dark:bg-surface-dark rounded-xl shadow-md border border-slate-100 dark:border-slate-800 overflow-hidden flex-grow flex flex-col h-full relative group">
                    <!-- Placeholder/Capa decorativa mientras carga -->
                    <div
                        class="absolute inset-0 bg-slate-100 dark:bg-slate-800 animate-pulse flex items-center justify-center -z-10 group-hover:z-0">
                        <span class="material-icons-outlined text-6xl text-slate-300 dark:text-slate-600">map</span>
                    </div>

                    <!-- Iframe Embebido -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.442973167448!2d-77.04018222384954!3d-12.081734688157778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8f615f0eb23%3A0xeab50d892ba931c8!2sAv.%20General%20Trinidad%20Mor%C3%A1n%201202%2C%20Lince%2015073!5e0!3m2!1ses-419!2spe!4v1703204918342!5m2!1ses-419!2spe"
                        class="w-full h-full min-h-[500px] border-0 outline-none z-10 transition-opacity duration-500"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Ubicación de la Sede CRO III Lima-Callao">
                    </iframe>
                </div>
            </div>

        </div>
    </section>
@endsection