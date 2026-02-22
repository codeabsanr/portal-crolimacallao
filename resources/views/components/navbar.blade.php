<a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-[60]">Saltar al contenido principal</a>

<div class="hidden md:block bg-secondary text-white text-xs border-b border-primary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap items-center justify-between gap-2">
        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-white/90">
            <span class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-base">call</span>+51 982 520 891</span>
            <span class="inline-flex items-center gap-1.5 break-all"><span class="material-icons-outlined text-base">mail</span>tramitedocumentario@crolimacallao.org.pe</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('tramites') }}#mesa-partes" class="hover:text-brand-gold-light transition-colors">Mesa de Partes</a>
            <a href="{{ url('admin') }}" class="hover:text-brand-gold-light transition-colors">Intranet</a>
        </div>
    </div>
</div>

<header x-data="{ open: false, panel: 'main' }" @keydown.escape.window="open = false; panel = 'main'" class="sticky top-0 z-50 bg-surface-light border-b border-slate-200 shadow-md" style="position: sticky; top: 0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="h-16 md:h-20 flex items-center justify-between gap-3 md:gap-4">
            <a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3 min-w-0">
                <img src="{{ asset('build/assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-10 w-10 md:h-12 md:w-12 object-contain" />
                <div class="leading-tight min-w-0">
                    <p class="text-base md:text-lg font-black text-primary truncate">CRO III</p>
                    <p class="text-[11px] md:text-xs tracking-[0.14em] md:tracking-[0.18em] uppercase text-slate-600 truncate">Lima - Callao</p>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('home') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Inicio</a>
                <a href="{{ route('institucional') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('institucional*') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Institucional</a>
                <a href="{{ route('tramites') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('tramites') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Trámites</a>
                <a href="{{ route('capacitacion') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('capacitacion') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Cursos</a>
                <a href="{{ route('actualidad') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('actualidad') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Noticias</a>
                <a href="{{ route('contacto') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('contacto') ? 'text-primary border-primary' : 'text-slate-700 border-transparent hover:text-primary' }}">Contacto</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a href="{{ url('admin') }}" class="inst-btn-primary !py-2">Colegiatura</a>
            </div>

            <button @click="open = true; panel = 'main'" class="md:hidden inline-flex items-center justify-center p-2 text-slate-700" aria-label="Abrir navegación" aria-controls="mobile-drawer" :aria-expanded="open.toString()" type="button">
                <span class="material-icons-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <div x-cloak x-show="open" x-transition.opacity.duration.200ms class="fixed inset-0 z-[120] md:hidden">
        <div class="absolute inset-0 bg-black/40" @click="open = false; panel = 'main'" aria-hidden="true"></div>

        <aside id="mobile-drawer" role="dialog" aria-modal="true" class="relative z-10 h-[100dvh] w-full bg-primary-dark text-white overflow-y-auto">
            <div class="px-4 py-4 pb-[max(1.25rem,env(safe-area-inset-bottom))]">
                <div class="flex items-center justify-end mb-4">
                    <button @click="open = false; panel = 'main'" class="text-white p-1" aria-label="Cerrar navegación" type="button">
                        <span class="material-icons-outlined text-4xl">close</span>
                    </button>
                </div>

                <div x-show="panel === 'main'" x-transition.opacity>
                    <nav class="space-y-1 mb-6">
                        <a @click="open = false; panel = 'main'" href="{{ route('home') }}" class="flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Inicio</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('institucional') }}" class="flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Institucional</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}" class="flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Trámites</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <button @click="panel = 'servicios'" type="button" class="w-full flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Servicios</span><span class="material-icons-outlined">chevron_right</span>
                        </button>
                        <a @click="open = false; panel = 'main'" href="{{ route('actualidad') }}" class="flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Noticias</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('contacto') }}" class="flex items-center justify-between py-3.5 text-white font-semibold">
                            <span>Contacto</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                    </nav>

                    <div class="mt-6 space-y-3">
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}#mesa-partes" class="flex items-center justify-between border border-white/50 p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-outlined">forward_to_inbox</span>
                                <span class="font-semibold">Mesa de Partes Virtual</span>
                            </div>
                            <span class="material-icons-outlined bg-white text-primary-dark p-1">arrow_forward</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ url('admin') }}" class="flex items-center justify-between border border-white/50 p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-outlined">person</span>
                                <span class="font-semibold">Portal del Colegiado</span>
                            </div>
                            <span class="material-icons-outlined bg-white text-primary-dark p-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <div x-show="panel === 'servicios'" x-transition.opacity>
                    <div class="bg-white/10 px-3 py-3 mb-4 flex items-center justify-between">
                        <button @click="panel = 'main'" class="inline-flex items-center gap-1 text-white" type="button">
                            <span class="material-icons-outlined">arrow_back</span>
                            <span class="sr-only">Volver</span>
                        </button>
                        <span class="font-semibold">Servicios</span>
                    </div>

                    <nav class="border-y border-white/15 divide-y divide-white/15">
                        <a @click="open = false; panel = 'main'" href="{{ route('colegiados') }}" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Busca Obstetra</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('normativa') }}" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Repositorio Normativo</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('capacitacion') }}" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Capacitación</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <button @click="panel = 'tramites_servicios'" type="button" class="w-full flex items-center justify-between py-4 text-white font-semibold">
                            <span>Trámites especializados</span><span class="material-icons-outlined">chevron_right</span>
                        </button>
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}#colegiatura" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Colegiatura</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                    </nav>
                </div>

                <div x-show="panel === 'tramites_servicios'" x-transition.opacity>
                    <div class="bg-white/10 px-3 py-3 mb-4 flex items-center justify-between">
                        <button @click="panel = 'servicios'" class="inline-flex items-center gap-1 text-white" type="button">
                            <span class="material-icons-outlined">arrow_back</span>
                            <span class="sr-only">Volver</span>
                        </button>
                        <span class="font-semibold">Trámites especializados</span>
                    </div>

                    <nav class="border-y border-white/15 divide-y divide-white/15">
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}#habilidad" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Habilidad profesional</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}#registros" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Registros académicos</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                        <a @click="open = false; panel = 'main'" href="{{ route('tramites') }}#mesa-partes" class="flex items-center justify-between py-4 text-white font-semibold">
                            <span>Mesa de partes</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                    </nav>
                </div>
            </div>
        </aside>
    </div>
</header>
