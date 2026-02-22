@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <x-card title="Emergencias obstetricas" icon="local_hospital" description="Modulo intensivo con enfoque clinico-practico." link="{{ route('capacitacion') }}" linkText="Ver detalle" />
                <x-card title="Salud sexual y reproductiva" icon="female" description="Actualizacion normativa y lineamientos de atencion." link="{{ route('capacitacion') }}" linkText="Ver detalle" />
                <x-card title="Investigacion aplicada" icon="science" description="Metodologia y publicacion para personal de salud." link="{{ route('capacitacion') }}" linkText="Ver detalle" />
            </div>
        </div>
    </section>
</main>
@endsection

