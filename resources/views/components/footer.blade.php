<footer class="bg-white dark:bg-surface-dark border-t border-slate-200 dark:border-slate-700 pt-12 pb-8 mt-12 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('build/assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-12 w-auto">
                    <span class="font-bold text-slate-800 dark:text-white uppercase leading-tight">CRO III<br>Lima-Callao</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">
                    Institución comprometida con la excelencia y el desarrollo de la obstetricia en nuestra región.
                </p>
                <div class="flex space-x-4">
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="sr-only">Facebook</span>FB</a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="sr-only">Twitter</span>TW</a>
                    <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="sr-only">LinkedIn</span>LI</a>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-4">Legal y Transparencia</h3>
                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                    <li><a class="hover:text-primary underline transition-colors" href="{{ route('normativa') }}#reglamentos">Estatutos Institucionales</a></li>
                    <li><a class="hover:text-primary underline transition-colors" href="{{ route('institucional') }}#transparencia">Términos y Condiciones</a></li>
                    <li><a class="hover:text-primary underline transition-colors" href="#">Política de Privacidad</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-4">Enlaces de Interés</h3>
                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                    <li><a class="hover:text-primary underline transition-colors" href="{{ url('colegiados/listados') }}">Bolsa de Trabajo</a></li>
                    <li><a class="hover:text-primary underline transition-colors" href="{{ route('normativa') }}#repositorio">Biblioteca Virtual</a></li>
                    <li><a class="hover:text-primary underline transition-colors" href="{{ route('institucional') }}#convenios">Convenios Institucionales</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-4">Accesibilidad</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 mb-4">
                    Este portal cumple con los estándares WCAG 2.1 para garantizar el acceso a todos los ciudadanos.
                </p>
                <div class="flex space-x-2">
                    <button aria-label="Cambiar modo oscuro" @click="toggleTheme()" class="bg-slate-100 dark:bg-slate-700 p-2 rounded hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors">
                        <span class="material-icons-outlined text-slate-700 dark:text-slate-200" x-text="darkMode ? 'light_mode' : 'dark_mode'">brightness_6</span>
                    </button>
                    <button aria-label="Aumentar tamaño de fuente" @click="increaseFont()" class="bg-slate-100 dark:bg-slate-700 p-2 rounded hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors relative">
                        <span class="material-icons-outlined text-slate-700 dark:text-slate-200">text_increase</span>
                        <span x-show="fontSize !== 'base'" x-text="fontSize === 'large' ? '+1' : '+2'" class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full" style="display: none;"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-200 dark:border-slate-700 pt-8 text-center md:text-left text-sm text-slate-400 dark:text-slate-500">
            &copy; {{ date('Y') }} Colegio Regional de Obstetras III Lima-Callao. Todos los derechos reservados.
        </div>
    </div>
</footer>