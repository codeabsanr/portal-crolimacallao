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
                        <div class="border border-slate-300 bg-primary-mist px-3 py-2 text-sm"><span class="font-semibold">Jurisdicción:</span> Lima - Callao</div>
                        <div class="border border-slate-300 bg-primary-mist px-3 py-2 text-sm"><span class="font-semibold">Estructura:</span> 8 cargos directivos</div>
                    </div>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <div class="flex flex-wrap items-end justify-between gap-3 mb-5">
                <h3 class="text-2xl font-black text-slate-900">Integrantes y cargos</h3>
                <span class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Gestión vigente</span>
            </div>
            @php
                $integrantes = [
                    ['nombre' => 'Obst. Alicia Isla López', 'cargo' => 'Vicedecana', 'foto' => 'alicia-isla-lopez.jpg'],
                    ['nombre' => 'Obst. Sara Carolina Zamora Chávez', 'cargo' => 'Secretaria Regional Administrativa', 'foto' => 'sara-carolina-zamora-chavez.jpg'],
                    ['nombre' => 'Obst. Miriam Letona Gonzáles', 'cargo' => 'Secretaria de Asuntos Internos', 'foto' => 'miriam-letona-gonzales.jpg'],
                    ['nombre' => 'Obst. Paulia Emiliana Alhuay Puca', 'cargo' => 'Secretaria de Asuntos Internos', 'foto' => 'paulia-emiliana-alhuay-puca.jpg'],
                    ['nombre' => 'Obst. Elizabeth Soria Peña', 'cargo' => 'Tesorera', 'foto' => 'elizabeth-soria-pena.jpg'],
                    ['nombre' => 'Obst. Oscar Josué Huamán Carreño', 'cargo' => 'Primera Vocal', 'foto' => 'oscar-josue-huaman-carreno.jpg'],
                    ['nombre' => 'Obst. Bertha Aurora Landa Maturrano', 'cargo' => 'Segunda Vocal', 'foto' => 'bertha-aurora-landa-maturrano.jpg'],
                ];
            @endphp
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($integrantes as $integrante)
                    <article class="inst-card overflow-hidden border-t-2 border-t-primary bg-primary-mist hover:bg-white hover:shadow-hard transition-all h-full">
                        <div class="relative aspect-[4/3] w-full bg-primary-tint border-b border-slate-200">
                            <img
                                src="{{ asset('assets/institucional/consejo-directivo/' . $integrante['foto']) }}"
                                alt="Foto de {{ $integrante['nombre'] }}"
                                class="h-full w-full object-cover"
                                loading="lazy"
                                onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');" />
                            <div class="hidden absolute inset-0 flex items-center justify-center text-center bg-primary-tint text-slate-500 p-4">
                                <div>
                                    <span class="material-icons-outlined text-3xl text-primary/70">portrait</span>
                                    <p class="text-xs uppercase tracking-[0.12em] mt-2">Espacio para foto</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 min-h-[96px]">
                            <p class="font-bold text-slate-900 leading-tight">{{ $integrante['nombre'] }}</p>
                            <p class="text-primary text-sm font-semibold mt-1">{{ $integrante['cargo'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 bg-primary-mist border-slate-200">
            <h3 class="text-xl font-black text-slate-900 mb-4">Líneas estratégicas de la gestión</h3>
            <div class="grid md:grid-cols-4 gap-4">
                <div class="bg-white border border-slate-200 p-4 hover:shadow-hard transition-all"><p class="font-bold text-slate-900">Ética y deontología</p><p class="text-sm text-slate-700 mt-1">Fortalecimiento del ejercicio responsable.</p></div>
                <div class="bg-white border border-slate-200 p-4 hover:shadow-hard transition-all"><p class="font-bold text-slate-900">Capacitación</p><p class="text-sm text-slate-700 mt-1">Actualización académica continua.</p></div>
                <div class="bg-white border border-slate-200 p-4 hover:shadow-hard transition-all"><p class="font-bold text-slate-900">Gestión administrativa</p><p class="text-sm text-slate-700 mt-1">Mejora de procesos y servicios.</p></div>
                <div class="bg-white border border-slate-200 p-4 hover:shadow-hard transition-all"><p class="font-bold text-slate-900">Representación gremial</p><p class="text-sm text-slate-700 mt-1">Articulación con instituciones clave.</p></div>
            </div>
        </article>
    </x-institucional-page-shell>
@endsection


