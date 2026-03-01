<div
    x-data="{
        y: 0,
        hasHistory: false,
        hasBackTarget: false,
        hasContextBackControl: false,
        backHref: null,
        backRevealY: 0,
        nearFooter: false,
        openHelp: false,
        dockOnDark: false,
        isMobile: false,
        navHeight: 64,
        mobileBottomOffset: 0,
        footerEl: null,
        helpRevealY: 0,
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
            return this.isMobile && this.hasBackTarget && !this.hasContextBackControl && this.y >= this.backRevealY;
        },
        get showHelpButton() {
            return this.y >= this.helpRevealY || this.openHelp;
        },
        get visible() {
            return (this.showBack || this.showDown || this.showUp || this.showHelpButton) && (!this.nearFooter || this.openHelp);
        },
        init() {
            this.y = window.scrollY || 0;
            this.footerEl = document.querySelector('footer');
            this.resolveBackContext();
            this.updateLayoutMetrics(true);

            const onScroll = () => {
                this.y = window.scrollY || 0;
                if (this.footerEl) {
                    const rect = this.footerEl.getBoundingClientRect();
                    this.nearFooter = rect.top <= (window.innerHeight - 56);
                }

                this.updateLayoutMetrics(false);
                this.updateDockSurface();
            };

            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });
            window.addEventListener('resize', () => {
                this.updateLayoutMetrics(true);
                this.updateDockSurface();
            }, { passive: true });
        },
        getCurrentPath() {
            return `${window.location.pathname}${window.location.search}`;
        },
        getInternalReferrerPath() {
            if (!document.referrer) return null;

            try {
                const refUrl = new URL(document.referrer);
                const sameOrigin = refUrl.origin === window.location.origin;
                if (!sameOrigin) return null;

                const refPath = `${refUrl.pathname}${refUrl.search}`;
                return refPath !== this.getCurrentPath() ? refPath : null;
            } catch {
                return null;
            }
        },
        resolveTrailBackPath(currentPath, internalReferrerPath) {
            const storageKey = 'inst-nav-trail';
            let trail = [];

            try {
                trail = JSON.parse(sessionStorage.getItem(storageKey) || '[]');
                if (!Array.isArray(trail)) trail = [];
            } catch {
                trail = [];
            }

            if (window.history.length <= 1 && !internalReferrerPath) {
                sessionStorage.setItem(storageKey, JSON.stringify([currentPath]));
                return null;
            }

            if (trail.length === 0 && internalReferrerPath) {
                trail.push(internalReferrerPath);
            }

            if (trail[trail.length - 1] !== currentPath) {
                trail.push(currentPath);
            }

            trail = trail.slice(-18);
            sessionStorage.setItem(storageKey, JSON.stringify(trail));

            if (trail.length < 2) return null;
            return trail[trail.length - 2] ?? null;
        },
        resolveBackContext() {
            this.hasHistory = window.history.length > 1;
            this.hasContextBackControl = !!document.querySelector('[data-inst-page-back]');

            const currentPath = this.getCurrentPath();
            const internalReferrerPath = this.getInternalReferrerPath();
            const trailBackPath = this.resolveTrailBackPath(currentPath, internalReferrerPath);

            this.backHref = trailBackPath || internalReferrerPath;
            this.hasBackTarget = !!this.backHref;
        },
        isElementVisible(el) {
            if (!el) return false;

            const styles = window.getComputedStyle(el);
            if (styles.display === 'none' || styles.visibility === 'hidden') return false;

            const rect = el.getBoundingClientRect();
            return rect.width > 0 && rect.height > 0;
        },
        resolveNavHeight() {
            const nav = document.querySelector('[data-inst-navbar-fixed]');
            if (!this.isElementVisible(nav)) {
                return 64;
            }

            return Math.max(Math.ceil(nav.getBoundingClientRect().height), 56);
        },
        resolveMobileBottomOffset() {
            if (!this.isMobile) return 0;

            const selector = '[data-inst-mobile-action-bar], .inst-mobile-action-bar';
            const bars = Array.from(document.querySelectorAll(selector));
            let maxHeight = 0;

            for (const bar of bars) {
                if (!this.isElementVisible(bar)) continue;

                const rect = bar.getBoundingClientRect();
                const isPinnedBottom = rect.bottom >= (window.innerHeight - 2) && rect.top < window.innerHeight;
                if (!isPinnedBottom) continue;

                maxHeight = Math.max(maxHeight, Math.ceil(rect.height));
            }

            return maxHeight;
        },
        updateLayoutMetrics(recalculateBackReveal = false) {
            this.isMobile = window.matchMedia('(max-width: 767px)').matches;
            this.navHeight = this.resolveNavHeight();
            this.mobileBottomOffset = this.resolveMobileBottomOffset();
            if (recalculateBackReveal || this.backRevealY <= 0) {
                this.backRevealY = this.resolveBackRevealY();
            }
            if (recalculateBackReveal || this.helpRevealY <= 0) {
                this.helpRevealY = this.resolveHelpRevealY();
            }
        },
        getAbsoluteTop(el) {
            return el.getBoundingClientRect().top + window.scrollY;
        },
        resolveHeroBottom() {
            const main = document.querySelector('main');
            const candidates = [];

            const explicitHero = document.querySelector('[data-inst-hero]');
            if (explicitHero && this.isElementVisible(explicitHero)) candidates.push(explicitHero);

            const pageHero = document.querySelector('.inst-page-hero');
            if (pageHero && this.isElementVisible(pageHero)) candidates.push(pageHero);

            if (main) {
                const firstSection = main.querySelector('section');
                if (firstSection && this.isElementVisible(firstSection)) candidates.push(firstSection);

                const brandHero = main.querySelector('.inst-bg-brand-grid');
                if (brandHero && this.isElementVisible(brandHero)) candidates.push(brandHero);
            }

            if (candidates.length === 0) return null;

            const unique = Array.from(new Set(candidates));
            const sortedByTop = unique
                .map((el) => ({
                    el,
                    top: this.getAbsoluteTop(el),
                    height: Math.ceil(el.getBoundingClientRect().height),
                }))
                .filter((item) => item.height > 80)
                .sort((a, b) => a.top - b.top);

            const hero = sortedByTop[0];
            if (!hero) return null;

            return hero.top + hero.height;
        },
        resolveBackRevealY() {
            const fallback = 240;
            const heroBottom = this.resolveHeroBottom();

            if (!heroBottom) return fallback;

            // Show back button only once the hero has been left behind plus a small buffer.
            return Math.min(Math.max(Math.round(heroBottom - this.navHeight + 24), fallback), 980);
        },
        resolveHelpRevealY() {
            const fallback = 260;
            const heroBottom = this.resolveHeroBottom();

            if (!heroBottom) return fallback;

            // Show help only once hero is out of view and content has started.
            return Math.min(Math.max(Math.round(heroBottom - this.navHeight + 28), fallback), 980);
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

            if (this.hasHistory) {
                window.history.back();
                return;
            }

            if (this.backHref) {
                window.location.assign(this.backHref);
            }
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
    x-effect="
        document.documentElement.style.setProperty(
            '--inst-scroll-assist-offset',
            visible ? (isMobile ? `calc(5rem + ${mobileBottomOffset}px)` : '5rem') : '0rem'
        );
    "
    x-transition.opacity.duration.180ms
    class="z-[80]"
>
    <div
        x-cloak
        x-show="showBack"
        x-transition.opacity.duration.160ms
        class="fixed left-0 z-[82] md:hidden"
        :style="`top: ${navHeight + 8}px;`"
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

    <div
        x-cloak
        x-show="isMobile && showHelpButton"
        x-transition.opacity.duration.160ms
        class="fixed inset-x-0 z-[82] pointer-events-none md:hidden"
        :style="`top: ${navHeight + 8}px;`"
    >
        <div class="relative mx-auto w-full max-w-7xl px-2 sm:px-3">
            <div class="flex justify-end">
                <div class="relative pointer-events-auto">
                    <x-help-quick-panel
                        x-cloak
                        x-show="openHelp"
                        x-transition.opacity.duration.180ms
                        @click.outside="openHelp = false"
                        class="absolute right-0 w-[min(92vw,22rem)] top-full mt-2"
                    />

                    <button
                        type="button"
                        @click="openHelp = !openHelp"
                        :aria-expanded="openHelp ? 'true' : 'false'"
                        class="inst-bottom-dock-btn inst-bottom-dock-btn--help"
                        aria-label="Abrir ayuda"
                    >
                        <span class="material-icons-outlined text-[18px] leading-none" x-text="openHelp ? 'close' : 'support_agent'"></span>
                        <span class="sr-only" x-text="openHelp ? 'Cerrar' : 'Ayuda'"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="fixed inset-x-0 z-[80]"
        :style="`bottom: calc(1rem + ${mobileBottomOffset}px + env(safe-area-inset-bottom));`"
    >
    <div class="relative w-full px-0 sm:px-2">
        <div
            class="absolute"
            :style="'right: 0; bottom: 0;'"
        >
            <div class="relative">
                <x-help-quick-panel
                    x-cloak
                    x-show="openHelp && !isMobile"
                    x-transition.opacity.duration.180ms
                    @click.outside="openHelp = false"
                    class="absolute right-0 bottom-full mb-2 w-[min(92vw,22rem)]"
                />

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
                        x-show="showHelpButton && !isMobile"
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
</div>


