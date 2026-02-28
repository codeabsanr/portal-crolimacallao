@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Reglamento"
        summary="Documentos reglamentarios y resoluciones institucionales para la gestión y ejercicio profesional.">

        <article class="inst-card overflow-hidden">
            <div class="grid lg:grid-cols-[1.15fr_1fr]">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-black text-text-main mb-4">Marco reglamentario institucional</h2>
                    <p class="text-text-main mb-3">
                        Los reglamentos ordenan la vida institucional del colegio y orientan procedimientos, responsabilidades y protocolos.
                    </p>
                    <p class="text-text-main">
                        Este repositorio resume los principales documentos de cumplimiento para gestión directiva, representación y ejercicio profesional.
                    </p>
                </div>
                <img src="{{ asset('assets/img/logo-text.png') }}" alt="Marco reglamentario CRO III Lima-Callao" class="h-full w-full object-contain bg-primary-mist p-8 min-h-[220px]" />
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <h3 class="text-2xl font-black text-text-main mb-4">Documentos disponibles</h3>
            <div class="overflow-x-auto">
                <table class="w-full border border-slate-200 text-sm">
                    <thead class="bg-primary-tint text-text-main">
                        <tr>
                            <th class="text-left px-4 py-3 border-b border-slate-200">Categoría</th>
                            <th class="text-left px-4 py-3 border-b border-slate-200">Documento</th>
                            <th class="text-left px-4 py-3 border-b border-slate-200">Formato</th>
                        </tr>
                    </thead>
                    <tbody class="text-text-main">
                        <tr class="border-b border-slate-200 hover:bg-primary-mist transition-colors">
                            <td class="px-4 py-3">Institucional</td>
                            <td class="px-4 py-3">Reglamento de insignia y uniforme oficial</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center px-2 py-0.5 text-xs font-semibold bg-primary/10 text-primary">PDF</span></td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-primary-mist transition-colors">
                            <td class="px-4 py-3">Resolución</td>
                            <td class="px-4 py-3">Resolución N.º 008-2017 CRO III-LC-D</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center px-2 py-0.5 text-xs font-semibold bg-primary/10 text-primary">PDF</span></td>
                        </tr>
                        <tr class="border-b border-slate-200 hover:bg-primary-mist transition-colors">
                            <td class="px-4 py-3">Reglamento</td>
                            <td class="px-4 py-3">Reglamento para otorgamiento de auspicios y anexos</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center px-2 py-0.5 text-xs font-semibold bg-primary/10 text-primary">PDF</span></td>
                        </tr>
                        <tr class="hover:bg-primary-mist transition-colors">
                            <td class="px-4 py-3">Anexos</td>
                            <td class="px-4 py-3">Última hoja de anexos</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center px-2 py-0.5 text-xs font-semibold bg-primary/10 text-primary">PDF</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <div class="grid md:grid-cols-2 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-text-main mb-2">Aplicación institucional</p>
                <p class="text-sm text-text-main">Regula procedimientos administrativos, representación y protocolos oficiales.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-text-main mb-2">Actualización y control</p>
                <p class="text-sm text-text-main">Todo documento debe revisarse según su vigencia y resoluciones complementarias.</p>
            </article>
        </div>
    </x-institucional-page-shell>
@endsection



