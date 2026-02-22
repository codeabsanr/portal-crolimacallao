<a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-[60]">Saltar al contenido principal</a>

<div class="bg-secondary text-white text-xs md:text-sm border-b border-primary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap items-center justify-between gap-3">
        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-white/90">
            <span class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-base">call</span>+51 982 520 891</span>
            <span class="inline-flex items-center gap-1.5"><span class="material-icons-outlined text-base">mail</span>tramitedocumentario@crolimacallao.org.pe</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('tramites') }}#mesa-partes" class="hover:text-brand-gold-light transition-colors">Mesa de Partes</a>
            <a href="{{ url('admin') }}" class="hover:text-brand-gold-light transition-colors">Intranet</a>
        </div>
    </div>
</div>

<header x-data="{ open: false }" class="sticky top-0 z-50 bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur border-b border-slate-200 dark:border-primary/30 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="h-20 flex items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 min-w-0">
                <img src="{{ asset('build/assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-12 w-12 object-contain" />
                <div class="leading-tight min-w-0">
                    <p class="text-lg font-black text-primary dark:text-brand-gold truncate">CRO III</p>
                    <p class="text-xs tracking-[0.18em] uppercase text-slate-600 dark:text-slate-300 truncate">Lima - Callao</p>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('home') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Inicio</a>
                <a href="{{ route('institucional') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('institucional') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Nosotros</a>
                <a href="{{ route('tramites') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('tramites') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Trámites</a>
                <a href="{{ route('capacitacion') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('capacitacion') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Cursos</a>
                <a href="{{ route('actualidad') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('actualidad') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Noticias</a>
                <a href="{{ route('contacto') }}" class="px-3 py-2 text-sm font-semibold border-b-2 transition-colors {{ request()->routeIs('contacto') ? 'text-primary dark:text-brand-gold border-primary dark:border-brand-gold' : 'text-slate-700 dark:text-slate-200 border-transparent hover:text-primary dark:hover:text-brand-gold' }}">Contacto</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a href="{{ url('admin') }}" class="inst-btn-primary !py-2.5">Colegiatura</a>
            </div>

            <button @click="open = true" class="md:hidden inline-flex items-center justify-center p-2 text-slate-700 dark:text-slate-200" aria-label="Abrir menú" type="button">
                <span class="material-icons-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <div x-show="open" style="display: none;" x-transition:enter="transition ease-out duration-250" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-[70] md:hidden bg-secondary/95 backdrop-blur">
        <div class="h-full w-full overflow-y-auto px-6 py-6">
            <div class="flex items-center justify-between mb-8">
                <span class="text-white text-lg font-bold">Menú</span>
                <button @click="open = false" class="text-white p-2" aria-label="Cerrar menú" type="button">
                    <span class="material-icons-outlined text-3xl">close</span>
                </button>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('home') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Inicio</a>
                <a href="{{ route('institucional') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Nosotros</a>
                <a href="{{ route('tramites') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Trámites</a>
                <a href="{{ route('colegiados') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Colegiados</a>
                <a href="{{ route('capacitacion') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Cursos</a>
                <a href="{{ route('actualidad') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Noticias</a>
                <a href="{{ route('normativa') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Normativa</a>
                <a href="{{ route('contacto') }}" class="block rounded-md px-4 py-3 text-white font-semibold hover:bg-white/10">Contacto</a>
            </nav>

            <div class="mt-8 space-y-3">
                <a href="{{ route('tramites') }}#mesa-partes" class="inst-btn-secondary !w-full !justify-between !border-white !text-white hover:!bg-white/10">Mesa de Partes <span class="material-icons-outlined">arrow_forward</span></a>
                <a href="{{ url('admin') }}" class="inst-btn-primary !w-full !justify-between">Portal del Colegiado <span class="material-icons-outlined">login</span></a>
            </div>
        </div>
    </div>
</header>
