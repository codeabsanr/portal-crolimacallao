import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

# Mapping to fix common legacy links to slugs
link_cleanup_map = {
    # Institutional
    r'href="institucional/quienes-somos\.html"': 'href="institucional/quienes-somos/"',
    r'href="institucional/autoridades\.html"': 'href="institucional/autoridades/"',
    r'href="institucional/historia\.html"': 'href="institucional/historia/"',
    r'href="institucional/transparencia\.html"': 'href="institucional/transparencia/"',
    r'href="institucional/convenios\.html"': 'href="institucional/convenios/"',
    
    # Tramites
    r'href="tramites/habilidad\.html"': 'href="tramites/habilidad/"',
    r'href="tramites/colegiatura\.html"': 'href="tramites/colegiatura/"',
    r'href="tramites/registros\.html"': 'href="tramites/registros/"',
    r'href="tramites/carne\.html"': 'href="tramites/carne/"',
    r'href="tramites/mesa-partes\.html"': 'href="tramites/mesa-partes/"',
    r'href="tramites/faq\.html"': 'href="tramites/faq/"',
    
    # Colegiados
    r'href="colegiados/buscador\.html"': 'href="colegiados/buscador/"',
    r'href="colegiados/listados\.html"': 'href="colegiados/listados/"',
    r'href="colegiados/guia\.html"': 'href="colegiados/guia/"',
    
    # Capacitacion
    r'href="capacitacion/calendario\.html"': 'href="capacitacion/calendario/"',
    r'href="capacitacion/cursos\.html"': 'href="capacitacion/cursos/"',
    r'href="capacitacion/congresos\.html"': 'href="capacitacion/congresos/"',
    r'href="cursos\.html"': 'href="capacitacion/cursos/"',
    
    # Normativa
    r'href="normativa/leyes\.html"': 'href="normativa/leyes/"',
    r'href="normativa/reglamentos\.html"': 'href="normativa/reglamentos/"',
    r'href="normativa/guias\.html"': 'href="normativa/guias/"',
    r'href="normativa/repositorio\.html"': 'href="normativa/repositorio/"',
    
    # Contacto
    r'href="contacto/canales\.html"': 'href="contacto/canales/"',
    r'href="contacto/horarios\.html"': 'href="contacto/horarios/"',
}

def final_cleanup():
    for root, dirs, files in os.walk(base_dir):
        if "assets" in root or "admin" in root:
            continue
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()
                
                changed = False
                for pattern, replacement in link_cleanup_map.items():
                    # Handle relative prefixes based on depth
                    rel_path = os.path.relpath(full_path, base_dir)
                    depth = rel_path.count(os.sep) if rel_path != "index.html" else 0
                    prefix = "../" * depth
                    
                    # Adjust replacement with prefix if it's not an external absolute link
                    adjusted_replacement = replacement.replace('href="', f'href="{prefix}')
                    
                    if re.search(pattern, content):
                        content = re.sub(pattern, adjusted_replacement, content)
                        changed = True
                
                if changed:
                    with open(full_path, "w", encoding="utf-8") as f:
                        f.write(content)

if __name__ == "__main__":
    final_cleanup()
    print("Final link cleanup finished.")
