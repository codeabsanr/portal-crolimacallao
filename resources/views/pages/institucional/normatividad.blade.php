@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Normatividad"
        summary="Marco normativo interno y externo que orienta la práctica obstétrica y la gestión colegial.">

        <article class="inst-card overflow-hidden">
            <div class="grid lg:grid-cols-[1fr_1.2fr]">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Normatividad institucional CRO III Lima-Callao" class="h-full w-full object-contain bg-primary-mist p-8 min-h-[220px]" />
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-black text-slate-900 mb-4">Normatividad institucional</h2>
                    <p class="text-slate-700 mb-3">
                        Este marco normativo orienta la práctica obstétrica con criterios éticos, legales y técnicos, y asegura la gobernanza del colegio.
                    </p>
                    <p class="text-slate-700">
                        Incluye normas de jerarquía nacional e instrumentos internos que guían la vida institucional y el ejercicio profesional.
                    </p>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <h3 class="text-xl font-black text-slate-900 mb-5">Normas institucionales principales</h3>
            <ol class="list-decimal pl-5 space-y-2 text-slate-700">
                <li>Código de Ética y Deontología</li>
                <li>Reglamento General del Régimen Electoral del COP</li>
                <li>Resolución de Adscripción</li>
                <li>Decreto Supremo - 10 de octubre de 1826</li>
                <li>Ley N.º 28686 que modifica y deroga disposiciones sobre creación del COP</li>
                <li>Ley N.º 23346 que reconoce la obstetricia como profesión médica</li>
            </ol>
        </article>

        <div class="grid md:grid-cols-2 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <h3 class="text-xl font-black text-slate-900 mb-3">Leyes</h3>
                <p class="text-slate-700">Normas nacionales relacionadas con salud, regulación profesional, derechos laborales y ejercicio sanitario.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <h3 class="text-xl font-black text-slate-900 mb-3">Normas técnicas y guías</h3>
                <p class="text-slate-700">Lineamientos de atención integral, emergencias obstétricas y buenas prácticas clínicas.</p>
            </article>
        </div>

        <article class="inst-card p-6 md:p-8 bg-primary-mist border-slate-200">
            <h3 class="text-xl font-black text-slate-900 mb-3">Recomendación de consulta</h3>
            <p class="text-slate-700">
                Antes de iniciar trámites o emitir documentos, verifica la norma aplicable, su fecha de actualización y la resolución que la respalda.
                Esta práctica reduce observaciones y asegura cumplimiento institucional.
            </p>
        </article>
    </x-institucional-page-shell>
@endsection

