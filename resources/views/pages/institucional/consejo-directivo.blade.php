@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Consejo Directivo 2025-2028"
        summary="Equipo responsable de la conducción institucional, representación gremial y gestión estratégica regional durante el periodo 2025-2028.">

        <article class="inst-card overflow-hidden border border-slate-300">
            <div class="grid lg:grid-cols-[1.1fr_1fr]">
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Consejo directivo del CRO III Lima-Callao" class="h-full w-full object-cover min-h-[320px]" />
                <div class="p-6 md:p-8">
                    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Conducción institucional</p>
                    <h2 class="text-2xl font-black text-slate-900">Obst. Jenny Elenisse Zavaleta Luján</h2>
                    <p class="text-primary font-semibold mt-1">Decana Regional | Periodo 2025-2028</p>
                    <p class="text-slate-700 mt-4">Lidera la ejecución del plan de gestión, la representación gremial y la articulación con entidades del sistema de salud, académico y social.</p>
                    <div class="grid sm:grid-cols-2 gap-2 mt-5">
                        <div class="border border-slate-300 bg-slate-50 px-3 py-2 text-sm"><span class="font-semibold">Jurisdicción:</span> Lima - Callao</div>
                        <div class="border border-slate-300 bg-slate-50 px-3 py-2 text-sm"><span class="font-semibold">Estructura:</span> 8 cargos directivos</div>
                    </div>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <div class="flex flex-wrap items-end justify-between gap-3 mb-5">
                <h3 class="text-2xl font-black text-slate-900">Integrantes y cargos</h3>
                <span class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Gestión vigente</span>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Alicia Isla López</p><p class="text-primary text-sm font-semibold mt-1">Vicedecana</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Sara Carolina Zamora Chávez</p><p class="text-primary text-sm font-semibold mt-1">Secretaria Regional Administrativa</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Miriam Letona Gonzáles</p><p class="text-primary text-sm font-semibold mt-1">Secretaria de Asuntos Internos</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Paulia Emiliana Alhuay Puca</p><p class="text-primary text-sm font-semibold mt-1">Secretaria de Asuntos Internos</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Elizabeth Soria Peña</p><p class="text-primary text-sm font-semibold mt-1">Tesorera</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary"><p class="font-bold text-slate-900">Obst. Oscar Josué Huamán Carreño</p><p class="text-primary text-sm font-semibold mt-1">Primera Vocal</p></article>
                <article class="border border-slate-200 p-4 bg-slate-50 border-t-2 border-t-primary md:col-span-2 xl:col-span-3"><p class="font-bold text-slate-900">Obst. Bertha Aurora Landa Maturrano</p><p class="text-primary text-sm font-semibold mt-1">Segunda Vocal</p></article>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 bg-slate-50 border-slate-200">
            <h3 class="text-xl font-black text-slate-900 mb-4">Líneas estratégicas de la gestión</h3>
            <div class="grid md:grid-cols-4 gap-4">
                <div class="bg-white border border-slate-200 p-4"><p class="font-bold text-slate-900">Ética y deontología</p><p class="text-sm text-slate-700 mt-1">Fortalecimiento del ejercicio responsable.</p></div>
                <div class="bg-white border border-slate-200 p-4"><p class="font-bold text-slate-900">Capacitación</p><p class="text-sm text-slate-700 mt-1">Actualización académica continua.</p></div>
                <div class="bg-white border border-slate-200 p-4"><p class="font-bold text-slate-900">Gestión administrativa</p><p class="text-sm text-slate-700 mt-1">Mejora de procesos y servicios.</p></div>
                <div class="bg-white border border-slate-200 p-4"><p class="font-bold text-slate-900">Representación gremial</p><p class="text-sm text-slate-700 mt-1">Articulación con instituciones clave.</p></div>
            </div>
        </article>
    </x-institucional-page-shell>
@endsection
