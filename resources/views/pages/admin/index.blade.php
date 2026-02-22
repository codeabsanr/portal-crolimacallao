@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="inst-section-title">Intranet institucional</h2>
                <p class="text-slate-600 mt-2">Panel privado para gestión de cuenta, pagos, notificaciones y trámites del colegiado.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-card title="Perfil colegiado" icon="badge" description="Revise datos personales, registro y estado de habilidad profesional." link="{{ route('profile.edit') }}" linkText="Ver perfil" />
                <x-card title="Pagos y cuotas" icon="payments" description="Consulte estado de aportes, historial y cronograma de pagos." link="{{ route('tramites') }}" linkText="Ver estado" />
                <x-card title="Notificaciones" icon="notifications" description="Avisos administrativos y comunicados dirigidos a su cuenta." link="{{ route('actualidad.comunicados') }}" linkText="Revisar" />
            </div>

            <div class="mt-8 rounded-xl border border-primary/25 bg-white p-6 md:p-8 shadow-[0_20px_34px_-30px_rgba(15,23,42,0.5)]">
                <p class="text-xs uppercase tracking-[0.14em] text-primary font-bold">Sesión activa</p>
                <h3 class="text-secondary text-2xl font-black mt-2">Acceso privado verificado</h3>
                <p class="text-slate-700 mt-3">Esta sección está protegida con autenticación y corresponde al entorno interno del Portal del Colegiado.</p>
            </div>
        </div>
    </section>
</main>
@endsection

