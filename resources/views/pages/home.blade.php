@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative bg-white overflow-hidden border-b border-slate-200">
            <div class="absolute right-0 top-0 h-full w-1/3 bg-slate-100 skew-x-12 transform origin-top-right z-0 hidden lg:block"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
                <div class="lg:w-2/3">
                    <div class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-primary uppercase bg-red-100 rounded-md">
                        Portal institucional accesible
                    </div>
                    <h1 class="mb-6 leading-tight">
                        Servicios y trámites para la<br class="hidden lg:block" />
                        <span class="text-primary">Comunidad Obstétrica</span>
                    </h1>
                    <p class="text-slate-600 mb-8 max-w-2xl">
                        Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites administrativos de manera clara y segura.
                    </p>
                    <div class="inst-card p-2 max-w-2xl flex flex-col sm:flex-row gap-2 border border-slate-200">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons-outlined text-slate-400">search</span>
                            </div>
                            <input class="inst-input !border-transparent !shadow-none !py-3 !pl-12" placeholder="¿Qué trámite desea realizar hoy?" type="text" />
                        </div>
                        <button class="inst-btn-primary !px-6 w-full sm:w-auto">Buscar</button>
                    </div>
                    <p class="mt-4 text-sm text-slate-500">
                        Ejemplos: <a class="underline hover:text-primary" href="{{ route('tramites') }}#colegiatura">Colegiatura</a>,
                        <a class="underline hover:text-primary" href="{{ route('tramites') }}#habilidad">Habilidad profesional</a>,
                        <a class="underline hover:text-primary" href="{{ route('tramites') }}#registros">Certificados</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="py-10 md:py-12 bg-slate-50 border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <h2 class="inst-section-title">Accesos directos</h2>
                    <p class="text-slate-600 mt-2">Gestione sus necesidades más frecuentes.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <x-card title="Colegiatura" icon="badge"
                        description="Inicie su proceso de inscripción oficial para ejercer legalmente la profesión en la región."
                        link="{{ route('tramites') }}" linkText="Iniciar trámite" />

                    <x-card title="Capacitación" icon="school"
                        description="Inscríbase en cursos, diplomados y talleres para su desarrollo profesional continuo."
                        link="{{ url('capacitacion') }}" linkText="Ver cursos disponibles" />

                    <x-card title="Agenda institucional" icon="calendar_month"
                        description="Consulte el calendario de eventos, asambleas y fechas importantes del colegio."
                        link="{{ route('actualidad') }}#eventos" linkText="Consultar agenda" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                    <div class="inst-card p-8">
                        <div class="border-l-4 border-primary pl-4 mb-6">
                            <h2 class="inst-section-title">Noticias recientes</h2>
                        </div>
                        @livewire('listado-noticias', ['limit' => 2])
                        <div class="mt-6">
                            <a class="inst-btn-secondary" href="{{ route('actualidad') }}">Ver todas las noticias</a>
                        </div>
                    </div>
                    <aside class="inst-card p-8 bg-primary/10 border-primary/20 flex flex-col justify-center text-center">
                        <span class="material-icons-outlined text-5xl text-primary mb-4">support_agent</span>
                        <h3 class="text-slate-900 mb-2">Central de ayuda</h3>
                        <p class="text-slate-600">¿Tiene dudas con algún trámite? Nuestro equipo administrativo está listo para asistirle.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-primary mt-5 self-center">Contactar soporte</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection
