import os
import re

nav_items = [
    ("Inicio", "index.html"),
    ("Institución", "institucional.html"),
    ("Trámites", "tramites.html"),
    ("Colegiados", "colegiados.html"),
    ("Capacitación", "capacitacion.html"),
    ("Normativa", "normativa.html"),
    ("Contacto", "contacto.html")
]

active_class = 'text-primary font-bold border-b-2 border-primary px-1 py-2'
inactive_class = 'text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary font-medium px-1 py-2 transition-colors'

nav_regex = re.compile(r'<nav class="hidden md:flex space-x-8">.*?</nav>', re.DOTALL)

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

for filename in os.listdir(src_dir):
    if filename.endswith(".html") and not filename.startswith("admin"):
        filepath = os.path.join(src_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()

        new_nav = '<nav class="hidden md:flex space-x-8">\n'
        for title, link in nav_items:
            # Check if this link corresponds to the current file
            is_active = (filename == link)
            cls = active_class if is_active else inactive_class
            new_nav += f'                    <a class="{cls}"\n                        href="{link}">{title}</a>\n'
        new_nav += '                </nav>'

        new_content = nav_regex.sub(new_nav, content)
        
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Updated navigation in {filename}")
