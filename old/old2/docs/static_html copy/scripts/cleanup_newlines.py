import os

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

def cleanup_file(filepath):
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()
    
    # Replace literal \n with actual newline
    # Looking for 'Saltar al contenido principal</a>\\n    <header'
    target = 'Saltar al contenido principal</a>\\n    <header'
    replacement = 'Saltar al contenido principal</a>\n    <header'
    
    if target in content:
        new_content = content.replace(target, replacement)
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Fixed literal \\n in {filepath}")

# Process Root files
for filename in os.listdir(src_dir):
    if filename.endswith(".html"):
        cleanup_file(os.path.join(src_dir, filename))

# Process Nested files
subdirs = ["institucional", "tramites", "colegiados", "capacitacion", "normativa", "contacto"]
for subdir in subdirs:
    dir_path = os.path.join(src_dir, subdir)
    if os.path.exists(dir_path):
        for filename in os.listdir(dir_path):
            if filename.endswith(".html"):
                cleanup_file(os.path.join(dir_path, filename))

print("Cleanup complete.")
