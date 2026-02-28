<div class="fixed top-0 z-50 w-full" style="left: 0; right: 0;">
    <a href="#main"
        class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-[60]">Saltar al
        contenido principal</a>

    <div class="hidden md:block w-full bg-secondary text-white text-xs border-b border-primary/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap items-center justify-between gap-2">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-white/90">
                <span class="inline-flex items-center gap-1.5"><span
                        class="material-icons-outlined text-base">call</span>+51 982 520 891</span>
                <span class="inline-flex items-center gap-1.5 break-all"><span
                        class="material-icons-outlined text-base">mail</span>tramitedocumentario@crolimacallao.org.pe</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('tramites') }}#mesa-partes" class="hover:text-brand-gold-light transition-colors">Mesa
                    de Partes</a>
                <a href="{{ route('admin.intranet') }}"
                    class="hover:text-brand-gold-light transition-colors">Intranet</a>
            </div>
        </div>
    </div>

    <header x-data="{ open: false, activeGroup: null, toggleGroup(group) { this.activeGroup = this.activeGroup === group ? null : group; } }" @keydown.escape.window="open = false; activeGroup = null"
        class="relative w-full bg-surface-light shadow-md">
        {{-- Borde inferior dorado --}}
        <div class="absolute inset-x-0 bottom-0 h-[2px] bg-[linear-gradient(90deg,#D4A62A_0%,#BA7C00_48%,#D4A62A_100%)]"
            aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-16 md:h-20 flex items-center justify-between gap-3 md:gap-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3 min-w-0">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao"
                        class="h-10 w-10 md:h-12 md:w-12 object-contain" />
                    <div class="leading-tight min-w-0">
                        <p class="text-base md:text-lg font-black text-primary truncate">CRO III</p>
                        <p
                            class="text-[11px] md:text-xs tracking-[0.14em] md:tracking-[0.18em] uppercase text-text-main truncate">
                            Lima - Callao</p>
                    </div>
                </a>

                <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('home') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Inicio</a>
                    <a href="{{ route('institucional') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('institucional*') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Institucional</a>
                    <a href="{{ route('tramites') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('tramites*') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Trámites</a>
                    <a href="{{ route('capacitacion') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('capacitacion*') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Capacitación</a>
                    <a href="{{ route('actualidad') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('actualidad*') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Actualidad</a>
                    <a href="{{ route('contacto') }}"
                        class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('contacto') ? 'text-primary border-primary' : 'text-text-main border-transparent hover:text-primary' }}">Contacto</a>
                </nav>

                <div class="hidden md:flex items-center">
                    <a href="{{ auth()->check() ? route('portal.colegiado') : route('login') }}"
                        class="inst-btn-primary !py-2">Portal colegiado</a>
                </div>

                <button @click="open = true; activeGroup = null"
                    class="md:hidden inline-flex items-center justify-center p-2 text-text-main"
                    aria-label="Abrir navegación" aria-controls="mobile-drawer" :aria-expanded="open.toString()"
                    type="button">
                    <span class="material-icons-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <div x-cloak x-show="open" x-transition.opacity.duration.200ms class="fixed inset-0 z-[120] md:hidden">
            <div class="absolute inset-0 bg-black/40" @click="open = false; activeGroup = null" aria-hidden="true"></div>

            <aside id="mobile-drawer" role="dialog" aria-modal="true"
                class="relative z-10 h-[100dvh] w-full bg-primary-dark text-white overflow-y-auto">
                <div class="px-4 py-4 pb-[max(1.25rem,env(safe-area-inset-bottom))]">
                    <div class="flex items-center justify-end mb-4">
                        <button @click="open = false; activeGroup = null" class="text-white p-1"
                            aria-label="Cerrar navegación" type="button">
                            <span class="material-icons-outlined text-4xl">close</span>
                        </button>
                    </div>

                    <nav class="space-y-1 mb-6">
                        <a @click="open = false; activeGroup = null" href="{{ route('home') }}"
                            class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold">
                            <span>Inicio</span><span class="material-icons-outlined">chevron_right</span>
                        </a>

                        <div class="border-y border-white/15 divide-y divide-white/15">
                            <div>
                                <button @click="toggleGroup('institucional')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'institucional').toString()" aria-controls="group-institucional">
                                    <span>Institucional</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'institucional' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-institucional" x-show="activeGroup === 'institucional'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('institucional.quienes-somos') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Quiénes somos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('institucional.consejo-directivo') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Consejo directivo</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('institucional.normatividad') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Normatividad</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('institucional.convenios') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Convenios</a>
                                </div>
                            </div>

                            <div>
                                <button @click="toggleGroup('tramites')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'tramites').toString()" aria-controls="group-tramites">
                                    <span>Trámites</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'tramites' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-tramites" x-show="activeGroup === 'tramites'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('tramites.habilidad') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Habilidad profesional</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('tramites.colegiatura') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Colegiatura</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('tramites.registros') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Registros académicos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('tramites.mesa-partes') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Mesa de partes</a>
                                </div>
                            </div>

                            <div>
                                <button @click="toggleGroup('colegiados')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'colegiados').toString()" aria-controls="group-colegiados">
                                    <span>Colegiados</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'colegiados' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-colegiados" x-show="activeGroup === 'colegiados'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('colegiados.buscador') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Buscador</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('colegiados.listados') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Listados oficiales</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('colegiados.guia') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Guía de uso</a>
                                </div>
                            </div>

                            <div>
                                <button @click="toggleGroup('capacitacion')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'capacitacion').toString()" aria-controls="group-capacitacion">
                                    <span>Capacitación</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'capacitacion' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-capacitacion" x-show="activeGroup === 'capacitacion'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('capacitacion.cursos') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Cursos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('capacitacion.calendario') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Calendario</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('capacitacion.congresos') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Congresos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('capacitacion.aula-virtual') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Aula virtual</a>
                                </div>
                            </div>

                            <div>
                                <button @click="toggleGroup('actualidad')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'actualidad').toString()" aria-controls="group-actualidad">
                                    <span>Actualidad</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'actualidad' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-actualidad" x-show="activeGroup === 'actualidad'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('actualidad.noticias') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Noticias</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('actualidad.eventos') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Eventos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('actualidad.comunicados') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Comunicados</a>
                                </div>
                            </div>

                            <div>
                                <button @click="toggleGroup('normativa')" type="button"
                                    class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold"
                                    :aria-expanded="(activeGroup === 'normativa').toString()" aria-controls="group-normativa">
                                    <span>Normativa</span>
                                    <span class="material-icons-outlined"
                                        x-text="activeGroup === 'normativa' ? 'expand_less' : 'expand_more'"></span>
                                </button>
                                <div id="group-normativa" x-show="activeGroup === 'normativa'" x-transition.opacity.duration.150ms
                                    class="pb-2 pl-4 pr-1 space-y-1">
                                    <a @click="open = false; activeGroup = null" href="{{ route('normativa.leyes') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Leyes</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('normativa.reglamentos') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Reglamentos</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('normativa.guias') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Guías</a>
                                    <a @click="open = false; activeGroup = null" href="{{ route('normativa.repositorio') }}" class="inline-flex min-h-[44px] w-full items-center text-white/90">Repositorio</a>
                                </div>
                            </div>
                        </div>

                        <a @click="open = false; activeGroup = null" href="{{ route('contacto') }}"
                            class="inline-flex min-h-[44px] w-full items-center justify-between py-3 text-white font-semibold">
                            <span>Contacto</span><span class="material-icons-outlined">chevron_right</span>
                        </a>
                    </nav>

                    <div class="mt-6 space-y-3">
                        <a @click="open = false; activeGroup = null" href="{{ route('tramites') }}#mesa-partes"
                            class="flex items-center justify-between border border-white/50 p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-outlined">forward_to_inbox</span>
                                <span class="font-semibold">Mesa de Partes Virtual</span>
                            </div>
                            <span class="material-icons-outlined bg-white text-primary-dark p-1">arrow_forward</span>
                        </a>
                        <a @click="open = false; activeGroup = null"
                            href="{{ auth()->check() ? route('portal.colegiado') : route('login') }}"
                            class="flex items-center justify-between border border-white/50 p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-outlined">person</span>
                                <span class="font-semibold">Portal del Colegiado</span>
                            </div>
                            <span class="material-icons-outlined bg-white text-primary-dark p-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </header>
</div>

<div class="h-16 md:h-[7rem]" aria-hidden="true"></div>


