@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Colegiados / Buscador" title="Verificar Estado de Colegiado"
            subtitle="Consulte nombre, número de colegiatura y estado de habilitación de cualquier obstetra registrada."
            icon="person_search" backRoute="colegiados" backLabel="Volver a Colegiados" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-5xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 inst-stack-tight">
                    <x-page-section-intro eyebrow="Consulta institucional" title="Búsqueda rápida"
                        subtitle="Ingrese el nombre, apellidos o número de colegiatura para verificar el estado de habilitación." />
                    <div class="grid grid-cols-1 md:grid-cols-[1fr_auto] gap-3">
                        <input type="text" class="inst-input" placeholder="Nombres, apellidos o número de colegiatura" />
                        <button class="inst-btn-primary">Consultar</button>
                    </div>
                    <div class="mt-6 border border-slate-200 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-text-main">Resultado simulado</p>
                        <p class="text-text-main font-bold mt-2">OBS-01425 | María Elena Ramos Cáceres</p>
                        <p class="text-sm text-text-main">Estado: Hábil | Vigencia: 31/12/2026 | Región: Lima-Callao</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection




