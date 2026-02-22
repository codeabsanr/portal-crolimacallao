<footer class="mt-16 border-t border-brand-gold/30 bg-footer text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('build/assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-10 w-10 object-contain" />
                    <div>
                        <p class="font-extrabold leading-none">CRO III Lima-Callao</p>
                        <p class="text-xs uppercase tracking-[0.2em] text-white/70 mt-1">Institucional</p>
                    </div>
                </div>
                <p class="text-sm text-white/75 max-w-sm">
                    Institución representativa de las obstetras en Lima y Callao, comprometida con la ética, la excelencia y el desarrollo profesional continuo.
                </p>
                <div class="mt-4 flex items-center gap-2">
                    <a href="#" class="h-9 w-9 bg-white/10 hover:bg-brand-gold hover:text-secondary flex items-center justify-center transition-colors" aria-label="Facebook"><span class="material-icons-outlined text-base">public</span></a>
                    <a href="#" class="h-9 w-9 bg-white/10 hover:bg-brand-gold hover:text-secondary flex items-center justify-center transition-colors" aria-label="X"><span class="material-icons-outlined text-base">alternate_email</span></a>
                    <a href="#" class="h-9 w-9 bg-white/10 hover:bg-brand-gold hover:text-secondary flex items-center justify-center transition-colors" aria-label="Instagram"><span class="material-icons-outlined text-base">photo_camera</span></a>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-brand-gold-light mb-4">Navegación</h3>
                <ul class="space-y-2 text-sm text-white/80">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-gold-light transition-colors">Inicio</a></li>
                    <li><a href="{{ route('institucional') }}" class="hover:text-brand-gold-light transition-colors">Institucional</a></li>
                    <li><a href="{{ route('tramites') }}" class="hover:text-brand-gold-light transition-colors">Trámites</a></li>
                    <li><a href="{{ route('actualidad') }}" class="hover:text-brand-gold-light transition-colors">Noticias</a></li>
                    <li><a href="{{ route('contacto') }}" class="hover:text-brand-gold-light transition-colors">Contacto</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-brand-gold-light mb-4">Servicios</h3>
                <ul class="space-y-2 text-sm text-white/80">
                    <li><a href="{{ route('tramites') }}#mesa-partes" class="hover:text-brand-gold-light transition-colors">Mesa de Partes Virtual</a></li>
                    <li><a href="{{ route('colegiados') }}" class="hover:text-brand-gold-light transition-colors">Busca Obstetra</a></li>
                    <li><a href="{{ route('normativa') }}" class="hover:text-brand-gold-light transition-colors">Repositorio Normativo</a></li>
                    <li><a href="{{ route('capacitacion') }}" class="hover:text-brand-gold-light transition-colors">Capacitación</a></li>
                    <li><a href="{{ url('admin') }}" class="hover:text-brand-gold-light transition-colors">Portal del Colegiado</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-brand-gold-light mb-4">Accesibilidad</h3>
                <p class="text-sm text-white/75 mb-4">Tamaño de texto para lectura asistida (modo claro activo).</p>
                <div class="flex gap-2 mb-4">
                    <button aria-label="Aumentar tamaño de fuente" @click="increaseFont()" class="h-10 px-3 bg-white/10 hover:bg-white/20 transition-colors relative">
                        <span class="material-icons-outlined text-base">text_increase</span>
                        <span x-show="fontSize !== 'base'" x-text="fontSize === 'large' ? '+1' : '+2'" class="absolute -top-2 -right-2 bg-brand-gold text-secondary text-[10px] font-bold px-1.5 py-0.5 rounded-full" style="display: none;"></span>
                    </button>
                </div>
                <div class="text-sm text-white/80 space-y-2">
                    <p class="flex items-start gap-2"><span class="material-icons-outlined text-base mt-0.5">call</span><span>(01) 463-0000</span></p>
                    <p class="flex items-start gap-2 break-all"><span class="material-icons-outlined text-base mt-0.5">mail</span><span>tramitedocumentario@crolimacallao.org.pe</span></p>
                    <p class="flex items-start gap-2"><span class="material-icons-outlined text-base mt-0.5">location_on</span><span>Mariscal Sucre 1351, Pueblo Libre</span></p>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-5 border-t border-white/15 flex flex-col md:flex-row justify-between gap-3 text-xs text-white/60">
            <p class="leading-relaxed">&copy; {{ date('Y') }} Colegio Regional de Obstetras III Lima-Callao. Todos los derechos reservados.</p>
            <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 sm:items-center">
                <a href="{{ route('institucional') }}" class="hover:text-brand-gold-light transition-colors">Términos y condiciones</a>
                <a href="{{ route('institucional') }}" class="hover:text-brand-gold-light transition-colors">Política de privacidad</a>
            </div>
        </div>
    </div>
</footer>
