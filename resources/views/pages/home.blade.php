@extends('layouts.app')

@section('content')
    <main id="main">
        @php
            $heroAds = [
                [
                    'tipo' => 'Comunicado',
                    'fecha' => 'Urgente',
                    'color' => '#b91c1c',
                    'superficie' => '#fff5f5',
                    'icono' => 'campaign',
                    'simulada' => true,
                    'simulada_titulo' => 'Comunicado urgente',
                    'titulo' => 'Mesa de partes: horario extraordinario',
                    'descripcion' => 'Atencion extendida para recepcion documentaria hasta las 18:30.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver comunicado',
                    'cta1_link' => route('actualidad'),
                    'cta2_texto' => 'Detalle',
                    'cta2_link' => route('tramites') . '#mesa-partes',
                ],
                [
                    'tipo' => 'Evento',
                    'fecha' => 'Destacado',
                    'color' => '#0f766e',
                    'superficie' => '#f0fdfa',
                    'icono' => 'event_available',
                    'simulada' => true,
                    'simulada_titulo' => 'Evento destacado',
                    'titulo' => 'Jornada regional de actualizacion obstetrica',
                    'descripcion' => 'Inscripciones abiertas para modalidad presencial y virtual.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver agenda',
                    'cta1_link' => route('actualidad') . '#eventos',
                    'cta2_texto' => 'Inscribirme',
                    'cta2_link' => route('capacitacion'),
                ],
                [
                    'tipo' => 'Curso',
                    'fecha' => 'Capacitacion',
                    'color' => '#1d4ed8',
                    'superficie' => '#eff6ff',
                    'icono' => 'school',
                    'simulada' => true,
                    'simulada_titulo' => 'Curso y ponencia',
                    'titulo' => 'Programa de fortalecimiento clinico',
                    'descripcion' => 'Cupos limitados con constancia institucional para colegiadas.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver cursos',
                    'cta1_link' => route('capacitacion'),
                    'cta2_texto' => 'Postular',
                    'cta2_link' => route('capacitacion'),
                ],
                [
                    'tipo' => 'Noticia',
                    'fecha' => 'Actualidad',
                    'color' => '#660219',
                    'superficie' => '#ffffff',
                    'icono' => 'newspaper',
                    'simulada' => false,
                    'simulada_titulo' => 'Actualidad institucional',
                    'titulo' => 'Consejo Regional CRO III 2025-2028',
                    'descripcion' => 'Informacion institucional y acuerdos de la gestion vigente.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver noticia',
                    'cta1_link' => route('actualidad'),
                    'cta2_texto' => 'Institucional',
                    'cta2_link' => route('institucional'),
                ],
            ];

        @endphp

        <x-home.hero5 :hero-ads="$heroAds" />

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
