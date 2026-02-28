@props([
    'title' => 'Acceso Directo Institucional',
    'subtitle' => 'Incluye acceso directo a las 8 subpáginas institucionales.',
    'compact' => false,
])

@php
    $items = [
        ['label' => 'Quiénes Somos', 'route' => 'institucional.quienes-somos', 'description' => 'Identidad y alcance institucional.'],
        ['label' => 'Consejo Directivo', 'route' => 'institucional.consejo-directivo', 'description' => 'Gestión y cargos vigentes.'],
        ['label' => 'Reseña Histórica', 'route' => 'institucional.resena-historica', 'description' => 'Línea de tiempo institucional.'],
        ['label' => 'Símbolos', 'route' => 'institucional.simbolos', 'description' => 'Emblemas y representación oficial.'],
        ['label' => 'Compendio de Normas', 'route' => 'institucional.compendio-de-normas', 'description' => 'Consulta normativa ordenada.'],
        ['label' => 'Reglamento', 'route' => 'institucional.reglamento', 'description' => 'Documentos y resoluciones.'],
        ['label' => 'Normatividad', 'route' => 'institucional.normatividad', 'description' => 'Marco legal institucional.'],
        ['label' => 'Convenios', 'route' => 'institucional.convenios', 'description' => 'Alianzas y beneficios.'],
    ];
@endphp

<article {{ $attributes->class(['inst-card p-5 md:p-6']) }}>
    <div class="flex flex-wrap items-end justify-between gap-3 mb-5">
        <div>
            <h3 class="text-2xl font-black text-slate-900">{{ $title }}</h3>
            <p class="text-sm text-slate-600 mt-1">{{ $subtitle }}</p>
        </div>
        <a href="{{ route('institucional') }}" class="inst-btn-secondary !py-2 !px-4 !text-xs">Ver portada institucional</a>
    </div>
    <div class="grid sm:grid-cols-2 {{ $compact ? 'xl:grid-cols-2' : 'xl:grid-cols-4' }} gap-3">
        @foreach ($items as $item)
            <a href="{{ route($item['route']) }}"
                class="border border-slate-200 bg-white px-4 py-4 border-t-2 {{ request()->routeIs($item['route']) ? 'border-t-primary ring-1 ring-primary/20' : 'border-t-slate-200 hover:border-t-primary hover:bg-primary-mist' }} transition-colors">
                <p class="font-bold text-slate-900">{{ $item['label'] }}</p>
                <p class="text-xs text-slate-600 mt-1">{{ $item['description'] }}</p>
            </a>
        @endforeach
    </div>
</article>

