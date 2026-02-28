@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Oferta academica" title="Capacitacion institucional con enfoque profesional"
                    subtitle="Cursos, talleres y conferencias diseñados para actualizar competencias clinicas y fortalecer el perfil laboral de la obstetra." />

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-7">
                    @foreach ($destacados as $item)
                        <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                            <p class="inst-kicker">{{ $item['kind'] }}</p>
                            <h3 class="text-text-main text-2xl font-black leading-tight">{{ $item['title'] }}</h3>
                            <ul class="space-y-1 text-sm text-text-main leading-relaxed">
                                <li><strong>Duracion:</strong> {{ $item['duration'] }}</li>
                                <li><strong>Modalidad:</strong> {{ $item['modality'] }}</li>
                                <li><strong>Vacantes:</strong> {{ $item['seats'] }}</li>
                                <li><strong>Estado:</strong> {{ $item['status_label'] }}</li>
                            </ul>
                            <div class="flex items-end gap-2">
                                <p class="text-3xl font-black text-primary">{{ $item['price'] }}</p>
                                <p class="text-sm line-through text-text-main">{{ $item['regular_price'] }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-2.5">
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="inst-btn-primary !py-2.5 !text-sm !w-full sm:!w-auto">Ver programa</a>
                                <a href="{{ route('contacto') }}"
                                    class="inst-btn-secondary !py-2.5 !text-sm !w-full sm:!w-auto">Reservar cupo</a>
                            </div>
                            @if (!empty($item['flyer']))
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="mt-1 block border border-primary/20 bg-white">
                                    <img src="{{ $item['flyer'] }}" alt="Flyer {{ $item['title'] }}"
                                        class="w-full h-auto object-cover">
                                </a>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="grid lg:grid-cols-5 gap-8 lg:gap-10">
                    <div class="lg:col-span-3 inst-card p-8 border-t-4 border-primary inst-stack-tight">
                        <x-page-section-intro eyebrow="Por que elegirnos" title="Formacion orientada a resultados"
                            subtitle="Cada programa incluye metodologia aplicada, evaluaciones de casos y constancia institucional para fortalecer su perfil profesional." />
                        <ul class="space-y-3 text-text-main leading-relaxed">
                            <li><strong>1.</strong> Docentes con experiencia clinica y academica en obstetricia.</li>
                            <li><strong>2.</strong> Mallas actualizadas con lineamientos tecnicos vigentes.</li>
                            <li><strong>3.</strong> Clases grabadas, material descargable y tutoria.</li>
                            <li><strong>4.</strong> Certificacion al finalizar con asistencia y evaluacion aprobada.</li>
                        </ul>
                    </div>
                    <aside class="lg:col-span-2 inst-card p-8 bg-primary text-white border-primary inst-stack-tight">
                        <h3 class="text-white text-2xl font-black">Inscripcion abierta 2026</h3>
                        <p class="text-white leading-relaxed">Asegure su vacante con tarifa promocional y reciba asesoria personalizada para elegir su programa.</p>
                        <a href="{{ route('capacitacion.cursos') }}"
                            class="inst-btn !bg-brand-gold-light !text-white hover:!bg-brand-gold !w-full">Ver todos los cursos</a>
                        <a href="{{ route('capacitacion.congresos') }}"
                            class="inst-btn-secondary !border-white !text-white hover:!bg-white/10 !w-full">Ver conferencias</a>
                    </aside>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Rutas rapidas" title="Explore por tipo de producto"
                    subtitle="Acceda directamente a cursos, calendario, congresos o aula virtual para iniciar su proceso de compra e inscripcion." />
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-7">
                    <x-card title="Calendario" icon="event" description="Fechas, cupos y cronograma actualizado."
                        link="{{ route('capacitacion.calendario') }}" linkText="Ver calendario" />
                    <x-card title="Cursos" icon="cast_for_education"
                        description="Programas certificados para crecimiento profesional."
                        link="{{ route('capacitacion.cursos') }}" linkText="Ver cursos" />
                    <x-card title="Congresos" icon="festival" description="Eventos cientificos y networking profesional."
                        link="{{ route('capacitacion.congresos') }}" linkText="Ver conferencias" />
                    <x-card title="Aula virtual" icon="desktop_windows"
                        description="Materiales, clases y seguimiento de aprendizaje."
                        link="{{ route('capacitacion.aula-virtual') }}" linkText="Ingresar" />
                    <x-card title="Archivo" icon="inventory_2"
                        description="Programas finalizados y ediciones anteriores."
                        link="{{ route('capacitacion.archivo') }}" linkText="Ver archivo" />
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Flyers de convocatorias" title="Convocatorias visibles y listas para compartir"
                    subtitle="Revise los flyers oficiales de cursos y conferencias vigentes para una decision rapida de inscripcion." />
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-7">
                    @foreach ($destacados as $item)
                        @if (!empty($item['flyer']))
                            <article class="inst-card p-4 inst-stack-tight border-t-4 border-primary">
                                <p class="inst-kicker">{{ $item['kind'] }}</p>
                                <h3 class="text-text-main text-lg font-black leading-tight">{{ $item['title'] }}</h3>
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="block border border-primary/15 bg-white">
                                    <img src="{{ $item['flyer'] }}" alt="Flyer {{ $item['title'] }}"
                                        class="w-full h-auto object-cover">
                                </a>
                                <a href="{{ route('capacitacion.programa', ['slug' => $item['slug']]) }}"
                                    class="inst-btn-primary !py-2.5 !text-sm !w-full">Ver detalle del programa</a>
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
