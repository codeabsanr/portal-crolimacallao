@props([
    'eyebrow' => 'Sección institucional',
    'title' => '',
    'summary' => '',
])

<main id="main">
    <section class="relative overflow-hidden text-white min-h-[320px] md:min-h-[460px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/80 to-primary/70"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_30%,rgba(186,124,0,0.28),transparent_40%)]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-14 relative z-10 w-full">
            <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-5 md:gap-8 items-center">
                <div>
                    <p class="text-xs uppercase tracking-[0.16em] text-white/75 mb-3">
                        <a href="{{ route('home') }}" class="hover:text-brand-gold-light transition-colors">Inicio</a>
                        <span class="mx-1 text-white/50">/</span>
                        <a href="{{ route('institucional') }}" class="hover:text-brand-gold-light transition-colors">Institucional</a>
                    </p>
                    <p class="inline-block text-[11px] md:text-sm uppercase tracking-[0.18em] bg-primary px-3 py-1 text-white font-bold mb-4">{{ $eyebrow }}</p>
                    <h1 class="text-white max-w-4xl text-[clamp(1.7rem,7vw,3.3rem)] leading-[1.06]">{{ $title }}</h1>
                    @if ($summary)
                        <p class="mt-3 md:mt-4 max-w-3xl text-white/90 text-[0.86rem] sm:text-[0.95rem] md:text-lg leading-[1.45]">{{ $summary }}</p>
                    @endif
                    <div class="mt-5 md:mt-6 flex flex-col sm:flex-row gap-2.5 sm:gap-3">
                        <a href="{{ route('institucional.consejo-directivo') }}" class="inst-btn !min-h-0 !py-2.5 !px-4 !text-xs !bg-primary !text-white hover:!bg-primary-dark !w-full sm:!w-auto">Ver consejo directivo</a>
                        <a href="{{ route('institucional.normatividad') }}" class="inst-btn-secondary !min-h-0 !py-2.5 !px-4 !text-xs !border-white !text-white hover:!bg-white/10 !w-full sm:!w-auto">Marco normativo</a>
                    </div>
                </div>
                <aside class="border border-white/25 bg-white/10 backdrop-blur-sm p-3.5 md:p-5 max-w-xl lg:max-w-none">
                    <div class="grid sm:grid-cols-2 gap-3">
                        <div class="bg-white/10 border border-white/10 px-3.5 py-3">
                            <p class="text-xs uppercase tracking-[0.16em] text-white/80">Creación</p>
                            <p class="text-[2rem] sm:text-[2.2rem] md:text-4xl font-black leading-tight text-white mt-1">D.L. 21210</p>
                        </div>
                        <div class="bg-white/10 border border-white/10 px-3.5 py-3">
                            <p class="text-xs uppercase tracking-[0.16em] text-white/80">Ámbito</p>
                            <p class="text-[1.75rem] sm:text-[2rem] md:text-3xl font-black leading-tight text-white mt-1">Lima y Callao</p>
                        </div>
                    </div>
                    <div class="bg-white/10 border border-white/10 px-3.5 py-3 mt-3">
                        <p class="text-xs uppercase tracking-[0.16em] text-white/80">Gestión vigente</p>
                        <p class="text-[1.7rem] sm:text-[1.95rem] md:text-3xl font-black leading-tight text-white mt-1">Consejo Directivo 2025-2028</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="py-8 md:py-12 bg-background-light border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:hidden mb-4">
                <details class="inst-card bg-white">
                    <summary class="list-none cursor-pointer px-4 py-3 flex items-center justify-between font-bold text-primary">
                        <span>Institucional</span>
                        <span class="material-icons-outlined text-base">expand_more</span>
                    </summary>
                    <div class="px-3 pb-3 border-t border-slate-200">
                        <x-institucional-nav :embedded="true" />
                    </div>
                </details>
            </div>
            <div class="grid lg:grid-cols-[280px_minmax(0,1fr)] gap-6 lg:gap-8 items-start">
                <div class="hidden lg:block lg:sticky lg:top-24">
                    <x-institucional-nav />
                </div>
                <div class="space-y-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>

    <section class="pb-8 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-institucional-quick-links compact="true" />
        </div>
    </section>

    <section class="pb-12 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-7 bg-secondary text-white border-secondary">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold">Atención institucional</p>
                        <h2 class="text-2xl font-black mt-1">¿Necesitas orientación sobre esta sección?</h2>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('contacto') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft">Contáctanos</a>
                        <a href="{{ route('tramites') }}" class="inst-btn-secondary !border-white !text-white hover:!bg-white/10">Ir a trámites</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
