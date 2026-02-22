@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-card title="Calendario" icon="event" description="Fechas de cursos, talleres, webinars y jornadas." link="{{ url('capacitacion/calendario') }}" linkText="Ver calendario" />
                    <x-card title="Cursos" icon="cast_for_education" description="Diplomados, módulos y capacitaciones certificadas." link="{{ url('capacitacion/cursos') }}" linkText="Ver cursos" />
                    <x-card title="Congresos" icon="festival" description="Eventos científicos regionales y nacionales." link="{{ url('capacitacion/congresos') }}" linkText="Ver congresos" />
                    <x-card title="Aula virtual" icon="desktop_windows" description="Acceso a recursos y actividades de aprendizaje." link="{{ url('capacitacion/aula-virtual') }}" linkText="Ingresar" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-6">
                    <div class="lg:col-span-3 inst-card p-8 border-t-4 border-primary">
                        <h2 class="inst-section-title mb-4">Ruta de participación académica</h2>
                        <ol class="space-y-3 text-slate-700">
                            <li><strong>1.</strong> Revise la oferta vigente y requisitos de inscripción.</li>
                            <li><strong>2.</strong> Registre su participación y confirme datos de contacto.</li>
                            <li><strong>3.</strong> Complete asistencia y actividades programadas.</li>
                            <li><strong>4.</strong> Solicite constancia o certificación al finalizar.</li>
                        </ol>
                    </div>
                    <aside class="lg:col-span-2 inst-card p-8 bg-primary text-white border-primary">
                        <h3 class="text-white text-2xl font-black mb-3">Coordinación académica</h3>
                        <p class="text-white/90 mb-5">Consultas sobre cronograma, vacantes, certificados y validación de horas.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Consultar</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection

