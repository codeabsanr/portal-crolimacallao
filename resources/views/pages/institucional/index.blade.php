@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-white border-b border-slate-200 sticky top-16 md:top-20 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
                <nav aria-label="Navegación interna institucional" class="overflow-x-auto">
                    <ul class="flex items-center gap-2 min-w-max">
                        <li><a href="#resumen" class="inline-flex items-center gap-1.5 border border-primary/30 text-primary bg-primary/5 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary/10 transition-colors">Resumen</a></li>
                        <li><a href="#perfil" class="inline-flex items-center gap-1.5 border border-primary/20 text-text-main bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary-mist transition-colors">Perfil</a></li>
                        <li><a href="#objetivos" class="inline-flex items-center gap-1.5 border border-primary/20 text-text-main bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary-mist transition-colors">Objetivos</a></li>
                        <li><a href="#consejo" class="inline-flex items-center gap-1.5 border border-primary/20 text-text-main bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary-mist transition-colors">Consejo</a></li>
                        <li><a href="#normativa" class="inline-flex items-center gap-1.5 border border-primary/20 text-text-main bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary-mist transition-colors">Normativa</a></li>
                        <li><a href="#enlaces" class="inline-flex items-center gap-1.5 border border-primary/20 text-text-main bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.11em] hover:bg-primary-mist transition-colors">Enlaces</a></li>
                    </ul>
                </nav>
            </div>
        </section>

        <section id="resumen" class="scroll-mt-28 py-8 md:py-10 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4">
                    <a href="{{ route('institucional.quienes-somos') }}" class="inst-card p-5 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                        <p class="text-xs uppercase tracking-[0.14em] text-text-main">Identidad</p>
                        <p class="font-black text-text-main mt-2">Quiénes Somos</p>
                        <p class="text-sm text-text-main mt-2">Misión, visión y propósito institucional.</p>
                    </a>
                    <a href="{{ route('institucional.consejo-directivo') }}" class="inst-card p-5 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                        <p class="text-xs uppercase tracking-[0.14em] text-text-main">Gobierno</p>
                        <p class="font-black text-text-main mt-2">Consejo Directivo</p>
                        <p class="text-sm text-text-main mt-2">Estructura de liderazgo y cargos.</p>
                    </a>
                    <a href="{{ route('institucional.normatividad') }}" class="inst-card p-5 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                        <p class="text-xs uppercase tracking-[0.14em] text-text-main">Legal</p>
                        <p class="font-black text-text-main mt-2">Normatividad</p>
                        <p class="text-sm text-text-main mt-2">Leyes, reglamentos y documentos vigentes.</p>
                    </a>
                    <a href="{{ route('institucional.convenios') }}" class="inst-card p-5 border border-primary/30 border-l-4 border-l-primary bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)] hover:border-primary hover:shadow-[0_16px_30px_-24px_rgba(102,2,25,0.55)] transition-[border-color,box-shadow,background-color] duration-300">
                        <p class="text-xs uppercase tracking-[0.14em] text-text-main">Cooperación</p>
                        <p class="font-black text-text-main mt-2">Convenios</p>
                        <p class="text-sm text-text-main mt-2">Alianzas y beneficios para colegiadas.</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="perfil" class="scroll-mt-28 bg-background-light py-12 md:py-14 border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-8 md:gap-10 items-center">
                    <div class="relative">
                        <div class="inst-card overflow-hidden border border-slate-200">
                            <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Representación institucional del CRO III Lima-Callao" class="w-full min-h-[300px] md:min-h-[380px] object-cover">
                        </div>
                        <div class="absolute -right-2 bottom-6 bg-brand-gold text-secondary px-4 py-3 shadow-inst">
                            <p class="text-xl md:text-2xl font-black leading-none">29+ años</p>
                            <p class="text-[11px] font-semibold uppercase tracking-[0.15em] mt-1">Trayectoria institucional</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Perfil institucional</p>
                        <h2 class="text-text-main mt-2">Trayectoria, representación y servicio</h2>
                        <div class="space-y-3 mt-4 text-text-main text-sm md:text-base">
                            <p>Somos una institución autónoma de derecho público interno que representa el ejercicio de la obstetricia en Lima y Callao.</p>
                            <p>Promovemos la ética profesional, la actualización científica continua y la protección de los derechos de nuestras colegiadas.</p>
                            <p>Nuestro enfoque combina liderazgo gremial, transparencia documental y trabajo articulado con el sistema de salud.</p>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4 mt-6">
                            <div class="inst-card p-4 border-primary/20">
                                <p class="text-xs uppercase tracking-[0.14em] text-text-main">Misión</p>
                                <p class="text-sm text-text-main mt-2">Representar e integrar a las obstetras, velando por un ejercicio profesional legal, ético y humano.</p>
                            </div>
                            <div class="inst-card p-4 border-primary/20">
                                <p class="text-xs uppercase tracking-[0.14em] text-text-main">Visión</p>
                                <p class="text-sm text-text-main mt-2">Consolidar una gestión líder y democrática reconocida por su excelencia institucional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="objetivos" class="scroll-mt-28 bg-white py-12 md:py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Líneas de gestión</p>
                    <h2 class="text-text-main mt-2">Objetivos estratégicos institucionales</h2>
                    <p class="text-text-main mt-3 text-sm md:text-base">Acciones priorizadas para fortalecer la colegiatura, la calidad profesional y la atención en salud de la mujer.</p>
                </div>
                <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-5 mt-8">
                    <article class="inst-card p-5 border-t-4 border-t-primary">
                        <span class="material-icons-outlined text-primary text-2xl">school</span>
                        <h3 class="text-lg font-black text-text-main mt-3">Formación continua</h3>
                        <p class="text-sm text-text-main mt-2">Programas de actualización y especialización basados en evidencia.</p>
                    </article>
                    <article class="inst-card p-5 border-t-4 border-t-primary">
                        <span class="material-icons-outlined text-primary text-2xl">gavel</span>
                        <h3 class="text-lg font-black text-text-main mt-3">Ética y vigilancia</h3>
                        <p class="text-sm text-text-main mt-2">Supervisión del cumplimiento del marco legal y deontológico.</p>
                    </article>
                    <article class="inst-card p-5 border-t-4 border-t-primary">
                        <span class="material-icons-outlined text-primary text-2xl">diversity_3</span>
                        <h3 class="text-lg font-black text-text-main mt-3">Bienestar colegiado</h3>
                        <p class="text-sm text-text-main mt-2">Impulso de servicios y beneficios para el desarrollo profesional.</p>
                    </article>
                    <article class="inst-card p-5 border-t-4 border-t-primary">
                        <span class="material-icons-outlined text-primary text-2xl">verified</span>
                        <h3 class="text-lg font-black text-text-main mt-3">Calidad asistencial</h3>
                        <p class="text-sm text-text-main mt-2">Promoción de buenas prácticas en salud sexual y reproductiva.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="consejo" class="scroll-mt-28 bg-background-light py-12 md:py-14 border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-6 md:gap-8">
                    <article class="inst-card overflow-hidden border-primary/30">
                        <div class="bg-primary text-white px-6 py-4">
                            <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold">Consejo Regional 2025-2028</p>
                            <h2 class="text-2xl md:text-3xl font-black mt-1 text-white">Liderazgo institucional vigente</h2>
                        </div>
                        <div class="grid md:grid-cols-[220px_1fr]">
                            <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Consejo regional CRO III Lima-Callao" class="w-full h-full min-h-[220px] object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-black text-text-main">Obst. Jenny Elenisse Zavaleta Luján</h3>
                                <p class="text-sm font-semibold text-primary mt-1">Decana Regional</p>
                                <p class="text-sm text-text-main italic mt-3">"Comprometida con la defensa de derechos profesionales y la mejora continua del ejercicio obstétrico."</p>
                                <a href="{{ route('institucional.consejo-directivo') }}" class="inst-btn-primary mt-5 !py-2.5 !px-4 !text-xs">Ver equipo completo</a>
                            </div>
                        </div>
                    </article>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <article class="inst-card p-4 border-primary/20 hover:shadow-hard transition-all"><p class="text-[11px] uppercase tracking-[0.13em] text-text-main">Nivel directivo</p><p class="font-bold text-text-main mt-1">Obst. Alicia Isla López</p><p class="text-xs text-primary font-semibold uppercase tracking-[0.12em] mt-1">Vicedecana</p></article>
                        <article class="inst-card p-4 border-primary/20 hover:shadow-hard transition-all"><p class="text-[11px] uppercase tracking-[0.13em] text-text-main">Administrativo</p><p class="font-bold text-text-main mt-1">Obst. Sara Carolina Zamora Chávez</p><p class="text-xs text-primary font-semibold uppercase tracking-[0.12em] mt-1">Secretaria Regional Administrativa</p></article>
                        <article class="inst-card p-4 border-primary/20 hover:shadow-hard transition-all"><p class="text-[11px] uppercase tracking-[0.13em] text-text-main">Administrativo</p><p class="font-bold text-text-main mt-1">Obst. Miriam Letona Gonzáles</p><p class="text-xs text-primary font-semibold uppercase tracking-[0.12em] mt-1">Secretaria de Asuntos Internos</p></article>
                        <article class="inst-card p-4 border-primary/20 hover:shadow-hard transition-all"><p class="text-[11px] uppercase tracking-[0.13em] text-text-main">Administrativo</p><p class="font-bold text-text-main mt-1">Obst. Paulia Emiliana Alhuay Puca</p><p class="text-xs text-primary font-semibold uppercase tracking-[0.12em] mt-1">Secretaria de Asuntos Internos (Adj.)</p></article>
                        <article class="inst-card p-4 border-primary/20 sm:col-span-2 hover:shadow-hard transition-all"><p class="text-[11px] uppercase tracking-[0.13em] text-text-main">Gestión económica</p><p class="font-bold text-text-main mt-1">Obst. Elizabeth Soria Peña</p><p class="text-xs text-primary font-semibold uppercase tracking-[0.12em] mt-1">Tesorera</p></article>
                    </div>
                </div>
            </div>
        </section>

        <section id="normativa" class="scroll-mt-28 bg-white py-12 md:py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-6 md:gap-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Normativa institucional</p>
                        <h2 class="text-text-main mt-2">Marco legal y deontológico</h2>
                        <p class="text-text-main mt-3 text-sm md:text-base">Base documental que sustenta la organización y el ejercicio profesional del obstetra en el Perú.</p>
                        <div class="space-y-3 mt-5">
                            <article class="inst-card p-4 border-l-4 border-l-primary">
                                <h3 class="text-base font-black text-text-main">Ley N.° 27853</h3>
                                <p class="text-sm text-text-main mt-1">Regula el trabajo del obstetra y sus responsabilidades profesionales.</p>
                            </article>
                            <article class="inst-card p-4 border-l-4 border-l-primary">
                                <h3 class="text-base font-black text-text-main">D.L. N.° 21210</h3>
                                <p class="text-sm text-text-main mt-1">Crea el Colegio de Obstetras del Perú y define su naturaleza jurídica.</p>
                            </article>
                            <article class="inst-card p-4 border-l-4 border-l-primary">
                                <h3 class="text-base font-black text-text-main">Estatuto y Reglamentos</h3>
                                <p class="text-sm text-text-main mt-1">Norman la organización regional, procesos y funciones institucionales.</p>
                            </article>
                        </div>
                    </div>
                    <aside class="inst-card p-6 md:p-7 bg-primary/5 border-primary/30">
                        <span class="material-icons-outlined text-primary text-4xl">library_books</span>
                        <h3 class="text-2xl font-black text-text-main mt-3">Repositorio documental</h3>
                        <p class="text-sm text-text-main mt-3">Consulta leyes, reglamentos, resoluciones y compendios desde una sola sección institucional.</p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ route('institucional.normatividad') }}" class="inst-btn-primary !py-2.5 !px-4 !text-xs">Ver normatividad</a>
                            <a href="{{ route('institucional.compendio-de-normas') }}" class="inst-btn-secondary !py-2.5 !px-4 !text-xs">Compendio</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section id="enlaces" class="scroll-mt-28 bg-secondary text-white py-12 md:py-14">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold">Participación institucional</p>
                <h2 class="text-white mt-2">Accede a nuestras subpáginas institucionales</h2>
                <p class="text-white/80 mt-3 text-sm md:text-base">Navega por historia, normativa, símbolos, convenios y documentos de gestión.</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 mt-7 text-left">
                    <a href="{{ route('institucional.resena-historica') }}" class="border border-white/25 bg-white/5 p-4 hover:bg-white/10 transition-colors"><p class="font-semibold">Reseña Histórica</p></a>
                    <a href="{{ route('institucional.simbolos') }}" class="border border-white/25 bg-white/5 p-4 hover:bg-white/10 transition-colors"><p class="font-semibold">Símbolos</p></a>
                    <a href="{{ route('institucional.reglamento') }}" class="border border-white/25 bg-white/5 p-4 hover:bg-white/10 transition-colors"><p class="font-semibold">Reglamento</p></a>
                    <a href="{{ route('institucional.convenios') }}" class="border border-white/25 bg-white/5 p-4 hover:bg-white/10 transition-colors"><p class="font-semibold">Convenios</p></a>
                </div>
                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <a href="{{ route('tramites') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft">¿Cómo colegiarme?</a>
                    <a href="{{ route('contacto') }}" class="inst-btn !border-white !text-white hover:!bg-white/10">Contáctanos</a>
                </div>
            </div>
        </section>
    </main>
@endsection




