@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Ruta de uso" title="Use capacitación según su objetivo profesional"
                    subtitle="Diseñamos esta sección para que una obstetra pueda decidir rápido qué estudiar, cuándo llevarlo y cómo convertirlo en avance laboral real." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">local_hospital</span>
                        </span>
                        <p class="inst-kicker">Objetivo 1</p>
                        <h3 class="text-xl font-black text-text-main">Actualizar práctica clínica</h3>
                        <p class="text-sm text-text-main">Priorice cursos cortos y aplicables en guardia para reforzar criterio clínico y seguridad obstétrica.</p>
                        <a href="{{ route('capacitacion.cursos') }}" class="inst-link">Ver cursos clínicos</a>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">trending_up</span>
                        </span>
                        <p class="inst-kicker">Objetivo 2</p>
                        <h3 class="text-xl font-black text-text-main">Fortalecer perfil para ascenso</h3>
                        <p class="text-sm text-text-main">Combine diplomados, congresos y certificaciones para sustentar postulación a jefatura o docencia.</p>
                        <a href="{{ route('capacitacion.congresos') }}" class="inst-link">Ver congresos y jornadas</a>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <span class="inline-flex h-14 w-14 items-center justify-center border border-primary/20 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">schedule</span>
                        </span>
                        <p class="inst-kicker">Objetivo 3</p>
                        <h3 class="text-xl font-black text-text-main">Planificar sin afectar turnos</h3>
                        <p class="text-sm text-text-main">Revise cronograma, vacantes y modalidad para elegir programas compatibles con su horario laboral.</p>
                        <a href="{{ route('capacitacion.calendario') }}" class="inst-link">Abrir calendario académico</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Programas recomendados" title="Convocatorias vigentes con mayor demanda"
                    subtitle="Selección rápida para facilitar su decisión de inscripción." />

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-7">
                    @foreach ($destacados as $item)
                        <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                            <div class="flex items-start justify-between gap-3">
                                <p class="inst-kicker">{{ $item['kind'] }}</p>
                                <span class="text-[11px] font-semibold uppercase tracking-[0.1em] border border-primary/25 px-2 py-1 text-primary-dark bg-primary-tint/30">
                                    {{ $item['status_label'] }}
                                </span>
                            </div>
                            <h3 class="text-text-main text-2xl font-black leading-tight">{{ $item['title'] }}</h3>
                            <ul class="space-y-1 text-sm text-text-main leading-relaxed">
                                <li class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-primary">event</span><strong>Inicio:</strong> {{ $item['start_date'] }}</li>
                                <li class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-primary">schedule</span><strong>Duración:</strong> {{ $item['duration'] }}</li>
                                <li class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-primary">lan</span><strong>Modalidad:</strong> {{ $item['modality'] }}</li>
                                <li class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base text-primary">groups</span><strong>Vacantes:</strong> {{ $item['seats'] }}</li>
                            </ul>
                            <div class="flex items-end gap-2">
                                <p class="text-3xl font-black text-primary">{{ $item['price'] }}</p>
                                <p class="text-sm line-through text-text-main">{{ $item['regular_price'] }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-2.5">
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="inst-btn-primary !py-2.5 !text-sm !w-full sm:!w-auto">Revisar programa</a>
                                <a href="{{ route('contacto') }}"
                                    class="inst-btn-secondary !py-2.5 !text-sm !w-full sm:!w-auto">Solicitar asesoría</a>
                            </div>
                            @if (!empty($item['flyer']))
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="mt-1 block border border-primary/20 bg-white">
                                    <img src="{{ $item['flyer'] }}" alt="Flyer {{ $item['title'] }}"
                                        class="w-full h-auto object-cover">
                                </a>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Guía visual paso a paso" title="Flujo sugerido para una decisión rápida"
                    subtitle="Siga estos pasos para elegir mejor y evitar inscripciones que no se ajusten a su realidad laboral." />
                <ol class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-5">
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">flag</span>
                        </span>
                        <p class="inst-kicker">Paso 1</p>
                        <p class="font-bold text-text-main mt-1">Defina objetivo</p>
                        <p class="text-sm text-text-main mt-2">Clínica, gestión, docencia o investigación.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10">
                            <span class="material-icons-outlined text-primary">arrow_forward</span>
                        </span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">manage_search</span>
                        </span>
                        <p class="inst-kicker">Paso 2</p>
                        <p class="font-bold text-text-main mt-1">Revise modalidad</p>
                        <p class="text-sm text-text-main mt-2">Virtual, híbrido o presencial según turnos.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10">
                            <span class="material-icons-outlined text-primary">arrow_forward</span>
                        </span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15 relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">calendar_month</span>
                        </span>
                        <p class="inst-kicker">Paso 3</p>
                        <p class="font-bold text-text-main mt-1">Valide calendario</p>
                        <p class="text-sm text-text-main mt-2">Fecha de inicio, vacantes y carga horaria.</p>
                        <span class="hidden md:inline-flex absolute -right-4 top-1/2 -translate-y-1/2 h-8 w-8 items-center justify-center bg-white border border-primary/20 z-10">
                            <span class="material-icons-outlined text-primary">arrow_forward</span>
                        </span>
                    </li>
                    <li class="inst-card p-5 border border-primary/15">
                        <span class="inline-flex h-12 w-12 items-center justify-center border border-primary/25 bg-primary-tint/35 mb-3">
                            <span class="material-icons-outlined text-2xl text-primary">how_to_reg</span>
                        </span>
                        <p class="inst-kicker">Paso 4</p>
                        <p class="font-bold text-text-main mt-1">Inscríbase con soporte</p>
                        <p class="text-sm text-text-main mt-2">Si tiene dudas, solicite orientación antes de pagar.</p>
                    </li>
                </ol>

                <article class="inst-card p-6 border border-primary/20 bg-white">
                    <div class="grid grid-cols-1 md:grid-cols-[auto_1fr_auto_1fr_auto_1fr] gap-3 items-center">
                        <div class="inline-flex h-14 w-14 items-center justify-center border border-primary/25 bg-primary-tint/35">
                            <span class="material-icons-outlined text-3xl text-primary">person_search</span>
                        </div>
                        <div>
                            <p class="font-bold text-text-main">Exploro opciones</p>
                            <p class="text-sm text-text-main">Comparo cursos y modalidad.</p>
                        </div>
                        <span class="hidden md:inline-flex justify-center"><span class="material-icons-outlined text-primary">arrow_forward</span></span>
                        <div>
                            <p class="font-bold text-text-main">Planifico fechas</p>
                            <p class="text-sm text-text-main">Cruzo calendario con mis turnos.</p>
                        </div>
                        <span class="hidden md:inline-flex justify-center"><span class="material-icons-outlined text-primary">arrow_forward</span></span>
                        <div>
                            <p class="font-bold text-text-main">Me inscribo</p>
                            <p class="text-sm text-text-main">Confirmo vacante y asesoría.</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Accesos directos" title="Navegue por la tarea que necesita resolver"
                    subtitle="Cada ruta responde a una necesidad concreta de las obstetras colegiadas." />
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-6 md:gap-7">
                    <x-card title="Cursos" icon="cast_for_education"
                        description="Actualización rápida para práctica clínica."
                        link="{{ route('capacitacion.cursos') }}" linkText="Explorar cursos" />
                    <x-card title="Congresos" icon="festival"
                        description="Networking académico y actualización científica."
                        link="{{ route('capacitacion.congresos') }}" linkText="Ver congresos" />
                    <x-card title="Calendario" icon="event"
                        description="Planifique según turnos y disponibilidad."
                        link="{{ route('capacitacion.calendario') }}" linkText="Abrir calendario" />
                    <x-card title="Aula virtual" icon="desktop_windows"
                        description="Seguimiento de clases, materiales y evaluaciones."
                        link="{{ route('capacitacion.aula-virtual') }}" linkText="Ingresar" />
                    <x-card title="Archivo" icon="inventory_2"
                        description="Consulte ediciones anteriores y líneas temáticas."
                        link="{{ route('capacitacion.archivo') }}" linkText="Ver archivo" />
                </div>
            </div>
        </section>
    </main>
@endsection
