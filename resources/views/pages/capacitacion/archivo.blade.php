@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Archivo" title="Archivo académico de ediciones finalizadas"
            subtitle="Use el histórico para identificar tendencias formativas y prepararse para próximas cohortes."
            icon="inventory_2" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Cómo usar el archivo" title="Valor práctico del histórico"
                    subtitle="No es solo memoria institucional: ayuda a planificar su desarrollo profesional." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Uso 1</p>
                        <p class="font-bold text-text-main mt-1">Identificar líneas recurrentes</p>
                        <p class="text-sm text-text-main mt-2">Reconozca temas que se repiten para priorizar su ruta.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Uso 2</p>
                        <p class="font-bold text-text-main mt-1">Prever próximas ediciones</p>
                        <p class="text-sm text-text-main mt-2">Anticipe fechas y reserve presupuesto de capacitación.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Uso 3</p>
                        <p class="font-bold text-text-main mt-1">Construir plan anual</p>
                        <p class="text-sm text-text-main mt-2">Organice su formación para crecimiento sostenido.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Cursos finalizados" title="Histórico de cursos"
                    subtitle="Programas cerrados conservados para referencia académica." />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-7">
                    @forelse ($archivedCourses as $item)
                        <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                            <p class="inst-kicker">Curso finalizado</p>
                            <h3 class="text-xl font-black text-text-main leading-tight">{{ $item['title'] }}</h3>
                            <p class="text-sm text-text-main">{{ $item['month_label'] }} · {{ $item['modality'] }}</p>
                            <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}" class="inst-link">Ver detalle archivado</a>
                        </article>
                    @empty
                        <p class="text-text-main md:col-span-2">No hay cursos archivados por el momento.</p>
                    @endforelse
                </div>

                <x-page-section-intro eyebrow="Congresos finalizados" title="Histórico de congresos"
                    subtitle="Revisión de jornadas anteriores para orientación de futuras postulaciones." />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-7">
                    @forelse ($archivedConferences as $item)
                        <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                            <p class="inst-kicker">Congreso finalizado</p>
                            <h3 class="text-xl font-black text-text-main leading-tight">{{ $item['title'] }}</h3>
                            <p class="text-sm text-text-main">{{ $item['month_label'] }} · {{ $item['modality'] }}</p>
                            <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}" class="inst-link">Ver detalle archivado</a>
                        </article>
                    @empty
                        <p class="text-text-main md:col-span-2">No hay congresos archivados por el momento.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
