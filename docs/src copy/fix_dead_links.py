import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# 1. Refactor contacto.html into a Landing Page
contacto_path = os.path.join(src_dir, "contacto.html")
if os.path.exists(contacto_path):
    with open(contacto_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    main_regex = re.compile(r'<main id="main".*?</main>', re.DOTALL)
    
    new_main = """<main id="main">
        <!-- Hero Index Section -->
        <section class="bg-surface-light dark:bg-surface-dark py-12 md:py-20 border-b border-slate-200 dark:border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center justify-center p-4 bg-primary/10 rounded-full mb-6">
                    <span class="material-icons-outlined text-5xl text-primary">contact_support</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-6">
                    Contacto
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                    Conéctate con el Colegio Regional de Obstetras III. Elige si deseas revisar nuestros canales de atención o ver nuestros horarios en la sede central.
                </p>
            </div>
        </section>

        <!-- Grid Links Section -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
                <!-- Card -->
                <a href="contacto/canales.html" class="group flex flex-col bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg p-6 hover:shadow-lg hover:border-primary transition-all duration-300">
                    <div class="size-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-icons-outlined text-3xl">support_agent</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">Canales de Atención</h3>
                    <p class="text-slate-600 dark:text-slate-400 font-medium flex-grow">Correos, teléfonos y direcciones físicas de nuestra sede.</p>
                    <div class="mt-4 flex items-center text-primary font-bold text-sm uppercase tracking-wider">
                        Ver sección <span class="material-icons-outlined ml-1 text-sm transform transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </a>
                
                <!-- Card -->
                <a href="contacto/horarios.html" class="group flex flex-col bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg p-6 hover:shadow-lg hover:border-primary transition-all duration-300">
                    <div class="size-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-icons-outlined text-3xl">schedule</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">Horarios Sede Central</h3>
                    <p class="text-slate-600 dark:text-slate-400 font-medium flex-grow">Días y horas de labor tanto presencial como modalidades virtuales.</p>
                    <div class="mt-4 flex items-center text-primary font-bold text-sm uppercase tracking-wider">
                        Ver sección <span class="material-icons-outlined ml-1 text-sm transform transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </a>
                
                <!-- Card -->
                <a href="https://crolimacallao.org.pe/BBB/libro.php" target="_blank" class="group flex flex-col bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg p-6 hover:shadow-lg hover:border-primary transition-all duration-300">
                    <div class="size-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-icons-outlined text-3xl">menu_book</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">Libro de Reclamaciones</h3>
                    <p class="text-slate-600 dark:text-slate-400 font-medium flex-grow">Acceda a nuestra plataforma oficial de reclamos y sugerencias.</p>
                    <div class="mt-4 flex items-center text-primary font-bold text-sm uppercase tracking-wider">
                        Ver Externo <span class="material-icons-outlined ml-1 text-sm transform transition-transform group-hover:translate-x-1">launch</span>
                    </div>
                </a>
            </div>
        </section>
    </main>"""
    
    content = main_regex.sub(new_main, content)
    with open(contacto_path, "w", encoding="utf-8") as f:
        f.write(content)
    print("Refactored contacto.html into Landing Page")

# 2. Fix empty links globally in all HTML files
link_mappings = [
    # Top-bar
    (r'<a class="hover:underline" href="#">Intranet</a>', r'<a class="hover:underline" href="admin/index.html">Intranet / Mi Cuenta</a>'),
    (r'<a class="hover:underline" href="#">Mesa de Partes</a>', r'<a class="hover:underline" href="tramites/mesa-partes.html">Mesa de Partes</a>'),
    (r'<a class="hover:underline" href="#">Intranet</a>', r'<a class="hover:underline" href="../admin/index.html">Intranet / Mi Cuenta</a>'),
    (r'<a class="hover:underline" href="#">Mesa de Partes</a>', r'<a class="hover:underline" href="../tramites/mesa-partes.html">Mesa de Partes</a>'),
    
    # Subdirectories top-bar (relative path)
    (r'<a class="hover:underline" href="../#">Intranet</a>', r'<a class="hover:underline" href="../admin/index.html">Intranet / Mi Cuenta</a>'),
    (r'<a class="hover:underline" href="../#">Mesa de Partes</a>', r'<a class="hover:underline" href="../tramites/mesa-partes.html">Mesa de Partes</a>'),

    # Footer Links
    (r'<a class="hover:text-primary underline" href="#">Estatutos Institucionales</a>', r'<a class="hover:text-primary underline" href="normativa/reglamentos.html">Estatutos Institucionales</a>'),
    (r'<a class="hover:text-primary underline" href="#">Términos y Condiciones</a>', r'<a class="hover:text-primary underline" href="institucional/transparencia.html">Términos y Condiciones</a>'),
    (r'<a class="hover:text-primary underline" href="#">Política de Privacidad</a>', r'<a class="hover:text-primary underline" href="institucional/transparencia.html">Política de Privacidad</a>'),
    (r'<a class="hover:text-primary underline" href="#">Bolsa de Trabajo</a>', r'<a class="hover:text-primary underline" href="colegiados/listados.html">Bolsa de Trabajo</a>'),
    (r'<a class="hover:text-primary underline" href="#">Biblioteca Virtual</a>', r'<a class="hover:text-primary underline" href="normativa/repositorio.html">Biblioteca Virtual</a>'),
    (r'<a class="hover:text-primary underline" href="#">Convenios Institucionales</a>', r'<a class="hover:text-primary underline" href="institucional/convenios.html">Convenios Institucionales</a>'),
    
    # Nested folder versions of footer links
    (r'<a class="hover:text-primary underline" href="../#">Estatutos Institucionales</a>', r'<a class="hover:text-primary underline" href="../normativa/reglamentos.html">Estatutos Institucionales</a>'),
    (r'<a class="hover:text-primary underline" href="../#">Términos y Condiciones</a>', r'<a class="hover:text-primary underline" href="../institucional/transparencia.html">Términos y Condiciones</a>'),
    (r'<a class="hover:text-primary underline" href="../#">Política de Privacidad</a>', r'<a class="hover:text-primary underline" href="../institucional/transparencia.html">Política de Privacidad</a>'),
    (r'<a class="hover:text-primary underline" href="../#">Bolsa de Trabajo</a>', r'<a class="hover:text-primary underline" href="../colegiados/listados.html">Bolsa de Trabajo</a>'),
    (r'<a class="hover:text-primary underline" href="../#">Biblioteca Virtual</a>', r'<a class="hover:text-primary underline" href="../normativa/repositorio.html">Biblioteca Virtual</a>'),
    (r'<a class="hover:text-primary underline" href="../#">Convenios Institucionales</a>', r'<a class="hover:text-primary underline" href="../institucional/convenios.html">Convenios Institucionales</a>')
]

def update_links_in_file(filepath, is_nested=False):
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    changed = False
    for search, replace in link_mappings:
        # If we are in a nested file, we inject `../` instead of root paths
        if is_nested:
            search_str = search.replace('href="', 'href="../') if not search.startswith(r'<a class="hover:underline" href="../#">') else search
            replace_str = replace.replace('href="', 'href="../') if not replace.startswith(r'<a class="hover:underline" href="../') else replace
            if search_str in content:
                content = content.replace(search_str, replace_str)
                changed = True
        else:
            if search in content:
                content = content.replace(search, replace)
                changed = True

    if changed:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated empty links in {filepath}")


# Process root files
for filename in os.listdir(src_dir):
    if filename.endswith(".html"):
        update_links_in_file(os.path.join(src_dir, filename), is_nested=False)

# Process nested directories
subdirs = ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]
for subdir in subdirs:
    dir_path = os.path.join(src_dir, subdir)
    if os.path.exists(dir_path):
        for filename in os.listdir(dir_path):
            if filename.endswith(".html"):
                update_links_in_file(os.path.join(dir_path, filename), is_nested=True)

print("Finished fixing dead links globally.")
