@extends('layouts.app')

@section('content')
    @php
        $isArchived = !($program['is_current'] ?? true);
        $previewTitle = ($program['kind'] ?? 'Programa') . ' · Vista previa';
        $syllabus = collect($program['syllabus'] ?? [])->values();
        $teaserClass = $syllabus->first() ?? 'Introduccion general del programa';
    @endphp

    <main id="main" class="bg-background-light">
        <section class="inst-bg-brand-grid inst-trace-invert-a bg-primary-dark text-white border-b border-primary/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-10">
                <div class="inst-stack-tight">
                    <nav class="flex flex-wrap items-center gap-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-white/80">
                        <a href="{{ route('home') }}" class="hover:text-brand-gold-light">Inicio</a>
                        <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                        <a href="{{ route('capacitacion') }}" class="hover:text-brand-gold-light">Capacitacion</a>
                        <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                        <a href="{{ route('capacitacion.programa', ['slug' => $slug]) }}" class="hover:text-brand-gold-light">{{ $program['code'] }}</a>
                        <span class="material-icons-outlined text-sm leading-none">chevron_right</span>
                        <span class="text-brand-gold-light">Vista previa</span>
                    </nav>

                    <span class="inline-flex w-fit items-center gap-1.5 border border-brand-gold/60 bg-brand-gold/10 px-2.5 py-1 text-[10px] font-black uppercase tracking-[0.1em] text-brand-gold-light">
                        <span class="material-icons-outlined text-sm">smart_display</span>
                        {{ $previewTitle }}
                    </span>
                    <h1 class="text-[clamp(1.8rem,4vw,3.2rem)] font-black leading-[1.08] tracking-tight">{{ $program['title'] }}</h1>
                    <p class="text-lg text-white/90 max-w-4xl">Contenido de muestra para evaluar metodología, nivel y formato antes de inscribirse.</p>
                </div>
            </div>
        </section>

        <section class="inst-section !min-h-0 !py-8 md:!py-10 bg-background-light">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
                <article class="lg:col-span-8 inst-card p-6 md:p-8 inst-stack-tight border-t-4 border-primary">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <h2 class="inst-title !text-[2rem]">Clase de muestra</h2>
                        @if ($isArchived)
                            <span class="inline-flex items-center gap-1 border border-slate-300 bg-slate-100 px-2 py-1 text-[11px] font-semibold uppercase tracking-[0.1em] text-slate-700">Programa finalizado</span>
                        @endif
                    </div>

                    <div class="relative border border-primary/20 bg-primary-dark text-white">
                        <div class="aspect-video w-full grid place-items-center bg-[radial-gradient(circle_at_30%_10%,rgba(248,236,208,0.16),transparent_35%),linear-gradient(120deg,#4d0213_0%,#660219_45%,#8c0f2f_100%)]">
                            <div class="text-center px-6">
                                <span class="material-icons-outlined text-6xl text-brand-gold-light">play_circle</span>
                                <p class="mt-3 text-lg font-black">{{ $teaserClass }}</p>
                                <p class="text-sm text-white/85 mt-1">Duración de muestra: 12 min</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <article class="border border-primary/15 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">¿Qué revisa esta vista previa?</p>
                            <ul class="mt-2 space-y-2 text-sm text-text-main">
                                <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-base text-primary mt-0.5">check</span>Estructura de una sesión real.</li>
                                <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-base text-primary mt-0.5">check</span>Nivel de profundidad y lenguaje docente.</li>
                                <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-base text-primary mt-0.5">check</span>Formato de material y actividades.</li>
                            </ul>
                        </article>
                        <article class="border border-primary/15 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Ficha rápida</p>
                            <ul class="mt-2 space-y-2 text-sm text-text-main">
                                <li><strong>Modalidad:</strong> {{ $program['modality'] }}</li>
                                <li><strong>Duración total:</strong> {{ $program['duration'] }}</li>
                                <li><strong>Inicio:</strong> {{ $program['start_date'] }}</li>
                                <li><strong>Código:</strong> {{ $program['code'] }}</li>
                            </ul>
                        </article>
                    </div>
                </article>

                <aside class="lg:col-span-4 inst-stack">
                    <article class="inst-card p-6 border border-primary/20 bg-white inst-stack-tight">
                        <h3 class="text-2xl font-black text-text-main">Siguiente paso</h3>
                        <p class="text-text-main text-sm">Si la muestra se ajusta a su necesidad, continúe con el detalle completo para revisar plan, precio y requisitos.</p>
                        <a href="{{ route('capacitacion.programa', ['slug' => $slug]) }}" class="inst-btn-primary !w-full !py-2.5">Volver al programa</a>
                        @if (!$isArchived)
                            <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full !py-2.5">Consultar inscripción</a>
                        @else
                            <a href="{{ route('capacitacion.archivo') }}" class="inst-btn-secondary !w-full !py-2.5">Ver archivo</a>
                        @endif
                    </article>
                </aside>
            </div>
        </section>
    </main>
@endsection
