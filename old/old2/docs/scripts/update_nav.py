import os
import re

# Refactored update_nav.py to handle slug-based directory structure
# It now walks through the directory and calculates relative prefixes based on depth.

# Corrected base_dir to static_html
base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

nav_items = [
    ("Inicio", ""),
    ("Institución", "institucional/"),
    ("Trámites", "tramites/"),
    ("Colegiados", "colegiados/"),
    ("Capacitación", "capacitacion/"),
    ("Actualidad", "actualidad/"),
    ("Normativa", "normativa/"),
    ("Contacto", "contacto/")
]

active_class = 'text-primary font-bold border-b-2 border-primary pb-1'
inactive_class = 'text-slate-700 dark:text-slate-200 font-medium py-2'

# Expanded regex to capture the whole header structure for replacement
header_regex = re.compile(r'<header.*?</header>', re.DOTALL)

# Header template with configurable prefix
header_template = """<header class="bg-surface-light dark:bg-surface-dark shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="{prefix}index.html" class="flex items-center group">
                    <img src="{prefix}assets/img/logo-text.png" alt="Colegio Regional de Obstetras III Lima-Callao" class="h-16 lg:h-20 w-auto transition-transform group-hover:scale-[1.02]">
                </a>
            </div>
            <nav class="hidden md:flex space-x-6 items-center">
                {nav_links}
            </nav>
            <div class="hidden md:flex items-center">
                <a class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-base font-medium rounded-sm text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary shadow-sm transition-colors" href="{prefix}admin/index.html">
                    <span class="material-icons-outlined mr-2">person</span> Mi Cuenta
                </a>
            </div>
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-btn" class="text-slate-500 dark:text-slate-300 hover:text-slate-700 focus:outline-none p-2" type="button">
                    <span class="sr-only">Abrir menú</span>
                    <span class="material-icons-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu container omitted for brevity, should be added if missing or kept as is -->
</header>"""

def get_relative_prefix(depth):
    return "../" * depth

def update_file_nav(filepath, rel_path_from_root):
    depth = rel_path_from_root.count(os.sep) if rel_path_from_root else 0
    prefix = get_relative_prefix(depth)
    
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    nav_links = ""
    for title, link in nav_items:
        # Determine if active. Link is like "institucional/"
        is_active = False
        if link == "" and rel_path_from_root == "":
            is_active = True
        elif link and rel_path_from_root.startswith(link.rstrip('/')):
            is_active = True
            
        cls = active_class if is_active else inactive_class
        # Construct link with prefix. 
        # If link is "", just prefix + index.html
        final_link = f"{prefix}{link}index.html" if link or prefix else "index.html"
        nav_links += f'<a class="{cls}" href="{final_link}">{title}</a>\n                '

    # Create new header
    new_header = header_template.format(prefix=prefix, nav_links=nav_links.strip())
    
    # We use a simpler search/replace for the <nav> block if the full header regex is too aggressive
    # But for now, let's try replacing the nav block specifically if possible.
    nav_block_regex = re.compile(r'<nav class="hidden md:flex space-x-6 items-center">.*?</nav>', re.DOTALL)
    
    new_nav = f'<nav class="hidden md:flex space-x-6 items-center">\n                {nav_links.strip()}\n            </nav>'
    
    if nav_block_regex.search(content):
        new_content = nav_block_regex.sub(new_nav, content)
        # Also update the logo link and "Mi Cuenta" link which might be broken
        new_content = re.sub(r'href="[^"]*assets/img/logo-text.png"', f'href="{prefix}assets/img/logo-text.png"', new_content) # Wait, it's inside <img> src
        new_content = re.sub(r'src="[^"]*assets/img/logo-text.png"', f'src="{prefix}assets/img/logo-text.png"', new_content)
        new_content = re.sub(r'href="[^"]*admin/index.html"', f'href="{prefix}admin/index.html"', new_content)
        new_content = re.sub(r'href="[^"]*index.html" class="flex items-center group"', f'href="{prefix}index.html" class="flex items-center group"', new_content)

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        # print(f"Updated {rel_path_from_root}")

# Walk through base_dir
for root, dirs, files in os.walk(base_dir):
    if "assets" in root or "admin" in root:
        continue
    for file in files:
        if file.endswith(".html"):
            full_path = os.path.join(root, file)
            rel_path = os.path.relpath(full_path, base_dir)
            if rel_path == "index.html":
                update_file_nav(full_path, "")
            else:
                update_file_nav(full_path, rel_path)

print("Navigation updated across all slug folders.")
