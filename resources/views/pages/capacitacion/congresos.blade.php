@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Congresos" title="Congresos y Jornadas Científicas"
            subtitle="Eventos académicos regionales y nacionales de obstetricia para fortalecer el conocimiento profesional."
            icon="festival" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Eventos 2026" title="Agenda de congresos"
                        subtitle="Participe en los eventos científicos más importantes del año para su especialidad." />
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5">event</span>
                            <div>
                                <p class="font-bold text-slate-900">Congreso Regional de Obstetricia — Lima</p>
                                <p class="text-sm text-slate-600 mt-1">Junio 2026 | Presencial</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5">event</span>
                            <div>
                                <p class="font-bold text-slate-900">Encuentro de Salud Materna — Callao</p>
                                <p class="text-sm text-slate-600 mt-1">Agosto 2026 | Híbrido</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 border border-slate-200 p-4">
                            <span class="material-icons-outlined text-primary mt-0.5">event</span>
                            <div>
                                <p class="font-bold text-slate-900">Foro de Innovación Obstétrica — Nacional</p>
                                <p class="text-sm text-slate-600 mt-1">Octubre 2026 | Virtual</p>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ route('contacto') }}" class="inst-btn-primary mt-6">Consultar inscripción</a>
                </div>
            </div>
        </section>
    </main>
@endsection

