@extends('layouts.public-portal')

@section('title', 'Bolsa de Trabajo | CRO III Lima-Callao')
@section('meta_description', 'Bolsa de trabajo institucional para obstetras colegiadas y entidades empleadoras.')

@section('content')
<main class="md:h-screen md:overflow-hidden flex flex-col md:flex-row">
    <section class="relative w-full md:w-[66%] md:h-screen md:overflow-y-auto bg-background-light border-r border-slate-300/80">
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
                <a href="{{ route('obstetras.index') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Buscar obstetras</a>
            </div>
        </header>

        <div class="relative z-10 mx-auto w-full max-w-5xl px-5 sm:px-6 lg:px-10 py-8 md:py-12">
            <span class="inline-flex items-center rounded-sm border border-primary/25 bg-brand-gold-soft px-3 py-1 text-xs font-bold uppercase tracking-[0.14em] text-primary">Empleabilidad institucional</span>
            <h1 class="mt-5 text-4xl lg:text-5xl font-black leading-[1.06] tracking-tight text-secondary">Bolsa de trabajo para obstetras</h1>
            <p class="mt-4 max-w-3xl text-base md:text-lg text-slate-600">Conecta entidades empleadoras con mas de 13,000 colegiadas y colegiados en un entorno de validacion profesional.</p>

            <form class="mt-8 rounded-md border border-primary/35 bg-white p-2">
                <div class="grid gap-2 sm:grid-cols-[1fr_220px_180px]">
                    <div class="flex items-center gap-3 px-3 sm:px-4 py-3">
                        <span class="material-icons-outlined text-2xl text-slate-400">search</span>
                        <input type="text" class="w-full border-none bg-transparent text-base font-medium text-secondary placeholder:text-slate-300 focus:ring-0" placeholder="Buscar vacante por puesto o institucion">
                    </div>
                    <select class="border border-slate-200 bg-white text-sm font-semibold text-slate-700 focus:border-primary focus:ring-primary/20">
                        <option>Lima Metropolitana</option>
                        <option>Callao</option>
                        <option>Nivel nacional</option>
                    </select>
                    <button type="button" class="inst-btn-primary !h-12 !rounded-sm !text-sm">Buscar vacantes</button>
                </div>
            </form>

            <div class="mt-4 grid sm:grid-cols-3 gap-3">
                <div class="border border-slate-200 bg-white p-4">
                    <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Vacantes activas</p>
                    <p class="mt-1 text-2xl font-black text-secondary">48</p>
                </div>
                <div class="border border-slate-200 bg-white p-4">
                    <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Instituciones aliadas</p>
                    <p class="mt-1 text-2xl font-black text-secondary">36</p>
                </div>
                <div class="border border-slate-200 bg-white p-4">
                    <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Perfiles disponibles</p>
                    <p class="mt-1 text-2xl font-black text-secondary">13k+</p>
                </div>
            </div>

            <section class="mt-8 space-y-3">
                <h2 class="text-xl md:text-2xl font-black text-secondary">Vacantes destacadas</h2>

                <article class="inst-card border border-primary/20 bg-white p-4">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Clinica privada</p>
                            <h3 class="text-2xl font-black text-secondary mt-1">Obstetra asistencial - turno diurno</h3>
                            <p class="text-sm text-slate-600 mt-1">Clinica San Gabriel · Lima · Contrato a plazo fijo</p>
                            <p class="text-sm text-slate-600 mt-2">Requisitos: COP habilitado, 2 anos de experiencia en centro obstetrico.</p>
                        </div>
                        <div class="flex flex-col items-start sm:items-end gap-2">
                            <span class="inline-flex rounded-sm border border-emerald-300 bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-[0.12em] text-emerald-700">Activa</span>
                            <button type="button" class="inst-btn-primary !px-4 !py-2 !text-xs">Postular</button>
                        </div>
                    </div>
                </article>

                <article class="inst-card border border-primary/20 bg-white p-4">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Red de salud</p>
                            <h3 class="text-2xl font-black text-secondary mt-1">Obstetra para programa comunitario</h3>
                            <p class="text-sm text-slate-600 mt-1">DIRIS Lima Centro · Lima · Locacion de servicios</p>
                            <p class="text-sm text-slate-600 mt-2">Requisitos: experiencia en atencion primaria y promocion de salud materna.</p>
                        </div>
                        <div class="flex flex-col items-start sm:items-end gap-2">
                            <span class="inline-flex rounded-sm border border-emerald-300 bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-[0.12em] text-emerald-700">Activa</span>
                            <button type="button" class="inst-btn-primary !px-4 !py-2 !text-xs">Postular</button>
                        </div>
                    </div>
                </article>

                <article class="inst-card border border-primary/20 bg-white p-4">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Universidad</p>
                            <h3 class="text-2xl font-black text-secondary mt-1">Docente de salud sexual y reproductiva</h3>
                            <p class="text-sm text-slate-600 mt-1">Universidad del Callao · Callao · Medio tiempo</p>
                            <p class="text-sm text-slate-600 mt-2">Requisitos: colegiatura vigente y experiencia en docencia o capacitacion.</p>
                        </div>
                        <div class="flex flex-col items-start sm:items-end gap-2">
                            <span class="inline-flex rounded-sm border border-emerald-300 bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-[0.12em] text-emerald-700">Activa</span>
                            <button type="button" class="inst-btn-primary !px-4 !py-2 !text-xs">Postular</button>
                        </div>
                    </div>
                </article>
            </section>
        </div>

        <footer class="relative z-10 mt-auto border-t border-slate-300 bg-white/95 px-6 lg:px-10 py-3.5 text-sm text-slate-500 flex items-center justify-between">
            <span>© {{ date('Y') }} CRO III LIMA-CALLAO</span>
            <span>v2.4.0-release</span>
        </footer>
    </section>

    <aside class="relative w-full md:w-[34%] min-h-[420px] md:h-screen md:overflow-y-auto bg-inst-hero text-white">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-8 lg:px-10 py-8 lg:py-12">
            <div class="flex items-center gap-3 mb-5">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                <p class="text-xs uppercase tracking-[0.16em] font-bold text-white/90">CRO III LIMA-CALLAO</p>
            </div>

            <h2 class="text-3xl lg:text-4xl font-black tracking-tight">Publica tu vacante</h2>
            <p class="mt-3 text-base lg:text-lg text-white/85">Instituciones, clinicas y redes de salud pueden registrar convocatorias para obstetras colegiadas.</p>

            <div class="mt-6 space-y-3">
                <article class="rounded-sm border border-brand-gold/40 bg-brand-gold-soft/15 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-brand-gold-light">Canal de convenios</p>
                    <p class="mt-1 text-sm text-white/90">Activa alianzas institucionales para practicas, insercion laboral y capacitacion continua.</p>
                    <a href="{{ route('institucional.convenios') }}" class="mt-3 inst-btn !w-full !bg-brand-gold !text-white !py-2.5 !text-xs hover:!bg-brand-gold-light">Gestionar convenio</a>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Soporte de convocatoria</p>
                    <p class="mt-1 text-sm text-white/85">Asesoria para filtros por COP, habilitacion, especialidad y experiencia profesional.</p>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Acceso directo a perfiles</p>
                    <p class="mt-1 text-sm text-white/85">Consulta perfiles en `/obstetras/{cop}` para validar informacion previa a contratacion.</p>
                    <a href="{{ route('obstetras.index') }}" class="mt-3 inst-btn-secondary !w-full !border-white !text-white hover:!bg-white/10 !py-2.5 !text-xs">Ir al buscador</a>
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
