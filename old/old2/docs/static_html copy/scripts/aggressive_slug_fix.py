import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def convert_to_slugs(text):
    # This regex finds href="path/to/file.html" and replaces it with href="path/to/file/"
    # or href="path/to/index.html" with href="path/to/"
    
    # 1. Replace index.html with /
    text = re.sub(r'href="([^"]*?)index\.html"', r'href="\1"', text)
    
    # 2. Replace other .html files with folders (if they weren't already index.html)
    # We only do this for internal relative paths
    text = re.sub(r'href="((?!\w+://)[^"]+)\.html"', r'href="\1/"', text)
    
    # 3. Cleanup double slashes if any
    text = text.replace('//"', '/"')
    text = text.replace('index.html#main', '#main')
    
    # Special fix for root index.html link in nav
    # If href="index.html" -> href="index.html" (we keep the root as is or use /)
    # Actually, root index.html should probably stay as index.html or be /
    
    return text

for root, dirs, files in os.walk(base_dir):
    if "assets" in root or "admin" in root:
        continue
    for file in files:
        if file.endswith(".html"):
            full_path = os.path.join(root, file)
            with open(full_path, "r", encoding="utf-8") as f:
                content = f.read()
            
            new_content = convert_to_slugs(content)
            
            if new_content != content:
                with open(full_path, "w", encoding="utf-8") as f:
                    f.write(new_content)
                print(f"Fixed slugs in {file}")

print("Global slug conversion finished.")
