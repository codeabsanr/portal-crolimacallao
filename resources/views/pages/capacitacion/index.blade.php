@extends('layouts.app')

@section('content')
    <section class="bg-primary text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="material-icons-outlined text-6xl opacity-80 mb-4">local_library</span>
            <h1 class="text-5xl font-extrabold mb-6">Capacitación</h1>
            <p class="text-xl opacity-90">Fortalecimiento profesional y oferta académica.</p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card title="Calendario" icon="event" description="Cronograma de eventos."
                link="{{ url('capacitacion/calendario') }}" />
            <x-card title="Cursos" icon="cast_for_education" description="Diplomados y talleres."
                link="{{ url('capacitacion/cursos') }}" />
            <x-card title="Congresos" icon="festival" description="Eventos científicos."
                link="{{ url('capacitacion/congresos') }}" />
        </div>
    </section>
@endsection