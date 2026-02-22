@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="relative overflow-hidden bg-secondary text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(186,124,0,0.28),transparent_42%),radial-gradient(circle_at_80%_0%,rgba(102,2,25,0.75),transparent_40%)]"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 relative z-10">
                <p class="text-xs md:text-sm uppercase tracking-[0.2em] text-brand-gold-light font-bold mb-4">Institución consolidada</p>
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-4xl md:text-6xl font-black leading-tight">Nosotros</h1>
                        <p class="mt-5 text-base md:text-xl text-white/85 max-w-2xl">
                            El Colegio Regional de Obstetras III Lima-Callao representa a las profesionales obstetras de la región,
                            promoviendo ejercicio ético, actualización científica y liderazgo en salud sexual y reproductiva.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="#consejo" class="inst-btn-primary">Ver Consejo Directivo</a>
                            <a href="{{ route('normativa') }}" class="inst-btn-secondary !border-white !text-white hover:!bg-white/10">Marco normativo</a>
                        </div>
                    </div>
                    <div class="inst-card p-6 bg-white/10 border-white/20">
                        <dl class="grid grid-cols-2 gap-4">
                            <div class="rounded-lg bg-white/10 p-4">
                                <dt class="text-xs uppercase tracking-[0.15em] text-white/70">Creación</dt>
                                <dd class="text-2xl font-extrabold">D.L. 21210</dd>
                            </div>
                            <div class="rounded-lg bg-white/10 p-4">
                                <dt class="text-xs uppercase tracking-[0.15em] text-white/70">Ámbito</dt>
                                <dd class="text-2xl font-extrabold">Lima y Callao</dd>
                            </div>
                            <div class="rounded-lg bg-white/10 p-4 col-span-2">
                                <dt class="text-xs uppercase tracking-[0.15em] text-white/70">Gestión vigente</dt>
                                <dd class="text-2xl font-extrabold">Consejo Directivo 2025-2028</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-20 bg-background-light dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <div class="inst-card overflow-hidden">
                        <div class="aspect-[4/3] bg-[linear-gradient(120deg,#f4f4f5_0%,#e2e8f0_35%,#dbe4f0_100%)] dark:bg-[linear-gradient(120deg,#2a1a21_0%,#341a24_45%,#3f2330_100%)] flex items-end p-8">
                            <div class="bg-primary text-white p-5 rounded-md shadow-inst">
                                <p class="text-4xl font-black leading-none">30</p>
                                <p class="text-xs uppercase tracking-[0.16em] mt-2">Años de trayectoria</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary dark:text-brand-gold mb-3">Quiénes somos</p>
                        <h2 class="inst-section-title mb-6">Trayectoria al servicio de la salud</h2>
                        <div class="space-y-4 text-slate-700 dark:text-slate-300">
                            <p>
                                El Colegio Regional de Obstetras III Lima-Callao es una institución autónoma sin fines de lucro que agrupa a
                                profesionales obstetras colegiadas de la jurisdicción Lima y Callao.
                            </p>
                            <p>
                                Su finalidad es regular el ejercicio profesional, defender derechos del obstetra, promover ética y disciplina,
                                impulsar capacitación continua y representar institucionalmente al gremio.
                            </p>
                            <p>
                                Opera bajo los lineamientos del Colegio Nacional de Obstetras del Perú y mantiene autonomía administrativa en su
                                competencia regional.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div class="border-l-4 border-primary dark:border-brand-gold pl-4">
                                <p class="text-2xl font-black text-slate-900 dark:text-white">Misión</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300">Ejercicio correcto y ético de la obstetricia.</p>
                            </div>
                            <div class="border-l-4 border-primary dark:border-brand-gold pl-4">
                                <p class="text-2xl font-black text-slate-900 dark:text-white">Visión</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300">Referente regional en regulación y defensa gremial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white dark:bg-surface-dark/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="inst-section-title">Misión y visión institucional</h2>
                    <p class="text-slate-600 dark:text-slate-300 mt-3 max-w-3xl mx-auto">Fundamentos estratégicos para representar al gremio con ética, calidad y servicio a la comunidad.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <article class="inst-card p-8 border-l-4 border-l-primary dark:border-l-brand-gold">
                        <div class="h-12 w-12 rounded-md bg-primary/10 dark:bg-brand-gold/15 text-primary dark:text-brand-gold flex items-center justify-center mb-5">
                            <span class="material-icons-outlined">flag</span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4">Misión</h3>
                        <p class="text-slate-700 dark:text-slate-300">
                            Velar por el ejercicio correcto y ético de la obstetricia en la región Lima y Callao, promoviendo desarrollo
                            profesional, actualización científica y fortalecimiento institucional.
                        </p>
                    </article>
                    <article class="inst-card p-8 border-l-4 border-l-primary dark:border-l-brand-gold">
                        <div class="h-12 w-12 rounded-md bg-primary/10 dark:bg-brand-gold/15 text-primary dark:text-brand-gold flex items-center justify-center mb-5">
                            <span class="material-icons-outlined">visibility</span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4">Visión</h3>
                        <p class="text-slate-700 dark:text-slate-300">
                            Consolidarse como referente regional en regulación, defensa gremial, actualización profesional y liderazgo en salud
                            sexual y reproductiva.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="consejo" class="py-16 md:py-20 bg-background-light dark:bg-background-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-end justify-between gap-4 mb-8">
                    <div>
                        <h2 class="inst-section-title">Consejo Directivo</h2>
                        <p class="text-primary dark:text-brand-gold font-bold uppercase tracking-[0.18em] mt-2">Gestión 2025-2028</p>
                    </div>
                    <a href="https://crolimacallao.org.pe/consejo.php" target="_blank" rel="noopener" class="text-primary dark:text-brand-gold font-semibold hover:underline">Fuente oficial</a>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <article class="inst-card p-6 lg:col-span-2">
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-500 dark:text-slate-400 mb-2">Decanato</p>
                        <h3 class="text-2xl font-black text-slate-900 dark:text-white">Obsta. Jenny Elenisse Zavaleta Luján</h3>
                        <p class="text-primary dark:text-brand-gold font-semibold mt-1">Decana</p>
                        <p class="text-sm text-slate-600 dark:text-slate-300 mt-4">Conducción institucional, representación gremial y liderazgo estratégico regional.</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Alicia Isla López</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Vicedecana</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Sara Carolina Zamora Chávez</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Secretaria Regional Administrativa</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Miriam Letona Gonzáles</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Secretaria de Asuntos Internos</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Paulia Emiliana Alhuay Puca</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Secretaria de Asuntos Internos (Adjunta)</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Elizabeth Soria Peña</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Tesorera</p>
                    </article>
                    <article class="inst-card p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Oscar Josué Huamán Carreño</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Primera Vocal</p>
                    </article>
                    <article class="inst-card p-6 lg:col-span-2">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Obsta. Bertha Aurora Landa Maturrano</h3>
                        <p class="text-sm text-primary dark:text-brand-gold font-semibold mt-1">Segunda Vocal</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-14 bg-primary text-white">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-black">Súmate a nuestra comunidad profesional</h2>
                <p class="text-white/90 mt-3 max-w-3xl mx-auto">Accede a acompañamiento institucional, capacitación continua y servicios para fortalecer tu ejercicio profesional.</p>
                <div class="mt-7 flex flex-wrap justify-center gap-3">
                    <a href="{{ route('tramites') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft">¿Cómo colegiarme?</a>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary !border-white !text-white hover:!bg-white/10">Contáctanos</a>
                </div>
            </div>
        </section>
    </main>
@endsection
