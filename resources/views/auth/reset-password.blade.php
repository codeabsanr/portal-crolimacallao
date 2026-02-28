<x-guest-layout :full="true">
    <main class="h-screen overflow-hidden bg-background-light text-text-main">
        <div class="flex h-full flex-col md:flex-row overflow-hidden">
            <section class="relative hidden h-full md:flex md:w-[58%] overflow-hidden border-r border-slate-300/80">
                <img src="{{ asset('assets/img/1foto_gestion_2025_2028.jpg') }}" alt="Cuidado obstetrico" class="absolute inset-0 h-full w-full object-cover object-center">
                <div class="absolute inset-0 bg-inst-hero"></div>
                <div class="absolute inset-0 bg-inst-hero-overlay"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/5 to-transparent"></div>

                <div class="relative z-10 mt-auto p-8 lg:p-12 xl:p-16 text-white">
                    <p class="mb-4 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.16em]">
                        <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III" class="h-6 w-6 object-contain">
                        Colegio Regional de Obstetras
                    </p>
                    <h1 class="text-4xl lg:text-5xl font-black leading-tight tracking-tight">Actualiza tu clave institucional.</h1>
                    <p class="mt-4 max-w-xl text-lg text-white/90">Define una nueva contrasena segura para continuar usando tu portal colegiado.</p>
                </div>
            </section>

            <section class="h-full w-full overflow-y-auto md:w-[42%] bg-background-light">
                <div class="mx-auto flex min-h-full w-full max-w-md flex-col justify-start md:justify-center px-5 sm:px-7 py-6 md:py-10">
                    <a href="{{ route('login') }}" class="mb-8 inline-flex w-fit items-center gap-2 border border-slate-300 bg-white px-4 py-2 text-sm font-bold text-secondary transition-colors hover:border-primary hover:text-primary">
                        <span class="material-icons-outlined text-[18px]">arrow_back</span>
                        Regresar
                    </a>

                    <div class="mb-7">
                        <p class="mb-4 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.16em] text-primary">
                            <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III" class="h-6 w-6 object-contain">
                            CRO III LIMA - CALLAO
                        </p>
                        <h2 class="inst-section-title">Restablecer contrasena</h2>
                        <p class="mt-3 text-base md:text-lg text-text-main">Completa tus datos y guarda tu nueva contrasena.</p>
                    </div>

                    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div>
                            <label for="email" class="mb-2 block text-sm font-bold text-text-main">Correo electronico</label>
                            <input id="email" name="email" type="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" class="inst-input !bg-primary-tint !border-slate-200">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-bold text-text-main">Contrasena nueva</label>
                            <input id="password" name="password" type="password" required autocomplete="new-password" class="inst-input !bg-primary-tint !border-slate-200">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password_confirmation" class="mb-2 block text-sm font-bold text-text-main">Confirmar contrasena</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="inst-input !bg-primary-tint !border-slate-200">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <button type="submit" class="inst-btn-primary w-full !py-3.5 !text-sm !tracking-[0.1em]">
                            Guardar contrasena
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>



