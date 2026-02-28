@extends('layouts.app')

@section('meta_description', 'Portal privado del colegiado - Perfil')

@section('content')
<section class="py-10 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="inst-card p-5 md:p-6 border-primary/25">
            <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold">Portal colegiado privado</p>
            <h1 class="mt-2 text-3xl md:text-4xl font-black text-secondary">Mi perfil</h1>
            <p class="mt-2 text-text-main">Gestiona tu informacion profesional y credenciales de acceso.</p>
            @include('pages.portal-privado.partials.nav')
        </div>

        <div class="grid lg:grid-cols-3 gap-4">
            <article class="inst-card p-5 border-primary/20 lg:col-span-2">
                <h2 class="text-2xl font-black text-secondary">Datos del colegiado</h2>
                <div class="mt-4 grid sm:grid-cols-2 gap-3 text-sm">
                    <div class="border border-slate-200 bg-white p-4"><p class="text-xs font-bold uppercase tracking-[0.12em] text-text-main">Nombre</p><p class="mt-1 font-bold text-secondary">{{ auth()->user()->name }}</p></div>
                    <div class="border border-slate-200 bg-white p-4"><p class="text-xs font-bold uppercase tracking-[0.12em] text-text-main">Correo</p><p class="mt-1 font-bold text-secondary">{{ auth()->user()->email }}</p></div>
                    <div class="border border-slate-200 bg-white p-4"><p class="text-xs font-bold uppercase tracking-[0.12em] text-text-main">Estado de cuenta</p><p class="mt-1 font-bold text-emerald-700">Activa</p></div>
                    <div class="border border-slate-200 bg-white p-4"><p class="text-xs font-bold uppercase tracking-[0.12em] text-text-main">Ultimo acceso</p><p class="mt-1 font-bold text-secondary">{{ now()->format('d/m/Y H:i') }}</p></div>
                </div>
            </article>
            <article class="inst-card p-5 border-primary/20">
                <h2 class="text-xl font-black text-secondary">Acciones</h2>
                <div class="mt-4 space-y-2">
                    <a href="{{ route('profile.edit') }}" class="inst-btn-secondary !w-full !justify-between !px-4 !py-2.5 !text-xs">Editar cuenta <span class="material-icons-outlined text-base">chevron_right</span></a>
                    <a href="{{ route('portal.colegiado.documentos') }}" class="inst-btn-secondary !w-full !justify-between !px-4 !py-2.5 !text-xs">Mis documentos <span class="material-icons-outlined text-base">chevron_right</span></a>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection


