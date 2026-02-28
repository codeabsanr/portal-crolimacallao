@extends('layouts.app')

@section('content')
    <main id="main" class="bg-background-light py-8 md:py-10">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
            <h1 class="text-slate-900">Page Hero With CTA: Familia A</h1>
            <p class="text-slate-600 mt-2">Mismo diseño base, distintos tratamientos visuales y pista sutil para guiar el scroll.</p>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 md:space-y-8">
            <article class="inst-card overflow-hidden border-slate-300">
                <header class="bg-white border-b border-slate-200 px-5 py-3">
                    <p class="text-sm font-bold text-slate-900">A1: Plano claro (ultra legible)</p>
                </header>
                <div class="bg-white grid lg:grid-cols-[1.05fr_0.95fr] gap-6 p-6 md:p-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold">Usted está en: Contacto</p>
                        <h2 class="text-slate-900 mt-2 text-4xl md:text-5xl font-black leading-[1.08]">Canales de atención</h2>
                        <p class="mt-4 text-slate-700 text-base md:text-lg max-w-2xl">Elija el canal correcto para consulta, trámite o seguimiento.</p>
                        <div class="mt-6 flex flex-col sm:flex-row gap-3">
                            <a href="{{ route('tramites') }}" class="inst-btn-primary w-full sm:w-auto">Ver trámites</a>
                            <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-secondary w-full sm:w-auto">Enviar documento</a>
                        </div>
                    </div>
                    <aside class="inst-card p-4 md:p-5 border-primary/20 bg-background-light">
                        <p class="text-xs uppercase tracking-[0.14em] text-slate-500">¿Te perdiste?</p>
                        <p class="text-slate-900 font-bold mt-1">Atajos de navegación</p>
                        <div class="mt-3 grid sm:grid-cols-2 gap-2">
                            <a href="{{ route('home') }}" class="inst-btn-secondary !px-3 !py-2.5">Volver a inicio</a>
                            <a href="{{ route('institucional') }}" class="inst-btn-secondary !px-3 !py-2.5">Ir a institucional</a>
                            <a href="{{ route('colegiados') }}" class="inst-btn-secondary !px-3 !py-2.5">Ir a colegiados</a>
                            <a href="{{ route('contacto') }}" class="inst-btn-secondary !px-3 !py-2.5">Quedar en contacto</a>
                        </div>
                    </aside>
                </div>
                <a href="#seccion-siguiente" class="block border-t border-slate-200 bg-background-light px-6 py-3 text-center text-sm text-slate-600 hover:text-primary transition-colors">
                    Desliza para continuar
                    <span class="material-icons-outlined text-base align-middle ml-1 animate-bounce">south</span>
                </a>
            </article>

            <article class="inst-card overflow-hidden border-slate-300">
                <header class="bg-white border-b border-slate-200 px-5 py-3">
                    <p class="text-sm font-bold text-slate-900">A2: Color puro (azul dominante + vino)</p>
                </header>
                <div class="relative text-white">
                    <div class="absolute inset-0 bg-[linear-gradient(122deg,#4d0213_0%,#660219_58%,#660219_100%)]"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_84%_14%,rgba(186,124,0,0.16),transparent_36%)]"></div>
                    <div class="relative z-10 grid lg:grid-cols-[1.06fr_0.94fr] gap-6 p-6 md:p-8">
                        <div>
                            <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-bold">Usted está en: Contacto</p>
                            <h2 class="text-white mt-2 text-4xl md:text-5xl font-black leading-[1.08]">Canales de atención</h2>
                            <p class="mt-4 text-white/90 text-base md:text-lg max-w-2xl">Acceda al canal que necesita sin navegar de más.</p>
                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <a href="{{ route('tramites') }}" class="inst-btn border-white bg-white text-primary hover:bg-brand-gold-soft w-full sm:w-auto">Ver trámites</a>
                                <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-secondary border-white text-white hover:bg-white/10 w-full sm:w-auto">Mesa de partes</a>
                            </div>
                        </div>
                        <aside class="border border-white/20 bg-white/10 backdrop-blur-sm p-4 md:p-5">
                            <p class="text-xs uppercase tracking-[0.14em] text-white/75">¿Te perdiste?</p>
                            <p class="text-white font-bold mt-1">Ruta rápida</p>
                            <div class="mt-3 space-y-2">
                                <a href="{{ route('home') }}" class="block border border-white/25 px-3 py-2.5 hover:bg-white/10 transition-colors">Inicio</a>
                                <a href="{{ route('institucional') }}" class="block border border-white/25 px-3 py-2.5 hover:bg-white/10 transition-colors">Institucional</a>
                                <a href="{{ route('tramites') }}" class="block border border-white/25 px-3 py-2.5 hover:bg-white/10 transition-colors">Trámites</a>
                                <a href="{{ route('contacto') }}" class="block border border-white/25 px-3 py-2.5 hover:bg-white/10 transition-colors">Contacto</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="h-5 bg-[linear-gradient(180deg,rgba(15,23,42,0.18)_0%,rgba(248,249,250,1)_100%)]"></div>
            </article>

            <article class="inst-card overflow-hidden border-slate-300">
                <header class="bg-white border-b border-slate-200 px-5 py-3">
                    <p class="text-sm font-bold text-slate-900">A3: Foto de fondo difuminada + filtro color</p>
                </header>
                <div class="relative text-white">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(15,23,42,0.82)_0%,rgba(15,23,42,0.7)_38%,rgba(102,2,25,0.66)_100%)] backdrop-blur-[1px]"></div>
                    <div class="absolute right-8 top-6 md:right-12 md:top-8 opacity-25">
                        <span class="material-icons-outlined text-[6rem] md:text-[8rem]">support_agent</span>
                    </div>
                    <div class="relative z-10 p-6 md:p-8 grid lg:grid-cols-[1.08fr_0.92fr] gap-6">
                        <div>
                            <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-bold">Usted está en: Contacto</p>
                            <h2 class="text-white mt-2 text-4xl md:text-5xl font-black leading-[1.08]">Canales de atención</h2>
                            <p class="mt-4 text-white/90 text-base md:text-lg">Si no encuentra lo que buscaba, use los atajos para regresar al flujo principal.</p>
                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <a href="{{ route('tramites') }}" class="inst-btn border-white bg-white text-primary hover:bg-brand-gold-soft w-full sm:w-auto">Ver trámites</a>
                                <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-secondary border-white text-white hover:bg-white/10 w-full sm:w-auto">Enviar documento</a>
                            </div>
                        </div>
                        <aside class="border border-white/20 bg-white/10 backdrop-blur-sm p-4">
                            <p class="text-xs uppercase tracking-[0.14em] text-white/75">¿Te perdiste?</p>
                            <p class="text-white font-bold mt-1">Ruta rápida</p>
                            <div class="mt-3 grid grid-cols-2 gap-2 text-sm">
                                <a href="{{ route('home') }}" class="border border-white/25 px-3 py-2 hover:bg-white/10 transition-colors">Inicio</a>
                                <a href="{{ route('institucional') }}" class="border border-white/25 px-3 py-2 hover:bg-white/10 transition-colors">Institucional</a>
                                <a href="{{ route('colegiados') }}" class="border border-white/25 px-3 py-2 hover:bg-white/10 transition-colors">Colegiados</a>
                                <a href="{{ route('contacto') }}" class="border border-white/25 px-3 py-2 hover:bg-white/10 transition-colors">Contacto</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <a href="#seccion-siguiente" class="block border-t border-slate-200 bg-primary/5 px-6 py-3 text-center text-sm text-slate-700 hover:text-primary transition-colors">
                    Continuar hacia contenido de la sección
                    <span class="material-icons-outlined text-base align-middle ml-1">south</span>
                </a>
            </article>

            <article class="inst-card overflow-hidden border-slate-300">
                <header class="bg-white border-b border-slate-200 px-5 py-3">
                    <p class="text-sm font-bold text-slate-900">A4: Corte diagonal + borde interno</p>
                </header>
                <div class="relative overflow-hidden bg-white">
                    <div class="absolute inset-y-0 right-0 w-[46%] bg-[linear-gradient(145deg,#660219_0%,#660219_100%)]"></div>
                    <div class="absolute top-0 right-[42%] h-full w-28 bg-white rotate-[8deg] origin-top-right"></div>
                    <div class="relative z-10 grid lg:grid-cols-[1.05fr_0.95fr] gap-6 p-6 md:p-8">
                        <div class="border border-slate-200 p-5 md:p-6 bg-background-light">
                            <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold">Usted está en: Contacto</p>
                            <h2 class="text-slate-900 mt-2 text-4xl md:text-5xl font-black leading-[1.08]">Canales de atención</h2>
                            <p class="mt-4 text-slate-700 text-base md:text-lg">Composición con corte para separar información principal y rescate de navegación.</p>
                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <a href="{{ route('tramites') }}" class="inst-btn-primary w-full sm:w-auto">Ver trámites</a>
                                <a href="{{ route('tramites.mesa-partes') }}" class="inst-btn-secondary w-full sm:w-auto">Enviar documento</a>
                            </div>
                        </div>
                        <aside class="border border-white/25 bg-white/10 p-4 md:p-5 text-white">
                            <p class="text-xs uppercase tracking-[0.14em] text-white/80">¿Te perdiste?</p>
                            <p class="font-bold mt-1">Navegar por sección</p>
                            <div class="mt-3 grid grid-cols-2 gap-2 text-sm">
                                <a href="{{ route('home') }}" class="block border border-white/30 px-3 py-2.5 hover:bg-white/10 transition-colors">Inicio</a>
                                <a href="{{ route('institucional') }}" class="block border border-white/30 px-3 py-2.5 hover:bg-white/10 transition-colors">Institucional</a>
                                <a href="{{ route('tramites') }}" class="block border border-white/30 px-3 py-2.5 hover:bg-white/10 transition-colors">Trámites</a>
                                <a href="{{ route('colegiados') }}" class="block border border-white/30 px-3 py-2.5 hover:bg-white/10 transition-colors">Colegiados</a>
                            </div>
                            <div class="mt-4 pt-3 border-t border-white/20 text-sm text-white/85">Desplaza para ver el contenido principal de esta página.</div>
                        </aside>
                    </div>
                </div>
            </article>
        </section>

        <section id="seccion-siguiente" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <article class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <p class="text-xs uppercase tracking-[0.15em] text-primary font-bold">Sección siguiente (simulación)</p>
                <h2 class="text-slate-900 mt-2">Contenido principal después del hero</h2>
                <p class="text-slate-600 mt-3">Esta sección está para validar que el cambio desde el hero se sienta natural durante el scroll.</p>
                <div class="mt-5 grid md:grid-cols-3 gap-4">
                    <x-card title="Mesa de Partes" icon="forward_to_inbox" description="Registro y seguimiento documentario." link="{{ route('tramites.mesa-partes') }}" linkText="Ingresar" />
                    <x-card title="Trámites" icon="folder_open" description="Catálogo de gestiones institucionales." link="{{ route('tramites') }}" linkText="Ver catálogo" />
                    <x-card title="Soporte" icon="support_agent" description="Ayuda para consultas y orientación." link="{{ route('contacto') }}" linkText="Contactar" />
                </div>
            </article>
        </section>
    </main>
@endsection


