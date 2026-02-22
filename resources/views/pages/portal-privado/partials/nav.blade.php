<div class="flex flex-wrap items-center gap-2">
    <a href="{{ route('portal.colegiado.perfil') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs {{ request()->routeIs('portal.colegiado.perfil') ? '!bg-primary !text-white !border-primary' : '' }}">
        Perfil
    </a>
    <a href="{{ route('portal.colegiado.tramites') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs {{ request()->routeIs('portal.colegiado.tramites') ? '!bg-primary !text-white !border-primary' : '' }}">
        Tramites
    </a>
    <a href="{{ route('portal.colegiado.pagos') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs {{ request()->routeIs('portal.colegiado.pagos') ? '!bg-primary !text-white !border-primary' : '' }}">
        Pagos
    </a>
    <a href="{{ route('portal.colegiado.documentos') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs {{ request()->routeIs('portal.colegiado.documentos') ? '!bg-primary !text-white !border-primary' : '' }}">
        Documentos
    </a>
</div>
