@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Colegiados / Buscador" title="Verificar Estado de Colegiado"
            subtitle="Consulte nombre, número de colegiatura y estado de habilitación de cualquier obstetra registrada."
            icon="person_search" backRoute="colegiados" backLabel="Volver a Colegiados" />

        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="inst-card p-6 md:p-8">
                    <x-page-section-intro eyebrow="Consulta institucional" title="Búsqueda rápida"
                        subtitle="Ingrese el nombre, apellidos o número de colegiatura para verificar el estado de habilitación." />
                    <div class="grid grid-cols-1 md:grid-cols-[1fr_auto] gap-3">
                        <input type="text" class="inst-input" placeholder="Nombres, apellidos o número de colegiatura" />
                        <button class="inst-btn-primary">Consultar</button>
                    </div>
                    <div class="mt-6 border border-slate-200 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-slate-500">Resultado simulado</p>
                        <p class="text-slate-900 font-bold mt-2">OBS-01425 | María Elena Ramos Cáceres</p>
                        <p class="text-sm text-slate-600">Estado: Hábil | Vigencia: 31/12/2026 | Región: Lima-Callao</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection