@extends('layouts.app')

@section('content')
    <main id="main">
        <section id="actualidad-contenido" class="scroll-mt-28 inst-section bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="inst-stack-tight">
                    <p class="inst-eyebrow">Información institucional</p>
                    <h2 class="inst-title">Actualidad institucional</h2>
                    <div class="h-[3px] w-20 bg-brand-gold-light"></div>
                    <p class="inst-subtitle">Consulte noticias, agenda de actividades y comunicados oficiales del CRO III Lima-Callao.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-7">
                    <x-card title="Noticias" icon="newspaper"
                        description="Mantente informado sobre comunicados, acuerdos y novedades del colegio."
                        link="{{ url('actualidad/noticias') }}" linkText="Ver noticias" />

                    <x-card id="eventos-card" title="Eventos y calendario" icon="calendar_month"
                        description="Consulta webinars, jornadas académicas, asambleas y actividades institucionales."
                        link="{{ url('actualidad/eventos') }}" linkText="Ver calendario" />

                    <x-card title="Comunicados" icon="campaign"
                        description="Accede a pronunciamientos oficiales y avisos relevantes para colegiados."
                        link="{{ url('actualidad/comunicados') }}" linkText="Ver comunicados" />
                </div>
            </div>
        </section>

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">
                    <div class="lg:col-span-2 rounded-xl border border-primary/25 bg-white p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="inst-kicker text-primary">Publicaciones recientes</p>
                        <h2 class="inst-title text-secondary mt-1 mb-4">Últimas publicaciones</h2>
                        <div class="mb-5 h-[3px] w-20 bg-brand-gold-light"></div>
                        @livewire('listado-noticias', ['limit' => 3])
                    </div>

                    <aside class="rounded-xl border border-primary/30 p-8 bg-inst-hero text-white shadow-[0_22px_40px_-30px_rgba(15,23,42,0.55)] relative overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>
                        <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-semibold mb-2">Canal oficial</p>
                        <h3 class="text-white text-2xl font-black mb-3">Difusión institucional</h3>
                        <p class="text-white/90 mb-5">Revise información verificada y actualizada sobre actividades, pronunciamientos y decisiones institucionales.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Contactar comunicaciones</a>

                        <div class="mt-5 pt-5 border-t border-white/20 text-sm text-white/80 space-y-2">
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base">mail</span>tramitedocumentario@crolimacallao.org.pe</p>
                            <p class="inline-flex items-center gap-2"><span class="material-icons-outlined text-base">call</span>+51 982 520 891</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section id="eventos" class="inst-section bg-[linear-gradient(180deg,#faf3f5_0%,#f3e7eb_100%)] border-y border-slate-200">
            <div class="max-w-7xl mx-auto">
                @php
                    $eventos = [
                        ['fecha' => '2026-03-04', 'actividad' => 'Webinar de salud materna y perinatal', 'modalidad' => 'Virtual'],
                        ['fecha' => '2026-03-15', 'actividad' => 'Asamblea regional ordinaria', 'modalidad' => 'Presencial'],
                        ['fecha' => '2026-04-02', 'actividad' => 'Taller de actualización normativa', 'modalidad' => 'Híbrida'],
                    ];
                @endphp

                <div class="grid lg:grid-cols-5 gap-8 lg:gap-10">
                    <div class="lg:col-span-3 rounded-xl border border-primary/25 bg-white p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="inst-kicker text-primary">Agenda institucional</p>
                        <h2 class="inst-title text-secondary mt-1 mb-4">Próximas actividades</h2>
                        <div class="mb-5 h-[3px] w-20 bg-brand-gold-light"></div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead>
                                    <tr class="text-left border-b border-slate-200">
                                        <th class="py-2 pr-4 font-bold text-slate-700">Fecha</th>
                                        <th class="py-2 pr-4 font-bold text-slate-700">Actividad</th>
                                        <th class="py-2 font-bold text-slate-700">Modalidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $evento)
                                        <tr class="border-b border-slate-100">
                                            <td class="py-3 pr-4 text-slate-700">{{ $evento['fecha'] }}</td>
                                            <td class="py-3 pr-4 text-slate-900 font-medium">{{ $evento['actividad'] }}</td>
                                            <td class="py-3 text-slate-600">{{ $evento['modalidad'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6">
                            <a href="{{ route('actualidad.eventos') }}" class="inst-btn-secondary !px-4 !py-2">Ver agenda completa</a>
                        </div>
                    </div>

                    <aside class="lg:col-span-2 rounded-xl border border-primary/25 bg-white p-8 shadow-[0_22px_40px_-30px_rgba(15,23,42,0.45)]">
                        <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold mb-2">Comunicados</p>
                        <h3 class="text-secondary text-2xl font-black mb-4">Estado de publicaciones</h3>
                        <ul class="space-y-3 text-slate-700 text-sm md:text-base">
                            <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-brand-gold text-base mt-0.5">check_circle</span><span>Canal oficial para avisos administrativos vigentes.</span></li>
                            <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-brand-gold text-base mt-0.5">check_circle</span><span>Publicaciones de carácter informativo y gremial.</span></li>
                            <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-brand-gold text-base mt-0.5">check_circle</span><span>Actualización periódica según agenda institucional.</span></li>
                        </ul>
                        <div class="mt-6">
                            <a href="{{ route('actualidad.comunicados') }}" class="inst-btn-primary !px-4 !py-2">Ver comunicados</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection


