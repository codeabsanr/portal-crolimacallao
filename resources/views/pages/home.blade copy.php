@extends('layouts.app')

@section('content')
    <main id="main">
        @php
            $heroHighlights = [
                [
                    'tipo' => 'Gestion actual',
                    'fecha' => 'Periodo 2025-2028',
                    'estado' => 'Informativo',
                    'icono' => 'groups',
                    'color' => '#660219',
                    'superficie' => '#ffffff',
                    'overlay' => 'rgba(15,23,42,0.34)',
                    'simulada' => false,
                    'titulo' => 'Consejo Regional CRO III',
                    'descripcion' => 'Decana Regional: Obst. Jenny Elenisse Zavaleta Lujan',
                    'detalle' => 'Sede: Mariscal Sucre 1351, Pueblo Libre',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver gestion',
                    'cta1_link' => route('institucional.consejo-directivo'),
                    'cta2_texto' => 'Contacto',
                    'cta2_link' => route('contacto'),
                ],
                [
                    'tipo' => 'Comunicado urgente',
                    'fecha' => 'Aviso institucional',
                    'estado' => 'Prioridad alta',
                    'icono' => 'campaign',
                    'color' => '#b91c1c',
                    'superficie' => '#fff5f5',
                    'overlay' => 'rgba(127,29,29,0.42)',
                    'simulada' => true,
                    'simulada_titulo' => 'Comunicado oficial',
                    'titulo' => 'Mesa de Partes: horario extraordinario',
                    'descripcion' => 'Atencion extendida para recepcion documentaria hasta las 18:30.',
                    'detalle' => 'Revise lineamientos y requisitos antes de acudir.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver comunicado',
                    'cta1_link' => route('actualidad'),
                    'cta2_texto' => 'Mesa de partes',
                    'cta2_link' => route('tramites') . '#mesa-partes',
                ],
                [
                    'tipo' => 'Evento destacado',
                    'fecha' => 'Proximo encuentro',
                    'estado' => 'Inscripciones abiertas',
                    'icono' => 'event_available',
                    'color' => '#0f766e',
                    'superficie' => '#f0fdfa',
                    'overlay' => 'rgba(15,118,110,0.36)',
                    'simulada' => true,
                    'simulada_titulo' => 'Agenda de evento',
                    'titulo' => 'Jornada regional de actualizacion obstetrica',
                    'descripcion' => 'Ponencias especializadas en salud materna y gestion del riesgo.',
                    'detalle' => 'Modalidad mixta con certificacion para colegiadas habilitadas.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver agenda',
                    'cta1_link' => route('actualidad') . '#eventos',
                    'cta2_texto' => 'Inscribirme',
                    'cta2_link' => route('capacitacion'),
                ],
                [
                    'tipo' => 'Curso y ponencia',
                    'fecha' => 'Capacitacion continua',
                    'estado' => 'Cupos limitados',
                    'icono' => 'school',
                    'color' => '#1d4ed8',
                    'superficie' => '#eff6ff',
                    'overlay' => 'rgba(29,78,216,0.34)',
                    'simulada' => true,
                    'simulada_titulo' => 'Promocion academica',
                    'titulo' => 'Programa de ponencias para fortalecimiento clinico',
                    'descripcion' => 'Actualizacion en protocolos y competencias profesionales.',
                    'detalle' => 'Cupos limitados con constancia institucional.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Ver cursos',
                    'cta1_link' => route('capacitacion'),
                    'cta2_texto' => 'Postular',
                    'cta2_link' => route('capacitacion'),
                ],
                [
                    'tipo' => 'Noticia institucional',
                    'fecha' => 'Actualidad CRO III',
                    'estado' => 'Actualizacion',
                    'icono' => 'newspaper',
                    'color' => '#7c3aed',
                    'superficie' => '#f5f3ff',
                    'overlay' => 'rgba(76,29,149,0.34)',
                    'simulada' => true,
                    'simulada_titulo' => 'Actualidad institucional',
                    'titulo' => 'Nuevas acciones de articulacion interinstitucional',
                    'descripcion' => 'Se fortalecen alianzas para formacion y servicios a colegiadas.',
                    'detalle' => 'Conozca los avances y cronograma de implementacion.',
                    'imagen' => asset('assets/img/foto_gestion_2025_2028.jpg'),
                    'cta1_texto' => 'Leer noticia',
                    'cta1_link' => route('actualidad'),
                    'cta2_texto' => 'Institucional',
                    'cta2_link' => route('institucional'),
                ],
            ];

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

            $heroVariant = request('hero', '1');
            if (!in_array($heroVariant, ['1', '2', '3', '4', '5'], true)) {
                $heroVariant = '1';
            }
        @endphp

        <section class="bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-wrap items-center gap-2">
                    <p class="text-xs uppercase tracking-[0.14em] text-slate-500 font-semibold mr-2">Variantes de hero</p>
                    <a href="{{ route('home', ['hero' => '1']) }}"
                        class="px-3 py-1.5 text-xs font-bold uppercase tracking-[0.12em] border transition {{ $heroVariant === '1' ? 'bg-primary text-white border-primary' : 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' }}">
                        Hero 1
                    </a>
                    <a href="{{ route('home', ['hero' => '2']) }}"
                        class="px-3 py-1.5 text-xs font-bold uppercase tracking-[0.12em] border transition {{ $heroVariant === '2' ? 'bg-primary text-white border-primary' : 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' }}">
                        Hero 2
                    </a>
                    <a href="{{ route('home', ['hero' => '3']) }}"
                        class="px-3 py-1.5 text-xs font-bold uppercase tracking-[0.12em] border transition {{ $heroVariant === '3' ? 'bg-primary text-white border-primary' : 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' }}">
                        Hero 3
                    </a>
                    <a href="{{ route('home', ['hero' => '4']) }}"
                        class="px-3 py-1.5 text-xs font-bold uppercase tracking-[0.12em] border transition {{ $heroVariant === '4' ? 'bg-primary text-white border-primary' : 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' }}">
                        Hero 4
                    </a>
                    <a href="{{ route('home', ['hero' => '5']) }}"
                        class="px-3 py-1.5 text-xs font-bold uppercase tracking-[0.12em] border transition {{ $heroVariant === '5' ? 'bg-primary text-white border-primary' : 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' }}">
                        Hero 5
                    </a>
                </div>
            </div>
        </section>

        @if ($heroVariant === '2')
            <x-home.hero2 :hero-highlights="$heroHighlights" />
        @elseif ($heroVariant === '4')
            <x-home.hero4 :hero-ads="$heroAds" />
        @elseif ($heroVariant === '5')
            <x-home.hero5 :hero-ads="$heroAds" />
        @elseif ($heroVariant === '3')
            <x-home.hero3 :hero-highlights="$heroHighlights" />
        @else
            <x-home.hero1 :hero-highlights="$heroHighlights" />
        @endif

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
