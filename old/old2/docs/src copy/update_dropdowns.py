import os
import re

# Tailwind classes for dropdown functionality
dropdown_nav = """<nav class="hidden md:flex space-x-8 items-center">
                    <!-- Inicio -->
                    <a class="{cls_inicio}" href="index.html">Inicio</a>

                    <!-- Institución Dropdown -->
                    <div class="relative group">
                        <button class="{cls_institucion} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Institución
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-left scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="institucional.html#quienes-somos" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Quiénes somos</a>
                                <a href="institucional.html#autoridades" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Autoridades</a>
                                <a href="institucional.html#historia" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Historia</a>
                                <a href="institucional.html#transparencia" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Transparencia / Documentos</a>
                                <a href="institucional.html#convenios" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Convenios</a>
                            </div>
                        </div>
                    </div>

                    <!-- Trámites Dropdown -->
                    <div class="relative group">
                        <button class="{cls_tramites} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Trámites
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-left scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="tramites.html#habilidad" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Habilidad</a>
                                <a href="tramites.html#colegiatura" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Colegiatura</a>
                                <a href="tramites.html#registros" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Registros (Esp/Mae/Doc)</a>
                                <a href="tramites.html#carne" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Carné</a>
                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>
                                <a href="tramites.html#mesa-partes" class="px-4 py-2.5 text-sm text-primary font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors flex items-center justify-between">Mesa de Partes Virtual <span class="material-icons-outlined !text-sm">open_in_new</span></a>
                                <a href="tramites.html#faq" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Preguntas frecuentes</a>
                            </div>
                        </div>
                    </div>

                    <!-- Colegiados Dropdown -->
                    <div class="relative group">
                        <button class="{cls_colegiados} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Colegiados
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-left scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="colegiados.html#buscador" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Buscador de colegiados</a>
                                <a href="colegiados.html#listados" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Listados por categoría</a>
                                <a href="colegiados.html#guia" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Guía de habilitación</a>
                            </div>
                        </div>
                    </div>

                    <!-- Capacitación Dropdown -->
                    <div class="relative group">
                        <button class="{cls_capacitacion} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Capacitación
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-left scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="capacitacion.html#calendario" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Calendario</a>
                                <a href="capacitacion.html#cursos" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Cursos</a>
                                <a href="capacitacion.html#congresos" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Congresos</a>
                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>
                                <a href="https://plataformadecapacitacion.crolimacallao.org.pe" target="_blank" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors flex items-center justify-between">Aula Virtual <span class="material-icons-outlined !text-sm text-slate-400">launch</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Normativa Dropdown -->
                    <div class="relative group">
                        <button class="{cls_normativa} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Normativa
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-left scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="normativa.html#leyes" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Leyes</a>
                                <a href="normativa.html#reglamentos" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Reglamentos</a>
                                <a href="normativa.html#guias" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Guías</a>
                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>
                                <a href="normativa.html#repositorio" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors flex items-center justify-between">Repositorio completo <span class="material-icons-outlined !text-sm">arrow_forward</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Contacto Dropdown -->
                    <div class="relative group">
                        <button class="{cls_contacto} inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">
                            Contacto
                            <span class="material-icons-outlined text-sm transition-transform duration-200 group-hover:rotate-180">expand_more</span>
                        </button>
                        <div class="absolute right-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top-right scale-95 group-hover:scale-100">
                            <div class="bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-sm shadow-xl py-2 flex flex-col">
                                <a href="contacto.html" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Información y Canales</a>
                                <a href="contacto.html" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors">Horarios de atención</a>
                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>
                                <a href="https://crolimacallao.org.pe/BBB/libro.php" target="_blank" class="px-4 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary font-medium transition-colors flex items-center justify-between">Libro de reclamaciones <span class="material-icons-outlined !text-sm text-slate-400">launch</span></a>
                            </div>
                        </div>
                    </div>
                </nav>"""

active_class = 'text-primary font-bold border-b-2 border-primary pb-1'
inactive_class = 'text-slate-700 dark:text-slate-200 font-medium py-2'

nav_regex = re.compile(r'<nav class="hidden md:flex space-x-8.*?>.*?</nav>', re.DOTALL)

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

files_to_update = {
    "index.html": ["cls_inicio", active_class],
    "institucional.html": ["cls_institucion", active_class],
    "tramites.html": ["cls_tramites", active_class],
    "colegiados.html": ["cls_colegiados", active_class],
    "capacitacion.html": ["cls_capacitacion", active_class],
    "normativa.html": ["cls_normativa", active_class],
    "contacto.html": ["cls_contacto", active_class]
}

for filename in os.listdir(src_dir):
    if filename.endswith(".html") and not filename.startswith("admin"):
        filepath = os.path.join(src_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()
        
        # Prepare formatting arguments
        format_args = {
            "cls_inicio": inactive_class,
            "cls_institucion": inactive_class,
            "cls_tramites": inactive_class,
            "cls_colegiados": inactive_class,
            "cls_capacitacion": inactive_class,
            "cls_normativa": inactive_class,
            "cls_contacto": inactive_class
        }
        
        # Set active class for the current file
        if filename in files_to_update:
            key, _ = files_to_update[filename]
            format_args[key] = active_class
        
        new_nav = dropdown_nav.format(**format_args)
        new_content = nav_regex.sub(new_nav, content)
        
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Updated dropdown navigation in {filename}")
