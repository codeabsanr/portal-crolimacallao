@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Aula virtual" title="Campus Virtual Institucional"
            subtitle="Plataforma de aprendizaje en línea con recursos, actividades y certificación institucional para colegiadas."
            icon="desktop_windows" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-5xl mx-auto inst-stack">
                <div class="inst-card p-6 md:p-8 inst-stack-tight">
                    <x-page-section-intro eyebrow="Próximamente" title="Acceso al campus"
                        subtitle="Este módulo está en implementación. Regístrese para recibir aviso de activación." />
                    <p class="text-text-main mb-5">Una vez activo, el campus virtual ofrecerá cursos autogestionados,
                        materiales descargables, evaluaciones y constancias institucionales.</p>
                    <form class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-3">
                        <input type="email" class="inst-input" placeholder="correo@ejemplo.com" />
                        <button type="button" class="inst-btn-primary">Notificarme</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection




