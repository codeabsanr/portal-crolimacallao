import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"
pages = ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]

# 1. First, move the 6 root files down into their subdirectories as index.html
for page in pages:
    old_path = os.path.join(src_dir, f"{page}.html")
    new_path = os.path.join(src_dir, page, "index.html")
    
    if os.path.exists(old_path):
        with open(old_path, "r", encoding="utf-8") as f:
            content = f.read()
            
        # These root Landing Pages were at the root level. Since we move them one level deep,
        # we must adjust their relative asset and root navigation paths.
        
        # CSS & Images
        content = content.replace('href="./assets/', 'href="../assets/')
        content = content.replace('src="./assets/', 'src="../assets/')
        
        # Link to admin dir
        content = content.replace('href="admin/index.html"', 'href="../admin/index.html"')
        content = content.replace('href="./admin/index.html"', 'href="../admin/index.html"')
        
        # Breadcrumb / Home links
        content = content.replace('href="index.html"', 'href="../index.html"')
        
        # Navigation Links (which we will further standardize in step 2)
        for p in pages:
            # e.g., href="tramites.html" -> href="../tramites/index.html"
            content = content.replace(f'href="{p}.html"', f'href="../{p}/index.html"')
            
        # Self links inside its own folder could be href="index.html", but we've mapped them to ../{p}/index.html above which is valid
            
        with open(new_path, "w", encoding="utf-8") as f:
            f.write(content)
            
        os.remove(old_path)
        print(f"Moved {page}.html -> {page}/index.html and updated internal paths.")


# 2. Global replace in all remaining HTML files to point to the new SEO indexes
# Note: we need to handle files residing in the ROOT dir uniquely from files in SUB dirs.

def update_global_links(filepath, is_nested):
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()
        
    changed = False
    
    for p in pages:
        if is_nested:
            # Looks for old root references from a subdirectory context
            # e.g., href="../tramites.html"
            old_link = f'href="../{p}.html"'
            new_link = f'href="../{p}/index.html"'
            if old_link in content:
                content = content.replace(old_link, new_link)
                changed = True
        else:
            # Looks for old root references from the root context
            # e.g., href="tramites.html"
            old_link = f'href="{p}.html"'
            new_link = f'href="{p}/index.html"'
            if old_link in content:
                content = content.replace(old_link, new_link)
                changed = True
                
    if changed:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated global SEO links in {filepath}")

# Process Root files (index.html, etc. if any others exist)
for filename in os.listdir(src_dir):
    if filename.endswith(".html"):
        update_global_links(os.path.join(src_dir, filename), is_nested=False)

# Process Nested files (all subpages and the newly created index.html files)
for subdir in os.listdir(src_dir):
    dir_path = os.path.join(src_dir, subdir)
    if os.path.isdir(dir_path):
        for filename in os.listdir(dir_path):
            if filename.endswith(".html"):
                update_global_links(os.path.join(dir_path, filename), is_nested=True)

print("SEO directory structure conversion complete.")
