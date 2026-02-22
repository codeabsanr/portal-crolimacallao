<x-guest-layout :full="true">
    <main class="min-h-screen flex flex-col lg:flex-row bg-white overflow-hidden">
        <section class="relative hidden lg:flex lg:w-[58%] overflow-hidden">
            <img src="{{ asset('assets/img/1foto_gestion_2025_2028.jpg') }}" alt="Comunidad profesional del CRO III Lima-Callao" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-[linear-gradient(165deg,rgba(35,12,20,0.5)_0%,rgba(102,2,25,0.56)_48%,rgba(20,31,58,0.62)_100%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_16%_20%,rgba(255,255,255,0.14),transparent_36%),radial-gradient(circle_at_80%_82%,rgba(186,124,0,0.24),transparent_42%)]"></div>

            <div class="relative z-10 mt-auto px-10 xl:px-16 pb-12 xl:pb-16 text-white">
                <div class="inline-flex items-center gap-3 rounded-md border border-white/20 bg-black/20 px-4 py-2 backdrop-blur-sm">
                    <span class="material-icons-outlined text-2xl text-brand-gold-light">workspace_premium</span>
                    <span class="text-sm font-bold uppercase tracking-[0.12em]">Portal Colegiado CRO III</span>
                </div>
                <h1 class="mt-6 text-5xl xl:text-6xl font-black leading-[1.03] tracking-tight max-w-2xl">Activa tu cuenta institucional.</h1>
                <p class="mt-5 max-w-xl text-xl leading-relaxed text-white/90">Registra tu acceso para gestionar trámites, capacitación y servicios digitales del Colegio Regional de Obstetras III.</p>
            </div>
        </section>

        <section class="w-full lg:w-[42%] bg-white flex items-center justify-center px-6 sm:px-10 py-10 lg:py-12">
            <div class="w-full max-w-md">
                <div class="inline-flex items-center gap-2.5 text-secondary mb-6">
                    <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-primary/10">
                        <span class="material-icons-outlined text-lg text-primary">app_registration</span>
                    </span>
                    <span class="text-sm font-black uppercase tracking-[0.12em]">CRO III LIMA - CALLAO</span>
                </div>

                <h2 class="text-5xl font-black tracking-tight text-secondary">Registro</h2>
                <p class="mt-3 text-xl text-slate-500 leading-relaxed">Crea tu cuenta para ingresar al portal colegiado.</p>

                @if ($errors->any())
                    <div class="mt-5 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        Revisa los campos del formulario para completar el registro.
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="mt-7 space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="mb-2 block text-sm font-bold text-slate-700">Nombres y apellidos</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="inst-input !bg-slate-100 !border-slate-200 !text-base !py-3.5" placeholder="Ingrese su nombre completo" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Correo electrónico</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="inst-input !bg-slate-100 !border-slate-200 !text-base !py-3.5" placeholder="nombre@correo.pe" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Contraseña</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="inst-input !bg-slate-100 !border-slate-200 !text-base !py-3.5" placeholder="Cree una contraseña segura" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-bold text-slate-700">Confirmar contraseña</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="inst-input !bg-slate-100 !border-slate-200 !text-base !py-3.5" placeholder="Repita su contraseña" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit" class="mt-2 w-full rounded-xl bg-primary px-6 py-3.5 text-lg font-black uppercase tracking-[0.08em] text-white transition-colors hover:bg-primary-dark">
                        Crear cuenta
                    </button>
                </form>

                <div class="mt-7 text-center text-slate-500">
                    ¿Ya tienes una cuenta activa?
                    <a href="{{ route('login') }}" class="ml-1 font-black text-secondary underline decoration-primary/40 underline-offset-4 hover:text-primary">Ingresa aquí</a>
                </div>

                <div class="mt-7 border-t border-slate-200 pt-5 flex flex-wrap items-center justify-center gap-3 text-sm text-slate-500">
                    <a href="{{ route('terminos') }}" class="hover:text-primary">Términos y Condiciones</a>
                    <span class="text-slate-300">•</span>
                    <a href="{{ route('privacidad') }}" class="hover:text-primary">Política de Privacidad</a>
                    <span class="text-slate-300">•</span>
                    <a href="{{ route('contacto') }}" class="hover:text-primary">Ayuda</a>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
