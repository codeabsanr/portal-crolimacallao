<div
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    class="fixed bottom-4 right-4 z-[70] sm:bottom-5 sm:right-5"
>
    <x-help-quick-panel
        x-cloak
        x-show="open"
        x-transition.opacity.duration.200ms
        @click.outside="open = false"
        id="help-widget-panel"
        class="mb-3 w-[min(90vw,20rem)]"
        subtitle="Te guiamos paso a paso según el trámite que necesitas realizar."
    />

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


