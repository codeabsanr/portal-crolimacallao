@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="inst-section bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Marco normativo" title="Normativa y documentación legal"
                    subtitle="Leyes, reglamentos, guías técnicas y repositorio documental del ejercicio profesional." />
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-7">
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

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="inst-card p-8 border-t-4 border-primary inst-stack-tight">
                    <h2 class="inst-title mb-2">Consulta rápida de documentos</h2>
                    <p class="inst-subtitle">Use filtros por tipo de norma, año y entidad emisora para encontrar la
                        documentación aplicable.</p>
                    <a href="{{ url('normativa/repositorio') }}" class="inst-btn-primary">Buscar en repositorio</a>
                </div>
            </div>
        </section>
    </main>
@endsection


