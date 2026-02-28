@props(['heroAds' => []])

<section class="relative overflow-hidden inst-bg-brand-grid border-b border-slate-200 min-h-[88vh] md:min-h-[calc(100vh-7rem)]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/foto_gestion_2025_2028.jpg') }}" alt="Consejo Regional CRO III Lima-Callao"
            id="hero-bg-council" class="h-full w-full object-cover" style="object-position: center 12%;" />
        <div class="absolute inset-0 bg-[linear-gradient(102deg,rgba(255,255,255,0.88)_0%,rgba(255,255,255,0.7)_34%,rgba(255,245,248,0.34)_62%,rgba(255,255,255,0.08)_100%)]"
            style="clip-path: polygon(0 48%, 38% 52%, 100% 62%, 100% 100%, 0 100%);"></div>
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(255,255,255,0.02)_0%,rgba(255,255,255,0.14)_46%,rgba(255,255,255,0.56)_68%,rgba(255,255,255,0.92)_84%,rgba(255,255,255,0.98)_100%),radial-gradient(circle_at_12%_90%,rgba(255,250,252,0.98)_0%,rgba(255,250,252,0.86)_24%,rgba(255,250,252,0)_54%),radial-gradient(circle_at_42%_92%,rgba(255,247,250,0.96)_0%,rgba(255,247,250,0.86)_20%,rgba(255,247,250,0)_50%),radial-gradient(circle_at_74%_90%,rgba(255,247,250,0.9)_0%,rgba(255,247,250,0.76)_22%,rgba(255,247,250,0)_50%),radial-gradient(circle_at_95%_88%,rgba(255,247,250,0.84)_0%,rgba(255,247,250,0.68)_20%,rgba(255,247,250,0)_48%)]"
            style="clip-path: polygon(0 48%, 38% 52%, 100% 62%, 100% 100%, 0 100%);"></div>
    </div>
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-6 md:pt-8 md:pb-8 relative z-10 min-h-[inherit] flex items-end">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 md:gap-8 lg:gap-10 w-full">
            <div class="relative min-h-[300px] md:min-h-[320px] flex items-end justify-start py-2 md:flex-1">
                <div
                    class="w-full max-w-2xl rounded-md border border-slate-300/80 bg-white/90 backdrop-blur-sm p-4 sm:p-6 md:p-7 shadow-[0_20px_40px_-28px_rgba(15,23,42,0.58)]">
                    <div
                        class="inline-flex items-center px-3 py-1 mb-4 text-[10px] sm:text-[11px] font-bold tracking-[0.14em] text-primary-dark uppercase bg-white border border-slate-300 rounded-md">
                        Portal institucional
                    </div>
                    <h1
                        class="mb-4 leading-[1.08] tracking-[-0.02em] text-primary-dark text-[1.8rem] sm:text-[2.15rem] lg:text-[2.4rem] xl:text-[2.55rem]">
                        Servicios y trámites para la
                        <span class="block text-[#9a6600]">Comunidad Obstétrica</span>
                    </h1>
                    <p
                        class="text-text-main mb-6 max-w-xl text-[0.92rem] sm:text-[0.98rem] md:text-[1rem] leading-relaxed">
                        Bienvenido al portal del CRO III Lima-Callao. Realice sus consultas, inscripciones y trámites
                        administrativos de manera clara y segura.
                    </p>
                    <div
                        class="inst-card p-2 max-w-xl flex flex-col sm:flex-row gap-2 border border-slate-300 bg-white transition-[box-shadow,border-color] duration-300 ease-[cubic-bezier(.2,.7,.2,1)] hover:border-primary/35 hover:shadow-[0_10px_26px_-16px_rgba(15,23,42,0.46)]">
                        <div class="relative flex-grow">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-icons-outlined text-primary/55">search</span>
                            </div>
                            <input
                                class="inst-input !border-transparent !shadow-none !py-3 !pl-12 placeholder:!text-text-main focus:!ring-primary/30"
                                placeholder="¿Qué trámite desea realizar hoy?" type="text" />
                        </div>
                        <button
                            class="inst-btn-primary !px-6 !text-sm w-full sm:w-auto hover:-translate-y-[1px]">Buscar</button>
                    </div>
                    <p class="mt-4 text-[0.78rem] sm:text-sm text-text-main">
                        Ejemplos: <a
                            class="underline text-primary transition-colors duration-200 hover:text-primary-dark"
                            href="{{ route('tramites') }}#colegiatura">Colegiatura</a>,
                        <a class="underline text-primary transition-colors duration-200 hover:text-primary-dark"
                            href="{{ route('tramites') }}#habilidad">Habilidad profesional</a>,
                        <a class="underline text-primary transition-colors duration-200 hover:text-primary-dark"
                            href="{{ route('tramites') }}#registros">Certificados</a>
                    </p>
                </div>
            </div>
            <x-home.hero-publicidad-vertical :ads="$heroAds" label="Publicidad" :transparent="true"
                min-height-class="min-h-[430px]" media-min-height-class="min-h-[250px]"
                panel-class="hidden md:block w-full md:w-[280px] self-end md:ml-auto border-white/30 shadow-[0_22px_40px_-28px_rgba(2,6,23,0.7)]" />
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div id="hero-scroll-indicator" class="absolute bottom-5 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center gap-1
                text-text-main pointer-events-none select-none transition-opacity duration-500" aria-hidden="true">
        <span class="text-[9px] font-bold uppercase tracking-[0.18em]">Desplazar</span>
        <span class="material-icons-outlined text-xl animate-bounce">expand_more</span>
    </div>
</section>

<script>
    (function () {
        var el = document.getElementById('hero-scroll-indicator');
        if (!el) return;
        var hidden = false;
        window.addEventListener('scroll', function () {
            if (window.scrollY > 60 && !hidden) {
                el.style.opacity = '0';
                hidden = true;
            } else if (window.scrollY <= 60 && hidden) {
                el.style.opacity = '1';
                hidden = false;
            }
        }, { passive: true });
    })();
</script>

<section class="md:hidden bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <x-home.hero-publicidad-vertical :ads="$heroAds" label="Publicidad" :transparent="false"
            min-height-class="min-h-[370px]" media-min-height-class="min-h-[190px]"
            panel-class="w-full border-slate-200 shadow-[0_16px_30px_-24px_rgba(2,6,23,0.45)]" />
    </div>
</section>

<script>
    (function () {
        if (window.__heroFaceAutoCropInit) {
            return;
        }
        window.__heroFaceAutoCropInit = true;

        function clamp(value, min, max) {
            return Math.min(max, Math.max(min, value));
        }

        function setDefaultPosition(image) {
            image.style.objectPosition = 'center 12%';
        }

        function applyFacePosition(image, faces, imageHeight) {
            if (!faces || faces.length === 0 || !imageHeight) {
                setDefaultPosition(image);
                return;
            }

            const avgFaceCenterY = faces.reduce((sum, face) => {
                return sum + (face.y + (face.height / 2));
            }, 0) / faces.length;

            const ratio = avgFaceCenterY / imageHeight;
            const posY = clamp((ratio * 100) - 16, 6, 24);
            image.style.objectPosition = `center ${posY}%`;
        }

        function loadScript(src) {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.async = true;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        async function detectFacesWithTrackingJs(image) {
            await loadScript('https://cdnjs.cloudflare.com/ajax/libs/tracking.js/1.1.3/tracking-min.js');
            await loadScript('https://cdnjs.cloudflare.com/ajax/libs/tracking.js/1.1.3/data/face-min.js');

            return new Promise((resolve) => {
                const tracker = new tracking.ObjectTracker('face');
                tracker.setInitialScale(4);
                tracker.setStepSize(2);
                tracker.setEdgesDensity(0.1);

                let resolved = false;
                tracker.on('track', (event) => {
                    if (resolved) {
                        return;
                    }
                    resolved = true;
                    resolve(event.data || []);
                });

                tracking.track('#hero-bg-council', tracker);
                setTimeout(() => {
                    if (!resolved) {
                        resolved = true;
                        resolve([]);
                    }
                }, 1600);
            });
        }

        async function initHeroFaceCrop() {
            const image = document.getElementById('hero-bg-council');
            if (!image) {
                return;
            }

            const onReady = async () => {
                try {
                    const faces = await detectFacesWithTrackingJs(image);
                    applyFacePosition(image, faces, image.clientHeight);
                } catch (error) {
                    setDefaultPosition(image);
                }
            };

            if (image.complete) {
                onReady();
            } else {
                image.addEventListener('load', onReady, { once: true });
                image.addEventListener('error', () => setDefaultPosition(image), { once: true });
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initHeroFaceCrop, { once: true });
        } else {
            initHeroFaceCrop();
        }
    })();
</script>


