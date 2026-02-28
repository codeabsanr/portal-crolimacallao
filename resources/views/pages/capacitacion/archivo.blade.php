@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Archivo" title="Archivo de Programas Finalizados"
            subtitle="Consulta histórica de cursos y congresos culminados en años anteriores."
            icon="inventory_2" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Histórico académico" title="Cursos finalizados"
                    subtitle="Programas cerrados que se conservan para referencia institucional." />

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

                <x-page-section-intro eyebrow="Eventos cerrados" title="Congresos finalizados"
                    subtitle="Historial de jornadas y congresos culminados." />

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
