@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <x-page-section-intro eyebrow="Marco normativo" title="Normativa y documentación legal"
                    subtitle="Leyes, reglamentos, guías técnicas y repositorio documental del ejercicio profesional." />
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-card title="Leyes" icon="balance" description="Normas base del ejercicio profesional y del colegio."
                        link="{{ url('normativa/leyes') }}" linkText="Ver leyes" />
                    <x-card id="reglamentos" title="Reglamentos" icon="rule"
                        description="Estatutos, reglamentos internos y disposiciones regionales."
                        link="{{ url('normativa/reglamentos') }}" linkText="Ver reglamentos" />
                    <x-card title="Guías técnicas" icon="import_contacts"
                        description="Documentos de referencia para práctica y gestión." link="{{ url('normativa/guias') }}"
                        linkText="Ver guías" />
                    <x-card id="repositorio" title="Repositorio" icon="folder_open"
                        description="Archivo documental institucional para consulta."
                        link="{{ url('normativa/repositorio') }}" linkText="Ir al repositorio" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inst-card p-8 border-t-4 border-primary">
                    <h2 class="inst-section-title mb-4">Consulta rápida de documentos</h2>
                    <p class="text-slate-600 mb-6">Use filtros por tipo de norma, año y entidad emisora para encontrar la
                        documentación aplicable.</p>
                    <a href="{{ url('normativa/repositorio') }}" class="inst-btn-primary">Buscar en repositorio</a>
                </div>
            </div>
        </section>
    </main>
@endsection