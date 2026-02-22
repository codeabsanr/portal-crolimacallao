import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# 1. Define the Site Map
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
def get_head_extras(rel_prefix):
    return f'''
    <!-- Tailwind CSS & Premium Config -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="{rel_prefix}assets/js/tailwind-config.js"></script>
    
    <!-- Premium Google Fonts for Accessibility -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&family=Merriweather:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- Global Styles -->
    <link href="{rel_prefix}assets/css/styles.css" rel="stylesheet" />
'''

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
                <span class="flex items-center"><span class="material-icons-outlined text-base mr-1">email</span> informes@crolimacallao.org.pe</span>
            </div>
            <div class="flex items-center space-x-4">
                <a class="hover:underline" href="{rel_prefix}admin/index.html">Intranet / Mi Cuenta</a>
                <a class="hover:underline" href="{rel_prefix}tramites/mesa-partes.html">Mesa de Partes</a>
            </div>
        </div>
    </div>
    <a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-50">Saltar al contenido principal</a>
    <header class="bg-white dark:bg-surface-dark shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{rel_prefix}index.html" class="flex items-center group">
                        <img src="{rel_prefix}assets/img/logo-text.png" alt="Logo" class="h-16 lg:h-20 w-auto transition-transform group-hover:scale-[1.02]">
                    </a>
                </div>
                <nav class="hidden md:flex space-x-6 items-center">
                    <a class="text-slate-700 dark:text-slate-200 font-medium py-2 hover:text-primary transition-colors" href="{rel_prefix}index.html">Inicio</a>
{nav_links}
                </nav>
                <div class="hidden md:flex items-center">
                    <a class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-primary hover:bg-primary-dark shadow-sm transition-colors" href="{rel_prefix}admin/index.html">
                        <span class="material-icons-outlined mr-2">person</span> Mi Cuenta
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" class="text-slate-500 hover:text-slate-700 focus:outline-none p-2" onclick="document.getElementById('mobile-menu-container').classList.remove('translate-x-full')">
                        <span class="material-icons-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
'''

def get_support_block(rel_prefix):
    return f'''
    <!-- Always with you Support Block -->
    <section class="bg-slate-50 border-y border-slate-200 py-16">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="max-w-2xl text-center md:text-left">
                <h2 class="text-3xl font-black text-slate-900 mb-4 font-display">¿Te sientes perdido o necesitas ayuda con un trámite?</h2>
                <p class="text-xl text-slate-600 font-body">Nuestro equipo está listo para acompañarte paso a paso. No dejes que las dudas te detengan.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="tel:+51982520891" class="inline-flex items-center gap-3 bg-white border-2 border-primary text-primary px-8 py-4 rounded-xl font-bold text-lg hover:bg-primary/5 transition-all shadow-sm">
                    <span class="material-icons-outlined">call</span> Llamar ahora
                </a>
                <a href="{rel_prefix}contacto/index.html" class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-primary-dark transition-all shadow-xl">
                    <span class="material-icons-outlined">support_agent</span> Central de Ayuda
                </a>
            </div>
        </div>
    </section>
'''

def get_footer(rel_prefix):
    return f'''
    <footer class="bg-white dark:bg-surface-dark border-t border-slate-200 dark:border-slate-700 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div>
                    <img src="{rel_prefix}assets/img/logo-circular.png" alt="Logo" class="h-24 w-auto mb-8">
                    <p class="text-slate-500 text-lg leading-relaxed font-body">Institución dedicada al fortalecimiento y defensa de la profesión obstétrica.<br><br>Sede Principal: Mariscal Sucre 1351, Pueblo Libre.</p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-widest mb-6 font-display">Sección Legal</h3>
                    <ul class="space-y-4 text-slate-600 dark:text-slate-400 font-body">
                        <li><a class="hover:text-primary transition-colors" href="{rel_prefix}normativa/reglamentos.html">Estatutos Institucionales</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{rel_prefix}institucional/transparencia.html">Portal de Transparencia</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-widest mb-6 font-display">Herramientas</h3>
                    <ul class="space-y-4 text-slate-600 dark:text-slate-400 font-body">
                        <li><a class="hover:text-primary transition-colors" href="{rel_prefix}colegiados/listados.html">Bolsa de Trabajo</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{rel_prefix}normativa/repositorio.html">Biblioteca Virtual</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-widest mb-6 font-display">Atención</h3>
                    <a href="{rel_prefix}contacto/index.html" class="text-lg text-primary font-black hover:underline decoration-2 underline-offset-4">Central de Ayuda y Soporte</a>
                </div>
            </div>
            <div class="border-t border-slate-100 dark:border-slate-800 pt-10 text-center text-slate-400 font-body">
                &copy; 2026 CRO III Lima-Callao. Todos los derechos reservados. <br class="md:hidden"> 
                <span class="hidden md:inline">|</span> 
                Este portal cumple con los estándares de accesibilidad WCAG 2.1
            </div>
        </div>
    </footer>
'''

# 3. Processing
head_regex = re.compile(r'<head>.*?</head>', re.DOTALL)
header_regex = re.compile(r'<body>.*?<header.*?</header>', re.DOTALL)
footer_regex = re.compile(r'<footer.*?</footer>', re.DOTALL)

def sync_file(file_path):
    rel_path = os.path.relpath(file_path, src_dir)
    parts = rel_path.split(os.sep)
    depth = len(parts) - 1
    rel_prefix = "../" * depth if depth > 0 else "./"
    active_section = parts[0] if depth > 0 else None
    
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()

    # Title preservation
    title_match = re.search(r'<title>(.*?)</title>', content)
    title = title_match.group(1) if title_match else "CRO III Lima-Callao"

    # Head Redesign (Completely clean and style head)
    new_head = f'''<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{title}</title>
    {get_head_extras(rel_prefix)}
</head>'''
    content = head_regex.sub(new_head, content)

    # Header Redesign
    header_html = get_header(rel_prefix, active_section)
    if '<header' in content:
        content = header_regex.sub(f'<body>\n    {header_html}', content)
    
    # Support + Footer Redesign
    footer_with_support = get_support_block(rel_prefix) + get_footer(rel_prefix)
    content = footer_regex.sub(footer_with_support, content)
    
    # Clean up absolute path leaks if any
    content = content.replace('href="assets/', f'href="{rel_prefix}assets/')
    content = content.replace('src="assets/', f'src="{rel_prefix}assets/')

    with open(file_path, "w", encoding="utf-8") as f:
        f.write(content)
    # print(f"Synced {rel_path}")

# Run Sync
for root, dirs, files in os.walk(src_dir):
    if "admin" in root: continue
    for file in files:
        if file.endswith(".html"):
            sync_file(os.path.join(root, file))

print("Premium & Accessible synchronization (Global Fix) complete.")
