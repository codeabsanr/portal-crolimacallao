@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Normativa / Reglamentos" title="Estatutos y Reglamentos"
            subtitle="Reglamentos internos, estatutos institucionales y disposiciones regionales vigentes del CRO III Lima-Callao."
            icon="rule" backRoute="normativa" backLabel="Volver a Normativa" />

        <section class="inst-section bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Documentos disponibles" title="Reglamentos institucionales"
                    subtitle="Consulte los documentos normativos que rigen la organización y el ejercicio profesional." />
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-7">
                    <x-card title="Reglamento general" icon="gavel"
                        description="Disposiciones administrativas generales de la orden profesional."
                        link="{{ route('normativa') }}" linkText="Ver base normativa" />
                    <x-card title="Reglamento de disciplina" icon="rule"
                        description="Lineamientos de conducta, faltas y procedimientos institucionales."
                        link="{{ route('normativa') }}" linkText="Ver base normativa" />
                </div>
            </div>
        </section>
    </main>
@endsection

