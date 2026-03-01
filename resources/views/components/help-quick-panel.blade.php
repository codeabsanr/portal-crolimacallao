@props([
    'id' => null,
    'title' => 'Canales de atención rápida',
    'subtitle' => 'Elija un canal y continúe su trámite con orientación directa.',
])

<div
    @if ($id) id="{{ $id }}" @endif
    {{ $attributes->class('inst-help-panel') }}
    role="dialog"
    aria-label="Canales de ayuda"
>
    <div class="inst-help-head">
        <p class="inst-help-kicker">
            <span class="material-icons-outlined text-[1rem] leading-none">support_agent</span>
            Ayuda
        </p>
        <p class="inst-help-title">{{ $title }}</p>
        <p class="inst-help-copy">{{ $subtitle }}</p>
    </div>

    <div class="inst-help-list">
        <a href="{{ route('tramites.faq') }}" class="inst-help-link">
            <span class="inst-help-link__icon material-icons-outlined">help_center</span>
            <span class="inst-help-link__text">
                <span class="inst-help-link__title">Preguntas frecuentes</span>
                <span class="inst-help-link__meta">Resuelva dudas comunes del proceso.</span>
            </span>
            <span class="inst-help-link__chevron material-icons-outlined">chevron_right</span>
        </a>

        <a href="https://wa.me/51982520891" target="_blank" rel="noopener noreferrer" class="inst-help-link">
            <span class="inst-help-link__icon material-icons-outlined">chat</span>
            <span class="inst-help-link__text">
                <span class="inst-help-link__title">WhatsApp institucional</span>
                <span class="inst-help-link__meta">Atención directa: +51 982 520 891</span>
            </span>
            <span class="inst-help-link__chevron material-icons-outlined">chevron_right</span>
        </a>

        <a href="mailto:tramitedocumentario@crolimacallao.org.pe" class="inst-help-link">
            <span class="inst-help-link__icon material-icons-outlined">mail</span>
            <span class="inst-help-link__text">
                <span class="inst-help-link__title">Correo de trámite documentario</span>
                <span class="inst-help-link__meta break-all">tramitedocumentario@crolimacallao.org.pe</span>
            </span>
            <span class="inst-help-link__chevron material-icons-outlined">chevron_right</span>
        </a>
    </div>
</div>
