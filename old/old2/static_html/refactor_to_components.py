import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def refactor_html_to_components():
    for root, dirs, files in os.walk(base_dir):
        # Skip system or asset directories
        if any(x in root for x in ["assets", "partials", "admin", ".git"]):
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                rel_path = os.path.relpath(full_path, base_dir)
                depth = rel_path.count(os.sep) if rel_path != "index.html" else 0
                prefix = "../" * depth
                
                # Determine "Active Page" based on path
                # index.html -> inicio
                # institucional/index.html -> institucion
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

                # 1. Refactor HEAD (Keep Title, replace static links with data-include or direct reference)
                # Actually, the user asked for head.html in partials. 
                # Since we can't easily use div data-include in head for CSS without FOUC, 
                # we'll keep the script tags that load CSS for now, OR we use a simple placeholder.
                # However, the user's rule says "cargar 1 script común: /assets/js/components.js".
                
                # Let's extract the Title and then replace the head content.
                title_match = re.search(r'<title>(.*?)</title>', content)
                title = title_match.group(1) if title_match else "CROLIMA"

                # Standardized Head that loads the component script
                head_placeholder = f"""    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{title}</title>
    <!-- Tailwind CSS (Direct for performance) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="{prefix}assets/js/tailwind-config.js"></script>
    <link href="{prefix}assets/css/styles.css" rel="stylesheet" />
    <!-- Component Loader -->
    <script src="{prefix}assets/js/components.js" defer></script>"""

                content = re.sub(r'<head>.*?</head>', f'<head>\n{head_placeholder}\n</head>', content, flags=re.DOTALL)

                # 2. Add data-active-page attribute to body for the loader to highlight the link
                content = re.sub(r'<body(.*?)>', rf'<body\1 data-active-page="{active_page}">', content)

                # 3. Replace Navbar (Top bar + Header)
                # We look for the top bar div and the header tag
                content = re.sub(r'<div class="bg-secondary text-white py-2.*?<header.*?</header>', '<div data-include="navbar"></div>', content, flags=re.DOTALL)

                # 4. Replace Footer
                content = re.sub(r'<footer.*?</footer>', '<div data-include="footer"></div>', content, flags=re.DOTALL)

                with open(full_path, "w", encoding="utf-8") as f:
                    f.write(content)

if __name__ == "__main__":
    refactor_html_to_components()
    print("Refactoring to components finished.")
