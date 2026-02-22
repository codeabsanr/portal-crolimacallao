@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Quiénes Somos"
        summary="Institución representativa de profesionales obstetras de Lima y Callao, con personería jurídica, gobierno democrático y compromiso ético con la salud de la mujer.">

        <article class="inst-card overflow-hidden border border-slate-300">
            <div class="grid lg:grid-cols-[1.2fr_1fr]">
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Representación institucional del CRO III Lima-Callao" class="h-full w-full object-cover min-h-[280px]" />
                <div class="p-6 md:p-8">
                    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Perfil institucional</p>
                    <h2 class="text-2xl font-black text-slate-900 mb-4">Identidad y propósito</h2>
                    <div class="space-y-3 text-slate-700">
                        <p>El Colegio Regional de Obstetras III Lima Callao agrupa a profesionales colegiados legalmente habilitados para la atención integral de la salud sexual y reproductiva.</p>
                        <p>Integra la estructura del Colegio Nacional de Obstetras del Perú, creado por Decreto Ley N.º 21210, con autonomía de gestión regional y gobierno institucional democrático.</p>
                        <p>Promueve representación gremial, ética profesional, actualización continua y articulación con el sistema de salud para el bienestar de la comunidad.</p>
                    </div>
                    <div class="mt-5 border-l-2 border-primary pl-4">
                        <p class="text-sm italic text-slate-600">“Nuestra labor institucional se orienta a la calidad del ejercicio profesional y al servicio responsable de la salud de la mujer.”</p>
                    </div>
                </div>
            </div>
        </article>

        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Creación legal</p>
                <p class="text-2xl font-black text-slate-900 mt-2">D.L. 21210</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Jurisdicción</p>
                <p class="text-xl font-black text-slate-900 mt-2">Lima - Callao</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Naturaleza</p>
                <p class="text-xl font-black text-slate-900 mt-2">Sin fines de lucro</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="text-xs uppercase tracking-[0.14em] text-slate-500">Sede principal</p>
                <p class="text-xl font-black text-slate-900 mt-2">Pueblo Libre</p>
            </article>
        </div>

        <article class="inst-card p-6 md:p-8">
            <h3 class="text-2xl font-black text-slate-900 mb-5">Pilares de acción institucional</h3>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="border border-slate-200 p-4 bg-slate-50">
                    <span class="material-icons-outlined text-primary text-2xl">handshake</span>
                    <p class="font-bold text-slate-900 mt-2">Representación gremial</p>
                    <p class="text-sm text-slate-700 mt-1">Defensa de derechos profesionales y articulación con entidades públicas y privadas.</p>
                </div>
                <div class="border border-slate-200 p-4 bg-slate-50">
                    <span class="material-icons-outlined text-primary text-2xl">school</span>
                    <p class="font-bold text-slate-900 mt-2">Fortalecimiento profesional</p>
                    <p class="text-sm text-slate-700 mt-1">Impulso de capacitación científica y desarrollo de competencias para el ejercicio seguro.</p>
                </div>
                <div class="border border-slate-200 p-4 bg-slate-50">
                    <span class="material-icons-outlined text-primary text-2xl">favorite</span>
                    <p class="font-bold text-slate-900 mt-2">Compromiso social</p>
                    <p class="text-sm text-slate-700 mt-1">Promoción de la salud de la mujer y de buenas prácticas en salud sexual y reproductiva.</p>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 bg-secondary text-white border-secondary">
            <div class="grid md:grid-cols-[1.2fr_1fr] gap-6 items-center">
                <div>
                    <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold">Proyección institucional</p>
                    <h3 class="text-2xl font-black mt-2">Gestión orientada a resultados</h3>
                    <p class="text-white/85 mt-3 text-sm md:text-base">La institución consolida una agenda de mejora continua en ética, formación, representación y servicios para colegiadas.</p>
                </div>
                <div class="flex flex-wrap gap-3 md:justify-end">
                    <a href="{{ route('institucional.consejo-directivo') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft">Ver consejo</a>
                    <a href="{{ route('institucional.normatividad') }}" class="inst-btn-secondary !border-white !text-white hover:!bg-white/10">Ver normatividad</a>
                </div>
            </div>
        </article>
    </x-institucional-page-shell>
@endsection
