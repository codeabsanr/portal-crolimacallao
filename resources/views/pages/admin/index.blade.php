@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-card title="Perfil colegiado" icon="badge" description="Revise sus datos de registro, vigencia y condicion de habilidad." link="{{ route('login') }}" linkText="Ingresar" />
                <x-card title="Pagos y cuotas" icon="payments" description="Consulte su estado de pagos y cronograma mensual." link="{{ route('login') }}" linkText="Ver estado" />
                <x-card title="Notificaciones" icon="notifications" description="Comunicados personalizados y alertas de vencimiento." link="{{ route('login') }}" linkText="Revisar" />
            </div>

            <div class="inst-card mt-8 p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-3">Acceso restringido</h2>
                <p class="text-slate-700">Para proteger la informacion personal, el ingreso requiere credenciales registradas y correo verificado.</p>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a href="{{ route('login') }}" class="inst-btn-primary">Iniciar sesion</a>
                    <a href="{{ route('password.request') }}" class="inst-btn-secondary">Recuperar acceso</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

