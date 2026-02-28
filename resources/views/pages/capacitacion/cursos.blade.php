@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Cursos" title="Oferta de Cursos y Diplomados"
            subtitle="Programas certificados de actualización y especialización para obstetras en ejercicio."
            icon="cast_for_education" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Programas disponibles" title="Cursos vigentes 2026"
                    subtitle="Seleccione el programa de su interés e inicie su proceso de inscripción." />
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-7">
                    <x-card title="Emergencias obstétricas" icon="local_hospital"
                        description="Módulo intensivo con enfoque clínico-práctico." link="{{ route('capacitacion') }}"
                        linkText="Ver detalle" />
                    <x-card title="Salud sexual y reproductiva" icon="female"
                        description="Actualización normativa y lineamientos de atención." link="{{ route('capacitacion') }}"
                        linkText="Ver detalle" />
                    <x-card title="Investigación aplicada" icon="science"
                        description="Metodología y publicación para personal de salud." link="{{ route('capacitacion') }}"
                        linkText="Ver detalle" />
                </div>
            </div>
        </section>
    </main>
@endsection



