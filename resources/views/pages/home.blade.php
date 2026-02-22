@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative bg-white overflow-hidden border-b border-slate-200">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Fondo gestion actual CRO III Lima-Callao" class="h-full w-full object-cover object-center opacity-45" />
                <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(255,255,255,0.92)_0%,rgba(255,255,255,0.85)_38%,rgba(248,250,252,0.76)_100%)]"></div>
            </div>
            <div class="absolute right-0 top-0 h-full w-1/3 bg-slate-100/40 skew-x-12 transform origin-top-right z-0 hidden lg:block"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
                <div class="grid lg:grid-cols-[0.95fr_1.05fr] gap-8 items-stretch">
                    <div>
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
                    @endphp
                    <aside
                        x-data="{
                            items: @js($heroHighlights),
                            current: 0,
                            timer: null,
                            next() { this.current = (this.current + 1) % this.items.length; },
                            go(index) { this.current = index; },
                            start() {
                                this.timer = setInterval(() => this.next(), 6000);
                            },
                            stop() {
                                if (this.timer) clearInterval(this.timer);
                            }
                        }"
                        x-init="start()"
                        @mouseenter="stop()"
                        @mouseleave="start()"
                        class="inst-card overflow-hidden border-primary/20 bg-white">
                        <div class="h-full flex flex-col">
                            <div class="grid grid-cols-5 gap-1.5 p-3 bg-slate-50 border-b border-slate-200">
                                <template x-for="(item, idx) in items" :key="idx">
                                    <button type="button" @click="go(idx)"
                                        class="h-9 border text-[10px] font-bold uppercase tracking-[0.08em] px-1 transition-all inline-flex items-center justify-center gap-1"
                                        :style="current === idx ? `background-color: ${item.color}; border-color: ${item.color}; color: white;` : ''"
                                        :class="current !== idx ? 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' : ''">
                                        <span class="material-icons-outlined text-sm" x-text="item.icono"></span>
                                    </button>
                                </template>
                            </div>

                            <div class="px-4 py-3 text-white" :style="`background-color: ${items[current].color}`">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="material-icons-outlined text-base" x-text="items[current].icono"></span>
                                        <p class="text-[11px] uppercase tracking-[0.14em] font-bold" x-text="items[current].tipo"></p>
                                    </div>
                                    <span class="text-[10px] uppercase tracking-[0.12em] bg-white/20 px-2 py-1" x-text="items[current].estado"></span>
                                </div>
                                <p class="text-[11px] uppercase tracking-[0.12em] text-white/80 mt-1" x-text="items[current].fecha"></p>
                            </div>

                            <div class="relative min-h-[210px] sm:min-h-[250px] border-b border-slate-200">
                                <img :src="items[current].imagen" :alt="items[current].titulo" class="absolute inset-0 h-full w-full object-cover object-top" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/10 to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3">
                                    <p class="text-white text-lg sm:text-xl font-black leading-tight drop-shadow" x-text="items[current].titulo"></p>
                                </div>
                            </div>

                            <div class="p-4 sm:p-5" :style="`background-color: ${items[current].superficie}`">
                                <p class="text-sm text-slate-700" x-text="items[current].descripcion"></p>
                                <p class="text-sm text-slate-700 mt-1" x-text="items[current].detalle"></p>
                                <div class="mt-4 flex gap-2">
                                    <a :href="items[current].cta1_link" class="inst-btn !py-2 !px-3 !text-xs !text-white" :style="`background-color: ${items[current].color}`" x-text="items[current].cta1_texto"></a>
                                    <a :href="items[current].cta2_link" class="inst-btn-secondary !py-2 !px-3 !text-xs" x-text="items[current].cta2_texto"></a>
                                </div>
                            </div>
                        </div>
                    </aside>
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
