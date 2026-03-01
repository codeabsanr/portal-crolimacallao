@extends('layouts.app')

@section('content')
    @php
        $isConference = ($program['kind'] ?? '') === 'Conferencia';
        $isArchived = !($program['is_current'] ?? true);
        $statusLabel = $program['status_label'] ?? ($isArchived ? 'Finalizado' : 'Vigente');
        $statusTone = $isArchived ? 'border-slate-300 bg-slate-100 text-slate-700' : 'border-brand-gold-light/50 bg-brand-gold-soft text-primary-dark';
        $primaryCtaLabel = $isArchived ? 'Solicitar próxima edición' : 'Inscribirme ahora';
        $secondaryCtaLabel = $isArchived ? 'Ver archivo de programas' : 'Consultar vacantes';
        $secondaryCtaHref = $isArchived ? route('capacitacion.archivo') : route('contacto');
        $familyLabel = $isConference ? 'Conferencias' : 'Cursos';
        $familyRoute = $isConference ? route('capacitacion.congresos') : route('capacitacion.cursos');
        $sector = $program['sector'] ?? 'Capacitacion profesional';
        $rating = $program['rating'] ?? '4.8';
        $reviews = $program['reviews'] ?? 182;
        $students = $program['students'] ?? 980;
        $credits = $program['credits'] ?? ($isConference ? '2.0 CR' : '3.5 CR');
        $hoursLective = $program['hours_lective'] ?? $program['duration'];
        $supportPhone = $program['support_phone'] ?? '+51 982 520 891';
        $supportEmail = $program['support_email'] ?? 'capacitacion@crolimacallao.org.pe';
        $features = $program['features'] ?? [
            'Acceso al material del programa 24/7.',
            'Clases en vivo y sesiones grabadas.',
            'Certificado institucional al completar el programa.',
            'Acceso en dispositivos moviles y escritorio.',
        ];
        $tags = $program['tags'] ?? ['Obstetricia', 'Salud materna', 'Emergencias', 'Gestion clinica'];
        $requirements = $program['requirements'] ?? [
            'Interes profesional en actualizacion de competencias obstetricas.',
            'Conectividad para sesiones virtuales o modalidad hibrida.',
            'Disponibilidad para completar actividades practicas.',
        ];

        $learnItems =
            $program['learn_items'] ??
            $program['outcomes'] ??
            [
                'Aplicar protocolos actuales en escenarios clinicos reales.',
                'Mejorar la toma de decisiones bajo presion asistencial.',
                'Integrar herramientas de evaluacion y seguimiento.',
                'Elevar el perfil profesional con certificacion institucional.',
            ];

        $modules = $program['modules'] ?? collect($program['syllabus'] ?? [])->values()->map(
            fn($item, $idx) => [
                'title' => 'Semana ' . ($idx + 1),
                'items' => [
                    [
                        'title' => $item,
                        'preview' => true,
                        'type' => 'video',
                    ],
                    [
                        'title' => 'Actividad aplicada y retroalimentacion docente',
                        'preview' => false,
                        'type' => 'task',
                    ],
                ],
            ],
        )->all();

        if (empty($modules)) {
            $modules = [
                [
                    'title' => 'Semana 1',
                    'items' => [
                        ['title' => 'Introduccion y fundamentos del programa', 'preview' => true, 'type' => 'video'],
                        ['title' => 'Actividad de diagnostico', 'preview' => false, 'type' => 'task'],
                    ],
                ],
            ];
        }
    @endphp

    <main id="main" class="bg-background-light pb-24 md:pb-0">
        <section class="inst-bg-brand-grid inst-trace-invert-a bg-primary-dark text-white border-b border-primary/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    <div class="lg:col-span-8 inst-stack-tight">
                        <nav class="flex flex-wrap items-center gap-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-white/80">
                            <a href="{{ route('home') }}" class="hover:text-brand-gold-light">Inicio</a>
                            <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                            <a href="{{ route('capacitacion') }}" class="hover:text-brand-gold-light">Capacitacion</a>
                            <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                            <a href="{{ $familyRoute }}" class="hover:text-brand-gold-light">{{ $familyLabel }}</a>
                            <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                            <span class="text-brand-gold-light">{{ $program['code'] }}</span>
                        </nav>

                        <span class="inline-flex w-fit items-center gap-1.5 border border-brand-gold/60 bg-brand-gold/10 px-2.5 py-1 text-[10px] font-black uppercase tracking-[0.1em] text-brand-gold-light">
                            <span class="material-icons-outlined text-sm">workspace_premium</span>
                            {{ $sector }}
                        </span>
                        <span class="inline-flex w-fit items-center gap-1.5 border px-2.5 py-1 text-[10px] font-black uppercase tracking-[0.1em] {{ $statusTone }}">
                            <span class="material-icons-outlined text-sm">{{ $isArchived ? 'inventory_2' : 'verified' }}</span>
                            {{ $statusLabel }}
                        </span>

                        <h1 class="text-[clamp(2rem,4.8vw,3.8rem)] font-black leading-[1.05] tracking-tight text-white">
                            {{ $program['title'] }}
                        </h1>
                        <p class="text-lg text-white/90 leading-relaxed max-w-4xl">
                            {{ $program['summary'] }}
                        </p>

                        @if (!$isArchived)
                            <div class="flex flex-wrap items-center gap-2 text-sm">
                                <span class="border border-brand-gold-light/50 bg-brand-gold-soft px-2 py-0.5 font-black text-primary-dark">Mas vendido</span>
                                <span class="border border-brand-gold-light/50 bg-brand-gold-soft px-2 py-0.5 font-black text-primary-dark">Mejor valorado</span>
                                <span class="font-black text-brand-gold-light">{{ $rating }} ★</span>
                                <span class="text-white/80">({{ $reviews }} valoraciones)</span>
                                <span class="text-white/80">{{ $students }} estudiantes</span>
                            </div>
                        @else
                            <p class="text-sm text-white/85">Programa finalizado. Consulte próximas ediciones y nuevos cupos.</p>
                        @endif

                        <div class="text-sm text-white/85 flex flex-wrap items-center gap-4">
                            <span class="inline-flex items-center gap-1"><span class="material-icons-outlined text-base">event</span>Inicio: {{ $program['start_date'] }}</span>
                            <span class="inline-flex items-center gap-1"><span class="material-icons-outlined text-base">schedule</span>{{ $hoursLective }}</span>
                            <span class="inline-flex items-center gap-1"><span class="material-icons-outlined text-base">language</span>Español</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="inst-section !min-h-0 !py-8 md:!py-10 bg-background-light">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
                <div class="lg:col-span-8 inst-stack">
                    <article class="border border-primary/20 bg-white p-6 md:p-8 inst-stack-tight">
                        <h2 class="inst-title !text-[2.2rem]">Lo que aprenderás</h2>
                        <div class="grid md:grid-cols-2 gap-x-8 gap-y-3">
                            @foreach ($learnItems as $item)
                                <p class="inline-flex items-start gap-2 text-text-main leading-relaxed">
                                    <span class="material-icons-outlined text-primary text-lg mt-0.5">check</span>
                                    <span>{{ $item }}</span>
                                </p>
                            @endforeach
                        </div>
                    </article>

                    <article class="inst-stack-tight">
                        <h3 class="inst-title !text-[1.9rem]">Ver temas relacionados</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($tags as $tag)
                                <span class="border border-primary/25 bg-white px-3 py-1.5 text-sm font-semibold text-text-main">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </article>

                    <article class="inst-stack-tight">
                        <div class="flex flex-wrap items-end justify-between gap-3">
                            <div>
                                <h3 class="inst-title !text-[1.9rem]">Contenido del curso</h3>
                                <p class="text-text-main">{{ count($modules) }} secciones · {{ count($modules) * 2 }} clases · {{ $hoursLective }} de duracion total</p>
                            </div>
                            <a href="#contenido-curso" class="inst-link font-black">Ampliar todas las secciones</a>
                        </div>

                        <div id="contenido-curso" class="border border-primary/20 bg-white divide-y divide-primary/15">
                            @foreach ($modules as $module)
                                <details class="group" @if ($loop->first) open @endif>
                                    <summary class="list-none cursor-pointer px-4 py-3 flex items-center justify-between font-black text-text-main bg-primary-tint/40">
                                        <span>{{ $module['title'] }}</span>
                                        <span class="material-icons-outlined text-xl transition-transform group-open:rotate-180">expand_more</span>
                                    </summary>
                                    <div class="px-4 py-3 inst-stack-tight">
                                        @foreach ($module['items'] as $item)
                                            <article class="flex items-start justify-between gap-3">
                                                <div class="inline-flex items-start gap-2 text-text-main">
                                                    <span class="material-icons-outlined text-base text-primary mt-0.5">
                                                        {{ ($item['type'] ?? 'video') === 'task' ? 'assignment' : 'smart_display' }}
                                                    </span>
                                                    <p>{{ $item['title'] }}</p>
                                                </div>
                                                @if (!empty($item['preview']))
                                                    <a href="{{ route('capacitacion.programa.preview', ['slug' => $slug]) }}" class="inst-link whitespace-nowrap">Vista previa</a>
                                                @endif
                                            </article>
                                        @endforeach
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </article>

                    <article class="border-l-4 border-primary bg-white p-6 inst-stack-tight">
                        <h3 class="text-2xl font-black text-text-main">Requisitos previos</h3>
                        <ul class="space-y-2">
                            @foreach ($requirements as $requirement)
                                <li class="inline-flex items-start gap-2 text-text-main">
                                    <span class="material-icons-outlined text-primary text-base mt-0.5">check_circle</span>
                                    <span>{{ $requirement }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                </div>

                <aside class="lg:col-span-4 hidden lg:block">
                    <div class="lg:sticky lg:top-24 lg:-mt-64 self-start">
                        <div class="border border-primary/40 bg-white text-text-main">
                            @if (!empty($program['flyer']))
                                <div class="relative h-52 overflow-hidden border-b border-primary/20">
                                    <img src="{{ $program['flyer'] }}" alt="Flyer {{ $program['title'] }}" class="h-full w-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/75 to-transparent"></div>
                                    <p class="absolute bottom-3 left-3 text-white font-black">Vista previa del programa</p>
                                </div>
                            @endif
                            <div class="p-6 inst-stack-tight">
                                <div class="flex items-end gap-2">
                                    <p class="text-5xl font-black text-primary leading-none">{{ $program['price'] }}</p>
                                    <p class="text-sm line-through text-text-main">{{ $program['regular_price'] }}</p>
                                </div>
                                <a href="{{ route('contacto') }}" class="inst-btn !w-full !bg-primary !text-white hover:!bg-primary-dark !text-base !font-black">
                                    {{ $primaryCtaLabel }}
                                </a>
                                <a href="{{ $secondaryCtaHref }}" class="inst-btn-secondary !w-full !border-primary !text-primary hover:!bg-primary-tint !text-base !font-black">
                                    {{ $secondaryCtaLabel }}
                                </a>
                                @if (!$isArchived)
                                    <p class="text-xs text-text-main text-center">Garantia de reembolso de 30 dias</p>
                                @endif
                                <div class="border-t border-primary/15 pt-4 inst-stack-tight">
                                    <h3 class="text-2xl font-black text-text-main">Este curso incluye:</h3>
                                    <ul class="space-y-2 text-text-main">
                                        @foreach ($features as $feature)
                                            <li class="inline-flex items-start gap-2">
                                                <span class="material-icons-outlined text-base text-primary mt-0.5">check_circle</span>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="pt-2 text-sm font-semibold text-primary flex flex-wrap gap-4">
                                        <a href="{{ route('contacto') }}" class="underline">Compartir</a>
                                        <a href="{{ route('contacto') }}" class="underline">Regalar este curso</a>
                                        <a href="{{ route('contacto') }}" class="underline">Aplicar cupon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <aside class="lg:col-span-4 lg:hidden inst-stack">
                    <div class="border border-primary/20 bg-white p-5 inst-stack-tight">
                        <h3 class="text-2xl font-black text-text-main">Este curso incluye:</h3>
                        <ul class="space-y-2 text-text-main">
                            @foreach ($features as $feature)
                                <li class="inline-flex items-start gap-2">
                                    <span class="material-icons-outlined text-base text-primary mt-0.5">check_circle</span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="tel:{{ preg_replace('/\s+/', '', $supportPhone) }}"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-primary">
                            <span class="material-icons-outlined text-base">call</span>{{ $supportPhone }}
                        </a>
                        <a href="mailto:{{ $supportEmail }}"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-primary break-all">
                            <span class="material-icons-outlined text-base">mail</span>{{ $supportEmail }}
                        </a>
                    </div>
                </aside>
            </div>
        </section>

        <div class="fixed bottom-0 inset-x-0 z-50 lg:hidden border-t border-primary/20 bg-white/95 backdrop-blur-sm inst-mobile-action-bar"
            data-inst-mobile-action-bar>
            <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between gap-3">
                <div>
                    <p class="text-3xl font-black text-primary leading-none">{{ $program['price'] }}</p>
                </div>
                <a href="{{ route('contacto') }}"
                    class="inst-btn !bg-primary !text-white hover:!bg-primary-dark !min-h-[48px] !px-6 !font-black !text-base">
                    {{ $primaryCtaLabel }}
                </a>
            </div>
        </div>
    </main>
@endsection
