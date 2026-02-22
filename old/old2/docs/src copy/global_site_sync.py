import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# 1. Define the Site Map (The 27+ pages)
sections = {
    "institucional": {
        "title": "Institución",
        "parent": "index.html",
        "children": ["quienes-somos.html", "autoridades.html", "historia.html", "transparencia.html", "convenios.html"]
    },
    "tramites": {
        "title": "Trámites",
        "parent": "index.html",
        "children": ["habilidad.html", "colegiatura.html", "registros.html", "carne.html", "mesa-partes.html", "faq.html"]
    },
    "colegiados": {
        "title": "Colegiados",
        "parent": "index.html",
        "children": ["buscador.html", "listados.html", "guia.html"]
    },
    "capacitacion": {
        "title": "Capacitación",
        "parent": "index.html",
        "children": ["calendario.html", "cursos.html", "congresos.html"]
    },
    "normativa": {
        "title": "Normativa",
        "parent": "index.html",
        "children": ["leyes.html", "reglamentos.html", "guias.html", "repositorio.html"]
    },
    "contacto": {
        "title": "Contacto",
        "parent": "index.html",
        "children": ["canales.html", "horarios.html"]
    }
}

# 2. HTML Fragments Templates
def get_header(rel_prefix, active_section=None):
    nav_links = ""
    for folder, data in sections.items():
        is_active = (active_section == folder)
        cls = "text-primary font-bold border-b-2 border-primary pb-1" if is_active else "text-slate-700 dark:text-slate-200 font-medium py-2 hover:text-primary transition-colors"
        nav_links += f'                    <a class="{cls}" href="{rel_prefix}{folder}/index.html">{data["title"]}</a>\n'
    
    return f'''
    <div class="bg-secondary text-white py-2 px-4 text-sm hidden md:block">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <span class="flex items-center"><span class="material-icons-outlined text-base mr-1">phone</span> +51 982 520 891</span>
                <span class="flex items-center"><span class="material-icons-outlined text-base mr-1">email</span> tramitedocumentario@crolimacallao.org.pe</span>
            </div>
            <div class="flex items-center space-x-4">
                <a class="hover:underline" href="{rel_prefix}admin/index.html">Intranet / Mi Cuenta</a>
                <a class="hover:underline" href="{rel_prefix}tramites/mesa-partes.html">Mesa de Partes</a>
            </div>
        </div>
    </div>
    <a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-50">Saltar al contenido principal</a>
    <header class="bg-surface-light dark:bg-surface-dark shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{rel_prefix}index.html" class="flex items-center group">
                        <img src="{rel_prefix}assets/img/logo-text.png" alt="Logo" class="h-16 lg:h-20 w-auto transition-transform group-hover:scale-[1.02]">
                    </a>
                </div>
                <nav class="hidden md:flex space-x-6 items-center">
                    <a class="text-slate-700 dark:text-slate-200 font-medium py-2 hover:text-primary" href="{rel_prefix}index.html">Inicio</a>
{nav_links}
                </nav>
                <div class="hidden md:flex items-center">
                    <a class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-primary hover:bg-primary-dark shadow-sm transition-colors" href="{rel_prefix}admin/index.html">
                        <span class="material-icons-outlined mr-2">person</span> Mi Cuenta
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" class="text-slate-500 hover:text-slate-700 focus:outline-none p-2">
                        <span class="material-icons-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
'''

def get_footer(rel_prefix):
    return f'''
    <footer class="bg-white dark:bg-surface-dark border-t border-slate-200 dark:border-slate-700 pt-12 pb-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <img src="{rel_prefix}assets/img/logo-circular.png" alt="Logo" class="h-20 w-auto mb-6">
                    <p class="text-slate-500 text-sm">Institución comprometida con la excelencia en obstetricia.<br><br>Mariscal Sucre 1351, Pueblo Libre.</p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase mb-4">Legal</h3>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a class="hover:text-primary" href="{rel_prefix}normativa/reglamentos.html">Estatutos</a></li>
                        <li><a class="hover:text-primary" href="{rel_prefix}institucional/transparencia.html">Transparencia</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase mb-4">Herramientas</h3>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a class="hover:text-primary" href="{rel_prefix}colegiados/listados.html">Bolsa de Trabajo</a></li>
                        <li><a class="hover:text-primary" href="{rel_prefix}normativa/repositorio.html">Biblioteca Virtual</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase mb-4">Soporte</h3>
                    <a href="{rel_prefix}contacto/index.html" class="text-sm text-primary font-bold hover:underline">Central de Ayuda</a>
                </div>
            </div>
            <div class="border-t border-slate-100 dark:border-slate-800 pt-8 text-center text-sm text-slate-400">
                &copy; 2026 CRO III Lima-Callao. Todos los derechos reservados.
            </div>
        </div>
    </footer>
'''

# 3. Processing all files
header_footer_regex = re.compile(r'<body>.*?<header.*?</header>.*?<main', re.DOTALL)
footer_regex = re.compile(r'<footer.*?</footer>', re.DOTALL)

def sync_file(file_path):
    rel_path = os.path.relpath(file_path, src_dir)
    parts = rel_path.split(os.sep)
    
    # Calculate rel_prefix
    depth = len(parts) - 1
    rel_prefix = "../" * depth if depth > 0 else "./"
    
    # Determine section
    active_section = parts[0] if depth > 0 else None
    
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()

    # Apply Header
    header_html = get_header(rel_prefix, active_section)
    if '<header' in content:
        # Match from start of body or top of file (if header is first)
        content = re.sub(r'<body>.*?<header.*?</header>', f'<body>{header_html}', content, flags=re.DOTALL)
    
    # Apply Footer
    footer_html = get_footer(rel_prefix)
    content = footer_regex.sub(footer_html, content)
    
    # Fix broken asset paths in links outside header/footer if any
    content = content.replace('href="assets/', f'href="{rel_prefix}assets/')
    content = content.replace('src="assets/', f'src="{rel_prefix}assets/')

    with open(file_path, "w", encoding="utf-8") as f:
        f.write(content)
    print(f"Synced {rel_path} (Depth: {depth})")

# Run Sync
for root, dirs, files in os.walk(src_dir):
    if "admin" in root: continue
    for file in files:
        if file.endswith(".html"):
            sync_file(os.path.join(root, file))

print("Site synchronization complete.")
