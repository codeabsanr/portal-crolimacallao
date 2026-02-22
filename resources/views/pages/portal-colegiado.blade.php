@extends('layouts.public-portal')

@section('title', 'Portal del Colegiado | CRO III Lima-Callao')
@section('meta_description', 'Acceso público al portal del colegiado del CRO III Lima-Callao.')

@section('content')
<main id="main" class="min-h-screen flex flex-col lg:flex-row overflow-hidden">
    <section class="relative w-full lg:w-[60%] min-h-[54vh] lg:min-h-screen border-r border-slate-300/80 bg-[#f8fafc]">
        <div
            class="absolute inset-0 opacity-40 pointer-events-none"
            style="background-image: linear-gradient(#d6dbe4 1px, transparent 1px), linear-gradient(90deg, #d6dbe4 1px, transparent 1px); background-size: 44px 44px;"
            aria-hidden="true"
        ></div>

        <header class="relative z-10 border-b border-slate-300/80 bg-white/90 backdrop-blur px-5 sm:px-8 lg:px-10 py-5">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex h-11 w-11 items-center justify-center rounded-sm bg-primary text-white">
                        <span class="material-icons-outlined text-[22px]">medical_services</span>
                    </span>
                    <div class="leading-tight">
                        <p class="text-xl sm:text-2xl font-black tracking-tight text-secondary">CRO III LIMA-CALLAO</p>
                        <p class="text-xs sm:text-sm uppercase tracking-[0.18em] text-slate-500">Sistema de Gestión Institucional</p>
                    </div>
                </div>
                <p class="inline-flex items-center gap-2 text-sm uppercase tracking-[0.14em] text-slate-500 font-medium">
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                    Sistema operativo
                </p>
            </div>
        </header>

        <div class="relative z-10 mx-auto w-full max-w-5xl px-5 sm:px-8 lg:px-10 py-8 md:py-10 lg:py-12">
            <span class="inline-flex items-center rounded-sm border border-slate-300 bg-slate-100 px-3 py-1 text-xs sm:text-sm font-semibold uppercase tracking-[0.14em] text-slate-600">
                Consulta pública
            </span>

            <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-black leading-[1.03] tracking-tight text-secondary">
                Verificación de<br>Habilidad Profesional
            </h1>

            <p class="mt-5 max-w-3xl text-lg sm:text-xl leading-relaxed text-slate-600">
                Ingrese el número de colegiatura (CMP) o DNI para validar el estado de habilitación en tiempo real.
            </p>

            <form class="mt-8 w-full max-w-4xl rounded-md border border-primary/40 bg-white p-2 shadow-[0_16px_28px_-24px_rgba(15,23,42,0.4)]">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="consulta-cmp" class="sr-only">Buscar por CMP o DNI</label>
                    <div class="flex items-center gap-3 px-4 py-3 sm:py-0 w-full">
                        <span class="material-icons-outlined text-3xl text-slate-400">search</span>
                        <input
                            id="consulta-cmp"
                            type="text"
                            placeholder="Buscar por CMP o DNI..."
                            class="w-full border-none bg-transparent px-0 py-0 text-xl sm:text-2xl font-medium text-secondary placeholder:text-slate-300 focus:ring-0"
                        >
                    </div>
                    <button
                        type="button"
                        class="mt-2 sm:mt-0 sm:ml-2 inline-flex h-14 min-w-[170px] items-center justify-center rounded-sm bg-secondary px-7 text-xl font-black uppercase tracking-wide text-white transition-colors hover:bg-secondary/90"
                    >
                        Consultar
                    </button>
                </div>
            </form>

            <div class="mt-10 grid sm:grid-cols-3 gap-3 sm:gap-4 text-sm sm:text-base">
                <a href="{{ route('tramites') }}" class="rounded-sm border border-slate-300 bg-white px-4 py-3 font-semibold text-slate-600 transition-colors hover:text-primary hover:border-primary/40">
                    Mesa de Partes Virtual
                </a>
                <a href="{{ route('institucional') }}" class="rounded-sm border border-slate-300 bg-white px-4 py-3 font-semibold text-slate-600 transition-colors hover:text-primary hover:border-primary/40">
                    Directorio Institucional
                </a>
                <a href="{{ route('institucional') }}#normativa" class="rounded-sm border border-slate-300 bg-white px-4 py-3 font-semibold text-slate-600 transition-colors hover:text-primary hover:border-primary/40">
                    Normativa Vigente
                </a>
            </div>

            <section class="mt-10 rounded-md border border-slate-300 bg-white p-5 sm:p-6">
                <h2 class="text-lg sm:text-xl font-black text-secondary">Servicios disponibles para colegiadas y colegiados</h2>
                <div class="mt-4 grid sm:grid-cols-2 xl:grid-cols-3 gap-3">
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Trámites en línea</h3>
                        <p class="mt-1 text-sm text-slate-600">Solicitud y seguimiento de procedimientos institucionales.</p>
                    </article>
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Habilidad profesional</h3>
                        <p class="mt-1 text-sm text-slate-600">Consulta de estado y emisión de constancias según registro.</p>
                    </article>
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Pagos y colegiatura</h3>
                        <p class="mt-1 text-sm text-slate-600">Revisión de cuotas, cronogramas y cumplimiento administrativo.</p>
                    </article>
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Capacitación continua</h3>
                        <p class="mt-1 text-sm text-slate-600">Inscripción a cursos, agenda académica y actividades oficiales.</p>
                    </article>
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Mesa de partes digital</h3>
                        <p class="mt-1 text-sm text-slate-600">Presentación documentaria y trazabilidad de expedientes.</p>
                    </article>
                    <article class="rounded-sm border border-slate-200 bg-slate-50 px-4 py-3">
                        <h3 class="font-bold text-secondary">Soporte colegial</h3>
                        <p class="mt-1 text-sm text-slate-600">Atención para acceso, actualización de datos y orientación.</p>
                    </article>
                </div>
            </section>
        </div>

        <footer class="relative z-10 mt-auto border-t border-slate-300 bg-white/95 px-5 sm:px-8 lg:px-10 py-3.5 text-xs sm:text-sm text-slate-500 flex items-center justify-between">
            <span>© {{ date('Y') }} CRO III LIMA-CALLAO</span>
            <span>Portal de acceso público</span>
        </footer>
    </section>

    <aside class="relative w-full lg:w-[40%] min-h-[540px] lg:min-h-screen bg-[linear-gradient(155deg,#660219_0%,#7f0a2d_45%,#3a203f_100%)] text-white">
        <div
            class="absolute inset-0 opacity-10 pointer-events-none"
            style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"
            aria-hidden="true"
        ></div>
        <div class="absolute -right-16 -bottom-20 text-white/10 pointer-events-none" aria-hidden="true">
            <span class="material-icons-outlined text-[260px]">workspace_premium</span>
        </div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-9 lg:px-10 py-10 lg:py-12">
            <div>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight">Acceso Colegiados</h2>
                <p class="mt-3 text-lg sm:text-xl text-white/85 leading-relaxed">
                    Plataforma de gestión para miembros habilitados del Colegio Regional de Obstetras III Lima-Callao.
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="mt-9 space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-xs font-bold uppercase tracking-[0.15em] text-white/80">Número de colegiatura o email</label>
                    <div class="relative">
                        <span class="material-icons-outlined pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">badge</span>
                        <input
                            id="email"
                            type="text"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="username"
                            required
                            class="w-full rounded-sm border border-white/25 bg-white px-10 py-3.5 text-secondary placeholder:text-slate-400 focus:border-brand-gold focus:ring-brand-gold/40"
                            placeholder="Ej. 00000 o usuario@correo.pe"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-200">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block text-xs font-bold uppercase tracking-[0.15em] text-white/80">Contraseña</label>
                    <div class="relative">
                        <span class="material-icons-outlined pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            autocomplete="current-password"
                            required
                            class="w-full rounded-sm border border-white/25 bg-white px-10 py-3.5 text-secondary placeholder:text-slate-400 focus:border-brand-gold focus:ring-brand-gold/40"
                            placeholder="••••••••"
                        >
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-200">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between gap-4 pt-1">
                    <label class="inline-flex items-center gap-2 text-sm text-white/85">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/50 bg-transparent text-brand-gold focus:ring-brand-gold/50">
                        <span>Recordarme</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-white underline decoration-white/40 underline-offset-4 hover:decoration-white">
                            ¿Olvidó su clave?
                        </a>
                    @endif
                </div>

                <button
                    type="submit"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-sm bg-secondary px-6 py-3.5 text-lg font-black uppercase tracking-wide text-white transition-colors hover:bg-black"
                >
                    Ingresar al sistema
                    <span class="material-icons-outlined text-lg">arrow_forward</span>
                </button>
            </form>

            @if (Route::has('register'))
                <div class="mt-8 border-t border-white/20 pt-6">
                    <p class="text-white/80">¿Es su primera vez aquí?</p>
                    <a href="{{ route('register') }}" class="mt-2 inline-flex items-center gap-1 text-base font-bold text-white hover:text-brand-gold-light">
                        Activar cuenta digital
                        <span class="material-icons-outlined text-base">chevron_right</span>
                    </a>
                </div>
            @endif

            <section class="mt-8 rounded-sm border border-white/20 bg-white/10 p-4 backdrop-blur-sm">
                <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-brand-gold-light">¿Qué puedes hacer en el portal?</h3>
                <ul class="mt-3 grid gap-2 text-sm text-white/90">
                    <li>Gestionar trámites personales y revisar estados.</li>
                    <li>Acceder a cursos, calendario y actividades académicas.</li>
                    <li>Consultar pagos, colegiatura y constancias.</li>
                    <li>Enviar documentación por mesa de partes virtual.</li>
                </ul>
            </section>

            <div class="mt-6 rounded-sm border border-white/20 bg-white/10 p-4">
                <p class="text-sm font-bold text-white">Soporte técnico institucional</p>
                <p class="mt-1 text-sm text-white/80">Lunes a viernes: 8:00 a. m. - 5:00 p. m.</p>
                <p class="mt-1 text-sm text-white/80">tramitedocumentario@crolimacallao.org.pe</p>
                <p class="text-sm text-white/80">+51 982 520 891</p>
            </div>
        </div>
    </aside>
</main>
@endsection
