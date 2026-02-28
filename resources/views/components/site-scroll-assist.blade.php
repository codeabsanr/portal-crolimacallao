<div
    x-data="{
        y: 0,
        hasHistory: false,
        nearFooter: false,
        openHelp: false,
        dockOnDark: false,
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
        get showScrollToggle() {
            return this.showDown || this.showUp;
        },
        get showBack() {
            return this.hasHistory;
        },
        get showHelpButton() {
            return this.y > 120 || this.openHelp;
        },
        get visible() {
            return (this.showBack || this.showDown || this.showUp || this.showHelpButton) && (!this.nearFooter || this.openHelp);
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

                this.updateDockSurface();
            };

            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });
            window.addEventListener('resize', onScroll, { passive: true });
        },
        isColorDark(color) {
            const match = color?.match(/rgba?\((\d+),\s*(\d+),\s*(\d+)/i);
            if (!match) return false;

            const r = Number(match[1]) / 255;
            const g = Number(match[2]) / 255;
            const b = Number(match[3]) / 255;
            const luminance = (0.2126 * r) + (0.7152 * g) + (0.0722 * b);

            return luminance < 0.5;
        },
        resolveBackgroundColor(el) {
            let node = el;
            while (node && node !== document.body) {
                const bg = window.getComputedStyle(node).backgroundColor;
                if (bg && bg !== 'transparent' && bg !== 'rgba(0, 0, 0, 0)') {
                    return bg;
                }
                node = node.parentElement;
            }

            return window.getComputedStyle(document.body).backgroundColor;
        },
        isDarkSurface(el) {
            if (!el) return false;

            if (el.closest('.inst-bg-brand-grid, .bg-primary, .bg-primary-dark, .bg-secondary, .inst-page-hero')) {
                return true;
            }

            const bg = this.resolveBackgroundColor(el);
            return this.isColorDark(bg);
        },
        updateDockSurface() {
            const sampleY = Math.max(window.innerHeight - 86, 0);
            const leftSurface = document.elementFromPoint(24, sampleY);
            const rightSurface = document.elementFromPoint(window.innerWidth - 24, sampleY);

            this.dockOnDark = this.isDarkSurface(leftSurface) || this.isDarkSurface(rightSurface);
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
        },
        handleScrollAssist() {
            if (this.showDown) {
                this.goDown();
                return;
            }

            if (this.showUp) {
                this.goTop();
            }
        }
    }"
    x-cloak
    x-show="visible"
    x-transition.opacity.duration.180ms
    class="fixed inset-x-0 bottom-4 z-[80]"
>
    <div class="relative w-full px-0 sm:px-2">
        <div
            class="absolute left-0 bottom-0 pl-0 sm:pl-1"
            x-cloak
            x-show="showBack"
            x-transition.opacity.duration.160ms
        >
            <button
                type="button"
                @click="goBack"
                class="inst-bottom-dock-btn inst-bottom-dock-btn--edge-left"
                :class="dockOnDark ? 'inst-bottom-dock-btn--surface-dark' : ''"
                aria-label="Volver a la página anterior"
            >
                <span class="material-icons-outlined text-[18px] leading-none">arrow_back</span>
                <span class="hidden sm:inline">Volver</span>
            </button>
        </div>

        <div class="absolute right-0 bottom-0 pr-0 sm:pr-1">
            <div class="relative">
                <div
                    x-cloak
                    x-show="openHelp"
                    x-transition.opacity.duration.180ms
                    @click.outside="openHelp = false"
                    class="inst-help-panel absolute right-0 bottom-full mb-2 w-[min(92vw,22rem)]"
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

                <div class="inst-bottom-dock inst-bottom-dock--right-only">
                    <button
                        type="button"
                        x-show="showScrollToggle"
                        x-transition.opacity.duration.160ms
                        @click="handleScrollAssist()"
                        class="inst-bottom-dock-btn inst-bottom-dock-btn--icon-square"
                        :class="dockOnDark ? 'inst-bottom-dock-btn--surface-dark' : ''"
                        :aria-label="showDown ? 'Desplazar hacia abajo' : 'Volver arriba'"
                    >
                        <span class="material-icons-outlined text-[20px] leading-none" x-text="showDown ? 'expand_more' : 'expand_less'"></span>
                    </button>

                    <button
                        type="button"
                        x-show="showHelpButton"
                        x-transition.opacity.duration.160ms
                        @click="openHelp = !openHelp"
                        :aria-expanded="openHelp ? 'true' : 'false'"
                        class="inst-bottom-dock-btn inst-bottom-dock-btn--help"
                        aria-label="Abrir ayuda"
                    >
                        <span class="material-icons-outlined text-[18px] leading-none" x-text="openHelp ? 'close' : 'support_agent'"></span>
                        <span class="hidden sm:inline" x-text="openHelp ? 'Cerrar' : 'Ayuda'"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


