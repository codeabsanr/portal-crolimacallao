@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-card title="Paso 1" icon="description" description="Registro de datos y carga de documentos." link="{{ route('contacto') }}" linkText="Solicitar orientacion" />
                <x-card title="Paso 2" icon="fact_check" description="Revision administrativa y observaciones." link="{{ route('contacto') }}" linkText="Consultar" />
                <x-card title="Paso 3" icon="task_alt" description="Aprobacion final y alta en padron." link="{{ route('colegiados.buscador') }}" linkText="Ver buscador" />
            </div>
        </div>
    </section>
</main>
@endsection

