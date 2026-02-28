@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Colegiados / Guía de uso" title="Guía de Uso del Portal"
            subtitle="Pasos recomendados para navegar el portal, usar el buscador y gestionar sus trámites en línea."
            icon="menu_book" backRoute="colegiados" backLabel="Volver a Colegiados" />

        <section class="inst-section bg-background-light">
            <div class="max-w-5xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Instrucciones" title="Pasos recomendados"
                        subtitle="Siga estas instrucciones para aprovechar al máximo las herramientas del portal institucional." />
                    <ol class="space-y-4 text-slate-700">
                        <li class="flex gap-3">
                            <span
                                class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center shrink-0">1</span>
                            <span>Use el buscador del inicio para ubicar su trámite o colegiada.</span>
                        </li>
                        <li class="flex gap-3">
                            <span
                                class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center shrink-0">2</span>
                            <span>Revise requisitos y plazos antes de enviar documentación.</span>
                        </li>
                        <li class="flex gap-3">
                            <span
                                class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center shrink-0">3</span>
                            <span>Guarde su código de seguimiento y consulte el estado por la sección de contacto.</span>
                        </li>
                    </ol>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('tramites') }}" class="inst-btn-primary">Ir a trámites</a>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary">Solicitar apoyo</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

