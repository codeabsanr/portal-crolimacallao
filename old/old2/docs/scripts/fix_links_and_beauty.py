import os
import re

# This script fixes broken links and standardizes help buttons
base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

mappings = {
    r'href="#"': {
        "Colegiatura": "tramites/colegiatura/index.html",
        "Habilidad Profesional": "tramites/habilidad/index.html",
        "Certificados": "tramites/registros/index.html",
        "Consultar Agenda": "actualidad/eventos/index.html",
        "Ver todas las noticias": "actualidad/noticias/index.html",
        "Estatutos": "normativa/reglamentos/index.html",
        "Transparencia": "institucional/transparencia/index.html",
        "Biblioteca Virtual": "normativa/repositorio/index.html",
        "Bolsa de Trabajo": "colegiados/listados/index.html",
        "Central de Ayuda": "contacto/index.html",
        "Chat en Vivo": "https://wa.me/51982520891"
    }
}

# The help section shown in the user's image
health_help_template = """<section class="py-16 bg-slate-50 dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-surface-dark rounded-md p-8 shadow-sm border border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="max-w-xl">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-white mb-2">¿Te sientes perdido o necesitas ayuda con un trámite?</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Nuestro equipo está listo para acompañarte paso a paso. No dejes que las dudas te detengan.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <a href="tel:+51982520891" class="inline-flex items-center justify-center px-8 py-3 border border-primary text-primary hover:bg-primary hover:text-white font-bold rounded-sm transition-colors group">
                    <span class="material-icons-outlined mr-2 group-hover:animate-pulse">call</span> Llamar ahora
                </a>
                <a href="{prefix}contacto/index.html" class="inline-flex items-center justify-center px-8 py-3 bg-red-900 text-white hover:bg-red-950 font-bold rounded-sm shadow-lg transition-colors group">
                    <span class="material-icons-outlined mr-2">support_agent</span> Central de Ayuda
                </a>
            </div>
        </div>
    </div>
</section>"""

help_section_regex = re.compile(r'<section class="bg-secondary rounded-lg p-8.*?/section>', re.DOTALL)

def fix_links(content, prefix=""):
    # Fix explicit mappings first
    for link_text, new_link in mappings[r'href="#"'].items():
        search_pattern = rf'href="#"([^>]*>{link_text}</a>)'
        replace_pattern = rf'href="{prefix}{new_link}"\1'
        content = re.sub(search_pattern, replace_pattern, content)
    
    # Generic fix for any remaining # that might be relevant
    # (Be careful not to break legitimate internal anchors)
    return content

def standardize_help_section(content, prefix=""):
    new_section = health_help_template.format(prefix=prefix)
    if help_section_regex.search(content):
        content = help_section_regex.sub(new_section, content)
    return content

for root, dirs, files in os.walk(base_dir):
    if "assets" in root or "admin" in root:
        continue
    for file in files:
        if file.endswith(".html"):
            full_path = os.path.join(root, file)
            rel_path = os.path.relpath(full_path, base_dir)
            depth = rel_path.count(os.sep) if rel_path != "index.html" else 0
            prefix = "../" * depth
            
            with open(full_path, "r", encoding="utf-8") as f:
                content = f.read()
            
            content = fix_links(content, prefix)
            content = standardize_help_section(content, prefix)
            
            # Additional Cleanup: Remove "outdated browser" if relevant or standardize footer links
            # content = content.replace("OLD_TEXT", "NEW_TEXT")
            
            with open(full_path, "w", encoding="utf-8") as f:
                f.write(content)

print("Links and Help sections standardized.")
