@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Convenios"
        summary="Acuerdos de cooperación orientados a capacitación, beneficios y fortalecimiento profesional de colegiadas.">

        <article class="inst-card overflow-hidden">
            <div class="grid lg:grid-cols-[1.1fr_1fr]">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-black text-text-main mb-4">Alianzas para el desarrollo profesional</h2>
                    <p class="text-text-main mb-4">
                        Los convenios institucionales fortalecen la formación continua, el acceso a servicios y beneficios para colegiadas,
                        y la cooperación con entidades académicas, técnicas y de salud.
                    </p>
                    <p class="text-text-main">
                        Cada convenio responde a objetivos de actualización, bienestar profesional y mejora del ejercicio obstétrico en la región.
                    </p>
                </div>
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Convenios institucionales para colegiadas" class="h-full w-full object-cover min-h-[230px]" />
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <h3 class="text-2xl font-black text-text-main mb-5">Convenios suscritos</h3>
            <ul class="space-y-3 text-text-main">
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con Universidad Norbert Wiener (2020)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con L&amp;S Consultores Asociados (2019)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con SPEPP (2019)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio Rebagliati - Diplomados (2019)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con CEPESEX (2018 - 2019)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con PRIVATEACHER (beneficios promocionales)</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con MEDIFARMA</li>
                <li class="border-l-2 border-primary pl-3 py-2 bg-primary-mist hover:bg-white transition-colors">Convenio con Red de Promoción de la Mujer</li>
            </ul>
        </article>

        <div class="grid md:grid-cols-3 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-text-main mb-2">Educación continua</p>
                <p class="text-sm text-text-main">Acceso a diplomados, cursos y actualización académica especializada.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-text-main mb-2">Beneficios complementarios</p>
                <p class="text-sm text-text-main">Servicios promocionales y alianzas con instituciones de apoyo profesional.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-text-main mb-2">Impacto institucional</p>
                <p class="text-sm text-text-main">Fortalecimiento de la red de colaboración para el gremio obstétrico regional.</p>
            </article>
        </div>

        <p class="text-sm text-text-main">
            Estos convenios buscan ampliar oportunidades de actualización, servicios y beneficios para colegiadas.
        </p>
    </x-institucional-page-shell>
@endsection




