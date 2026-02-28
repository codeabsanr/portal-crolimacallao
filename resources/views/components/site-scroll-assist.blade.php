<div
    x-data="{
        y: 0,
        hasHistory: false,
        nearFooter: false,
        openHelp: false,
        footerEl: null,
        get canScroll() {
            return (document.documentElement.scrollHeight - window.innerHeight) > 140;
        },
        get showDown() {
            return this.canScroll && this.y < 220;
        },
        get showUp() {
            return this.canScroll && this.y >= 220;
        },
        get showBack() {
            return this.hasHistory;
        },
        get visible() {
            return !this.nearFooter || this.openHelp;
        },
        init() {
            this.y = window.scrollY || 0;
            this.hasHistory = window.history.length > 1;
            this.footerEl = document.querySelector('footer');

            const onScroll = () => {
                this.y = window.scrollY || 0;
                if (this.footerEl) {
                    const rect = this.footerEl.getBoundingClientRect();
                    this.nearFooter = rect.top <= (window.innerHeight - 56);
                }
            };

            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });
            window.addEventListener('resize', onScroll, { passive: true });
        },
        goBack() {
            if (!this.showBack) return;
            window.history.back();
        },
        goDown() {
            window.scrollBy({ top: Math.max(window.innerHeight * 0.78, 360), behavior: 'smooth' });
        },
        goTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }"
    x-cloak
    x-show="visible"
    x-transition.opacity.duration.180ms
    class="fixed inset-x-0 bottom-4 z-[80] flex justify-center px-3 sm:px-4"
>
    <div class="w-full max-w-fit">
        <div
            x-cloak
            x-show="openHelp"
            x-transition.opacity.duration.180ms
            @click.outside="openHelp = false"
            class="inst-help-panel mb-2 w-[min(92vw,22rem)]"
            role="dialog"
            aria-label="Canales de ayuda"
        >
            <div class="border-b border-white/20 px-4 py-3">
                <p class="text-sm font-bold uppercase tracking-[0.12em] text-brand-gold-light">Ayuda</p>
                <p class="mt-1 text-base font-semibold text-white">Canales de atención rápida</p>
            </div>
            <div class="p-3">
                <a href="{{ route('tramites.faq') }}" class="inst-help-link">
                    <span class="material-icons-outlined text-brand-gold-light text-[1.1rem]">help_center</span>
                    <span class="flex-1">Preguntas frecuentes</span>
                </a>
                <a href="https://wa.me/51982520891" target="_blank" rel="noopener noreferrer" class="inst-help-link">
                    <span class="material-icons-outlined text-brand-gold-light text-[1.1rem]">chat</span>
                    <span class="flex-1">WhatsApp +51 982 520 891</span>
                </a>
                <a href="mailto:tramitedocumentario@crolimacallao.org.pe" class="inst-help-link">
                    <span class="material-icons-outlined text-brand-gold-light text-[1.1rem]">mail</span>
                    <span class="flex-1 break-all">tramitedocumentario@crolimacallao.org.pe</span>
                </a>
            </div>
        </div>

        <div class="inst-bottom-dock">
            <button
                type="button"
                @click="goBack"
                x-show="showBack"
                class="inst-bottom-dock-btn"
                aria-label="Volver a la página anterior"
            >
                <span class="material-icons-outlined text-[18px] leading-none">arrow_back</span>
                <span class="hidden sm:inline">Volver</span>
            </button>

            <div class="inst-bottom-dock-pill">
                <button
                    type="button"
                    x-show="showDown"
                    @click="goDown"
                    class="inst-bottom-dock-segment"
                    aria-label="Desplazar hacia abajo"
                >
                    <span class="inst-scroll-assist-label">Desplazar</span>
                    <span class="material-icons-outlined text-[18px] leading-none">expand_more</span>
                </button>

                <button
                    type="button"
                    x-show="showUp"
                    @click="goTop"
                    class="inst-bottom-dock-segment"
                    aria-label="Volver arriba"
                >
                    <span class="inst-scroll-assist-label">Subir</span>
                    <span class="material-icons-outlined text-[18px] leading-none">expand_less</span>
                </button>
            </div>

            <button
                type="button"
                @click="openHelp = !openHelp"
                :aria-expanded="openHelp ? 'true' : 'false'"
                class="inst-bottom-dock-btn"
                aria-label="Abrir ayuda"
            >
                <span class="material-icons-outlined text-[18px] leading-none" x-text="openHelp ? 'close' : 'help'"></span>
                <span class="hidden sm:inline" x-text="openHelp ? 'Cerrar' : 'Ayuda'"></span>
            </button>
        </div>
    </div>
</div>


