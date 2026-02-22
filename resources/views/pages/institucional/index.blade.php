@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative min-h-[360px] md:min-h-[500px] flex items-center overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/82 to-secondary/25"></div>
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
                <span class="inline-flex items-center px-3 py-1 bg-primary text-white text-[11px] font-bold uppercase tracking-[0.16em] mb-4">Nuestra institución</span>
                <h1 class="text-white max-w-2xl leading-[1.02]">Liderazgo y Excelencia en Obstetricia</h1>
                <p class="mt-4 text-white/90 max-w-xl text-sm md:text-base">
                    Representamos y fortalecemos el desarrollo profesional de las obstetras en Lima y Callao, garantizando
                    ejercicio ético y humano para la salud de la mujer y su familia.
                </p>
                <div class="mt-6">
                    <a href="{{ route('institucional.quienes-somos') }}" class="inst-btn-primary !py-2.5 !px-5 !text-xs">Conoce nuestra historia</a>
                </div>
            </div>
        </section>

        <section class="bg-white py-10 md:py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-8 md:gap-10 items-center">
                    <div class="relative">
                        <div class="inst-card overflow-hidden border border-slate-200">
                            <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Sede institucional CRO III Lima-Callao" class="w-full min-h-[300px] object-cover">
                        </div>
                        <div class="absolute -right-2 bottom-4 bg-primary text-white px-5 py-3 shadow-inst">
                            <p class="text-3xl leading-none font-black">29+</p>
                            <p class="text-[10px] uppercase tracking-[0.15em] mt-1">Años de trayectoria</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight">¿Quiénes Somos?<br><span class="text-primary">Trayectoria al Servicio de la Salud</span></h2>
                        <div class="space-y-3 mt-4 text-slate-700 text-sm md:text-base">
                            <p>El Colegio Regional de Obstetras III Lima-Callao es una institución autónoma de derecho público interno, representativa de la profesión de obstetricia en nuestra jurisdicción.</p>
                            <p>Fundado en 1995, surge con la misión de vigilar el ejercicio ético de la profesión y promover el bienestar de nuestras colegiadas.</p>
                            <p>Con casi tres décadas de trayectoria, nos hemos consolidado como referente regional en la defensa de derechos y el fortalecimiento del ejercicio obstétrico.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-5 mt-6">
                            <div class="border-l-2 border-primary pl-3">
                                <p class="text-xl font-black text-slate-900">Lima</p>
                                <p class="text-[11px] uppercase tracking-[0.13em] text-slate-500">Sede central</p>
                            </div>
                            <div class="border-l-2 border-primary pl-3">
                                <p class="text-xl font-black text-slate-900">Callao</p>
                                <p class="text-[11px] uppercase tracking-[0.13em] text-slate-500">Jurisdicción</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background-light py-8 md:py-10 border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-5">
                    <article class="inst-card p-6 border-t-2 border-t-primary">
                        <div class="h-8 w-8 bg-primary/10 text-primary flex items-center justify-center mb-3"><span class="material-icons-outlined text-base">flag</span></div>
                        <h3 class="text-2xl font-black text-slate-900 mb-2">Misión</h3>
                        <p class="text-sm text-slate-700">Representar, integrar y fortalecer a las profesionales obstetras de la región Lima-Callao, velando por el ejercicio legal y ético de la profesión.</p>
                    </article>
                    <article class="inst-card p-6 border-t-2 border-t-primary">
                        <div class="h-8 w-8 bg-primary/10 text-primary flex items-center justify-center mb-3"><span class="material-icons-outlined text-base">visibility</span></div>
                        <h3 class="text-2xl font-black text-slate-900 mb-2">Visión</h3>
                        <p class="text-sm text-slate-700">Ser una institución líder, sólida y democrática, reconocida por su excelencia académica y ética en salud sexual y reproductiva.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-white py-10 md:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-7">
                    <h2 class="text-slate-900 text-3xl md:text-4xl font-black">Objetivos <span class="text-primary">Estratégicos</span></h2>
                    <p class="text-slate-600 mt-2 text-sm">Nuestra gestión se enfoca en pilares fundamentales para el crecimiento sostenido de la profesión.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <article class="inst-card p-4 text-center"><span class="material-icons-outlined text-primary text-2xl">school</span><h3 class="text-sm font-bold mt-2">Desarrollo Académico</h3><p class="text-xs text-slate-600 mt-1">Capacitación y especialización continua.</p></article>
                    <article class="inst-card p-4 text-center"><span class="material-icons-outlined text-primary text-2xl">gavel</span><h3 class="text-sm font-bold mt-2">Vigilancia Ética</h3><p class="text-xs text-slate-600 mt-1">Cumplimiento del código profesional.</p></article>
                    <article class="inst-card p-4 text-center"><span class="material-icons-outlined text-primary text-2xl">diversity_3</span><h3 class="text-sm font-bold mt-2">Bienestar Social</h3><p class="text-xs text-slate-600 mt-1">Programas de apoyo para colegiadas.</p></article>
                    <article class="inst-card p-4 text-center"><span class="material-icons-outlined text-primary text-2xl">verified</span><h3 class="text-sm font-bold mt-2">Calidad de Atención</h3><p class="text-xs text-slate-600 mt-1">Mejora continua en salud materna.</p></article>
                </div>
            </div>
        </section>

        <section class="bg-background-light py-10 md:py-12 border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-6">
                    <h2 class="text-slate-900 text-3xl md:text-4xl font-black">Consejo Regional 2025-2028</h2>
                    <p class="text-primary text-xs font-bold uppercase tracking-[0.16em] mt-1">Liderazgo y gestión</p>
                </div>

                <article class="inst-card max-w-4xl mx-auto overflow-hidden border-l-2 border-l-primary">
                    <div class="grid md:grid-cols-[220px_1fr]">
                        <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Decanato regional CRO III Lima-Callao" class="w-full h-full min-h-[220px] object-cover grayscale">
                        <div class="p-5 md:p-6">
                            <h3 class="text-2xl font-black text-slate-900">Obst. Jenny Elenisse Zavaleta Luján</h3>
                            <p class="text-primary text-sm font-semibold mt-1">Decana Regional</p>
                            <p class="text-slate-600 italic text-sm mt-3">"Comprometida con la defensa de derechos profesionales y la excelencia del cuidado obstétrico en Lima y Callao."</p>
                        </div>
                    </div>
                </article>

                <div class="grid md:grid-cols-3 gap-4 mt-4">
                    <article class="inst-card p-4"><p class="font-bold text-slate-900 text-sm">Obst. Alicia Isla López</p><p class="text-xs text-primary uppercase tracking-[0.13em] font-semibold mt-1">Vicedecana</p></article>
                    <article class="inst-card p-4"><p class="font-bold text-slate-900 text-sm">Obst. Sara Carolina Zamora Chávez</p><p class="text-xs text-primary uppercase tracking-[0.13em] font-semibold mt-1">Secretaria Regional Administrativa</p></article>
                    <article class="inst-card p-4"><p class="font-bold text-slate-900 text-sm">Obst. Elizabeth Soria Peña</p><p class="text-xs text-primary uppercase tracking-[0.13em] font-semibold mt-1">Tesorera</p></article>
                </div>
            </div>
        </section>

        <section class="bg-white py-10 md:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight">Marco Normativo e Institucional</h2>
                        <p class="text-slate-600 mt-3 text-sm">Nuestra labor está respaldada por un sólido marco legal que define competencias y responsabilidades del obstetra.</p>
                        <div class="space-y-2 mt-4">
                            <details class="inst-card p-4" open>
                                <summary class="cursor-pointer font-bold text-sm">Ley N.° 27853 - Ley de Trabajo del Obstetra</summary>
                                <p class="text-xs text-slate-600 mt-2">Establece condiciones laborales, derechos y deberes del obstetra en el ámbito nacional.</p>
                            </details>
                            <details class="inst-card p-4">
                                <summary class="cursor-pointer font-bold text-sm">Ley N.° 21210 - Creación del COP</summary>
                                <p class="text-xs text-slate-600 mt-2">Crea el Colegio de Obstetras del Perú como entidad de derecho público interno.</p>
                            </details>
                            <details class="inst-card p-4">
                                <summary class="cursor-pointer font-bold text-sm">Estatuto y Reglamentos</summary>
                                <p class="text-xs text-slate-600 mt-2">Regulan organización institucional, procesos electorales y vida orgánica colegial.</p>
                            </details>
                        </div>
                    </div>
                    <aside class="inst-card border border-primary/20 bg-primary/5 p-6 flex flex-col justify-center">
                        <span class="material-icons-outlined text-primary text-4xl">description</span>
                        <h3 class="text-2xl font-black text-slate-900 mt-3">Repositorio Documental</h3>
                        <p class="text-sm text-slate-700 mt-2">Accede a leyes, decretos supremos y resoluciones vigentes para consulta profesional transparente.</p>
                        <a href="{{ route('institucional.normatividad') }}" class="inst-btn-primary mt-5 !py-2.5 !px-5 !text-xs">
                            <span class="material-icons-outlined text-base">download</span>
                            <span>Descargar documentación legal</span>
                        </a>
                    </aside>
                </div>
            </div>
        </section>

        <section class="bg-secondary text-white py-10 md:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-black text-white">Código de Ética y Deontología</h2>
                        <div class="space-y-3 mt-5 text-sm">
                            <p><strong class="text-white">Integridad Profesional:</strong> conducta ética, honesta y responsable en todo acto profesional.</p>
                            <p><strong class="text-white">Respeto a la Vida:</strong> principio rector de la atención integral en salud sexual y reproductiva.</p>
                            <p><strong class="text-white">Secreto Profesional:</strong> protección de la información clínica y respeto de la confidencialidad.</p>
                        </div>
                    </div>
                    <div class="inst-card p-6 bg-[#1a2340] border-[#243054] text-white">
                        <p class="text-lg italic">"El ejercicio de la obstetricia es una vocación de servicio fundamentada en el conocimiento científico y los más altos valores éticos."</p>
                        <a href="{{ route('institucional.normatividad') }}" class="inst-btn mt-5 !py-2.5 !px-5 !text-xs !bg-white !text-secondary hover:!bg-slate-100 inline-flex">
                            <span class="material-icons-outlined text-base">menu_book</span>
                            <span>Leer código de ética completo</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-background-light py-10 md:py-12 border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-7">
                    <h2 class="text-slate-900 text-3xl md:text-4xl font-black">Acceso Directo <span class="text-primary">Institucional</span></h2>
                    <p class="text-slate-600 mt-2 text-sm">Navega de forma rápida por las 8 subpáginas de la sección institucional.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a href="{{ route('institucional.quienes-somos') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Quiénes Somos</p>
                        <p class="text-xs text-slate-600 mt-1">Identidad y alcance institucional.</p>
                    </a>
                    <a href="{{ route('institucional.consejo-directivo') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Consejo Directivo</p>
                        <p class="text-xs text-slate-600 mt-1">Gestión y cargos vigentes.</p>
                    </a>
                    <a href="{{ route('institucional.resena-historica') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Reseña Histórica</p>
                        <p class="text-xs text-slate-600 mt-1">Línea de tiempo institucional.</p>
                    </a>
                    <a href="{{ route('institucional.simbolos') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Símbolos</p>
                        <p class="text-xs text-slate-600 mt-1">Emblemas y representación oficial.</p>
                    </a>
                    <a href="{{ route('institucional.compendio-de-normas') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Compendio de Normas</p>
                        <p class="text-xs text-slate-600 mt-1">Consulta normativa ordenada.</p>
                    </a>
                    <a href="{{ route('institucional.reglamento') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Reglamento</p>
                        <p class="text-xs text-slate-600 mt-1">Documentos y resoluciones.</p>
                    </a>
                    <a href="{{ route('institucional.normatividad') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Normatividad</p>
                        <p class="text-xs text-slate-600 mt-1">Marco legal institucional.</p>
                    </a>
                    <a href="{{ route('institucional.convenios') }}" class="inst-card p-5 border-t-2 border-t-primary hover:bg-white transition-colors">
                        <p class="font-bold text-slate-900">Convenios</p>
                        <p class="text-xs text-slate-600 mt-1">Alianzas y beneficios.</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="bg-white py-10 md:py-12">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-slate-900 text-3xl md:text-4xl font-black">Súmate a nuestra comunidad profesional</h2>
                <p class="text-slate-600 mt-3 text-sm md:text-base">Estamos aquí para apoyarte en tu crecimiento profesional. Únete al Colegio Regional de Obstetras III Lima-Callao.</p>
                <div class="mt-6 flex flex-wrap justify-center gap-3">
                    <a href="{{ route('tramites') }}" class="inst-btn-primary">¿Cómo Colegiarme?</a>
                    <a href="{{ route('contacto') }}" class="inst-btn !bg-secondary !text-white hover:!bg-secondary/90">Contáctanos</a>
                </div>
            </div>
        </section>
    </main>
@endsection
