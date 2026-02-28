@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Capacitación / Aula virtual" title="Campus virtual para estudiar según su ritmo laboral"
            subtitle="Acceso a clases, materiales y seguimiento académico desde guardia, casa o consultorio."
            icon="desktop_windows" backRoute="capacitacion" backLabel="Volver a Capacitación" />

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-6xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Enfoque de uso" title="Qué resuelve el aula virtual para una obstetra"
                    subtitle="Reduce fricción entre trabajo asistencial y continuidad académica." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7">
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <p class="inst-kicker">Ventaja 1</p>
                        <h3 class="text-xl font-black text-text-main">Flexibilidad de horario</h3>
                        <p class="text-sm text-text-main">Repase sesiones grabadas cuando termine turno o guardia.</p>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <p class="inst-kicker">Ventaja 2</p>
                        <h3 class="text-xl font-black text-text-main">Seguimiento de avance</h3>
                        <p class="text-sm text-text-main">Visualice progreso por módulo para planificar mejor su estudio.</p>
                    </article>
                    <article class="inst-card p-6 border-t-4 border-primary inst-stack-tight">
                        <p class="inst-kicker">Ventaja 3</p>
                        <h3 class="text-xl font-black text-text-main">Evidencia de aprendizaje</h3>
                        <p class="text-sm text-text-main">Centralice materiales y constancias en una sola plataforma.</p>
                    </article>
                </div>

                <div class="inst-card p-6 md:p-8 inst-stack-tight border border-primary/20 bg-white">
                    <x-page-section-intro eyebrow="Activación" title="Regístrese para prioridad de acceso"
                        subtitle="Le avisaremos cuando el campus esté abierto para su cohorte." />
                    <form class="mt-3 grid grid-cols-1 md:grid-cols-[1fr_1fr_auto] gap-3">
                        <input type="text" class="inst-input" placeholder="Nombre y apellidos" />
                        <input type="email" class="inst-input" placeholder="correo@ejemplo.com" />
                        <button type="button" class="inst-btn-primary">Notificarme</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
