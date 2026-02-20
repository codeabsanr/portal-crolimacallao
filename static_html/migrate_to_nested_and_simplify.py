import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Mapping for directories
# "flat_file.html": ("folder_name", "new_file.html")
migration_map = {
    "institucion-quienes-somos.html": ("institucional", "quienes-somos.html"),
    "institucion-autoridades.html": ("institucional", "autoridades.html"),
    "institucion-historia.html": ("institucional", "historia.html"),
    "institucion-transparencia.html": ("institucional", "transparencia.html"),
    "institucion-convenios.html": ("institucional", "convenios.html"),
    
    "tramites-habilidad.html": ("tramites", "habilidad.html"),
    "tramites-colegiatura.html": ("tramites", "colegiatura.html"),
    "tramites-registros.html": ("tramites", "registros.html"),
    "tramites-carne.html": ("tramites", "carne.html"),
    "tramites-mesa-partes.html": ("tramites", "mesa-partes.html"),
    "tramites-faq.html": ("tramites", "faq.html"),
    
    "colegiados-buscador.html": ("colegiados", "buscador.html"),
    "colegiados-listados.html": ("colegiados", "listados.html"),
    "colegiados-guia.html": ("colegiados", "guia.html"),
    
    "capacitacion-calendario.html": ("capacitacion", "calendario.html"),
    "capacitacion-cursos.html": ("capacitacion", "cursos.html"),
    "capacitacion-congresos.html": ("capacitacion", "congresos.html"),
    
    "normativa-leyes.html": ("normativa", "leyes.html"),
    "normativa-reglamentos.html": ("normativa", "reglamentos.html"),
    "normativa-guias.html": ("normativa", "guias.html"),
    "normativa-repositorio.html": ("normativa", "repositorio.html"),
    
    "contacto-canales.html": ("contacto", "canales.html"),
    "contacto-horarios.html": ("contacto", "horarios.html")
}

root_files = [
    "index.html",
    "institucional.html",
    "tramites.html",
    "colegiados.html",
    "capacitacion.html",
    "normativa.html",
    "contacto.html"
]

nav_structure = """<nav class="hidden md:flex space-x-6 items-center">
                    <a class="{cls_inicio}" href="{prefix}index.html">Inicio</a>
                    <a class="{cls_institucion}" href="{prefix}institucional.html">Institución</a>
                    <a class="{cls_tramites}" href="{prefix}tramites.html">Trámites</a>
                    <a class="{cls_colegiados}" href="{prefix}colegiados.html">Colegiados</a>
                    <a class="{cls_capacitacion}" href="{prefix}capacitacion.html">Capacitación</a>
                    <a class="{cls_normativa}" href="{prefix}normativa.html">Normativa</a>
                    <a class="{cls_contacto}" href="{prefix}contacto.html">Contacto</a>
                </nav>
                <div class="hidden md:flex items-center">
                    <a class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary shadow-sm transition-colors"
                        href="{prefix}admin/index.html">
                        <span class="material-icons-outlined mr-2">person</span>
                        Mi Cuenta
                    </a>
                </div>
                <!-- Menú Móvil Botón -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" class="text-slate-500 dark:text-slate-300 hover:text-slate-700 focus:outline-none p-2"
                        type="button">
                        <span class="sr-only">Abrir menú</span>
                        <span class="material-icons-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Móvil Full-screen -->
        <div id="mobile-menu-container" class="fixed inset-0 z-[100] bg-primary transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col h-screen overflow-y-auto">
            <div class="flex justify-end p-6">
                <button id="close-mobile-menu" class="text-white hover:text-gray-200 focus:outline-none p-2" aria-label="Cerrar menú">
                    <span class="material-icons-outlined text-4xl">close</span>
                </button>
            </div>
            
            <nav class="flex flex-col px-6 pb-6 space-y-6 flex-grow">
                <a href="{prefix}index.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Inicio <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}institucional.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Institución <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}tramites.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Trámites <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}colegiados.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Colegiados <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}capacitacion.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Capacitación <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}normativa.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Normativa <span class="material-icons-outlined">chevron_right</span></a>
                <a href="{prefix}contacto.html" class="flex justify-between items-center text-white text-2xl font-bold pb-4 border-b border-white/20">Contacto <span class="material-icons-outlined">chevron_right</span></a>

                <div class="pt-8 space-y-4">
                    <h3 class="text-white/70 text-sm uppercase tracking-wider mb-4">Accesos Rápidos</h3>
                    <a href="{prefix}admin/index.html" class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="material-icons-outlined text-2xl">person</span>
                            <span class="font-bold text-lg">Mi Cuenta</span>
                        </div>
                        <span class="material-icons-outlined border border-white p-1 rounded-sm">arrow_forward</span>
                    </a>
                    <a href="{prefix}tramites/mesa-partes.html" class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="material-icons-outlined text-2xl">folder_open</span>
                            <span class="font-bold text-lg">Mesa de Partes</span>
                        </div>
                        <span class="material-icons-outlined border border-white p-1 rounded-sm">arrow_forward</span>
                    </a>
                    <a href="https://crolimacallao.org.pe/BBB/libro.php" target="_blank" class="flex justify-between items-center bg-transparent border border-white text-white p-4 rounded-sm hover:bg-white/10 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="material-icons-outlined text-2xl">menu_book</span>
                            <span class="font-bold text-lg">Libro de Reclamaciones</span>
                        </div>
                        <span class="material-icons-outlined border border-white p-1 rounded-sm">launch</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>"""

js_snippet = """<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu-container');

        if(mobileBtn && closeBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-full');
            });
            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
            });
        }
    });
</script>
</body>"""

# Regex to find the <nav> block and everything until the end of header
header_nav_regex = re.compile(r'<nav class="hidden md:flex space-x-8.*?</div>\s*</div>\s*</header>', re.DOTALL)

active_class = 'text-primary font-bold border-b-2 border-primary pb-1'
inactive_class = 'text-slate-700 dark:text-slate-200 font-medium py-2'

# Helper to prefix resources
def apply_prefix_to_resources(content, prefix="../"):
    # Prefix known directories and filenames
    # assets/
    content = re.sub(r'(href|src)="assets/', rf'\1="{prefix}assets/', content)
    # admin/
    content = re.sub(r'(href)="admin/', rf'\1="{prefix}admin/', content)
    # the 7 root pages, ignore their href from being already changed above maybe?
    for page in root_files:
        content = re.sub(rf'href="{page}(#[^"]*)?"', rf'href="{prefix}{page}\1"', content)
    
    # Prefix new directories
    for p in ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]:
        content = re.sub(rf'href="{p}-([^"]+)\.html"', rf'href="{prefix}{p}/\1.html"', content)
        
    return content

# 1. Migrate the flat files to their proper directories
for flat_file, (folder, new_filename) in migration_map.items():
    flat_path = os.path.join(src_dir, flat_file)
    if not os.path.exists(flat_path):
        continue
    
    folder_path = os.path.join(src_dir, folder)
    os.makedirs(folder_path, exist_ok=True)
    
    new_path = os.path.join(folder_path, new_filename)
    
    with open(flat_path, "r", encoding="utf-8") as f:
        content = f.read()

    # Step 1: Update Relative paths inside content
    content = apply_prefix_to_resources(content, prefix="../")
    
    # Step 2: Inject the new Navbar (with Desktop simplified and Mobile Full Screen)
    args = {
        "prefix": "../",
        "cls_inicio": inactive_class,
        "cls_institucion": active_class if folder == "institucional" else inactive_class,
        "cls_tramites": active_class if folder == "tramites" else inactive_class,
        "cls_colegiados": active_class if folder == "colegiados" else inactive_class,
        "cls_capacitacion": active_class if folder == "capacitacion" else inactive_class,
        "cls_normativa": active_class if folder == "normativa" else inactive_class,
        "cls_contacto": active_class if folder == "contacto" else inactive_class
    }
    new_header = nav_structure.format(**args)
    content = header_nav_regex.sub(new_header, content)
    
    # Step 3: Inject the mobile menu javascript right before </body>
    if 'id="mobile-menu-container"' not in content:
        content = content.replace("</body>", js_snippet)

    # Write to nested directory
    with open(new_path, "w", encoding="utf-8") as f:
        f.write(content)
        
    # Delete the old flat file
    os.remove(flat_path)
    print(f"Migrated {flat_file} -> {folder}/{new_filename}")


# 2. Update all the root files (index.html, institucional.html, etc.) to point to new directories instead of flat slugs
files_to_update = {
    "index.html": "cls_inicio",
    "institucional.html": "cls_institucion",
    "tramites.html": "cls_tramites",
    "colegiados.html": "cls_colegiados",
    "capacitacion.html": "cls_capacitacion",
    "normativa.html": "cls_normativa",
    "contacto.html": "cls_contacto"
}

for root_file in root_files:
    root_path = os.path.join(src_dir, root_file)
    if not os.path.exists(root_path):
        continue
        
    with open(root_path, "r", encoding="utf-8") as f:
        content = f.read()
    
    # Update references from flat files to nested directories
    for flat_file, (folder, new_filename) in migration_map.items():
        content = re.sub(rf'href="{flat_file}"', rf'href="{folder}/{new_filename}"', content)
        
    # Inject the new Navbar
    args = {
        "prefix": "", # Root files do not need a prefix for assets or other root files
        "cls_inicio": inactive_class,
        "cls_institucion": inactive_class,
        "cls_tramites": inactive_class,
        "cls_colegiados": inactive_class,
        "cls_capacitacion": inactive_class,
        "cls_normativa": inactive_class,
        "cls_contacto": inactive_class
    }
    if root_file in files_to_update:
        args[files_to_update[root_file]] = active_class

    new_header = nav_structure.format(**args)
    content = header_nav_regex.sub(new_header, content)
    
    # Step 3: Inject the mobile menu javascript right before </body>
    if 'id="mobile-menu-container"' not in content:
        content = content.replace("</body>", js_snippet)

    with open(root_path, "w", encoding="utf-8") as f:
        f.write(content)
        
    print(f"Updated Navigation and Routes in {root_file}")
