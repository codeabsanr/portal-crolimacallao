@props(['heroHighlights' => []])

<section class="relative overflow-hidden border-b border-slate-200 bg-slate-100">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Gestion actual CRO III Lima-Callao" class="h-full w-full object-cover object-[center_18%] opacity-70" />
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(248,250,252,0.86)_0%,rgba(248,250,252,0.8)_28%,rgba(248,250,252,0.66)_62%,rgba(248,250,252,0.9)_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_16%_24%,rgba(102,2,25,0.18),transparent_36%),radial-gradient(circle_at_84%_73%,rgba(186,124,0,0.14),transparent_38%)]"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
        <div class="grid lg:grid-cols-[0.93fr_1.07fr] gap-6 lg:gap-0 items-stretch">
            <div class="relative min-h-[520px] flex items-end p-5 md:p-7">
                <div class="w-full max-w-2xl rounded-2xl border border-white/50 bg-white/80 backdrop-blur-sm p-5 sm:p-7 shadow-[0_30px_56px_-36px_rgba(15,23,42,0.6)]">
                    <div class="inline-flex items-center gap-2 px-3 py-1 mb-4 text-xs font-bold tracking-wider text-primary uppercase bg-red-100 rounded-md">
                        <span class="material-icons-outlined text-sm">verified</span>
                        Portal institucional accesible
                    </div>
                    <h1 class="mb-5 leading-[1.04] text-[2.85rem] sm:text-[3.75rem] xl:text-[4.25rem]">
                        Servicios y trámites para la<br class="hidden lg:block" />
                        <span class="text-primary">Comunidad Obstétrica</span>
                    </h1>
                    <p class="text-slate-700 mb-7 max-w-2xl text-[1.05rem]">
                        Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites administrativos de manera clara y segura.
                    </p>
                    <div class="inst-card p-2 max-w-2xl flex flex-col sm:flex-row gap-2 border border-slate-200 shadow-[0_14px_28px_-16px_rgba(15,23,42,0.6)]">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons-outlined text-slate-400">search</span>
                            </div>
                            <input class="inst-input !border-transparent !shadow-none !py-3 !pl-12" placeholder="¿Qué trámite desea realizar hoy?" type="text" />
                        </div>
                        <button class="inst-btn-primary !px-6 w-full sm:w-auto">Buscar</button>
                    </div>
                    <p class="mt-4 text-sm text-slate-600">
                        Ejemplos: <a class="underline hover:text-primary" href="{{ route('tramites') }}#colegiatura">Colegiatura</a>,
                        <a class="underline hover:text-primary" href="{{ route('tramites') }}#habilidad">Habilidad profesional</a>,
                        <a class="underline hover:text-primary" href="{{ route('tramites') }}#registros">Certificados</a>
                    </p>
                </div>
            </div>
            <x-home.hero-highlight-panel :hero-highlights="$heroHighlights" panel-class="relative lg:-mr-8 xl:-mr-10 lg:-translate-y-3 shadow-[0_28px_60px_-34px_rgba(15,23,42,0.52)]" />
        </div>
    </div>
</section>
