@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Mesa de Partes" title="Mesa de Partes Virtual"
            subtitle="Registre y haga seguimiento de expedientes administrativos desde cualquier lugar."
            icon="forward_to_inbox" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="¿Para qué usarla?" title="Cuándo conviene Mesa de Partes"
                    subtitle="Canal recomendado para expedientes, subsanaciones y comunicaciones formales." />
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Caso 1</p>
                        <p class="font-bold text-text-main mt-1">Ingreso de expediente</p>
                        <p class="text-sm text-text-main mt-2">Documentos iniciales para trámite administrativo.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Caso 2</p>
                        <p class="font-bold text-text-main mt-1">Subsanación</p>
                        <p class="text-sm text-text-main mt-2">Respuesta a observaciones dentro del plazo indicado.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Caso 3</p>
                        <p class="font-bold text-text-main mt-1">Seguimiento</p>
                        <p class="text-sm text-text-main mt-2">Consulta de estado con código de registro.</p>
                    </article>
                </div>

                <div class="grid lg:grid-cols-2 gap-6 md:gap-7">
                    <div class="inst-card p-6 md:p-8 inst-stack-tight">
                        <x-page-section-intro eyebrow="Registro digital" title="Enviar expediente"
                            subtitle="Complete datos mínimos y adjunte su documentación." />
                        <form class="space-y-3">
                            <input type="text" class="inst-input" placeholder="Asunto del expediente" />
                            <textarea class="inst-input min-h-[120px]" placeholder="Descripción breve"></textarea>
                            <button type="button" class="inst-btn-primary w-full sm:w-auto">Registrar envío</button>
                        </form>
                    </div>
                    <aside class="inst-card p-6 md:p-8 border-primary/30 bg-primary/5 inst-stack-tight">
                        <p class="inst-kicker">Seguimiento</p>
                        <h3 class="text-text-main text-xl font-black">Estado de solicitud</h3>
                        <div class="h-[3px] w-12 bg-brand-gold-light"></div>
                        <p class="text-text-main">Código simulado: <strong>MP-2026-00421</strong></p>
                        <p class="text-sm text-text-main">Última actualización: En revisión documentaria.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary">Contactar mesa de partes</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection
