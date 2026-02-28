@props([
    'ads'                => [],
    'panelClass'         => '',
    'label'              => 'Publicidad',
    'minHeightClass'     => 'min-h-[520px]',
    'mediaMinHeightClass'=> 'min-h-[340px]',
    'transparent'        => false,
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
    class="flex flex-col {{ $panelClass }}">

    {{-- ── Card visual (imagen + overlay) ─────────────────────── --}}
    <div class="relative {{ $minHeightClass }} rounded-sm overflow-hidden flex-1
                shadow-[0_22px_40px_-20px_rgba(0,0,0,0.6)] ring-1 ring-white/10">

        <template x-for="(item, idx) in items" :key="idx">
            <div class="absolute inset-0 transition-all duration-500 ease-[cubic-bezier(.2,.7,.2,1)]"
                 :class="idx === current ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-1 pointer-events-none'">

                {{-- Fondo siempre oscuro (para imágenes con transparencia / contain) --}}
                <div class="absolute inset-0 bg-slate-900"></div>

                {{-- Imagen: contain para mostrar flyers completos --}}
                <template x-if="!item.simulada">
                    <img :src="item.imagen" :alt="item.titulo"
                         class="absolute inset-0 h-full w-full object-contain object-center" />
                </template>

                {{-- Fondo simulado (cuando no hay imagen real) --}}
                <template x-if="item.simulada">
                    <div class="absolute inset-0">
                        <div class="absolute inset-0"
                             :style="`background: linear-gradient(160deg, ${item.color} 0%, #0f172a 130%);`"></div>
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.18),transparent_38%),radial-gradient(circle_at_80%_75%,rgba(255,255,255,0.12),transparent_44%)]"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-center px-5">
                            <div>
                                <span class="material-icons-outlined text-white/80 text-5xl" x-text="item.icono"></span>
                                <p class="text-white text-lg font-black mt-3" x-text="item.simulada_titulo"></p>
                            </div>
                        </div>
                    </div>
                </template>

                {{-- Badge de categoría — esquina superior izquierda --}}
                <div class="absolute top-3 left-3 z-10">
                    <span class="inline-flex px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.14em]
                                 text-white rounded-sm shadow"
                          :style="`background-color: ${item.color};`"
                          x-text="item.tipo"></span>
                </div>

                {{-- Indicador de estado (fecha/urgente) — equina superior derecha --}}
                <div class="absolute top-3 right-3 z-10">
                    <span class="inline-flex px-2.5 py-1.5 text-[10px] font-bold uppercase tracking-[0.1em]
                                 text-white/90 bg-black/45 backdrop-blur-sm rounded-sm"
                          x-text="item.fecha"></span>
                </div>
            </div>
        </template>

        {{-- Dots navegación --}}
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 z-20
                    flex items-center gap-2 rounded-full border border-white/30
                    bg-black/35 px-3 py-1.5 backdrop-blur-sm">
            <template x-for="(item, idx) in items" :key="idx">
                <button type="button" @click="go(idx)"
                    class="relative overflow-hidden rounded-full border border-white
                           transition-all duration-300 ease-[cubic-bezier(.2,.7,.2,1)]"
                    :class="current === idx ? 'h-2.5 w-6 bg-white border-white' : 'h-2.5 w-2.5 bg-white/35 hover:bg-white/60'"
                    :aria-label="`Ir al anuncio ${idx + 1}`">
                    <template x-if="current === idx">
                        <span class="absolute inset-0 rounded-full opacity-0"
                              :key="`dot-${idx}-${progressKey}`"
                              :style="`background-color: ${item.color}; animation: heroDotDrain 6500ms linear forwards;`"></span>
                    </template>
                </button>
            </template>
        </div>
    </div>

    {{-- ── CTAs fuera del card ──────────────────────────────────── --}}
    <div class="mt-2 grid grid-cols-2 gap-2">
        <a :href="items[current].cta1_link"
           class="flex items-center justify-center min-h-[42px] px-3 py-2.5
                  text-[11px] font-black uppercase tracking-[0.1em] text-white
                  transition-all duration-200 hover:opacity-90 hover:-translate-y-[1px] shadow-sm"
           :style="`background-color: ${items[current].color};`"
           x-text="items[current].cta1_texto"></a>
        <a :href="items[current].cta2_link"
           class="flex items-center justify-center min-h-[42px] px-3 py-2.5
                  text-[11px] font-black uppercase tracking-[0.1em]
                  bg-white border border-slate-300 text-slate-800
                  transition-all duration-200 hover:border-slate-400 hover:-translate-y-[1px] shadow-sm"
           x-text="items[current].cta2_texto"></a>
    </div>
</aside>
