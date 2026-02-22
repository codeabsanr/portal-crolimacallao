import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

# Mapping to fix common links to slugs or external resources
global_map = {
    r'href="#"': {
        "Colegiatura": "tramites/colegiatura/",
        "Habilidad Profesional": "tramites/habilidad/",
        "Certificados": "tramites/registros/",
        "Consultar Agenda": "actualidad/eventos/",
        "Ver todas las noticias": "actualidad/noticias/",
        "Estatutos": "normativa/reglamentos/",
        "Transparencia": "institucional/transparencia/",
        "Biblioteca Virtual": "normativa/repositorio/",
        "Bolsa de Trabajo": "colegiados/listados/",
        "Central de Ayuda": "contacto/",
        "Chat en Vivo": "https://wa.me/51982520891",
        "Mi Cuenta": "admin/",
        "Mesa de Partes": "tramites/mesa-partes/",
        "Intranet / Mi Cuenta": "admin/",
        "Intranet": "admin/"
    }
}

def global_fix():
    for root, dirs, files in os.walk(base_dir):
        if any(x in root for x in ["assets", "admin", ".git"]):
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                rel_path = os.path.relpath(full_path, base_dir)
                depth = rel_path.count(os.sep) if rel_path != "index.html" else 0
                prefix = "../" * depth
                
                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()
                
                changed = False
                
                # 1. Fix known text-based # links
                for text, link in global_map[r'href="#"'].items():
                    # Pattern matches href="#" with specific text inside or nearby
                    # We look for the text between <a> tags
                    pattern = rf'href="#"([^>]*>{text}</a>)'
                    replacement_link = link if link.startswith("http") else f"{prefix}{link}"
                    if re.search(pattern, content):
                        content = re.sub(pattern, rf'href="{replacement_link}"\1', content)
                        changed = True

                # 2. Fix remaining .html links to folders (Recursive sweep)
                # Matches href="subdir/page.html" or href="page.html"
                # Excludes external links and index.html
                html_pattern = re.compile(r'href="((?!\w+://)[^"]+)\.html"', re.IGNORECASE)
                
                def html_to_slug(match):
                    path = match.group(1)
                    if path == "index" or path.endswith("/index"):
                        return f'href="{path}/"'
                    return f'href="{path}/"'

                if html_pattern.search(content):
                    content = html_pattern.sub(html_to_slug, content)
                    changed = True
                
                # 3. Final cleanup of double slashes or broken Inicio links
                if depth == 0:
                    content = content.replace('href="index.html"', 'href="index.html"') # Keep as is for root
                else:
                    content = content.replace(f'href="{prefix}index.html"', f'href="{prefix}"') # Use folder style for others
                
                content = content.replace('//"', '/"')
                
                if changed:
                    with open(full_path, "w", encoding="utf-8") as f:
                        f.write(content)

if __name__ == "__main__":
    global_fix()
    print("Global recursive fix finished.")
