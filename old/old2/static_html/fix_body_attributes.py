import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def fix_body_attributes():
    for root, dirs, files in os.walk(base_dir):
        if any(x in root for x in ["assets", "partials", "admin", ".git"]):
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                rel_path = os.path.relpath(full_path, base_dir)
                
                # Determine active page
                active_page = "inicio"
                if "institucional" in rel_path: active_page = "institucion"
                elif "tramites" in rel_path: active_page = "tramites"
                elif "colegiados" in rel_path: active_page = "colegiados"
                elif "capacitacion" in rel_path: active_page = "capacitacion"
                elif "actualidad" in rel_path: active_page = "actualidad"
                elif "normativa" in rel_path: active_page = "normativa"
                elif "contacto" in rel_path: active_page = "contacto"

                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()

                # Robust injection of data-active-page into <body>
                # This handles multi-line <body> tags
                if 'data-active-page' not in content:
                    content = re.sub(r'(<body[^>]*?)>', rf'\1 data-active-page="{active_page}">', content, flags=re.IGNORECASE | re.DOTALL)
                else:
                    # Update if wrong
                    content = re.sub(r'data-active-page="[^"]*"', rf'data-active-page="{active_page}"', content)

                with open(full_path, "w", encoding="utf-8") as f:
                    f.write(content)

if __name__ == "__main__":
    fix_body_attributes()
    print("Body attributes fixed.")
