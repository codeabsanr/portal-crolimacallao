@extends('layouts.app')

@section('content')
    <section class="bg-primary text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="material-icons-outlined text-6xl opacity-80 mb-4">gavel</span>
            <h1 class="text-5xl font-extrabold mb-6">Normativa</h1>
            <p class="text-xl opacity-90">Leyes y reglamentos de la profesión.</p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card title="Leyes" icon="balance" description="Marco legal nacional." link="{{ url('normativa/leyes') }}" />
            <x-card id="reglamentos" title="Reglamentos" icon="rule" description="Estatutos institucionales."
                link="{{ url('normativa/reglamentos') }}" />
            <x-card title="Guías" icon="import_contacts" description="Guías técnicas MINSA."
                link="{{ url('normativa/guias') }}" />
            <x-card id="repositorio" title="Repositorio" icon="folder_open" description="Archivo general."
                link="{{ url('normativa/repositorio') }}" />
        </div>
    </section>
@endsection