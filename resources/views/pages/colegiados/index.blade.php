@extends('layouts.app')

@section('content')
    <section class="bg-primary text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="material-icons-outlined text-6xl opacity-80 mb-4">people</span>
            <h1 class="text-5xl font-extrabold mb-6">Colegiados</h1>
            <p class="text-xl opacity-90">Portal exclusivo para miembros de la orden.</p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card title="Buscador" icon="person_search" description="Consulta de habilitados."
                link="{{ url('colegiados/buscador') }}" />
            <x-card title="Listados" icon="format_list_bulleted" description="Padrones y especialistas."
                link="{{ url('colegiados/listados') }}" />
            <x-card title="Guía" icon="menu_book" description="Manual de usuario." link="{{ url('colegiados/guia') }}" />
        </div>
    </section>
@endsection