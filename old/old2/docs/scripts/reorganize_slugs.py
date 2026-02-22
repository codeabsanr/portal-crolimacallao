import os
import re
import shutil

# This script reorganizes static_html files from file.html to file/index.html
# to simulate slug-based navigation.

base_dir = r"c:\laragon\www\portal-crolimacallao\static_html"

# Folders to process (except assets, admin, and already nested folders if they have an index)
subdirs = ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]

def update_relative_paths(content, depth_change):
    # If a file moves from folder/file.html to folder/file/index.html, 
    # all relative paths like "../assets" must become "../../assets"
    if depth_change == 1:
        # Avoid double-prefixing if already updated? 
        # Actually, let's just use a more robust regex to find and prefix known paths.
        patterns = [
            (r'href="\.\./', 'href="../../'),
            (r'src="\.\./', 'src="../../'),
            (r'href="\.\/assets\/', 'href="../assets/'), # from index.html (root) to folder/index.html
            (r'src="\.\/assets\/', 'src="../assets/'),
            (r'href="assets\/', 'href="../assets/'),
            (r'src="assets\/', 'src="../assets/'),
        ]
        
        # If it was a root file (index.html is NOT moved, but others are)
        # Root file moved to slug/index.html -> needs ../ for everything.
        
        for pattern, replacement in patterns:
            content = re.sub(pattern, replacement, content)
    return content

# 1. Reorganize sub-pages
for subdir in subdirs:
    dir_path = os.path.join(base_dir, subdir)
    if not os.path.exists(dir_path):
        continue
        
    for filename in os.listdir(dir_path):
        if filename.endswith(".html") and filename != "index.html":
            slug = filename.split(".")[0]
            new_dir = os.path.join(dir_path, slug)
            os.makedirs(new_dir, exist_ok=True)
            
            old_path = os.path.join(dir_path, filename)
            new_path = os.path.join(new_dir, "index.html")
            
            with open(old_path, "r", encoding="utf-8") as f:
                content = f.read()
            
            # Update paths in content
            content = update_relative_paths(content, 1)
            
            with open(new_path, "w", encoding="utf-8") as f:
                f.write(content)
                
            os.remove(old_path)
            print(f"Moved {subdir}/{filename} -> {subdir}/{slug}/index.html")

# 2. Reorganize root pages (except index.html)
root_pages = ["institucional.html", "tramites.html", "colegiados.html", "capacitacion.html", "normativa.html", "contacto.html"]
# Note: I need to check if these exist in static_html base
for filename in os.listdir(base_dir):
    if filename in root_pages:
        slug = filename.split(".")[0]
        new_dir = os.path.join(base_dir, slug)
        os.makedirs(new_dir, exist_ok=True)
        
        old_path = os.path.join(base_dir, filename)
        new_path = os.path.join(new_dir, "index.html")
        
        with open(old_path, "r", encoding="utf-8") as f:
            content = f.read()
            
        content = update_relative_paths(content, 1)
        
        with open(new_path, "w", encoding="utf-8") as f:
            f.write(content)
            
        os.remove(old_path)
        print(f"Moved root {filename} -> {slug}/index.html")

print("Slug organization complete. Root index.html remains at the base.")
