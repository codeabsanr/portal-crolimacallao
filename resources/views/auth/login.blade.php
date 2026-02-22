<x-guest-layout :full="true">
    <main class="h-screen overflow-hidden bg-background-light text-text-main">
        <div class="flex h-full flex-col md:flex-row overflow-hidden">
            <section class="relative hidden h-full md:flex md:w-[58%] overflow-hidden border-r border-slate-300/80">
                <img src="{{ asset('assets/img/1foto_gestion_2025_2028.jpg') }}" alt="Cuidado obstetrico" class="absolute inset-0 h-full w-full object-cover object-center">
                <div class="absolute inset-0 bg-inst-hero"></div>
                <div class="absolute inset-0 bg-inst-hero-overlay"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/5 to-transparent"></div>

                <div class="relative z-10 mt-auto p-8 lg:p-12 xl:p-16 text-white">
                    <div class="mb-6 inline-flex items-center gap-3">
                        <span class="inline-flex h-12 w-12 items-center justify-center bg-white/20 backdrop-blur-sm">
                            <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III" class="h-8 w-8 object-contain">
                        </span>
                        <span class="text-sm font-bold uppercase tracking-[0.12em]">Colegio Regional de Obstetras</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-black leading-tight tracking-tight text-white">Excelencia y calidez en cada nueva vida.</h1>
                    <p class="mt-4 max-w-xl text-lg text-white/90">Gestiona tu carrera profesional, accede a capacitaciones y conecta con la comunidad obstetrica.</p>

                    <section class="mt-7 border border-white/35 bg-white/10 backdrop-blur-sm overflow-hidden" data-login-carousel aria-label="Ayuda, alertas y anuncios">
                        <div class="px-6 py-3 bg-white/20 border-b border-white/30">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-2" role="tablist" aria-label="Indicadores del carrusel">
                                    <button type="button" data-dot="0" class="h-2.5 w-2.5 rounded-full border border-white/60 bg-brand-gold" aria-label="Ir a ayuda paso a paso"></button>
                                    <button type="button" data-dot="1" class="h-2.5 w-2.5 rounded-full border border-white/60 bg-white/50" aria-label="Ir a comunicado"></button>
                                    <button type="button" data-dot="2" class="h-2.5 w-2.5 rounded-full border border-white/60 bg-white/50" aria-label="Ir a evento"></button>
                                    <button type="button" data-dot="3" class="h-2.5 w-2.5 rounded-full border border-white/60 bg-white/50" aria-label="Ir a curso"></button>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button type="button" data-prev class="inline-flex h-10 w-10 items-center justify-center border border-white/45 bg-white/10 text-white hover:bg-white/20" aria-label="Anterior">
                                        <span class="material-icons-outlined">chevron_left</span>
                                    </button>
                                    <button type="button" data-next class="inline-flex h-10 w-10 items-center justify-center border border-white/45 bg-white/10 text-white hover:bg-white/20" aria-label="Siguiente">
                                        <span class="material-icons-outlined">chevron_right</span>
                                    </button>
                                    <button type="button" data-toggle class="inline-flex h-10 items-center justify-center border border-white/45 bg-white/10 px-3 text-sm font-bold text-white hover:bg-white/20" aria-pressed="false">
                                        Pausar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="h-[2px] w-full bg-white/20 overflow-hidden">
                            <div data-progress class="h-full w-full origin-left bg-brand-gold" style="transform: scaleX(1);"></div>
                        </div>

                        <div class="relative min-h-[440px]">
                            <article data-slide class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(.2,.7,.2,1)] opacity-100 translate-y-0" aria-live="polite">
                                <div class="h-[245px] p-6 bg-[linear-gradient(150deg,#8f0321_0%,#5a0319_58%,#20112f_120%)] border-b border-white/20 relative overflow-hidden">
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(255,255,255,0.22),transparent_36%),radial-gradient(circle_at_84%_78%,rgba(251,191,36,0.18),transparent_40%)]"></div>
                                    <div class="relative h-full flex items-center justify-center">
                                        <div class="text-center">
                                            <span class="material-icons-outlined text-white/90 text-5xl">badge</span>
                                            <p class="mt-3 text-white text-4xl font-black leading-tight">Ayuda de acceso</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/95 p-6">
                                    <p class="inline-flex items-center px-2 py-1 text-[11px] uppercase tracking-[0.12em] font-bold rounded border border-primary/40 text-primary">Guia</p>
                                    <p class="mt-3 text-4xl font-black leading-tight text-secondary">Ingreso rapido paso a paso</p>
                                    <p class="mt-3 text-[1.5rem] leading-[1.45] text-slate-700">Use COP o correo, luego su contrasena. Si la olvido, use recuperacion de clave.</p>
                                    <div class="mt-5 grid grid-cols-2 gap-2">
                                        <a href="{{ route('password.request') }}" class="inst-btn !py-2.5 !px-3 !text-base !text-white !justify-center !bg-primary hover:!bg-primary-dark">Recuperar clave</a>
                                        <a href="{{ route('register') }}" class="inst-btn-secondary !py-2.5 !px-3 !text-base !justify-center">Activar cuenta</a>
                                    </div>
                                </div>
                            </article>

                            <article data-slide class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(.2,.7,.2,1)] opacity-0 translate-y-2 pointer-events-none" aria-hidden="true">
                                <div class="h-[245px] p-6 bg-[linear-gradient(150deg,#0f766e_0%,#0e5f6c_58%,#1b1d3a_120%)] border-b border-white/20 relative overflow-hidden">
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(255,255,255,0.2),transparent_36%),radial-gradient(circle_at_82%_78%,rgba(255,255,255,0.12),transparent_40%)]"></div>
                                    <div class="relative h-full flex items-center justify-center">
                                        <div class="text-center">
                                            <span class="material-icons-outlined text-white/90 text-5xl">campaign</span>
                                            <p class="mt-3 text-white text-4xl font-black leading-tight">Comunicado urgente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/95 p-6">
                                    <p class="inline-flex items-center px-2 py-1 text-[11px] uppercase tracking-[0.12em] font-bold rounded border border-primary/40 text-primary">Comunicado</p>
                                    <p class="mt-3 text-4xl font-black leading-tight text-secondary">Mesa de partes: horario extraordinario</p>
                                    <p class="mt-3 text-[1.5rem] leading-[1.45] text-slate-700">Atencion extendida para recepcion documentaria hasta las 18:30.</p>
                                    <div class="mt-5 grid grid-cols-2 gap-2">
                                        <a href="{{ route('actualidad.comunicados') }}" class="inst-btn !py-2.5 !px-3 !text-base !text-white !justify-center !bg-primary hover:!bg-primary-dark">Ver comunicado</a>
                                        <a href="{{ route('contacto') }}" class="inst-btn-secondary !py-2.5 !px-3 !text-base !justify-center">Detalle</a>
                                    </div>
                                </div>
                            </article>

                            <article data-slide class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(.2,.7,.2,1)] opacity-0 translate-y-2 pointer-events-none" aria-hidden="true">
                                <div class="h-[245px] p-6 bg-[linear-gradient(150deg,#0f766e_0%,#155e75_58%,#0f172a_120%)] border-b border-white/20 relative overflow-hidden">
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(255,255,255,0.2),transparent_36%),radial-gradient(circle_at_82%_78%,rgba(255,255,255,0.12),transparent_40%)]"></div>
                                    <div class="relative h-full flex items-center justify-center">
                                        <div class="text-center">
                                            <span class="material-icons-outlined text-white/90 text-5xl">event_available</span>
                                            <p class="mt-3 text-white text-4xl font-black leading-tight">Evento destacado</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/95 p-6">
                                    <p class="inline-flex items-center px-2 py-1 text-[11px] uppercase tracking-[0.12em] font-bold rounded border border-primary/40 text-primary">Evento</p>
                                    <p class="mt-3 text-4xl font-black leading-tight text-secondary">Jornada regional de actualizacion obstetrica</p>
                                    <p class="mt-3 text-[1.5rem] leading-[1.45] text-slate-700">Inscripciones abiertas para modalidad presencial y virtual.</p>
                                    <div class="mt-5 grid grid-cols-2 gap-2">
                                        <a href="{{ route('capacitacion.calendario') }}" class="inst-btn !py-2.5 !px-3 !text-base !text-white !justify-center !bg-[#0f766e] hover:!bg-[#0b5d58]">Ver agenda</a>
                                        <a href="{{ route('capacitacion.cursos') }}" class="inst-btn-secondary !py-2.5 !px-3 !text-base !justify-center">Inscribirme</a>
                                    </div>
                                </div>
                            </article>

                            <article data-slide class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(.2,.7,.2,1)] opacity-0 translate-y-2 pointer-events-none" aria-hidden="true">
                                <div class="h-[245px] p-6 bg-[linear-gradient(150deg,#1d4ed8_0%,#1e3a8a_58%,#0f172a_120%)] border-b border-white/20 relative overflow-hidden">
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(255,255,255,0.2),transparent_36%),radial-gradient(circle_at_82%_78%,rgba(255,255,255,0.12),transparent_40%)]"></div>
                                    <div class="relative h-full flex items-center justify-center">
                                        <div class="text-center">
                                            <span class="material-icons-outlined text-white/90 text-5xl">school</span>
                                            <p class="mt-3 text-white text-4xl font-black leading-tight">Curso y ponencia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/95 p-6">
                                    <p class="inline-flex items-center px-2 py-1 text-[11px] uppercase tracking-[0.12em] font-bold rounded border border-primary/40 text-primary">Capacitacion</p>
                                    <p class="mt-3 text-4xl font-black leading-tight text-secondary">Programa de fortalecimiento clinico</p>
                                    <p class="mt-3 text-[1.5rem] leading-[1.45] text-slate-700">Cupos limitados con constancia institucional para colegiadas.</p>
                                    <div class="mt-5 grid grid-cols-2 gap-2">
                                        <a href="{{ route('capacitacion.cursos') }}" class="inst-btn !py-2.5 !px-3 !text-base !text-white !justify-center !bg-[#1d4ed8] hover:!bg-[#1e3a8a]">Ver cursos</a>
                                        <a href="{{ route('bolsa.trabajo') }}" class="inst-btn-secondary !py-2.5 !px-3 !text-base !justify-center">Postular</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </section>

            <section class="h-full w-full overflow-y-auto md:w-[42%] bg-background-light">
                <div class="mx-auto flex min-h-full w-full max-w-md flex-col justify-start md:justify-center px-5 sm:px-7 py-6 md:py-10">
                    <a href="{{ route('home') }}" class="mb-8 inline-flex w-fit items-center gap-2 border border-slate-300 bg-white px-4 py-2 text-sm font-bold text-secondary transition-colors hover:border-primary hover:text-primary">
                        <span class="material-icons-outlined text-[18px]">arrow_back</span>
                        Regresar
                    </a>

                    <div class="mb-7">
                        <p class="mb-4 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.16em] text-primary">
                            <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III" class="h-6 w-6 object-contain">
                            CRO III LIMA - CALLAO
                        </p>
                        <h2 class="inst-section-title">Bienvenida</h2>
                        <p class="mt-3 text-base md:text-lg text-slate-600">Ingresa tus credenciales para acceder al portal.</p>
                    </div>

                    <x-auth-session-status class="mb-4 rounded-sm border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700" :status="session('status')" />
                    @if ($errors->any())
                        <div class="mb-4 rounded-sm border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            Las credenciales ingresadas son incorrectas. Intentalo nuevamente.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <div class="relative">
                            <label for="email" class="sr-only">Numero de Colegiatura o Email</label>
                            <input id="email" name="email" type="text" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Numero de Colegiatura o Email" class="inst-input !bg-slate-100 !border-slate-200 !pr-11">
                            <span class="material-icons-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">badge</span>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="relative">
                            <label for="password" class="sr-only">Contrasena</label>
                            <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="Contrasena" class="inst-input !bg-slate-100 !border-slate-200 !pr-11">
                            <span class="material-icons-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">visibility_off</span>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between gap-3 text-sm">
                            <label class="inline-flex items-center gap-2 text-slate-600">
                                <input type="checkbox" name="remember" class="h-4 w-4 border-slate-300 text-primary focus:ring-primary/30">
                                <span>Recordarme</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="font-semibold text-primary hover:text-primary-dark">Olvidaste tu contrasena?</a>
                            @endif
                        </div>

                        <button type="submit" class="inst-btn-primary w-full !py-3.5 !text-sm !tracking-[0.1em]">
                            Ingresar al portal
                        </button>
                    </form>

                    <div class="mt-8 border-t border-slate-200 pt-6 text-center text-sm text-slate-600">
                        Aun no tienes una cuenta activa?
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-bold text-secondary underline decoration-primary/40 underline-offset-4 hover:text-primary">Registrate aqui</a>
                        @endif
                    </div>

                    <div class="mt-6 border-t border-slate-200 pt-5 flex flex-wrap items-center justify-center gap-3 text-sm text-slate-500">
                        <a href="{{ route('terminos') }}" class="hover:text-primary">Terminos y Condiciones</a>
                        <span class="text-slate-300">•</span>
                        <a href="{{ route('privacidad') }}" class="hover:text-primary">Politica de Privacidad</a>
                        <span class="text-slate-300">•</span>
                        <a href="{{ route('contacto') }}" class="hover:text-primary">Ayuda</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const root = document.querySelector('[data-login-carousel]');
            if (!root) return;

            const slides = Array.from(root.querySelectorAll('[data-slide]'));
            const dots = Array.from(root.querySelectorAll('[data-dot]'));
            const prevBtn = root.querySelector('[data-prev]');
            const nextBtn = root.querySelector('[data-next]');
            const toggleBtn = root.querySelector('[data-toggle]');
            const progress = root.querySelector('[data-progress]');
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            let index = 0;
            let playing = !reducedMotion;
            let userPaused = false;
            const duration = 8500;
            let lastFrame = 0;
            let elapsed = 0;

            const paint = function (newIndex, resetProgress = true) {
                index = (newIndex + slides.length) % slides.length;

                slides.forEach(function (slide, i) {
                    const active = i === index;
                    slide.classList.toggle('opacity-100', active);
                    slide.classList.toggle('translate-y-0', active);
                    slide.classList.toggle('pointer-events-auto', active);
                    slide.classList.toggle('opacity-0', !active);
                    slide.classList.toggle('translate-y-2', !active);
                    slide.classList.toggle('pointer-events-none', !active);
                    slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                });

                dots.forEach(function (dot, i) {
                    const active = i === index;
                    dot.classList.toggle('bg-brand-gold', active);
                    dot.classList.toggle('bg-white/50', !active);
                    dot.classList.toggle('border-brand-gold-light', active);
                    dot.classList.toggle('border-white/60', !active);
                    dot.setAttribute('aria-current', active ? 'true' : 'false');
                });

                if (resetProgress) elapsed = 0;
            };

            const updateProgress = function () {
                if (!progress) return;
                const ratio = Math.max(0, Math.min(1, 1 - (elapsed / duration)));
                progress.style.transform = `scaleX(${ratio})`;
            };

            const next = function () { paint(index + 1, true); updateProgress(); };
            const prev = function () { paint(index - 1, true); updateProgress(); };

            prevBtn?.addEventListener('click', prev);
            nextBtn?.addEventListener('click', next);

            dots.forEach(function (dot, i) {
                dot.addEventListener('click', function () {
                    paint(i, true);
                    updateProgress();
                });
            });

            toggleBtn?.addEventListener('click', function () {
                userPaused = !userPaused;
                playing = !userPaused;
                toggleBtn.textContent = userPaused ? 'Reanudar' : 'Pausar';
                toggleBtn.setAttribute('aria-pressed', userPaused ? 'true' : 'false');
            });

            root.addEventListener('mouseenter', function () { if (!userPaused) playing = false; });
            root.addEventListener('mouseleave', function () { if (!userPaused) playing = true; });

            const tick = function (ts) {
                if (!lastFrame) lastFrame = ts;
                const delta = ts - lastFrame;
                lastFrame = ts;

                if (playing) {
                    elapsed += delta;
                    if (elapsed >= duration) {
                        next();
                    }
                }

                updateProgress();
                window.requestAnimationFrame(tick);
            };

            paint(0, true);
            updateProgress();
            window.requestAnimationFrame(tick);
        });
    </script>
</x-guest-layout>
