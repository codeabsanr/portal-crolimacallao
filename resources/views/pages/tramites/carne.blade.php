@extends('layouts.app')

@section('content')
    <main id="main">
        <x-page-subhero eyebrow="Trámites / Carné institucional" title="Carné del Colegiado"
            subtitle="Emisión, renovación o duplicado de carné con requisitos claros y seguimiento por expediente."
            icon="credit_card" backRoute="tramites" backLabel="Volver al catálogo" />

        <section class="inst-section inst-bg-light-grid bg-white">
            <div class="max-w-7xl mx-auto inst-stack">
                <x-page-section-intro eyebrow="Modalidades disponibles" title="¿Qué tipo de solicitud corresponde?"
                    subtitle="Seleccione la modalidad correcta para evitar observaciones en registro y validación." />

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Emisión inicial</p>
                        <p class="text-sm text-text-main mt-2">Para colegiatura recién aprobada con alta activa en padrón.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Renovación</p>
                        <p class="text-sm text-text-main mt-2">Para carné vencido o por actualización de vigencia institucional.</p>
                    </article>
                    <article class="inst-card p-5 border border-primary/15">
                        <p class="inst-kicker">Modalidad</p>
                        <p class="font-bold text-text-main mt-1">Duplicado</p>
                        <p class="text-sm text-text-main mt-2">Para pérdida, deterioro o reposición por cambio de datos.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inst-section inst-bg-light-grid bg-background-light">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:gap-7">
                <article class="lg:col-span-2 inst-card p-6 md:p-8 border-t-4 border-primary inst-stack-tight">
                    <x-page-section-intro eyebrow="Requisitos mínimos" title="Documentación para trámite de carné"
                        subtitle="Preparar estos requisitos antes del registro mejora tiempos de atención." />
                    <ul class="space-y-3 text-text-main">
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Solicitud según modalidad (emisión, renovación o duplicado).</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>DNI vigente y número de colegiatura activo.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Comprobante de pago por derecho de emisión.</span></li>
                        <li class="flex items-start gap-3 border border-slate-200 p-3"><span class="material-icons-outlined text-primary mt-0.5 text-base">check_box_outline_blank</span><span>Formato o declaración por pérdida en caso de duplicado.</span></li>
                    </ul>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Plazo referencial</p>
                            <p class="text-text-main mt-1 font-semibold">2 a 4 días hábiles</p>
                        </div>
                        <div class="border border-primary/20 bg-primary-tint/20 p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Resultado esperado</p>
                            <p class="text-text-main mt-1 font-semibold">Emisión de carné o notificación de recojo</p>
                        </div>
                    </div>
                </article>

                <aside class="inst-card p-5 sm:p-6 border border-primary/20 bg-white inst-stack-tight">
                    <p class="inst-kicker">Acciones</p>
                    <h3 class="text-xl sm:text-2xl font-black text-text-main">Registrar y monitorear</h3>
                    <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary !w-full">Registrar expediente</a>
                    <a href="{{ route('tramites.tracking', ['tipo' => 'carne']) }}" class="inst-btn-secondary !w-full">Seguimiento del trámite</a>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full">Orientación institucional</a>
                    <div class="border-t border-primary/15 pt-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Código de referencia</p>
                        <a class="inst-link inline-flex items-center gap-2 mt-2 break-all"
                            href="{{ route('tramites.tracking', ['tipo' => 'carne', 'codigo' => 'CAR-2026-00231']) }}">
                            <span class="material-icons-outlined text-base text-primary">tag</span>CAR-2026-00231
                        </a>
                    </div>
                </aside>
            </div>
        </section>
    </main>
@endsection
