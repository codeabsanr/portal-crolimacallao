@extends('layouts.public-portal')

@section('title', 'Portal del Colegiado | CRO III Lima-Callao')
@section('meta_description', 'Portal publico de acceso y consulta del Colegio Regional de Obstetras III Lima-Callao.')

@section('content')
<main id="main" class="md:h-screen md:overflow-hidden flex flex-col md:flex-row">
    <section class="relative flex flex-col w-full md:w-[60%] min-h-[56vh] md:h-screen md:overflow-y-auto bg-background-light border-r border-slate-300/80">
        <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image: linear-gradient(#d6dbe4 1px, transparent 1px), linear-gradient(90deg, #d6dbe4 1px, transparent 1px); background-size: 44px 44px;"></div>

        <header class="relative z-10 border-b border-slate-300/80 bg-white/90 backdrop-blur px-6 lg:px-10 py-5">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                    <div class="leading-tight">
                        <p class="text-2xl font-black tracking-tight text-secondary">CRO III LIMA-CALLAO</p>
                        <p class="text-xs uppercase tracking-[0.18em] text-slate-500">Sistema de Gestion Institucional</p>
                    </div>
                </div>
                <p class="inline-flex items-center gap-2 text-sm uppercase tracking-[0.14em] text-slate-500">
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                    Sistema operativo
                </p>
            </div>
        </header>

        <div class="relative z-10 mx-auto flex-1 w-full max-w-4xl px-5 sm:px-6 lg:px-10 py-8 md:py-12">
            <span class="inline-flex items-center rounded-sm border border-slate-300 bg-slate-100 px-3 py-1 text-sm font-semibold uppercase tracking-[0.14em] text-slate-600">Consulta publica</span>
            <h1 class="mt-5 text-4xl lg:text-5xl font-black leading-[1.06] tracking-tight text-secondary">Verificacion de habilidad profesional</h1>
            <p class="mt-4 max-w-2xl text-base md:text-lg text-slate-600">Ingrese el numero de colegiatura (COP) o DNI para validar el estado de habilitacion en tiempo real.</p>

            <form id="consulta-form" class="mt-8 w-full rounded-md border border-primary/45 bg-white p-2">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="consulta-publica" class="sr-only">Buscar por COP o DNI</label>
                    <div class="flex items-center gap-3 px-3 sm:px-4 py-3 sm:py-0 w-full">
                        <span class="material-icons-outlined text-3xl text-slate-400">search</span>
                        <input id="consulta-publica" type="text" class="w-full border-none bg-transparent text-xl sm:text-2xl font-medium tracking-wide text-secondary placeholder:text-slate-300 focus:ring-0" placeholder="Buscar por COP o DNI...">
                    </div>
                    <button id="consulta-submit" type="button" class="mt-2 sm:mt-0 sm:ml-2 inst-btn-primary !h-12 !min-w-[170px] !rounded-sm !px-6 !text-sm">
                        Consultar
                    </button>
                </div>
            </form>

            <section id="consulta-resultado" class="hidden mt-8 space-y-4">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-xl md:text-2xl font-black text-secondary">Resultado de consulta</h2>
                    <span id="resultado-cop-badge" class="text-xs uppercase tracking-[0.14em] text-slate-500 font-bold">COP 12874</span>
                </div>

                <article class="inst-card p-4 md:p-6 border border-primary/25">
                    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 pb-4 mb-5">
                        <p class="text-sm text-slate-600">Estado de habilitacion en tiempo real</p>
                        <a id="resultado-perfil-link" href="{{ route('obstetras.perfil', ['cop' => '12874']) }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">
                            Ver perfil completo
                        </a>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-[1fr_180px] lg:items-start">
                        <div>
                            <h3 id="resultado-nombre" class="text-3xl md:text-4xl font-black leading-tight text-secondary">Obst. Maria Fernanda Quispe Ramirez</h3>
                            <div class="mt-4 inline-flex items-center rounded-sm bg-emerald-600 px-4 py-3 text-white shadow-inst">
                                <div>
                                    <p id="resultado-habilitado" class="text-3xl md:text-4xl font-black leading-none tracking-tight">HABILITADO</p>
                                    <p id="resultado-situacion" class="text-sm uppercase tracking-[0.12em] font-bold text-white/90 mt-1">Activo</p>
                                </div>
                            </div>
                        </div>

                        <img id="resultado-foto" src="https://i.pravatar.cc/260?img=47" alt="Foto de colegiada simulada" class="h-44 w-44 object-cover border-2 border-primary/30">
                    </div>

                    <div class="mt-5 grid sm:grid-cols-3 gap-3">
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Carrera</p>
                            <p id="resultado-carrera" class="mt-1 text-2xl font-black text-slate-900">Obstetricia</p>
                        </div>
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">COP</p>
                            <p id="resultado-cop" class="mt-1 text-2xl font-black text-slate-900">12874</p>
                        </div>
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Especialidad</p>
                            <p id="resultado-especialidad" class="mt-1 text-xl font-black text-slate-900">Salud Materno Perinatal</p>
                        </div>
                    </div>

                    <div class="mt-4 grid sm:grid-cols-2 gap-3">
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Situacion</p>
                            <p id="resultado-situacion-resumen" class="mt-1 text-2xl font-black text-slate-900">Activo</p>
                        </div>
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-xs uppercase tracking-[0.12em] text-slate-500 font-bold">Habilitacion</p>
                            <p id="resultado-habilitado-resumen" class="mt-1 text-2xl font-black text-emerald-700">HABILITADO</p>
                        </div>
                    </div>

                    <div class="mt-4 grid sm:grid-cols-2 gap-3">
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-sm text-slate-600">Cursos de especializacion</p>
                            <p id="resultado-curso" class="text-2xl font-black text-slate-900 mt-1">Emergencias Obstetricas 2024</p>
                        </div>
                        <div class="border border-slate-200 bg-white p-4">
                            <p class="text-sm text-slate-600">Ponencias realizadas</p>
                            <p id="resultado-ponencia" class="text-2xl font-black text-slate-900 mt-1">Lactancia y puerperio seguro</p>
                        </div>
                    </div>
                </article>
            </section>

            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm md:text-base text-slate-600">
                <a href="{{ route('obstetras.index') }}" class="hover:text-primary">Busca tu obstetra</a>
                <a href="{{ route('bolsa.trabajo') }}" class="hover:text-primary">Bolsa de trabajo</a>
                <a href="{{ route('tramites') }}#mesa-partes" class="hover:text-primary">Mesa de Partes Virtual</a>
                <a href="{{ route('institucional') }}" class="hover:text-primary">Directorio Institucional</a>
                <a href="{{ route('institucional') }}#normativa" class="hover:text-primary">Normativa Vigente</a>
            </div>
        </div>

        <footer class="relative z-10 mt-auto border-t border-slate-300 bg-white/95 px-6 lg:px-10 py-3.5 text-sm text-slate-500 flex items-center justify-between">
            <span>© {{ date('Y') }} CRO III LIMA-CALLAO</span>
            <span>v2.4.0-release</span>
        </footer>
    </section>

    <aside class="relative w-full md:w-[40%] min-h-[500px] md:h-screen md:overflow-y-auto bg-inst-hero text-white">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-8 lg:px-10 py-8 lg:py-12">
            <div class="flex items-center gap-3 mb-5">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                <p class="text-xs uppercase tracking-[0.16em] font-bold text-white/90">CRO III LIMA-CALLAO</p>
            </div>
            <h2 class="text-4xl lg:text-5xl font-black tracking-tight">Acceso Colegiados</h2>
            <p class="mt-3 text-base lg:text-lg text-white/85">Accede para gestionar tus tramites, constancias y servicios del Portal del Colegiado.</p>

            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-4">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-xs font-bold uppercase tracking-[0.15em] text-white/80">Codigo COP o email</label>
                    <div class="relative">
                        <span class="material-icons-outlined pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">badge</span>
                        <input id="email" name="email" type="text" value="{{ old('email') }}" required autocomplete="username" class="w-full rounded-sm border border-white/25 bg-white px-10 py-3 text-secondary placeholder:text-slate-400 focus:border-brand-gold focus:ring-brand-gold/30" placeholder="00000 o usuario@correo.pe">
                    </div>
                </div>
                <div>
                    <label for="password" class="mb-2 block text-xs font-bold uppercase tracking-[0.15em] text-white/80">Contrasena</label>
                    <div class="relative">
                        <span class="material-icons-outlined pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                        <input id="password" name="password" type="password" required autocomplete="current-password" class="w-full rounded-sm border border-white/25 bg-white px-10 py-3 text-secondary placeholder:text-slate-400 focus:border-brand-gold focus:ring-brand-gold/30" placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between gap-4 text-sm">
                    <label class="inline-flex items-center gap-2 text-white/85">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/40 bg-transparent text-brand-gold focus:ring-brand-gold/40">
                        <span>Recordarme</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-white hover:text-brand-gold-light">Olvido su clave?</a>
                    @endif
                </div>

                <button type="submit" class="inst-btn !w-full !bg-brand-gold !text-white !py-3.5 !text-sm md:!text-base !tracking-[0.08em] hover:!bg-brand-gold-light">
                    Ingresar al sistema
                </button>
            </form>

            <div class="mt-8 border-t border-white/15 pt-6">
                <p class="text-white/70">Es su primera vez aqui?</p>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mt-2 inline-flex items-center gap-1 text-base font-bold text-white hover:text-brand-gold-light">
                        Activar cuenta digital
                        <span class="material-icons-outlined text-base">chevron_right</span>
                    </a>
                @endif
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('consulta-form');
        const submit = document.getElementById('consulta-submit');
        const input = document.getElementById('consulta-publica');
        const result = document.getElementById('consulta-resultado');
        const badge = document.getElementById('resultado-cop-badge');
        const nombre = document.getElementById('resultado-nombre');
        const habilitado = document.getElementById('resultado-habilitado');
        const situacion = document.getElementById('resultado-situacion');
        const foto = document.getElementById('resultado-foto');
        const carrera = document.getElementById('resultado-carrera');
        const cop = document.getElementById('resultado-cop');
        const especialidad = document.getElementById('resultado-especialidad');
        const curso = document.getElementById('resultado-curso');
        const ponencia = document.getElementById('resultado-ponencia');
        const situacionResumen = document.getElementById('resultado-situacion-resumen');
        const habilitadoResumen = document.getElementById('resultado-habilitado-resumen');
        const perfilLink = document.getElementById('resultado-perfil-link');
        const perfilBase = @json(route('obstetras.perfil', ['cop' => '__COP__']));

        const mockByCode = {
            '12874': {
                nombre: 'Obst. Maria Fernanda Quispe Ramirez',
                habilitado: 'HABILITADO',
                situacion: 'Activo',
                foto: 'https://i.pravatar.cc/260?img=47',
                carrera: 'Obstetricia',
                cop: '12874',
                especialidad: 'Salud Materno Perinatal',
                curso: 'Emergencias Obstetricas 2024',
                ponencia: 'Lactancia y puerperio seguro'
            },
            '30951': {
                nombre: 'Obst. Ana Lucia Ramos Gutierrez',
                habilitado: 'NO HABILITADO',
                situacion: 'No activo',
                foto: 'https://i.pravatar.cc/260?img=5',
                carrera: 'Obstetricia',
                cop: '30951',
                especialidad: 'Gestion de Servicios de Salud',
                curso: 'Auditoria clinica y calidad',
                ponencia: 'Sin registro de ponencias'
            }
        };

        const renderResult = function (data) {
            nombre.textContent = data.nombre;
            habilitado.textContent = data.habilitado;
            situacion.textContent = data.situacion;
            foto.src = data.foto;
            cop.textContent = data.cop;
            badge.textContent = `COP ${data.cop}`;
            carrera.textContent = data.carrera;
            especialidad.textContent = data.especialidad;
            curso.textContent = data.curso;
            ponencia.textContent = data.ponencia;
            situacionResumen.textContent = data.situacion;
            habilitadoResumen.textContent = data.habilitado;
            perfilLink.href = perfilBase.replace('__COP__', data.cop);

            if (data.habilitado === 'HABILITADO') {
                habilitado.parentElement.parentElement.classList.remove('bg-rose-700');
                habilitado.parentElement.parentElement.classList.add('bg-emerald-600');
                habilitadoResumen.classList.remove('text-rose-700');
                habilitadoResumen.classList.add('text-emerald-700');
            } else {
                habilitado.parentElement.parentElement.classList.remove('bg-emerald-600');
                habilitado.parentElement.parentElement.classList.add('bg-rose-700');
                habilitadoResumen.classList.remove('text-emerald-700');
                habilitadoResumen.classList.add('text-rose-700');
            }

            result.classList.remove('hidden');
            result.scrollIntoView({ behavior: 'smooth', block: 'start' });
        };

        const onSubmit = function (event) {
            event.preventDefault();
            const term = (input.value || '').trim();
            const found = mockByCode[term] || mockByCode['12874'];
            renderResult(found);
        };

        submit.addEventListener('click', onSubmit);
        form.addEventListener('submit', onSubmit);
    });
</script>
@endsection
