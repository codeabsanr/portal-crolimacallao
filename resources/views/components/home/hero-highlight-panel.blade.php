@props([
    'heroHighlights' => [],
    'panelClass' => '',
])

<aside
    x-data="{
        items: @js($heroHighlights),
        current: 0,
        timer: null,
        next() { this.current = (this.current + 1) % this.items.length; },
        go(index) { this.current = index; },
        start() {
            this.timer = setInterval(() => this.next(), 6000);
        },
        stop() {
            if (this.timer) clearInterval(this.timer);
        }
    }"
    x-init="start()"
    @mouseenter="stop()"
    @mouseleave="start()"
    class="inst-card overflow-hidden border-primary/20 bg-white {{ $panelClass }}">
    <div class="h-full flex flex-col">
        <div class="grid grid-cols-5 gap-1.5 p-3 bg-slate-50 border-b border-slate-200">
            <template x-for="(item, idx) in items" :key="idx">
                <button type="button" @click="go(idx)"
                    class="h-9 border text-[10px] font-bold uppercase tracking-[0.08em] px-1 transition-all inline-flex items-center justify-center gap-1"
                    :style="current === idx ? `background-color: ${item.color}; border-color: ${item.color}; color: white;` : ''"
                    :class="current !== idx ? 'bg-white text-slate-600 border-slate-300 hover:border-primary hover:text-primary' : ''">
                    <span class="material-icons-outlined text-sm" x-text="item.icono"></span>
                </button>
            </template>
        </div>

        <div class="px-4 py-3 text-white" :style="`background-color: ${items[current].color}`">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-2">
                    <span class="material-icons-outlined text-base" x-text="items[current].icono"></span>
                    <p class="text-[11px] uppercase tracking-[0.14em] font-bold" x-text="items[current].tipo"></p>
                </div>
                <span class="text-[10px] uppercase tracking-[0.12em] bg-white/20 px-2 py-1" x-text="items[current].estado"></span>
            </div>
            <p class="text-[11px] uppercase tracking-[0.12em] text-white/80 mt-1" x-text="items[current].fecha"></p>
        </div>

        <div class="relative min-h-[210px] sm:min-h-[250px] border-b border-slate-200 overflow-hidden">
            <template x-if="!items[current].simulada">
                <img :src="items[current].imagen" :alt="items[current].titulo" class="absolute inset-0 h-full w-full object-cover object-top" />
            </template>
            <template x-if="items[current].simulada">
                <div class="absolute inset-0">
                    <div class="absolute inset-0" :style="`background: linear-gradient(135deg, ${items[current].color} 0%, #0f172a 130%);`"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(255,255,255,0.18),transparent_36%),radial-gradient(circle_at_82%_74%,rgba(255,255,255,0.12),transparent_42%)]"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center px-6">
                        <div>
                            <span class="material-icons-outlined text-white/90 text-5xl" x-text="items[current].icono"></span>
                            <p class="text-white text-xl font-black mt-3" x-text="items[current].simulada_titulo"></p>
                        </div>
                    </div>
                </div>
            </template>
            <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 right-3">
                <p class="text-white text-lg sm:text-xl font-black leading-tight drop-shadow" x-text="items[current].titulo"></p>
            </div>
        </div>

        <div class="p-4 sm:p-5" :style="`background-color: ${items[current].superficie}`">
            <p class="text-sm text-slate-700" x-text="items[current].descripcion"></p>
            <p class="text-sm text-slate-700 mt-1" x-text="items[current].detalle"></p>
            <div class="mt-4 flex gap-2">
                <a :href="items[current].cta1_link" class="inst-btn !py-2 !px-3 !text-xs !text-white" :style="`background-color: ${items[current].color}`" x-text="items[current].cta1_texto"></a>
                <a :href="items[current].cta2_link" class="inst-btn-secondary !py-2 !px-3 !text-xs" x-text="items[current].cta2_texto"></a>
            </div>
        </div>
    </div>
</aside>
