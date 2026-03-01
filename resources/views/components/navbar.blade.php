<div x-data="{
    hideTopStrip: false,
    updateTopStripState() {
        this.hideTopStrip = window.scrollY > 24;
    }
}" x-init="updateTopStripState()"
    @scroll.window.throttle.50ms="updateTopStripState()">
    <div class="fixed top-0 z-50 w-full" style="left: 0; right: 0;" data-inst-navbar-fixed>
    <a href="#main"
        class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-[60]">Saltar al
        contenido principal</a>

    <div class="hidden md:block w-full bg-secondary text-white text-xs border-b border-primary/20 overflow-hidden transition-all duration-300 ease-out"
        :class="hideTopStrip ? 'max-h-0 opacity-0 border-transparent pointer-events-none' : 'max-h-16 opacity-100'">
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

    @php
        $mobileMenuGroups = [
            'institucional' => [
                'title' => 'Institucional',
                'nodes' => [
                    [
                        'key' => 'autoridades',
                        'icon' => 'account_balance',
                        'label' => 'Autoridades',
                        'children' => [
                            ['key' => 'autoridades-quienes', 'label' => 'Quiénes somos', 'href' => route('institucional.quienes-somos')],
                            ['key' => 'autoridades-consejo', 'label' => 'Consejo directivo', 'href' => route('institucional.consejo-directivo')],
                            ['key' => 'autoridades-resena', 'label' => 'Reseña histórica', 'href' => route('institucional.resena-historica')],
                        ],
                    ],
                    [
                        'key' => 'normas',
                        'icon' => 'gavel',
                        'label' => 'Normas y convenios',
                        'children' => [
                            ['key' => 'normas-normatividad', 'label' => 'Normatividad', 'href' => route('institucional.normatividad')],
                            ['key' => 'normas-compendio', 'label' => 'Compendio de normas', 'href' => route('institucional.compendio-de-normas')],
                            ['key' => 'normas-convenios', 'label' => 'Convenios', 'href' => route('institucional.convenios')],
                        ],
                    ],
                ],
            ],
            'tramites' => [
                'title' => 'Trámites',
                'nodes' => [
                    [
                        'key' => 'tramites-prof',
                        'icon' => 'verified_user',
                        'label' => 'Trámites profesionales',
                        'children' => [
                            ['key' => 'tram-prof-habilidad', 'label' => 'Habilidad profesional', 'href' => route('tramites.habilidad')],
                            ['key' => 'tram-prof-colegiatura', 'label' => 'Colegiatura', 'href' => route('tramites.colegiatura')],
                            [
                                'key' => 'tram-prof-documentos',
                                'label' => 'Documentación',
                                'children' => [
                                    ['key' => 'tram-prof-registros', 'label' => 'Registros académicos', 'href' => route('tramites.registros')],
                                    ['key' => 'tram-prof-carne', 'label' => 'Carné institucional', 'href' => route('tramites.carne')],
                                ],
                            ],
                        ],
                    ],
                    [
                        'key' => 'tramites-digital',
                        'icon' => 'description',
                        'label' => 'Trámite digital',
                        'children' => [
                            ['key' => 'tram-dig-mesa', 'label' => 'Mesa de partes', 'href' => route('tramites.mesa-partes')],
                            ['key' => 'tram-dig-faq', 'label' => 'Preguntas frecuentes', 'href' => route('tramites.faq')],
                        ],
                    ],
                ],
            ],
            'colegiados' => [
                'title' => 'Colegiados',
                'nodes' => [
                    [
                        'key' => 'colegiados-consulta',
                        'icon' => 'manage_search',
                        'label' => 'Consultas',
                        'children' => [
                            ['key' => 'col-cons-buscador', 'label' => 'Buscador de obstetra', 'href' => route('colegiados.buscador')],
                            ['key' => 'col-cons-listados', 'label' => 'Listados oficiales', 'href' => route('colegiados.listados')],
                            ['key' => 'col-cons-guia', 'label' => 'Guía de uso', 'href' => route('colegiados.guia')],
                        ],
                    ],
                ],
            ],
            'capacitacion' => [
                'title' => 'Capacitación',
                'nodes' => [
                    [
                        'key' => 'capacitacion-oferta',
                        'icon' => 'school',
                        'label' => 'Oferta académica',
                        'children' => [
                            ['key' => 'cap-oferta-cursos', 'label' => 'Cursos', 'href' => route('capacitacion.cursos')],
                            ['key' => 'cap-oferta-congresos', 'label' => 'Congresos', 'href' => route('capacitacion.congresos')],
                            ['key' => 'cap-oferta-aula', 'label' => 'Aula virtual', 'href' => route('capacitacion.aula-virtual')],
                        ],
                    ],
                    [
                        'key' => 'capacitacion-agenda',
                        'icon' => 'event',
                        'label' => 'Agenda',
                        'children' => [
                            ['key' => 'cap-agenda-calendario', 'label' => 'Calendario', 'href' => route('capacitacion.calendario')],
                            ['key' => 'cap-agenda-archivo', 'label' => 'Archivo', 'href' => route('capacitacion.archivo')],
                        ],
                    ],
                ],
            ],
            'actualidad' => [
                'title' => 'Actualidad',
                'nodes' => [
                    [
                        'key' => 'actualidad-boletin',
                        'icon' => 'feed',
                        'label' => 'Boletín',
                        'children' => [
                            ['key' => 'act-bol-noticias', 'label' => 'Noticias', 'href' => route('actualidad.noticias')],
                            ['key' => 'act-bol-comunicados', 'label' => 'Comunicados', 'href' => route('actualidad.comunicados')],
                            ['key' => 'act-bol-eventos', 'label' => 'Eventos', 'href' => route('actualidad.eventos')],
                        ],
                    ],
                ],
            ],
            'normativa' => [
                'title' => 'Normativa',
                'nodes' => [
                    [
                        'key' => 'normativa-marco',
                        'icon' => 'balance',
                        'label' => 'Marco legal',
                        'children' => [
                            ['key' => 'nor-marco-leyes', 'label' => 'Leyes', 'href' => route('normativa.leyes')],
                            ['key' => 'nor-marco-regl', 'label' => 'Reglamentos', 'href' => route('normativa.reglamentos')],
                            ['key' => 'nor-marco-guias', 'label' => 'Guías', 'href' => route('normativa.guias')],
                            ['key' => 'nor-marco-repo', 'label' => 'Repositorio', 'href' => route('normativa.repositorio')],
                        ],
                    ],
                ],
            ],
        ];

        $mobileMenuOrder = ['institucional', 'tramites', 'colegiados', 'capacitacion', 'actualidad', 'normativa'];
    @endphp

    <header
        x-data="{
            open: false,
            panel: 'main',
            panelTitle: '',
            nodeOpen: {},
            groups: @js($mobileMenuGroups),
            openMenu() {
                this.open = true;
                this.panel = 'main';
                this.panelTitle = '';
                this.nodeOpen = {};
            },
            closeMenu() {
                this.open = false;
                this.panel = 'main';
                this.panelTitle = '';
                this.nodeOpen = {};
            },
            goPanel(key) {
                this.panel = key;
                this.panelTitle = this.groups[key]?.title ?? '';
                this.nodeOpen = {};
            },
            goMain() {
                this.panel = 'main';
                this.panelTitle = '';
                this.nodeOpen = {};
            },
            toggleNode(nodeKey) {
                this.nodeOpen[nodeKey] = !this.nodeOpen[nodeKey];
            },
            isNodeOpen(nodeKey) {
                return !!this.nodeOpen[nodeKey];
            }
        }"
        @keydown.escape.window="closeMenu()"
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

                <button @click="openMenu()"
                    class="md:hidden inline-flex items-center justify-center p-2 text-text-main"
                    aria-label="Abrir navegación" aria-controls="mobile-drawer" :aria-expanded="open.toString()"
                    type="button">
                    <span class="material-icons-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <div x-cloak x-show="open" x-transition.opacity.duration.200ms class="fixed inset-0 z-[120] md:hidden">
            <div class="absolute inset-0 bg-black/55" @click="closeMenu()" aria-hidden="true"></div>

            <aside id="mobile-drawer" role="dialog" aria-modal="true"
                class="relative z-10 h-[100dvh] w-full bg-primary-dark text-white overflow-y-auto">
                <div class="min-h-full pb-[max(1.25rem,env(safe-area-inset-bottom))]">
                    <div class="sticky top-0 z-20 bg-primary-dark border-b border-brand-gold/45 px-4 py-4">
                        <div class="flex items-center justify-end">
                            <button @click="closeMenu()" class="inline-flex min-h-[44px] items-center text-white"
                                aria-label="Cerrar navegación" type="button">
                                <span class="material-icons-outlined text-5xl leading-none">close</span>
                            </button>
                        </div>
                    </div>

                    <div class="px-4 pt-3">
                        <template x-if="panel === 'main'">
                            <div>
                                <nav class="border-y border-white/20" aria-label="Navegación principal móvil">
                                    <a @click="closeMenu()" href="{{ route('home') }}"
                                        class="inline-flex min-h-[54px] w-full items-center justify-between border-b border-white/20 px-1 text-[1.35rem] font-semibold tracking-tight">
                                        <span>Inicio</span>
                                        <span class="material-icons-outlined text-[1.65rem] leading-none">chevron_right</span>
                                    </a>
                                    @foreach ($mobileMenuOrder as $groupKey)
                                        <button @click="goPanel('{{ $groupKey }}')" type="button"
                                            class="inline-flex min-h-[54px] w-full items-center justify-between border-b border-white/20 px-1 text-[1.35rem] font-semibold tracking-tight"
                                            aria-label="Abrir submenú de {{ $mobileMenuGroups[$groupKey]['title'] }}">
                                            <span>{{ $mobileMenuGroups[$groupKey]['title'] }}</span>
                                            <span class="material-icons-outlined text-[1.65rem] leading-none">chevron_right</span>
                                        </button>
                                    @endforeach
                                    <a @click="closeMenu()" href="{{ route('contacto') }}"
                                        class="inline-flex min-h-[54px] w-full items-center justify-between px-1 text-[1.35rem] font-semibold tracking-tight">
                                        <span>Contacto</span>
                                        <span class="material-icons-outlined text-[1.65rem] leading-none">chevron_right</span>
                                    </a>
                                </nav>

                                <div class="mt-6 space-y-3">
                                    <a @click="closeMenu()" href="{{ route('tramites') }}#mesa-partes"
                                        class="flex min-h-[56px] items-center justify-between border border-brand-gold/75 bg-primary px-4">
                                        <div class="flex items-center gap-3">
                                            <span class="material-icons-outlined text-2xl">forward_to_inbox</span>
                                            <span class="text-[1.25rem] font-semibold">Mesa de Partes Virtual</span>
                                        </div>
                                        <span class="material-icons-outlined border border-brand-gold bg-brand-gold text-primary-dark px-1.5 py-1.5">arrow_forward</span>
                                    </a>
                                    <a @click="closeMenu()"
                                        href="{{ auth()->check() ? route('portal.colegiado') : route('login') }}"
                                        class="flex min-h-[56px] items-center justify-between border border-brand-gold/75 bg-primary px-4">
                                        <div class="flex items-center gap-3">
                                            <span class="material-icons-outlined text-2xl">person</span>
                                            <span class="text-[1.25rem] font-semibold">Portal del Colegiado</span>
                                        </div>
                                        <span class="material-icons-outlined border border-brand-gold bg-brand-gold text-primary-dark px-1.5 py-1.5">arrow_forward</span>
                                    </a>
                                    <a @click="closeMenu()" href="{{ route('colegiados.buscador') }}"
                                        class="flex min-h-[56px] items-center justify-between border border-brand-gold/75 bg-primary px-4">
                                        <div class="flex items-center gap-3">
                                            <span class="material-icons-outlined text-2xl">manage_search</span>
                                            <span class="text-[1.25rem] font-semibold">Buscador de obstetra</span>
                                        </div>
                                        <span class="material-icons-outlined border border-brand-gold bg-brand-gold text-primary-dark px-1.5 py-1.5">arrow_forward</span>
                                    </a>
                                </div>

                                <div class="mt-6">
                                    <p class="mb-2 text-lg font-medium text-white/90">Accesos directos</p>
                                    <div class="grid grid-cols-2 gap-1.5">
                                        <a @click="closeMenu()"
                                            href="{{ auth()->check() ? route('portal.colegiado') : route('login') }}"
                                            class="inline-flex min-h-[54px] items-center justify-between border border-white/20 bg-primary-soft px-3 text-base font-semibold">
                                            <span>Portal</span>
                                            <span class="material-icons-outlined text-xl">arrow_forward</span>
                                        </a>
                                        <a @click="closeMenu()" href="{{ route('tramites') }}#mesa-partes"
                                            class="inline-flex min-h-[54px] items-center justify-between border border-white/20 bg-primary-soft px-3 text-base font-semibold">
                                            <span>Mesa Partes</span>
                                            <span class="material-icons-outlined text-xl">arrow_forward</span>
                                        </a>
                                        <a @click="closeMenu()" href="{{ route('colegiados.listados') }}"
                                            class="inline-flex min-h-[54px] items-center justify-between border border-white/20 bg-primary-soft px-3 text-base font-semibold">
                                            <span>Listados</span>
                                            <span class="material-icons-outlined text-xl">arrow_forward</span>
                                        </a>
                                        <a @click="closeMenu()" href="{{ route('contacto') }}"
                                            class="inline-flex min-h-[54px] items-center justify-between border border-white/20 bg-primary-soft px-3 text-base font-semibold">
                                            <span>Contacto</span>
                                            <span class="material-icons-outlined text-xl">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <template x-if="panel !== 'main'">
                            <div>
                                <div class="mb-3 grid grid-cols-[auto_1fr] items-center gap-2 bg-primary px-3 py-3 border border-white/15">
                                    <button @click="goMain()" type="button"
                                        class="inline-flex min-h-[44px] items-center justify-center text-white"
                                        aria-label="Volver al menú principal">
                                        <span class="material-icons-outlined text-4xl leading-none">arrow_back</span>
                                    </button>
                                    <p class="text-right text-[1.5rem] font-semibold tracking-tight" x-text="panelTitle"></p>
                                </div>

                                <nav class="border-y border-white/20" :aria-label="`Submenú de ${panelTitle}`">
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['institucional']['nodes']" level="1" x-show="panel === 'institucional'" />
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['tramites']['nodes']" level="1" x-show="panel === 'tramites'" />
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['colegiados']['nodes']" level="1" x-show="panel === 'colegiados'" />
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['capacitacion']['nodes']" level="1" x-show="panel === 'capacitacion'" />
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['actualidad']['nodes']" level="1" x-show="panel === 'actualidad'" />
                                    <x-mobile-menu-nodes :nodes="$mobileMenuGroups['normativa']['nodes']" level="1" x-show="panel === 'normativa'" />
                                </nav>
                            </div>
                        </template>
                    </div>
                </div>
            </aside>
        </div>
    </header>
    </div>

    <div class="h-16 transition-all duration-300 ease-out" :class="hideTopStrip ? 'md:h-20' : 'md:h-[7rem]'"
        aria-hidden="true"></div>
</div>


