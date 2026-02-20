import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"
subdirs = ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]

for subdir in subdirs:
    dir_path = os.path.join(src_dir, subdir)
    if not os.path.exists(dir_path):
        continue
        
    for filename in os.listdir(dir_path):
        if filename.endswith(".html"):
            filepath = os.path.join(dir_path, filename)
            with open(filepath, "r", encoding="utf-8") as f:
                content = f.read()
                
            # Replace ./assets/ with ../assets/
            content = content.replace('"./assets/', '"../assets/')
            
            # While we're here, double check admin/ or others if we used ./
            content = content.replace('"./admin/', '"../admin/')
            
            with open(filepath, "w", encoding="utf-8") as f:
                f.write(content)
            print(f"Fixed paths in {subdir}/{filename}")
