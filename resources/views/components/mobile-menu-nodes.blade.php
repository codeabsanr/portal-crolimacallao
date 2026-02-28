@props([
    'nodes' => [],
    'level' => 1,
])

@php
    $rowPadding = match ($level) {
        1 => 'px-1',
        2 => 'px-4',
        3 => 'px-6',
        default => 'px-8',
    };

    $rowTextSize = match ($level) {
        1 => 'text-[1.35rem]',
        2 => 'text-[1.2rem]',
        3 => 'text-[1.08rem]',
        default => 'text-[1rem]',
    };

    $rowBg = match ($level) {
        1 => '',
        2 => 'bg-white/7',
        3 => 'bg-white/12',
        default => 'bg-white/16',
    };
@endphp

<ul {{ $attributes->class([$level === 1 ? '' : 'border-t border-white/15']) }}>
    @foreach ($nodes as $node)
        @php
            $hasChildren = !empty($node['children']) && is_array($node['children']);
            $nodeKey = $node['key'] ?? ('node-' . $level . '-' . $loop->index);
            $nodeLabel = $node['label'] ?? '';
            $nodeIcon = $node['icon'] ?? null;
            $nodeHref = $node['href'] ?? null;
        @endphp

        <li class="border-b border-white/20 {{ $rowBg }}">
            @if ($hasChildren)
                <button type="button"
                    @click="toggleNode('{{ $nodeKey }}')"
                    class="inline-flex min-h-[52px] w-full items-center justify-between {{ $rowPadding }} {{ $rowTextSize }} font-semibold tracking-tight text-white"
                    :aria-expanded="isNodeOpen('{{ $nodeKey }}').toString()"
                    aria-controls="mobile-node-{{ $nodeKey }}">
                    <span class="inline-flex items-center gap-2.5 text-left">
                        @if ($nodeIcon)
                            <span class="material-icons-outlined text-[1.4rem] leading-none">{{ $nodeIcon }}</span>
                        @endif
                        <span>{{ $nodeLabel }}</span>
                    </span>
                    <span class="material-icons-outlined text-[1.6rem] leading-none"
                        x-text="isNodeOpen('{{ $nodeKey }}') ? 'expand_less' : 'expand_more'"></span>
                </button>

                <div id="mobile-node-{{ $nodeKey }}"
                    x-show="isNodeOpen('{{ $nodeKey }}')"
                    x-transition.opacity.duration.150ms>
                    <x-mobile-menu-nodes :nodes="$node['children']" :level="$level + 1" />
                </div>
            @else
                <a @click="closeMenu()" href="{{ $nodeHref }}"
                    class="inline-flex min-h-[50px] w-full items-center justify-between {{ $rowPadding }} {{ $rowTextSize }} font-medium text-white/95">
                    <span class="inline-flex items-center gap-2.5">
                        @if ($nodeIcon)
                            <span class="material-icons-outlined text-[1.3rem] leading-none">{{ $nodeIcon }}</span>
                        @elseif ($level >= 3)
                            <span class="text-white/85">•</span>
                        @endif
                        <span>{{ $nodeLabel }}</span>
                    </span>
                    @if ($level <= 2)
                        <span class="material-icons-outlined text-[1.4rem] leading-none">chevron_right</span>
                    @endif
                </a>
            @endif
        </li>
    @endforeach
</ul>
