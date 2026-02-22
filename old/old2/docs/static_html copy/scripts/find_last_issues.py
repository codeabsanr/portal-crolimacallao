import os

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"
file_path = os.path.join(base_dir, "index.html")

with open(file_path, "r", encoding="utf-8") as f:
    for i, line in enumerate(f):
        if 'href="#"' in line or 'href=""' in line:
            print(f"{i+1}: {line.strip()}")
