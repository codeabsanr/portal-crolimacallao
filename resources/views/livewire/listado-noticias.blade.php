<div>
    <div class="space-y-6">
        @for ($i = 0; $i < ($limit ?? 3); $i++)
            <article class="flex flex-col sm:flex-row gap-4 group cursor-pointer">
                <div
                    class="bg-primary-tint w-full sm:w-32 h-24 flex-shrink-0 rounded-sm flex items-center justify-center text-slate-400">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" class="h-16 opacity-50" loading="lazy"
                        alt="Noticia {{$i}}">
                </div>
                <div>
                    <span class="text-sm font-semibold text-primary mb-1 block">ACTUALIDAD</span>
                    <h3
                        class="text-xl font-bold text-slate-800 group-hover:text-primary transition-colors mb-2">
                        Título de noticia de ejemplo {{ $i + 1 }}
                    </h3>
                    <span class="text-sm text-slate-500">Hace {{ $i + 1 }} días</span>
                </div>
            </article>
        @endfor
    </div>

    @if(!isset($limit))
        <div class="mt-8 flex justify-center">
            <!-- Paginación placeholder -->
            <span class="text-sm text-gray-500">Página 1 de 5</span>
        </div>
    @endif
</div>


