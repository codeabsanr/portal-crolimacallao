@extends('layouts.app')

@section('content')
    <div class="pt-10">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white mb-8 border-l-4 border-primary pl-4">
                Actualidad Institucional
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <x-card title="Noticias" icon="newspaper"
                    description="Mantente informado sobre los últimos comunicados, logros y novedades del colegio."
                    link="{{ url('actualidad/noticias') }}" linkText="Ver Noticias" />
                <x-card id="eventos" title="Eventos y Calendario" icon="calendar_month"
                    description="Consulta la agenda de webinars, asambleas y actividades académicas."
                    link="{{ url('actualidad/eventos') }}" linkText="Ver Calendario" />
            </div>
        </section>
    </div>
@endsection