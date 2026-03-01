@extends('layouts.app')

@section('content')
@php
    $demoCodes = [
        'habilidad' => 'HAB-2026-00421',
        'colegiatura' => 'COL-2026-00158',
        'registros' => 'REG-2026-00092',
        'carne' => 'CAR-2026-00231',
        'mesa-partes' => 'MDP-2026-01844',
    ];

    $currentStep = collect($timeline)->firstWhere('status', 'current');
    $nextStep = collect($timeline)->firstWhere('status', 'pending');

    $recommendedAction = $currentStep
        ? 'El expediente se encuentra en la etapa "' . $currentStep['title'] . '". Se recomienda volver a consultar hasta su cierre.'
        : 'No hay etapa en proceso. Se recomienda revisar nuevamente en las próximas horas.';

    $nextExpected = $nextStep['title'] ?? 'Cierre del trámite';
@endphp

<main id="main">
    <x-page-subhero eyebrow="Trámites / Seguimiento" title="Seguimiento de trámites"
        subtitle="Prototipo de consulta pública con datos de demostración, sin conexión a base de datos."
        icon="timeline" backRoute="tramites" backLabel="Volver a trámites" />

    <section class="inst-section inst-bg-light-grid bg-white">
        <div class="max-w-7xl mx-auto inst-stack">
            <x-page-section-intro eyebrow="Prototipo funcional" title="Consulta rápida de expediente"
                subtitle="Seleccione un tipo de trámite, ingrese un código de referencia y visualice el avance del caso." />

            <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_1fr] gap-6 md:gap-7">
                <article class="inst-card p-6 md:p-8 border border-primary/20 border-t-4 border-primary">
                    <p class="inst-kicker">Paso 1 · Buscar expediente</p>
                    <form action="{{ route('tramites.tracking') }}" method="GET" class="mt-3 grid grid-cols-1 md:grid-cols-[240px_1fr_auto] gap-3 md:gap-4 items-end">
                        <label>
                            <span class="inst-kicker">Tipo de trámite</span>
                            <select name="tipo" class="mt-2 w-full h-11 border border-primary/25 px-3 text-text-main focus:outline-none focus:ring-2 focus:ring-primary/30">
                                @foreach ($typeOptions as $option)
                                    <option value="{{ $option['value'] }}" @selected($trackingType === $option['value'])>{{ $option['label'] }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label>
                            <span class="inst-kicker">Código de expediente</span>
                            <input name="codigo" type="text" value="{{ $trackingCode }}" placeholder="Ejemplo: HAB-2026-00421"
                                class="mt-2 w-full h-11 border border-primary/25 px-3 text-text-main focus:outline-none focus:ring-2 focus:ring-primary/30" />
                        </label>

                        <button type="submit" class="inst-btn-primary h-11 md:min-w-[180px]">Consultar</button>
                    </form>

                    <p class="mt-3 text-xs text-text-main/80">Modo prototipo: los resultados se generan con datos mock para pruebas de diseño.</p>

                    <div class="mt-4 border-t border-primary/10 pt-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Códigos demo</p>
                        <div class="mt-2 flex flex-wrap gap-2">
                            @foreach ($typeOptions as $option)
                                @php
                                    $demo = $demoCodes[$option['value']] ?? null;
                                @endphp
                                @if ($demo)
                                    <a href="{{ route('tramites.tracking', ['tipo' => $option['value'], 'codigo' => $demo]) }}"
                                        class="inline-flex min-h-[34px] items-center border border-primary/20 px-2.5 text-xs font-semibold text-primary hover:bg-primary-tint/35">
                                        {{ $demo }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </article>

                <aside class="inst-card p-6 border border-primary/20 bg-[linear-gradient(165deg,#fff_0%,#f8f4ea_100%)]">
                    <p class="inst-kicker">Paso 2 · Interpretar</p>
                    <h3 class="text-xl font-black text-text-main mt-1">Qué muestra este prototipo</h3>
                    <ul class="mt-4 space-y-2.5 text-sm text-text-main">
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">badge</span>Tipo de trámite y código consultado.</li>
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">track_changes</span>Estado actual y tiempo referencial.</li>
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">timeline</span>Etapas con área responsable.</li>
                        <li class="inline-flex items-start gap-2"><span class="material-icons-outlined text-primary text-base mt-0.5">description</span>Validación de documentos mock.</li>
                    </ul>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary !w-full mt-5">Solicitar orientación</a>
                </aside>
            </div>

            <article class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <p class="inst-kicker">Paso 3 · Resultado</p>
                <h2 class="text-3xl font-black text-text-main">{{ $trackingCode }}</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3 mt-4">
                    <div class="border border-primary/20 bg-primary-tint/20 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Trámite</p>
                        <p class="text-text-main mt-1 font-semibold">{{ $summary['tramite'] }}</p>
                    </div>
                    <div class="border border-primary/20 bg-primary-tint/20 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Estado actual</p>
                        <p class="text-text-main mt-1 font-semibold">{{ $summary['estado'] }}</p>
                    </div>
                    <div class="border border-primary/20 bg-primary-tint/20 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Plazo referencial</p>
                        <p class="text-text-main mt-1 font-semibold">{{ $summary['sla'] }}</p>
                    </div>
                    <div class="border border-primary/20 bg-primary-tint/20 p-4">
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Última actualización</p>
                        <p class="text-text-main mt-1 font-semibold">{{ $summary['lastUpdate'] }}</p>
                    </div>
                </div>

                <div class="mt-4 border border-brand-gold/35 bg-brand-gold-soft/35 p-4 grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-4 items-center">
                    <div>
                        <p class="text-xs uppercase tracking-[0.12em] text-primary font-bold">Acción recomendada</p>
                        <p class="text-sm text-text-main mt-1">{{ $recommendedAction }}</p>
                        <p class="text-sm text-text-main/85 mt-1">Siguiente hito esperado: <strong>{{ $nextExpected }}</strong>.</p>
                    </div>
                    <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-primary whitespace-nowrap">Ir a Mesa de Partes</a>
                </div>
            </article>
        </div>
    </section>

    <section class="inst-section inst-bg-light-grid bg-background-light">
        <div class="max-w-7xl mx-auto inst-stack">
            <x-page-section-intro eyebrow="Trazabilidad" title="Línea de avance"
                subtitle="Secuencia del expediente con estado, área responsable y referencia temporal." />

            <ol class="space-y-4">
                @foreach ($timeline as $step)
                    @php
                        $status = $step['status'] ?? 'pending';
                        $toneMap = [
                            'completed' => [
                                'card' => 'border-emerald-300 bg-emerald-50',
                                'icon' => 'border-emerald-300 bg-emerald-100 text-emerald-700',
                                'iconName' => 'check_circle',
                                'label' => 'Completado',
                            ],
                            'current' => [
                                'card' => 'border-brand-gold bg-brand-gold-soft/35',
                                'icon' => 'border-brand-gold bg-brand-gold-soft text-primary',
                                'iconName' => 'radio_button_checked',
                                'label' => 'En proceso',
                            ],
                            'pending' => [
                                'card' => 'border-slate-200 bg-white',
                                'icon' => 'border-slate-200 bg-slate-100 text-slate-500',
                                'iconName' => 'schedule',
                                'label' => 'Pendiente',
                            ],
                        ];
                        $tone = $toneMap[$status] ?? $toneMap['pending'];
                    @endphp

                    <li class="inst-card p-5 border {{ $tone['card'] }}">
                        <div class="grid grid-cols-1 md:grid-cols-[auto_1fr_auto] gap-3 md:gap-4 md:items-start">
                            <span class="inline-flex h-11 w-11 items-center justify-center border {{ $tone['icon'] }}">
                                <span class="material-icons-outlined text-[1.4rem]">{{ $tone['iconName'] }}</span>
                            </span>

                            <div>
                                <p class="inst-kicker">{{ $tone['label'] }}</p>
                                <p class="font-bold text-text-main mt-1">{{ $step['title'] }}</p>
                                <p class="text-sm text-text-main mt-1">{{ $step['detail'] }}</p>
                                <p class="text-xs text-text-main/85 mt-2 inline-flex items-center gap-1.5">
                                    <span class="material-icons-outlined text-[1rem]">account_tree</span>{{ $step['owner'] }}
                                </p>
                            </div>

                            <p class="text-xs text-text-main/85 inline-flex items-center gap-1.5 md:justify-end">
                                <span class="material-icons-outlined text-[1rem]">schedule</span>{{ $step['datetime'] }}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="inst-section inst-bg-light-grid bg-white">
        <div class="max-w-7xl mx-auto inst-stack">
            <x-page-section-intro eyebrow="Control documentario" title="Validación de documentos"
                subtitle="Estado de revisión de documentos del expediente en este prototipo." />

            <div class="inst-card border border-primary/20 overflow-hidden">
                <div class="hidden md:grid grid-cols-[1fr_200px] bg-primary text-white text-sm font-bold uppercase tracking-[0.09em]">
                    <p class="px-5 py-3">Documento</p>
                    <p class="px-5 py-3">Estado</p>
                </div>
                <ul class="divide-y divide-primary/10">
                    @foreach ($documents as $doc)
                        <li class="grid grid-cols-1 md:grid-cols-[1fr_200px] gap-2 md:gap-0 px-5 py-4">
                            <p class="text-text-main font-medium">{{ $doc['name'] }}</p>
                            <p class="inline-flex items-center gap-2 text-primary font-semibold">
                                <span class="material-icons-outlined text-base">verified</span>
                                {{ $doc['status'] }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
