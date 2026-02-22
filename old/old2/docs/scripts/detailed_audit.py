import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def audit_files():
    problems = []
    
    for root, dirs, files in os.walk(base_dir):
        if any(x in root for x in ["assets", "admin", ".git", ".gemini", "brain"]):
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                with open(full_path, "r", encoding="utf-8") as f:
                    lines = f.readlines()
                
                for i, line in enumerate(lines):
                    # Check for href="#"
                    if 'href="#"' in line:
                        problems.append(f"[{file}:{i+1}] href='#' found: {line.strip()}")
                    
                    # Check for href=""
                    if 'href=""' in line:
                        problems.append(f"[{file}:{i+1}] href='' found: {line.strip()}")

                    # Check for .html in hrefs (ignoring index.html for now if and only if it's the target)
                    # Actually, we want slugs, so index.html is also discouraged if it can be a folder.
                    # But we'll allow index.html for now to avoid being too strict if it's correct.
                    html_links = re.findall(r'href="([^"]+\.html)"', line)
                    for link in html_links:
                        # Allow index.html at root or specific ones we haven't folderized yet
                        if link not in ["index.html", "index.html#main"]:
                             problems.append(f"[{file}:{i+1}] Legacy .html link: {link}")

    if not problems:
        print("Audit passed! Everything is perfect.")
    else:
        print(f"Audit found {len(problems)} potential issues:")
        for p in problems:
            print(f" - {p}")

if __name__ == "__main__":
    audit_files()
