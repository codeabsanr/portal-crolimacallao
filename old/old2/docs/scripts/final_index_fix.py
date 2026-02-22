import os

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"
index_path = os.path.join(base_dir, "index.html")

with open(index_path, "r", encoding="utf-8") as f:
    content = f.read()

# Fix common patterns found by audit
content = content.replace('href=""', 'href="index.html"')

# Fix specific text cases that might be using #
mappings = {
    "Ver Temario Completo": "capacitacion/cursos/",
    "Consultar Agenda": "actualidad/eventos/",
    "Ver todas las noticias": "actualidad/noticias/",
    "Iniciar Trámite": "tramites/",
}

for text, link in mappings.items():
    # Attempt to catch cases like <a href="#" ...>Text</a>
    pattern = rf'href="#"([^>]*>{text})'
    content = re.sub(pattern, rf'href="{link}"\1', content)

# Catch-all for remaining # (convert to #main to avoid jumping to top)
content = content.replace('href="#"', 'href="#main"')

import re
with open(index_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Final index.html cleanup finished.")
