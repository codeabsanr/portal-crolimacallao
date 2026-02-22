@extends('layouts.public-portal')

@section('title', 'Perfil Profesional | CRO III Lima-Callao')
@section('meta_description', 'Perfil profesional de consulta publica del Colegio Regional de Obstetras III Lima-Callao.')

@section('content')
@php
    $isHabilitado = ($item['habilitado'] ?? '') === 'HABILITADO';
    $isActivo = trim(strtolower($item['situacion'] ?? '')) === 'activo';
@endphp
<main id="main" class="md:h-screen md:overflow-hidden flex flex-col md:flex-row">
    <section class="relative flex flex-col w-full md:w-[65%] min-h-[56vh] md:h-screen md:overflow-y-auto bg-background-light border-r border-slate-300/80">
        <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image: linear-gradient(#d6dbe4 1px, transparent 1px), linear-gradient(90deg, #d6dbe4 1px, transparent 1px); background-size: 44px 44px;"></div>

        <header class="relative z-10 border-b border-slate-300/80 bg-white/90 backdrop-blur px-6 lg:px-10 py-5">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                    <div class="leading-tight">
                        <p class="text-2xl font-black tracking-tight text-secondary">CRO III LIMA-CALLAO</p>
                        <p class="text-xs uppercase tracking-[0.18em] text-slate-500">Sistema de Gestion Institucional</p>
                    </div>
                </div>
                <p class="inline-flex items-center gap-2 text-sm uppercase tracking-[0.14em] text-slate-500">
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                    Sistema operativo
                </p>
            </div>
        </header>

        <div class="relative z-10 mx-auto flex-1 w-full max-w-5xl px-5 sm:px-6 lg:px-10 py-8 md:py-12">
            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('obstetras.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-secondary hover:text-primary">
                    <span class="material-icons-outlined text-base">arrow_back</span>
                    Volver a resultados
                </a>
                <a href="{{ route('obstetras.index') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">
                    Buscar otra obstetra
                </a>
                <a href="{{ route('bolsa.trabajo') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">
                    Ver bolsa de trabajo
                </a>
            </div>

            <span class="mt-5 inline-flex items-center rounded-sm border border-primary/25 bg-brand-gold-soft px-3 py-1 text-xs font-bold uppercase tracking-[0.14em] text-primary">Perfil profesional</span>
            <h1 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-black leading-[1.06] tracking-tight text-secondary">{{ $item['nombre'] }}</h1>

            <article class="mt-6 inst-card border border-primary/30 bg-white p-4 md:p-6">
                <div class="grid gap-5 md:grid-cols-[190px_1fr]">
                    <img src="{{ $item['foto'] }}" alt="Foto de colegiada simulada" class="h-48 w-44 md:h-52 md:w-48 object-cover border-2 border-primary/25 bg-white">

                    <div>
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center rounded-sm border {{ $isHabilitado ? 'border-emerald-300 bg-emerald-50 text-emerald-700' : 'border-primary/20 bg-primary/5 text-primary' }} px-3 py-1 text-xs font-black uppercase tracking-[0.12em]">
                                {{ $item['habilitado'] }}
                            </span>
                            <span class="inline-flex items-center rounded-sm border border-slate-300 bg-white px-3 py-1 text-xs font-black uppercase tracking-[0.12em] text-slate-700">
                                {{ $item['situacion'] }}
                            </span>
                            <span class="inline-flex items-center rounded-sm border border-primary/20 bg-brand-gold-soft/80 px-3 py-1 text-xs font-black uppercase tracking-[0.12em] text-primary">
                                COP {{ $item['cop'] }}
                            </span>
                        </div>

                        <p class="mt-3 text-slate-600">{{ $item['resumen'] ?? 'Perfil profesional de consulta publica del colegio.' }}</p>

                        <div class="mt-4 grid sm:grid-cols-3 gap-3">
                            <div class="border border-slate-200 bg-white p-3">
                                <p class="text-[11px] uppercase tracking-[0.12em] text-slate-500 font-bold">Experiencia</p>
                                <p class="mt-1 text-xl font-black text-secondary">{{ $item['experiencia_anios'] ?? '0' }} anos</p>
                            </div>
                            <div class="border border-slate-200 bg-white p-3">
                                <p class="text-[11px] uppercase tracking-[0.12em] text-slate-500 font-bold">Modalidad</p>
                                <p class="mt-1 text-base font-bold text-secondary">{{ $item['modalidad'] ?? 'No registrado' }}</p>
                            </div>
                            <div class="border border-slate-200 bg-white p-3">
                                <p class="text-[11px] uppercase tracking-[0.12em] text-slate-500 font-bold">Disponibilidad</p>
                                <p class="mt-1 text-base font-bold {{ $isHabilitado && $isActivo ? 'text-emerald-700' : 'text-primary' }}">{{ $item['disponibilidad'] ?? 'No registrado' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 grid md:grid-cols-2 gap-4">
                    <section class="border border-slate-200 bg-white p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Datos profesionales</p>
                        <div class="mt-3 space-y-2 text-sm text-slate-700">
                            <p><span class="font-bold text-secondary">Carrera:</span> {{ $item['carrera'] }}</p>
                            <p><span class="font-bold text-secondary">Especialidad:</span> {{ $item['especialidad'] }}</p>
                            <p><span class="font-bold text-secondary">Colegiatura desde:</span> {{ $item['colegiatura_desde'] }}</p>
                            <p><span class="font-bold text-secondary">Documento:</span> {{ $item['documento'] }}</p>
                            <p><span class="font-bold text-secondary">Ubicacion:</span> {{ $item['ubicacion'] ?? 'No registrado' }}</p>
                            <p><span class="font-bold text-secondary">Idiomas:</span> {{ $item['idiomas'] ?? 'No registrado' }}</p>
                        </div>
                    </section>
                    <section class="border border-slate-200 bg-white p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Ultima experiencia</p>
                        <p class="mt-2 text-base font-black text-secondary">{{ $item['ultimo_centro'] ?? 'No registrado' }}</p>
                        <div class="mt-3 space-y-2">
                            @foreach (($item['experiencia'] ?? []) as $job)
                                <article class="border border-slate-200 bg-slate-50 p-3">
                                    <p class="text-sm font-bold text-secondary">{{ $job['cargo'] }}</p>
                                    <p class="text-sm text-slate-600">{{ $job['institucion'] }}</p>
                                    <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold mt-1">{{ $job['periodo'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </section>
                </div>

                <div class="mt-4 grid md:grid-cols-2 gap-4">
                    <section class="border border-slate-200 bg-white p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Areas de desempeno</p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach (($item['areas'] ?? []) as $area)
                                <span class="inline-flex rounded-sm border border-primary/20 bg-primary/5 px-2.5 py-1 text-xs font-bold text-primary">{{ $area }}</span>
                            @endforeach
                        </div>
                    </section>
                    <section class="border border-slate-200 bg-white p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Certificaciones</p>
                        <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            @foreach (($item['certificaciones'] ?? []) as $cert)
                                <li class="flex items-start gap-2">
                                    <span class="material-icons-outlined text-base text-brand-gold mt-0.5">verified</span>
                                    <span>{{ $cert }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                </div>

                <section class="mt-4 rounded-sm border border-primary/25 bg-brand-gold-soft/35 p-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                        <div>
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Oportunidades laborales y convenios</p>
                            <p class="text-sm text-slate-700 mt-1">Conecta perfiles colegiados con vacantes y alianzas institucionales.</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('bolsa.trabajo') }}" class="inst-btn-primary !px-4 !py-2 !text-xs">Ir a bolsa de trabajo</a>
                            <a href="{{ route('institucional.convenios') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Ver convenios</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <footer class="relative z-10 mt-auto border-t border-slate-300 bg-white/95 px-6 lg:px-10 py-3.5 text-sm text-slate-500 flex items-center justify-between">
            <span>© {{ date('Y') }} CRO III LIMA-CALLAO</span>
            <span>v2.4.0-release</span>
        </footer>
    </section>

    <aside class="relative w-full md:w-[35%] min-h-[420px] md:h-screen md:overflow-y-auto bg-inst-hero text-white">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-8 lg:px-10 py-8 lg:py-12">
            <div class="flex items-center gap-3 mb-5">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                <p class="text-xs uppercase tracking-[0.16em] font-bold text-white/90">CRO III LIMA-CALLAO</p>
            </div>

            <h2 class="text-3xl lg:text-4xl font-black tracking-tight">Perfil validado</h2>
            <p class="mt-3 text-base lg:text-lg text-white/85">Consulta publica del registro profesional para empleabilidad y referencia institucional.</p>

            <div class="mt-6 space-y-3">
                <article class="rounded-sm border border-brand-gold/40 bg-brand-gold-soft/15 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-brand-gold-light">Registro</p>
                    <p class="mt-1 text-sm text-white/90">COP: {{ $item['cop'] }} · Situacion: {{ $item['situacion'] }}</p>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Bolsa de trabajo</p>
                    <p class="mt-1 text-sm text-white/85">Publica vacantes para obstetras colegiadas con filtro por especialidad y experiencia.</p>
                    <a href="{{ route('bolsa.trabajo') }}" class="mt-3 inst-btn !w-full !bg-brand-gold !text-white !py-2.5 !text-xs hover:!bg-brand-gold-light">Ingresar a bolsa</a>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Convenios</p>
                    <p class="mt-1 text-sm text-white/85">Canal para instituciones que buscan acuerdos de practicas, empleabilidad y formacion continua.</p>
                    <a href="{{ route('institucional.convenios') }}" class="mt-3 inst-btn-secondary !w-full !border-white !text-white hover:!bg-white/10 !py-2.5 !text-xs">Solicitar convenio</a>
                </article>
            </div>

            <div class="mt-6 rounded-sm border border-white/20 bg-white/10 p-4">
                <p class="text-sm font-bold text-white">Soporte tecnico institucional</p>
                <p class="mt-1 text-sm text-white/80">Lunes a viernes: 9:00 a. m. - 5:30 p. m.</p>
                <p class="text-sm text-white/80">Sabados: 9:00 a. m. - 12:00 m.</p>
                <p class="mt-1 text-sm text-white/80">tramitedocumentario@crolimacallao.org.pe</p>
                <p class="text-sm text-white/80">+51 982 520 891</p>
            </div>
        </div>
    </aside>
</main>
@endsection
