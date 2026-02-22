@props(['heroHighlights' => []])

<section class="relative overflow-hidden border-b border-slate-200">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Gestion actual CRO III Lima-Callao" class="h-full w-full object-cover object-[center_20%]" />
        <div class="absolute inset-0 bg-[linear-gradient(102deg,rgba(15,23,42,0.68)_0%,rgba(15,23,42,0.58)_41%,rgba(15,23,42,0.16)_68%,rgba(15,23,42,0.4)_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_28%,rgba(102,2,25,0.44),transparent_40%),radial-gradient(circle_at_84%_70%,rgba(186,124,0,0.2),transparent_38%)]"></div>
        <div class="absolute inset-0 shadow-[inset_0_-85px_120px_-65px_rgba(15,23,42,0.62)]"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
        <div class="grid lg:grid-cols-[0.88fr_1.12fr] gap-6 lg:gap-0 items-stretch">
            <div class="relative min-h-[520px] flex items-center p-5 md:p-7">
                <div class="w-full max-w-2xl rounded-2xl border border-white/20 bg-slate-900/35 backdrop-blur-sm p-5 sm:p-7 shadow-[0_24px_60px_-36px_rgba(2,6,23,0.75)]">
                    <div class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-primary uppercase bg-red-100 rounded-md">
                        Portal institucional accesible
                    </div>
                    <h1 class="mb-5 leading-[1.04] text-white text-[2.85rem] sm:text-[3.75rem] xl:text-[4.25rem]">
                        Servicios y trámites para la<br class="hidden lg:block" />
                        <span class="text-amber-200">Comunidad Obstétrica</span>
                    </h1>
                    <p class="text-slate-100/95 mb-7 max-w-2xl text-[1.05rem]">
                        Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites administrativos de manera clara y segura.
                    </p>
                    <div class="inst-card p-2 max-w-2xl flex flex-col sm:flex-row gap-2 border border-white/30 bg-white/95 shadow-[0_14px_28px_-16px_rgba(2,6,23,0.85)]">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons-outlined text-slate-400">search</span>
                            </div>
                            <input class="inst-input !border-transparent !shadow-none !py-3 !pl-12" placeholder="¿Qué trámite desea realizar hoy?" type="text" />
                        </div>
                        <button class="inst-btn-primary !px-6 w-full sm:w-auto">Buscar</button>
                    </div>
                    <p class="mt-4 text-sm text-slate-100/90">
                        Ejemplos: <a class="underline hover:text-amber-200" href="{{ route('tramites') }}#colegiatura">Colegiatura</a>,
                        <a class="underline hover:text-amber-200" href="{{ route('tramites') }}#habilidad">Habilidad profesional</a>,
                        <a class="underline hover:text-amber-200" href="{{ route('tramites') }}#registros">Certificados</a>
                    </p>
                </div>
            </div>
            <x-home.hero-highlight-panel :hero-highlights="$heroHighlights" panel-class="relative lg:-mr-12 xl:-mr-16 lg:translate-y-6 shadow-[0_34px_70px_-38px_rgba(2,6,23,0.8)]" />
        </div>
    </div>
</section>
