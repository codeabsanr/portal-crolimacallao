@props([
    'ads' => [],
    'panelClass' => '',
    'label' => 'Publicidad',
    'minHeightClass' => 'min-h-[560px]',
    'mediaMinHeightClass' => 'min-h-[360px]',
    'transparent' => false,
])

<aside
    x-data="{
        items: @js($ads),
        current: 0,
        timer: null,
        progressKey: 0,
        next() {
            this.current = (this.current + 1) % this.items.length;
            this.progressKey++;
        },
        go(index) {
            this.current = index;
            this.progressKey++;
        },
        start() {
            this.stop();
            this.progressKey++;
            this.timer = setInterval(() => this.next(), 6500);
        },
        stop() { if (this.timer) clearInterval(this.timer); }
    }"
    x-init="start()"
    @mouseenter="stop()"
    @mouseleave="start()"
    class="inst-card overflow-hidden h-full {{ $minHeightClass }} {{ $panelClass }} {{ $transparent ? 'border-white/35 bg-transparent shadow-none' : 'border-primary/20 bg-white' }}">
    <div class="h-full flex flex-col">
        <div class="px-4 py-3 border-b {{ $transparent ? 'border-white/30 bg-white/88 backdrop-blur-sm' : 'border-slate-200 bg-slate-50' }}">
            <div class="flex items-center justify-center gap-2" aria-label="Control de anuncios">
                <template x-for="(item, idx) in items" :key="idx">
                    <button type="button" @click="go(idx)"
                        class="relative h-2.5 w-2.5 rounded-full border transition-[border-color,transform] duration-300 ease-[cubic-bezier(.2,.7,.2,1)] overflow-hidden hover:scale-105"
                        :style="current === idx ? `border-color: ${item.color};` : ''"
                        :class="current === idx ? 'bg-white' : 'bg-slate-200 border-slate-300 hover:border-primary'"
                        :aria-label="`Ir al anuncio ${idx + 1}`">
                        <template x-if="current === idx">
                            <span class="absolute inset-0 rounded-full hero-dot-progress"
                                :key="`dot-${idx}-${progressKey}`"
                                :style="`background-color: ${item.color}; animation: heroDotDrain 6500ms linear forwards;`"></span>
                        </template>
                    </button>
                </template>
            </div>
        </div>

        <div class="relative flex-1 {{ $mediaMinHeightClass }} overflow-hidden">
            <template x-if="!items[current].simulada">
                <img :src="items[current].imagen" :alt="items[current].titulo" class="absolute inset-0 h-full w-full object-cover object-center" />
            </template>
            <template x-if="items[current].simulada">
                <div class="absolute inset-0">
                    <div class="absolute inset-0" :style="`background: linear-gradient(180deg, ${items[current].color} 0%, #0f172a 130%);`"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(255,255,255,0.2),transparent_34%),radial-gradient(circle_at_85%_78%,rgba(255,255,255,0.14),transparent_42%)]"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center px-5">
                        <div>
                            <span class="material-icons-outlined text-white/90 text-5xl" x-text="items[current].icono"></span>
                            <p class="text-white text-lg font-black mt-3" x-text="items[current].simulada_titulo"></p>
                        </div>
                    </div>
                </div>
            </template>
            <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/12 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 text-white">
                <p class="inline-flex items-center px-2 py-1 text-[10px] uppercase tracking-[0.12em] font-bold rounded border border-white/45 bg-black/25"
                    x-text="items[current].tipo"></p>
                <p class="text-[11px] uppercase tracking-[0.12em] font-bold text-white/90" x-text="items[current].fecha"></p>
                <p class="mt-1 text-xl font-black leading-tight drop-shadow" x-text="items[current].titulo"></p>
            </div>
        </div>

        @if ($transparent)
            <div class="p-4 border-t border-white/30 bg-white/88 backdrop-blur-sm">
        @else
            <div class="p-4 border-t border-slate-200" :style="`background-color: ${items[current].superficie}`">
        @endif
            <p class="text-sm text-slate-700" x-text="items[current].descripcion"></p>
            <div class="mt-4 grid grid-cols-2 gap-2">
                <a :href="items[current].cta1_link" class="inst-btn !py-2 !px-2 !text-xs !text-center !text-white"
                    :style="`background-color: ${items[current].color}`" x-text="items[current].cta1_texto"></a>
                <a :href="items[current].cta2_link" class="inst-btn-secondary !py-2 !px-2 !text-xs !text-center hover:-translate-y-[1px]" x-text="items[current].cta2_texto"></a>
            </div>
            </div>
    </div>
</aside>
