@props(['heroHighlights' => []])

<section class="relative overflow-hidden border-b border-slate-200">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Gestion actual CRO III Lima-Callao" class="h-full w-full object-cover object-[center_25%]" />
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(248,250,252,0.56)_0%,rgba(248,250,252,0.34)_35%,rgba(248,250,252,0.12)_60%,rgba(248,250,252,0.34)_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_24%,rgba(102,2,25,0.1),transparent_34%),radial-gradient(circle_at_90%_75%,rgba(186,124,0,0.11),transparent_40%)]"></div>
        <div class="absolute inset-0 shadow-[inset_0_50px_90px_-50px_rgba(15,23,42,0.35),inset_0_-80px_110px_-60px_rgba(102,2,25,0.3)]"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16 relative z-10">
        <div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-7 lg:gap-0 items-stretch">
            <div class="relative flex flex-col justify-end min-h-[520px] p-5 md:p-7">
                <div class="absolute inset-2 md:inset-3 z-0 rounded-2xl bg-white/72 backdrop-blur-[1.5px] shadow-[0_18px_40px_-28px_rgba(15,23,42,0.55)]"></div>
                <div class="relative z-10 px-2 md:px-3">
                    <div class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-primary uppercase bg-red-100 rounded-md">
                        Portal institucional accesible
                    </div>
                    <h1 class="mb-6 leading-[1.04] text-[2.9rem] sm:text-[3.8rem] xl:text-[4.35rem]">
                        Servicios y trámites para la<br class="hidden lg:block" />
                        <span class="text-primary">Comunidad Obstétrica</span>
                    </h1>
                    <p class="text-slate-700 mb-8 max-w-2xl text-[1.08rem]">
                        Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites administrativos de manera clara y segura.
                    </p>
                    <div class="inst-card p-2 max-w-2xl flex flex-col sm:flex-row gap-2 border border-slate-200 shadow-[0_10px_25px_-16px_rgba(15,23,42,0.45)]">
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
            <x-home.hero-highlight-panel :hero-highlights="$heroHighlights" panel-class="relative lg:-mr-10 xl:-mr-14 lg:translate-y-2 shadow-[0_30px_60px_-32px_rgba(15,23,42,0.45)]" />
        </div>
    </div>
</section>
