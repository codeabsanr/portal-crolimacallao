<div class="bg-secondary text-white py-2 px-4 text-sm hidden md:block">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="flex items-center"><span class="material-icons-outlined text-base mr-1">phone</span> +51 982
                520 891</span>
            <span class="flex items-center"><span class="material-icons-outlined text-base mr-1">email</span>
                tramitedocumentario@crolimacallao.org.pe</span>
        </div>
        <div class="flex items-center space-x-4">
            <a class="hover:underline" href="{{ url('admin') }}">Intranet / Mi Cuenta</a>
            <a class="hover:underline" href="{{ route('tramites') }}#mesa-partes">Mesa de Partes</a>
        </div>
    </div>
</div>
<a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-50">Saltar al
    contenido principal</a>
<header x-data="{ open: false }"
    class="bg-surface-light dark:bg-surface-dark shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap lg:flex-nowrap justify-between items-center min-h-[5rem] py-2 gap-4">
            <div class="flex-shrink-0 flex items-center max-w-[30%] lg:max-w-none">
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img src="{{ asset('build/assets/img/logo-text.png') }}"
                        alt="Colegio Regional de Obstetras III Lima-Callao"
                        class="h-12 lg:h-16 w-auto object-contain transition-transform group-hover:scale-[1.02]">
                </a>
            </div>
            <nav class="hidden md:flex flex-wrap gap-x-6 gap-y-2 lg:gap-x-8 items-center justify-end flex-grow">
                <a class="{{ request()->routeIs('home') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('home') }}">Inicio</a>
                <a class="{{ request()->routeIs('institucional') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('institucional') }}">Institución</a>
                <a class="{{ request()->routeIs('tramites') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('tramites') }}">Trámites</a>
                <a class="{{ request()->is('colegiados*') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ url('colegiados') }}">Colegiados</a>
                <a class="{{ request()->is('capacitacion*') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ url('capacitacion') }}">Capacitación</a>
                <a class="{{ request()->routeIs('actualidad') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('actualidad') }}">Actualidad</a>
                <a class="{{ request()->routeIs('normativa') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('normativa') }}">Normativa</a>
                <a class="{{ request()->routeIs('contacto') ? 'text-primary font-bold border-b-2 border-primary' : 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary border-b-2 border-transparent' }} text-base font-medium px-2 py-2 lg:px-3 text-center transition-colors whitespace-nowrap"
                    href="{{ route('contacto') }}">Contacto</a>
            </nav>
            <!-- Botón Mi Cuenta removido de aquí por redundancia con el topbar -->
            <!-- Menú Móvil Botón -->
            <div class="flex items-center md:hidden">
                <button @click="open = true" id="mobile-menu-btn"
                    class="text-slate-500 dark:text-slate-300 hover:text-slate-700 focus:outline-none p-2"
                    type="button">
                    <span class="sr-only">Abrir menú</span>
                    <span class="material-icons-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú Móvil Full-screen -->
    <div id="mobile-menu-container" x-show="open" style="display: none;"
        x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-[100] bg-primary md:hidden flex flex-col h-screen overflow-y-auto">
        <div class="flex justify-end p-6">
            <button @click="open = false" id="close-mobile-menu"
                class="text-white hover:text-gray-200 focus:outline-none p-2" aria-label="Cerrar menú">
                <span class="material-icons-outlined text-4xl">close</span>
            </button>
        </div>

        <nav class="flex flex-col px-6 pb-6 space-y-1 flex-grow mt-2">
            <a href="{{ route('home') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Inicio
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ route('institucional') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Institución
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ route('tramites') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Trámites
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ url('colegiados') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Colegiados
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ url('capacitacion') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Capacitación
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ route('actualidad') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Actualidad
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ route('normativa') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Normativa
                <span class="material-icons-outlined text-lg">chevron_right</span></a>
            <a href="{{ route('contacto') }}"
                class="flex justify-between items-center text-white text-base font-medium py-4 border-b border-white/20 hover:text-gray-200 transition-colors">Contacto
                <span class="material-icons-outlined text-lg">chevron_right</span></a>

            <div class="pt-8 space-y-4">
                <h3 class="text-white/70 text-sm uppercase tracking-wider mb-4">Accesos Rápidos</h3>
                <a href="{{ url('admin') }}"
                    class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl">person</span>
                        <span class="font-bold text-lg">Mi Cuenta</span>
                    </div>
                    <span class="material-icons-outlined border border-white p-1 rounded-sm">arrow_forward</span>
                </a>
                <a href="{{ route('tramites') }}#mesa-partes"
                    class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl">folder_open</span>
                        <span class="font-bold text-lg">Mesa de Partes</span>
                    </div>
                    <span class="material-icons-outlined border border-white p-1 rounded-sm">arrow_forward</span>
                </a>
                <a href="https://crolimacallao.org.pe/BBB/libro.php" target="_blank"
                    class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl">menu_book</span>
                        <span class="font-bold text-lg">Libro de Reclamaciones</span>
                    </div>
                    <span class="material-icons-outlined border border-white p-1 rounded-sm">launch</span>
                </a>
            </div>
        </nav>
    </div>
</header>