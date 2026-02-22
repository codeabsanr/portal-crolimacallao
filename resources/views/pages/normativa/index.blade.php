@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative overflow-hidden bg-secondary text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(186,124,0,0.22),transparent_42%),radial-gradient(circle_at_85%_0%,rgba(102,2,25,0.7),transparent_40%)]"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
                <p class="text-sm uppercase tracking-[0.16em] text-brand-gold-light font-bold mb-4">Transparencia y cumplimiento</p>
                <h1 class="text-white">Normativa</h1>
                <p class="mt-4 text-white/90 max-w-3xl">Marco legal y documental para el ejercicio de la obstetricia y la gestión institucional.</p>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-card title="Leyes" icon="balance" description="Normas base del ejercicio profesional y del colegio." link="{{ url('normativa/leyes') }}" linkText="Ver leyes" />
                    <x-card id="reglamentos" title="Reglamentos" icon="rule" description="Estatutos, reglamentos internos y disposiciones regionales." link="{{ url('normativa/reglamentos') }}" linkText="Ver reglamentos" />
                    <x-card title="Guías técnicas" icon="import_contacts" description="Documentos de referencia para práctica y gestión." link="{{ url('normativa/guias') }}" linkText="Ver guías" />
                    <x-card id="repositorio" title="Repositorio" icon="folder_open" description="Archivo documental institucional para consulta." link="{{ url('normativa/repositorio') }}" linkText="Ir al repositorio" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inst-card p-8 border-t-4 border-primary">
                    <h2 class="inst-section-title mb-4">Consulta rápida de documentos</h2>
                    <p class="text-slate-600 mb-6">Use filtros por tipo de norma, año y entidad emisora para encontrar la documentación aplicable.</p>
                    <a href="{{ url('normativa/repositorio') }}" class="inst-btn-primary">Buscar en repositorio</a>
                </div>
            </div>
        </section>
    </main>
@endsection
