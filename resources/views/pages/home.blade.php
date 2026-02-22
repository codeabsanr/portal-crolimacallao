@extends('layouts.app')

@section('content')
    <section class="relative bg-white dark:bg-background-dark overflow-hidden">
        <div
            class="absolute right-0 top-0 h-full w-1/3 bg-slate-100 dark:bg-slate-800 skew-x-12 transform origin-top-right z-0 hidden lg:block">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 relative z-10">
            <div class="lg:w-2/3">
                <div
                    class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-primary uppercase bg-red-100 dark:bg-red-900/30 rounded-sm">
                    Portal Institucional Accesible
                </div>
                <h1 class="text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-6 leading-tight">
                    Servicios y trámites para la <br class="hidden lg:block" />
                    <span class="text-primary">Comunidad Obstétrica</span>
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 mb-10 max-w-2xl leading-relaxed">
                    Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites
                    administrativos de manera rápida y sencilla.
                </p>
                <div
                    class="bg-surface-light dark:bg-surface-dark p-2 rounded-md shadow-lg border border-gray-200 dark:border-gray-700 max-w-2xl flex flex-col sm:flex-row gap-2">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-icons-outlined text-slate-400 text-2xl">search</span>
                        </div>
                        <input
                            class="block w-full pl-12 pr-4 py-4 border-transparent bg-transparent text-slate-900 dark:text-white placeholder-slate-500 focus:border-transparent focus:ring-0 text-lg"
                            placeholder="¿Qué trámite desea realizar hoy?" type="text" />
                    </div>
                    <button
                        class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-sm text-lg transition-colors flex items-center justify-center">
                        Buscar
                    </button>
                </div>
                <p class="mt-4 text-sm text-slate-500 dark:text-slate-400">
                    Ejemplos: <a class="underline hover:text-primary"
                        href="{{ route('tramites') }}#colegiatura">Colegiatura</a>,
                    <a class="underline hover:text-primary" href="{{ route('tramites') }}#habilidad">Habilidad
                        Profesional</a>, <a class="underline hover:text-primary"
                        href="{{ route('tramites') }}#registros">Certificados</a>
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 bg-slate-50 dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Accesos Directos</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mt-2">Gestione sus necesidades más frecuentes</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-card title="Colegiatura" icon="badge"
                    description="Inicie su proceso de inscripción oficial para ejercer legalmente la profesión en la región."
                    link="{{ route('tramites') }}" linkText="Iniciar Trámite" />

                <x-card title="Capacitación" icon="school"
                    description="Inscríbase en cursos, diplomados y talleres para su desarrollo profesional continuo."
                    link="{{ url('capacitacion') }}" linkText="Ver Cursos Disponibles" />

                <x-card title="Agenda Institucional" icon="calendar_month"
                    description="Consulte el calendario de eventos, asambleas y fechas importantes del colegio."
                    link="{{ route('actualidad') }}#eventos" linkText="Consultar Agenda" />
            </div>
        </div>
    </section>

    <section class="py-16 bg-white dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="border-l-4 border-primary pl-4 mb-6">
                        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Noticias Recientes</h2>
                    </div>

                    @livewire('listado-noticias', ['limit' => 2])

                    <div class="mt-8">
                        <a class="inline-flex items-center justify-center px-6 py-3 border border-slate-300 dark:border-slate-600 shadow-sm text-base font-medium rounded-sm text-slate-700 dark:text-slate-200 bg-white dark:bg-surface-dark hover:bg-slate-50 dark:hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary w-full sm:w-auto"
                            href="{{ route('actualidad') }}">
                            Ver todas las noticias
                        </a>
                    </div>
                </div>
                <div>
                    <!-- placeholder support block -->
                    <div class="bg-primary/10 p-8 rounded-lg flex flex-col items-center justify-center text-center h-full">
                        <span class="material-icons-outlined text-5xl text-primary mb-4">support_agent</span>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Central de Ayuda</h3>
                        <p class="text-slate-600 dark:text-slate-300">¿Tiene dudas o inconvenientes con algún trámite?
                            Nuestro equipo de soporte está listo para asistirle.</p>
                        <a href="{{ route('contacto') }}"
                            class="mt-4 bg-primary text-white font-bold py-2 px-6 rounded-sm hover:bg-primary-dark transition">Contactar
                            Soporte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection