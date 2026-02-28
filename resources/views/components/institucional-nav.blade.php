@php
    $embedded = $embedded ?? false;
    $items = [
        ['label' => 'Portada Institucional', 'route' => 'institucional'],
        ['label' => 'Quiénes Somos', 'route' => 'institucional.quienes-somos'],
        ['label' => 'Consejo Directivo', 'route' => 'institucional.consejo-directivo'],
        ['label' => 'Reseña Histórica', 'route' => 'institucional.resena-historica'],
        ['label' => 'Símbolos', 'route' => 'institucional.simbolos'],
        ['label' => 'Compendio de Normas', 'route' => 'institucional.compendio-de-normas'],
        ['label' => 'Reglamento', 'route' => 'institucional.reglamento'],
        ['label' => 'Normatividad', 'route' => 'institucional.normatividad'],
        ['label' => 'Convenios', 'route' => 'institucional.convenios'],
    ];
@endphp

<nav aria-label="Navegación institucional" class="{{ $embedded ? 'pt-3' : 'inst-card p-4 md:p-5 bg-primary text-white border-primary' }}">
    <h2 class="text-sm font-bold uppercase tracking-[0.16em] {{ $embedded ? 'text-primary' : 'text-brand-gold-light' }} mb-3">Institucional</h2>
    <ul class="space-y-1">
        @foreach ($items as $item)
            @php($active = request()->routeIs($item['route']))
            <li>
                <a href="{{ route($item['route']) }}"
                    class="flex items-center justify-between px-3 py-2.5 text-sm font-semibold transition-colors border-l-2 {{ $embedded
                        ? ($active
                            ? 'text-primary border-primary bg-primary/5'
                            : 'text-slate-700 border-transparent hover:text-primary hover:bg-primary-mist')
                        : ($active
                            ? 'text-white border-brand-gold-light bg-white/10'
                            : 'text-white/90 border-transparent hover:text-white hover:bg-white/10') }}">
                    <span>{{ $item['label'] }}</span>
                    <span class="material-icons-outlined text-base opacity-70">chevron_right</span>
                </a>
            </li>
        @endforeach
    </ul>
</nav>

