@extends('layouts.public-portal')

@section('title', 'Perfil Profesional | CRO III Lima-Callao')
@section('meta_description', 'Perfil profesional de consulta publica del Colegio Regional de Obstetras III Lima-Callao.')

@section('content')
@php
    $isHabilitado = ($item['habilitado'] ?? '') === 'HABILITADO';
    $isActivo = trim(strtolower($item['situacion'] ?? '')) === 'activo';
    $accesoDestino = auth()->check() ? route('portal.colegiado') : route('login');
    $accesoTexto = auth()->check() ? 'Ir a mi portal' : 'Ingresar al portal colegiado';

    $adsPropios = [
        [
            'tipo' => 'imagen',
            'color' => 'vino',
            'etiqueta' => 'Campana interna',
            'titulo' => 'Programa de capacitacion obstetrica 2026',
            'descripcion' => 'Inscripciones abiertas para cursos con certificacion institucional.',
            'imagen' => $item['foto'] ?? asset('assets/img/logo-circular.png'),
            'acciones' => [
                ['texto' => 'Ver cronograma', 'url' => route('institucional.convenios')],
                ['texto' => 'Postular', 'url' => route('bolsa.trabajo')],
            ],
        ],
        [
            'tipo' => 'texto',
            'color' => 'azul',
            'etiqueta' => 'Alerta informativa',
            'titulo' => 'Actualiza tus datos de contacto',
            'descripcion' => 'Validar correo y telefono mejora la recepcion de avisos y oportunidades.',
            'acciones' => [
                ['texto' => 'Mas detalles', 'url' => route('obstetras.index')],
            ],
        ],
        [
            'tipo' => 'ayuda',
            'color' => 'verde',
            'etiqueta' => 'Ayuda de acceso',
            'titulo' => 'No puedes ingresar a tu cuenta?',
            'descripcion' => 'Recupera tu clave o solicita apoyo directo del equipo institucional.',
            'imagen' => asset('assets/img/logo-circular.png'),
            'acciones' => [
                ['texto' => $accesoTexto, 'url' => $accesoDestino],
                ['texto' => 'Recuperar clave', 'url' => route('password.request')],
            ],
        ],
    ];

    $paletas = [
        'vino' => [
            'card' => 'border-rose-200 bg-rose-50',
            'tag' => 'border-rose-300 bg-rose-100 text-rose-800',
            'title' => 'text-rose-950',
            'text' => 'text-rose-900/80',
            'primary' => 'bg-rose-700 text-white hover:bg-rose-800',
            'secondary' => 'border border-rose-300 text-rose-800 hover:bg-rose-100',
        ],
        'azul' => [
            'card' => 'border-primary/30 bg-primary-mist',
            'tag' => 'border-primary/35 bg-primary-tint text-primary-dark',
            'title' => 'text-primary-dark',
            'text' => 'text-primary-dark/80',
            'primary' => 'bg-primary text-white hover:bg-primary-dark',
            'secondary' => 'border border-primary/35 text-primary-dark hover:bg-primary-tint',
        ],
        'verde' => [
            'card' => 'border-emerald-200 bg-emerald-50',
            'tag' => 'border-emerald-300 bg-emerald-100 text-emerald-800',
            'title' => 'text-emerald-950',
            'text' => 'text-emerald-900/80',
            'primary' => 'bg-emerald-700 text-white hover:bg-emerald-800',
            'secondary' => 'border border-emerald-300 text-emerald-800 hover:bg-emerald-100',
        ],
    ];
@endphp
<main id="main" class="md:h-screen md:overflow-hidden flex flex-col md:flex-row">
    <section class="relative flex flex-col w-full md:w-[65%] min-h-[56vh] md:h-screen md:overflow-y-auto bg-background-light border-r border-slate-300/80">
        <div class="absolute inset-0 opacity-35 pointer-events-none" style="background-image: radial-gradient(circle at 1px 1px, #e4d4d9 1px, transparent 0); background-size: 26px 26px;"></div>

        <header class="relative z-10 border-b border-slate-300/80 bg-primary-dark px-6 lg:px-10 py-5 text-white">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                    <div class="leading-tight">
                        <p class="text-xl font-black tracking-tight">Cabina de perfil y anuncios</p>
                        <p class="text-xs uppercase tracking-[0.16em] text-white/70">CRO III LIMA-CALLAO</p>
                    </div>
                </div>
                <p class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.14em] text-white/80">
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                    Modulo en linea
                </p>
            </div>
        </header>

        <div class="relative z-10 mx-auto flex-1 w-full max-w-6xl px-5 sm:px-6 lg:px-10 py-8 md:py-10">
            <div class="grid gap-4 lg:grid-cols-[1.15fr_0.95fr]">
                <div class="space-y-4">
                    <section class="border border-slate-200 bg-white shadow-[0_18px_30px_-28px_rgba(15,23,42,0.8)]">
                        <div class="border-b border-slate-200 bg-[linear-gradient(120deg,#4d0213_0%,#660219_60%,#7a1836_100%)] p-5 text-white">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="inline-flex rounded-sm border border-white/35 px-2.5 py-1 text-[11px] font-black uppercase tracking-[0.12em]">Perfil profesional</span>
                                <span class="inline-flex rounded-sm border border-white/35 px-2.5 py-1 text-[11px] font-black uppercase tracking-[0.12em]">COP {{ $item['cop'] }}</span>
                            </div>
                            <h1 class="mt-3 text-3xl font-black leading-tight">{{ $item['nombre'] }}</h1>
                            <p class="mt-2 text-sm text-white/85">{{ $item['resumen'] ?? 'Perfil profesional de consulta publica del colegio.' }}</p>
                        </div>

                        <div class="p-5">
                            <div class="grid gap-4 md:grid-cols-[140px_1fr]">
                                <img src="{{ $item['foto'] }}" alt="Foto de colegiada" class="h-40 w-32 object-cover border border-slate-200 bg-white">
                                <div>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="inline-flex items-center rounded-sm border {{ $isHabilitado ? 'border-emerald-300 bg-emerald-50 text-emerald-700' : 'border-primary/20 bg-primary/5 text-primary' }} px-3 py-1 text-xs font-black uppercase tracking-[0.12em]">{{ $item['habilitado'] }}</span>
                                        <span class="inline-flex items-center rounded-sm border border-slate-300 bg-white px-3 py-1 text-xs font-black uppercase tracking-[0.12em] text-text-main">{{ $item['situacion'] }}</span>
                                        <span class="inline-flex items-center rounded-sm border border-slate-300 bg-white px-3 py-1 text-xs font-black uppercase tracking-[0.12em] text-text-main">{{ $item['documento'] }}</span>
                                    </div>
                                    <div class="mt-4 grid grid-cols-3 gap-2">
                                        <article class="border border-slate-200 bg-primary-mist p-2.5">
                                            <p class="text-[11px] uppercase tracking-[0.12em] text-text-main font-bold">Experiencia</p>
                                            <p class="mt-1 text-lg font-black text-text-main">{{ $item['experiencia_anios'] ?? '0' }} anos</p>
                                        </article>
                                        <article class="border border-slate-200 bg-primary-mist p-2.5">
                                            <p class="text-[11px] uppercase tracking-[0.12em] text-text-main font-bold">Modalidad</p>
                                            <p class="mt-1 text-sm font-bold text-text-main">{{ $item['modalidad'] ?? 'No registrado' }}</p>
                                        </article>
                                        <article class="border border-slate-200 bg-primary-mist p-2.5">
                                            <p class="text-[11px] uppercase tracking-[0.12em] text-text-main font-bold">Disponibilidad</p>
                                            <p class="mt-1 text-sm font-bold {{ $isHabilitado && $isActivo ? 'text-emerald-700' : 'text-primary' }}">{{ $item['disponibilidad'] ?? 'No registrado' }}</p>
                                        </article>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 flex flex-wrap gap-2">
                                <a href="{{ route('obstetras.index') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Volver al buscador</a>
                                <a href="{{ route('bolsa.trabajo') }}" class="inst-btn-primary !px-4 !py-2 !text-xs">Bolsa de trabajo</a>
                                <a href="{{ route('institucional.convenios') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Convenios</a>
                            </div>
                        </div>
                    </section>

                    <section class="grid md:grid-cols-2 gap-4">
                        <article class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Datos profesionales</p>
                            <div class="mt-3 space-y-2 text-sm text-text-main">
                                <p><span class="font-bold text-secondary">Carrera:</span> {{ $item['carrera'] }}</p>
                                <p><span class="font-bold text-secondary">Especialidad:</span> {{ $item['especialidad'] }}</p>
                                <p><span class="font-bold text-secondary">Colegiatura desde:</span> {{ $item['colegiatura_desde'] }}</p>
                                <p><span class="font-bold text-secondary">Ubicacion:</span> {{ $item['ubicacion'] ?? 'No registrado' }}</p>
                                <p><span class="font-bold text-secondary">Idiomas:</span> {{ $item['idiomas'] ?? 'No registrado' }}</p>
                            </div>
                        </article>

                        <article class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Ultima experiencia</p>
                            <p class="mt-2 text-base font-black text-secondary">{{ $item['ultimo_centro'] ?? 'No registrado' }}</p>
                            <div class="mt-3 space-y-2">
                                @foreach (($item['experiencia'] ?? []) as $job)
                                    <div class="border border-slate-200 bg-primary-mist p-3">
                                        <p class="text-sm font-bold text-secondary">{{ $job['cargo'] }}</p>
                                        <p class="text-sm text-text-main">{{ $job['institucion'] }}</p>
                                        <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold mt-1">{{ $job['periodo'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    </section>
                </div>

                <div class="space-y-4">
                    <section class="border border-slate-200 bg-white p-4">
                        <div class="flex items-center justify-between gap-2">
                            <div>
                                <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Cartelera institucional</p>
                                <h2 class="mt-1 text-xl font-black text-text-main">Ads segun tipo de contenido</h2>
                            </div>
                            <span class="inline-flex rounded-sm border border-slate-300 px-2.5 py-1 text-[11px] font-black uppercase tracking-[0.12em] text-text-main">3 ads</span>
                        </div>

                        <div class="mt-4 space-y-3">
                            @foreach ($adsPropios as $ad)
                                @php
                                    $paleta = $paletas[$ad['color']] ?? $paletas['vino'];
                                @endphp

                                @if ($ad['tipo'] === 'imagen')
                                    <article class="border {{ $paleta['card'] }} overflow-hidden">
                                        <div class="relative h-32">
                                            <img src="{{ $ad['imagen'] }}" alt="Imagen del anuncio" class="h-full w-full object-cover">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/20 to-transparent"></div>
                                            <span class="absolute left-2 top-2 inline-flex rounded-sm border px-2 py-1 text-[11px] font-black uppercase tracking-[0.12em] {{ $paleta['tag'] }}">{{ $ad['etiqueta'] }}</span>
                                        </div>
                                        <div class="p-3">
                                            <h3 class="text-base font-black {{ $paleta['title'] }}">{{ $ad['titulo'] }}</h3>
                                            <p class="mt-1 text-sm {{ $paleta['text'] }}">{{ $ad['descripcion'] }}</p>
                                            <div class="mt-3 grid grid-cols-2 gap-2">
                                                @foreach ($ad['acciones'] as $index => $accion)
                                                    <a href="{{ $accion['url'] }}" class="px-3 py-2 text-center text-xs font-black uppercase tracking-[0.12em] {{ $index === 0 ? $paleta['primary'] : $paleta['secondary'] }}">{{ $accion['texto'] }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </article>
                                @elseif ($ad['tipo'] === 'texto')
                                    <article class="border {{ $paleta['card'] }} p-3">
                                        <span class="inline-flex rounded-sm border px-2 py-1 text-[11px] font-black uppercase tracking-[0.12em] {{ $paleta['tag'] }}">{{ $ad['etiqueta'] }}</span>
                                        <h3 class="mt-2 text-base font-black {{ $paleta['title'] }}">{{ $ad['titulo'] }}</h3>
                                        <p class="mt-1 text-sm {{ $paleta['text'] }}">{{ $ad['descripcion'] }}</p>
                                        <a href="{{ $ad['acciones'][0]['url'] }}" class="mt-3 inline-flex px-3 py-2 text-xs font-black uppercase tracking-[0.12em] {{ $paleta['primary'] }}">{{ $ad['acciones'][0]['texto'] }}</a>
                                    </article>
                                @else
                                    <article class="border {{ $paleta['card'] }} p-3">
                                        <div class="grid grid-cols-[58px_1fr] gap-3 items-start">
                                            <img src="{{ $ad['imagen'] }}" alt="Ayuda de acceso" class="h-14 w-14 object-cover border border-white/70 bg-white">
                                            <div>
                                                <span class="inline-flex rounded-sm border px-2 py-1 text-[11px] font-black uppercase tracking-[0.12em] {{ $paleta['tag'] }}">{{ $ad['etiqueta'] }}</span>
                                                <h3 class="mt-2 text-base font-black {{ $paleta['title'] }}">{{ $ad['titulo'] }}</h3>
                                                <p class="mt-1 text-sm {{ $paleta['text'] }}">{{ $ad['descripcion'] }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 grid grid-cols-2 gap-2">
                                            @foreach ($ad['acciones'] as $index => $accion)
                                                <a href="{{ $accion['url'] }}" class="px-3 py-2 text-center text-xs font-black uppercase tracking-[0.12em] {{ $index === 0 ? $paleta['primary'] : $paleta['secondary'] }}">{{ $accion['texto'] }}</a>
                                            @endforeach
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                        </div>
                    </section>

                    <section class="border border-slate-900 bg-primary-dark text-white p-4">
                        <p class="text-xs uppercase tracking-[0.12em] font-black text-brand-gold-light">Contacto rapido</p>
                        <h3 class="mt-1 text-lg font-black">Si no puedes ingresar, comunicate aqui</h3>
                        <p class="mt-2 text-sm text-white/80">Atencion para colegiadas con problemas de acceso, validacion o recuperacion de credenciales.</p>
                        <div class="mt-3 grid gap-2 text-sm">
                            <a href="mailto:tramitedocumentario@crolimacallao.org.pe" class="border border-white/25 bg-white/5 px-3 py-2 hover:bg-white/10">tramitedocumentario@crolimacallao.org.pe</a>
                            <a href="tel:+51982520891" class="border border-white/25 bg-white/5 px-3 py-2 hover:bg-white/10">+51 982 520 891</a>
                        </div>
                    </section>

                    <section class="grid sm:grid-cols-2 gap-3">
                        <article class="border border-slate-200 bg-white p-3">
                            <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Areas</p>
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach (($item['areas'] ?? []) as $area)
                                    <span class="inline-flex rounded-sm border border-primary/20 bg-primary/5 px-2.5 py-1 text-xs font-bold text-primary">{{ $area }}</span>
                                @endforeach
                            </div>
                        </article>
                        <article class="border border-slate-200 bg-white p-3">
                            <p class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">Certificaciones</p>
                            <ul class="mt-2 space-y-1.5 text-sm text-text-main">
                                @foreach (($item['certificaciones'] ?? []) as $cert)
                                    <li class="flex items-start gap-2">
                                        <span class="material-icons-outlined text-base text-brand-gold mt-0.5">verified</span>
                                        <span>{{ $cert }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    </section>
                </div>
            </div>
        </div>

        <footer class="relative z-10 mt-auto border-t border-slate-300 bg-white/95 px-6 lg:px-10 py-3.5 text-sm text-text-main flex items-center justify-between">
            <span>© {{ date('Y') }} CRO III LIMA-CALLAO</span>
            <span>v2.4.0-release</span>
        </footer>
    </section>

    <aside class="relative w-full md:w-[35%] min-h-[420px] md:h-screen md:overflow-y-auto bg-inst-hero text-white">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-8 lg:px-10 py-8 lg:py-12">
            <div class="flex items-center gap-3 mb-5">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                <p class="text-xs uppercase tracking-[0.16em] font-bold text-white/90">CRO III LIMA-CALLAO</p>
            </div>

            <h2 class="text-3xl lg:text-4xl font-black tracking-tight">Perfil validado</h2>
            <p class="mt-3 text-base lg:text-lg text-white/85">Consulta publica del registro profesional para empleabilidad y referencia institucional.</p>

            <div class="mt-6 space-y-3">
                <article class="rounded-sm border border-brand-gold/40 bg-brand-gold-soft/15 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-brand-gold-light">Registro</p>
                    <p class="mt-1 text-sm text-white/90">COP: {{ $item['cop'] }} · Situacion: {{ $item['situacion'] }}</p>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Bolsa de trabajo</p>
                    <p class="mt-1 text-sm text-white/85">Publica vacantes para obstetras colegiadas con filtro por especialidad y experiencia.</p>
                    <a href="{{ route('bolsa.trabajo') }}" class="mt-3 inst-btn !w-full !bg-brand-gold !text-white !py-2.5 !text-xs hover:!bg-brand-gold-light">Ingresar a bolsa</a>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Convenios</p>
                    <p class="mt-1 text-sm text-white/85">Canal para instituciones que buscan acuerdos de practicas, empleabilidad y formacion continua.</p>
                    <a href="{{ route('institucional.convenios') }}" class="mt-3 inst-btn-secondary !w-full !border-white !text-white hover:!bg-white/10 !py-2.5 !text-xs">Solicitar convenio</a>
                </article>
            </div>

            <div class="mt-6 rounded-sm border border-white/20 bg-white/10 p-4">
                <p class="text-sm font-bold text-white">Soporte tecnico institucional</p>
                <p class="mt-1 text-sm text-white/80">Lunes a viernes: 9:00 a. m. - 5:30 p. m.</p>
                <p class="text-sm text-white/80">Sabados: 9:00 a. m. - 12:00 m.</p>
                <p class="mt-1 text-sm text-white/80">tramitedocumentario@crolimacallao.org.pe</p>
                <p class="text-sm text-white/80">+51 982 520 891</p>
            </div>
        </div>
    </aside>
</main>
@endsection





