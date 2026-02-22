@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Símbolos Institucionales"
        summary="Elementos oficiales de identidad del colegio, establecidos en estatuto y reglamentaciones internas.">

        <article class="inst-card p-6 md:p-8">
            <h2 class="text-2xl font-black text-slate-900 mb-4">Identidad visual y protocolar</h2>
            <p class="text-slate-700 mb-6">Los símbolos institucionales consolidan la representación oficial del colegio en ceremonias, comunicaciones y documentos formales.</p>
            <div class="grid sm:grid-cols-2 gap-4">
                <figure class="border border-slate-200 p-5 bg-slate-50 flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Emblema institucional CRO III Lima-Callao" class="h-28 w-28 object-contain" />
                    <figcaption class="mt-3 text-sm text-slate-700 text-center">Emblema institucional de uso oficial.</figcaption>
                </figure>
                <figure class="border border-slate-200 p-5 bg-slate-50 flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-text.png') }}" alt="Logotipo institucional CRO III Lima-Callao" class="h-28 w-full object-contain" />
                    <figcaption class="mt-3 text-sm text-slate-700 text-center">Logotipo para comunicación institucional.</figcaption>
                </figure>
            </div>
        </article>

        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="font-bold text-slate-900">Emblema</p>
                <p class="text-sm text-slate-700 mt-2">Representa la identidad histórica y la pertenencia institucional.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="font-bold text-slate-900">Insignia</p>
                <p class="text-sm text-slate-700 mt-2">Distintivo de uso protocolar en actos oficiales y ceremonias.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="font-bold text-slate-900">Himno</p>
                <p class="text-sm text-slate-700 mt-2">Símbolo sonoro de cohesión institucional y valor profesional.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary">
                <p class="font-bold text-slate-900">Uniforme oficial</p>
                <p class="text-sm text-slate-700 mt-2">Presentación profesional conforme a reglamentación institucional.</p>
            </article>
        </div>

        <article class="inst-card p-6 md:p-8 bg-slate-50 border-slate-200">
            <h3 class="text-xl font-black text-slate-900 mb-4">Lineamientos de uso institucional</h3>
            <ul class="grid md:grid-cols-2 gap-3 text-sm text-slate-700">
                <li class="border border-slate-200 bg-white px-4 py-3">Uso del emblema sin distorsión de proporciones ni colores oficiales.</li>
                <li class="border border-slate-200 bg-white px-4 py-3">Aplicación del logotipo en documentos con jerarquía visual institucional.</li>
                <li class="border border-slate-200 bg-white px-4 py-3">Respeto del carácter protocolar de la insignia en actos formales.</li>
                <li class="border border-slate-200 bg-white px-4 py-3">Referencia al reglamento para uso de uniforme y símbolos complementarios.</li>
            </ul>
        </article>
    </x-institucional-page-shell>
@endsection
