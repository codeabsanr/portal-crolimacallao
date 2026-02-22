@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Reseña Histórica"
        summary="Evolución de la obstetricia en el Perú y consolidación del Colegio de Obstetras como institución profesional.">

        <article class="inst-card overflow-hidden border border-slate-300">
            <div class="grid lg:grid-cols-[1.1fr_1fr]">
                <div class="p-6 md:p-8">
                    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Memoria institucional</p>
                    <h2 class="text-2xl font-black text-slate-900 mb-4">Orígenes y consolidación</h2>
                    <p class="text-slate-700 mb-3">La historia de la obstetricia peruana refleja una evolución científica y social sostenida, con aportes decisivos a la salud materna y reproductiva.</p>
                    <p class="text-slate-700">El Colegio de Obstetras del Perú, creado por Decreto Ley N.º 21210, consolidó la representación profesional y estableció bases éticas y normativas para la práctica moderna.</p>
                </div>
                <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Reseña histórica institucional" class="h-full w-full object-cover min-h-[260px]" />
            </div>
        </article>

        <article class="inst-card p-6 md:p-8">
            <div class="flex flex-wrap items-end justify-between gap-3 mb-6">
                <h3 class="text-2xl font-black text-slate-900">Línea de tiempo institucional</h3>
                <span class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Hitos históricos</span>
            </div>

            <div class="relative">
                <div class="absolute left-[18px] top-0 bottom-0 w-px bg-primary/35"></div>

                <div class="space-y-5">
                    <article class="relative pl-12">
                        <span class="absolute left-[10px] top-2 h-4 w-4 rounded-full bg-primary ring-4 ring-white"></span>
                        <div class="inst-card p-4 border-l-2 border-l-primary bg-slate-50 hover:bg-white transition-colors">
                            <p class="text-xs font-black uppercase tracking-[0.16em] text-primary">Prehispánico</p>
                            <p class="text-slate-700 mt-2">Registros de prácticas obstétricas tradicionales orientadas al cuidado materno en diversas culturas.</p>
                        </div>
                    </article>

                    <article class="relative pl-12">
                        <span class="absolute left-[10px] top-2 h-4 w-4 rounded-full bg-primary ring-4 ring-white"></span>
                        <div class="inst-card p-4 border-l-2 border-l-primary bg-slate-50 hover:bg-white transition-colors">
                            <p class="text-xs font-black uppercase tracking-[0.16em] text-primary">1826</p>
                            <p class="text-slate-700 mt-2">Creación de la Casa de la Maternidad y Escuela de Partos, institución pionera en formación obstétrica.</p>
                        </div>
                    </article>

                    <article class="relative pl-12">
                        <span class="absolute left-[10px] top-2 h-4 w-4 rounded-full bg-primary ring-4 ring-white"></span>
                        <div class="inst-card p-4 border-l-2 border-l-primary bg-slate-50 hover:bg-white transition-colors">
                            <p class="text-xs font-black uppercase tracking-[0.16em] text-primary">Siglo XIX-XX</p>
                            <p class="text-slate-700 mt-2">Aportes de Benita Paulina Cadeau de Fessel en la profesionalización científica de la obstetricia.</p>
                        </div>
                    </article>

                    <article class="relative pl-12">
                        <span class="absolute left-[10px] top-2 h-4 w-4 rounded-full bg-primary ring-4 ring-white"></span>
                        <div class="inst-card p-4 border-l-2 border-l-primary bg-slate-50 hover:bg-white transition-colors">
                            <p class="text-xs font-black uppercase tracking-[0.16em] text-primary">1975</p>
                            <p class="text-slate-700 mt-2">Creación del Colegio de Obstetras del Perú mediante Decreto Ley N.º 21210, hito de institucionalización gremial.</p>
                        </div>
                    </article>

                    <article class="relative pl-12">
                        <span class="absolute left-[10px] top-2 h-4 w-4 rounded-full bg-brand-gold ring-4 ring-white"></span>
                        <div class="inst-card p-4 border-l-2 border-l-brand-gold bg-brand-gold-soft/35 hover:bg-brand-gold-soft/55 transition-colors">
                            <p class="text-xs font-black uppercase tracking-[0.16em] text-primary">Actualidad</p>
                            <p class="text-slate-700 mt-2">Fortalecimiento regional del ejercicio profesional en Lima y Callao con enfoque ético y técnico.</p>
                        </div>
                    </article>
                </div>
            </div>
        </article>

        <div class="grid md:grid-cols-3 gap-4">
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-slate-900">Legado académico</p>
                <p class="text-sm text-slate-700 mt-2">Promoción de actualización científica y fortalecimiento de capacidades profesionales.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-slate-900">Legado gremial</p>
                <p class="text-sm text-slate-700 mt-2">Defensa de derechos y consolidación de la representación institucional obstétrica.</p>
            </article>
            <article class="inst-card p-5 border-t-2 border-t-primary hover:shadow-hard transition-all">
                <p class="font-bold text-slate-900">Legado social</p>
                <p class="text-sm text-slate-700 mt-2">Contribución sostenida a la salud sexual y reproductiva en la población.</p>
            </article>
        </div>
    </x-institucional-page-shell>
@endsection
