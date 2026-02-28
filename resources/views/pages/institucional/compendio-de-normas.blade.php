@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Compendio de Normas"
        summary="Compilación de leyes, estatutos y reglamentos que regulan el ejercicio profesional y la organización colegiada.">

        <article class="inst-card overflow-hidden border border-slate-300">
            <div class="grid lg:grid-cols-[1fr_1.1fr]">
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Compendio normativo institucional" class="h-full w-full object-cover min-h-[260px]" />
                <div class="p-6 md:p-8">
                    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Repositorio normativo</p>
                    <h2 class="text-2xl font-black text-slate-900 mb-4">Alcance y utilidad</h2>
                    <p class="text-slate-700 mb-3">El compendio integra documentos esenciales para orientar decisiones institucionales y el correcto ejercicio profesional obstétrico.</p>
                    <p class="text-slate-700">Facilita consulta técnica y legal para colegiadas, directivos y ciudadanía, con enfoque de transparencia y orden documental.</p>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <h3 class="text-2xl font-black text-slate-900 mb-5">Estructura del compendio</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Leyes nacionales</p><p class="text-sm text-slate-700 mt-1">Normas base del ejercicio profesional y sanitario.</p></div>
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Estatutos institucionales</p><p class="text-sm text-slate-700 mt-1">Reglas orgánicas de funcionamiento y gobierno.</p></div>
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Reglamentos internos</p><p class="text-sm text-slate-700 mt-1">Procedimientos y lineamientos de aplicación institucional.</p></div>
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Resoluciones regionales</p><p class="text-sm text-slate-700 mt-1">Disposiciones de alcance administrativo y profesional.</p></div>
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Normas técnicas</p><p class="text-sm text-slate-700 mt-1">Guías y criterios para práctica obstétrica segura.</p></div>
                <div class="border border-slate-200 p-4 bg-primary-mist border-l-2 border-l-primary hover:bg-white transition-colors"><p class="font-bold text-slate-900">Documentos administrativos</p><p class="text-sm text-slate-700 mt-1">Formatos y referencias de soporte institucional.</p></div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 bg-primary-mist border-slate-200">
            <h3 class="text-xl font-black text-slate-900 mb-3">Ruta de consulta recomendada</h3>
            <ol class="list-decimal pl-5 space-y-2 text-sm text-slate-700">
                <li>Identificar la materia del caso: legal, administrativa o técnica.</li>
                <li>Revisar la norma base (ley o estatuto) aplicable.</li>
                <li>Validar reglamentos y resoluciones complementarias vigentes.</li>
                <li>Documentar referencia normativa en trámites y comunicaciones oficiales.</li>
            </ol>
        </article>
    </x-institucional-page-shell>
@endsection

