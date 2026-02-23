<div
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    class="fixed bottom-4 right-4 z-[70] sm:bottom-5 sm:right-5"
>
    <div
        x-cloak
        x-show="open"
        x-transition.opacity.duration.200ms
        @click.outside="open = false"
        id="help-widget-panel"
        class="inst-help-panel mb-3 w-[min(90vw,20rem)]"
        role="dialog"
        aria-label="Canales de ayuda"
    >
        <div class="border-b border-white/20 px-4 py-3">
            <p class="text-sm font-bold uppercase tracking-[0.12em] text-brand-gold-light">Ayuda</p>
            <p class="mt-1 text-base font-semibold text-white">Te guiamos paso a paso</p>
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

    <button
        type="button"
        @click="open = !open"
        class="inst-help-fab"
        :class="open ? 'is-open' : 'is-idle'"
        :aria-expanded="open ? 'true' : 'false'"
        aria-controls="help-widget-panel"
        aria-label="Abrir ayuda"
    >
        <span class="material-icons-outlined text-[1.3rem]" x-text="open ? 'close' : 'help'"></span>
        <span class="text-sm font-bold">Ayuda</span>
    </button>
</div>
