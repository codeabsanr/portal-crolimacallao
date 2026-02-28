@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Mesa de Partes" title="Mesa de Partes Virtual"
            subtitle="Registre, envíe y haga seguimiento de sus expedientes administrativos de forma digital, sin necesidad de acudir a sede."
            icon="forward_to_inbox" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <div class="grid lg:grid-cols-2 gap-6 md:gap-7">
                    <div class="inst-card p-6 md:p-8 inst-stack-tight">
                        <x-page-section-intro eyebrow="Envío digital" title="Enviar expediente"
                            subtitle="Complete los datos del expediente y regístrelo para iniciar el proceso de revisión." />
                        <form class="space-y-3">
                            <input type="text" class="inst-input" placeholder="Asunto" />
                            <textarea class="inst-input min-h-[120px]" placeholder="Descripción breve"></textarea>
                            <button type="button" class="inst-btn-primary w-full sm:w-auto">Registrar envío</button>
                        </form>
                    </div>
                    <aside class="inst-card p-6 md:p-8 border-primary/30 bg-primary/5">
                        <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold mb-2">Seguimiento</p>
                        <h3 class="text-text-main text-xl font-black">Estado de seguimiento</h3>
                        <div class="mt-3 h-[3px] w-12 bg-brand-gold-light"></div>
                        <p class="text-text-main mt-4">Código simulado: <strong>MP-2026-00421</strong></p>
                        <p class="text-sm text-text-main mt-2">Última actualización: En revisión documentaria.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn-secondary mt-5">Contactar mesa de partes</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection



