@extends('layouts.app')

@section('content')
    <section class="bg-primary text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="material-icons-outlined text-6xl opacity-80 mb-4">account_balance</span>
            <h1 class="text-5xl font-extrabold mb-6">Institución</h1>
            <p class="text-xl opacity-90">Nuestra historia, autoridades y compromisos institucionales.</p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card title="Quiénes somos" icon="groups" description="Misión, visión y valores."
                link="{{ url('institucional/quienes-somos') }}" />
            <x-card title="Autoridades" icon="badge" description="Consejo Directivo Regional."
                link="{{ url('institucional/autoridades') }}" />
            <x-card title="Historia" icon="history_edu" description="Trayectoria institucional."
                link="{{ url('institucional/historia') }}" />
            <x-card id="transparencia" title="Transparencia" icon="plagiarism" description="Documentos y gestión."
                link="{{ url('institucional/transparencia') }}" />
            <x-card title="Convenios" icon="handshake" description="Alianzas estratégicas."
                link="{{ url('institucional/convenios') }}" />
        </div>
    </section>
@endsection