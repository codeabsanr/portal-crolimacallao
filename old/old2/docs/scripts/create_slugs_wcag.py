import os
import re
import shutil

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# WCAG TEXT TO ADD
wcag_footer_text = r"""                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-slate-800 text-center">
                <p class="text-slate-400 text-sm mb-2">Este portal cumple con los estándares WCAG 2.1 para garantizar el acceso a todos los ciudadanos.</p>
                <p class="text-slate-400 text-sm">© 2026 Colegio Regional de Obstetras III Lima-Callao. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>"""

# Nav/HTML structure updates for Accessibility
lang_regex = re.compile(r'<html([^>]*)>')
skip_link = r'<a href="#main" class="sr-only focus:not-sr-only bg-primary text-white px-4 py-2 absolute top-0 left-0 z-50">Saltar al contenido principal</a>\n    <header'

# Fix the aria roles in dropdowns
dropdown_btn_regex = re.compile(r'<button class="(.*?)inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none">')

# Mapping for Slugs creation
# Format: {"parent_file.html": {"slug_name.html": "Section Title"}}
slugs_map = {
    "institucional.html": {
        "institucion-quienes-somos.html": "Quiénes somos",
        "institucion-autoridades.html": "Autoridades",
        "institucion-historia.html": "Historia",
        "institucion-transparencia.html": "Transparencia / Documentos",
        "institucion-convenios.html": "Convenios"
    },
    "tramites.html": {
        "tramites-habilidad.html": "Habilidad",
        "tramites-colegiatura.html": "Colegiatura",
        "tramites-registros.html": "Registros (Especialidad/Maestría/Doctorado)",
        "tramites-carne.html": "Carné",
        "tramites-mesa-partes.html": "Mesa de Partes Virtual",
        "tramites-faq.html": "Preguntas Frecuentes"
    },
    "colegiados.html": {
        "colegiados-buscador.html": "Buscador de colegiados",
        "colegiados-listados.html": "Listados por categoría",
        "colegiados-guia.html": "Guía de habilitación"
    },
    "capacitacion.html": {
        "capacitacion-calendario.html": "Calendario de Capacitaciones",
        "capacitacion-cursos.html": "Cursos y Talleres",
        "capacitacion-congresos.html": "Congresos"
    },
    "normativa.html": {
        "normativa-leyes.html": "Leyes",
        "normativa-reglamentos.html": "Reglamentos",
        "normativa-guias.html": "Guías",
        "normativa-repositorio.html": "Repositorio Completo"
    },
    "contacto.html": {
        "contacto-canales.html": "Canales de Atención",
        "contacto-horarios.html": "Horarios de Atención"
    }
}

# 1. First Pass: Create the new slugs based on their parent files
print("Creating physical slug pages...")
for parent_file, slugs in slugs_map.items():
    parent_path = os.path.join(src_dir, parent_file)
    if not os.path.exists(parent_path):
        continue
    
    with open(parent_path, "r", encoding="utf-8") as f:
        parent_content = f.read()

    for slug_filename, section_title in slugs.items():
        slug_path = os.path.join(src_dir, slug_filename)
        
        # Modify the title/header for the specific slug safely
        # It's better to just copy the parent and we will refine the internal content later if needed,
        # but for now we ensure the physical files exist and work.
        # Let's adjust the <title> tag
        title_regex = re.compile(r'<title>.*?</title>')
        slug_content = title_regex.sub(f"<title>{section_title} | Colegio Regional de Obstetras III Lima-Callao</title>", parent_content)
        
        # Ensure we have a <main id="main"> tag
        main_regex = re.compile(r'<main([^>]*)>')
        if '<main' in slug_content and 'id="main"' not in slug_content:
            slug_content = main_regex.sub(r'<main\1 id="main">', slug_content)
            
        with open(slug_path, "w", encoding="utf-8") as f:
            f.write(slug_content)
        print(f"Created: {slug_filename}")

# 2. Second Pass: Apply WCAG updates to ALL HTML files in src directory
print("\nApplying WCAG 2.1 global updates...")
for filename in os.listdir(src_dir):
    if filename.endswith(".html") and not filename.startswith("admin"):
        filepath = os.path.join(src_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()
        
        # Add <html lang="es"> if not present
        if 'lang="' not in content:
            content = lang_regex.sub(r'<html\1 lang="es">', content)
        
        # Add Skip Link
        if 'Saltar al contenido' not in content:
            content = content.replace('<header', skip_link, 1)

        # Update Footer with WCAG text
        footer_regex = re.compile(r'                </div>\s*</div>\s*<div class="mt-12 pt-8 border-t border-slate-800 text-center">\s*<p class="text-slate-400 text-sm">© 2026 Colegio Regional de Obstetras III Lima-Callao\. Todos los derechos reservados\.</p>\s*</div>\s*</div>\s*</footer>', re.DOTALL)
        content = footer_regex.sub(wcag_footer_text, content)
        
        # Add ARIA to dropdown buttons
        content = dropdown_btn_regex.sub(r'<button class="\1inline-flex items-center gap-1 group-hover:text-primary transition-colors focus:outline-none" aria-haspopup="true" aria-expanded="false">', content)

        # Ensure main has id="main"
        main_regex = re.compile(r'<main([^>]*)>')
        if '<main' in content and 'id="main"' not in content:
            content = main_regex.sub(r'<main\1 id="main">', content)

        # Update the Navigation links inside the dropdowns to point to the new slugs instead of hashes
        for parent_file, slugs in slugs_map.items():
            for slug_filename, title in slugs.items():
                # We need to find the hash links like href="institucional.html#historia" and replace with href="institucion-historia.html"
                # Since we don't know the exact hash, we will use a more robust approach in the next step,
                # but for we can do a simple string replacement if we know the mapping.
                pass # We will do a robust regex replacement specifically for the nav menu below

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        # print(f"Updated WCAG in {filename}")

# 3. Third Pass: Update the Navigation Menu Links to point to slugs instead of hashes
print("\nUpdating Navigation Links to Slugs...")

nav_replacements = {
    r'href="institucional\.html#quienes-somos"': r'href="institucion-quienes-somos.html"',
    r'href="institucional\.html#autoridades"': r'href="institucion-autoridades.html"',
    r'href="institucional\.html#historia"': r'href="institucion-historia.html"',
    r'href="institucional\.html#transparencia"': r'href="institucion-transparencia.html"',
    r'href="institucional\.html#convenios"': r'href="institucion-convenios.html"',
    
    r'href="tramites\.html#habilidad"': r'href="tramites-habilidad.html"',
    r'href="tramites\.html#colegiatura"': r'href="tramites-colegiatura.html"',
    r'href="tramites\.html#registros"': r'href="tramites-registros.html"',
    r'href="tramites\.html#carne"': r'href="tramites-carne.html"',
    r'href="tramites\.html#mesa-partes"': r'href="tramites-mesa-partes.html"',
    r'href="tramites\.html#faq"': r'href="tramites-faq.html"',
    
    r'href="colegiados\.html#buscador"': r'href="colegiados-buscador.html"',
    r'href="colegiados\.html#listados"': r'href="colegiados-listados.html"',
    r'href="colegiados\.html#guia"': r'href="colegiados-guia.html"',
    
    r'href="capacitacion\.html#calendario"': r'href="capacitacion-calendario.html"',
    r'href="capacitacion\.html#cursos"': r'href="capacitacion-cursos.html"',
    r'href="capacitacion\.html#congresos"': r'href="capacitacion-congresos.html"',
    
    r'href="normativa\.html#leyes"': r'href="normativa-leyes.html"',
    r'href="normativa\.html#reglamentos"': r'href="normativa-reglamentos.html"',
    r'href="normativa\.html#guias"': r'href="normativa-guias.html"',
    r'href="normativa\.html#repositorio"': r'href="normativa-repositorio.html"',
    
    # Contacto already points to contacto.html, we'll keep it as is or map explicitly
    r'href="contacto\.html".*?Información y Canales': r'href="contacto-canales.html"',
    r'href="contacto\.html".*?Horarios de atención': r'href="contacto-horarios.html"'
}

for filename in os.listdir(src_dir):
    if filename.endswith(".html") and not filename.startswith("admin"):
        filepath = os.path.join(src_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()
            
        for old_pattern, new_replacement in nav_replacements.items():
            content = re.sub(old_pattern, new_replacement, content)
            
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
            
print("Global Navigation updated to use Slugs.")
