import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def audit_files():
    problems = []
    
    for root, dirs, files in os.walk(base_dir):
        if "assets" in root or "admin" in root or ".git" in root:
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()
                
                # Check for href="#" in navigation (usually inside <nav> or cards)
                if 'href="#"' in content:
                    # Filter out those that are intentionally empty or have text content we missed
                    matches = re.findall(r'href="#"[^>]*>(.*?)</a>', content)
                    if matches:
                        problems.append(f"[{file}] Found broken href='#' with text: {matches}")

                # Check for links to .html files that should be slugs 
                # (e.g., href="institucional/quienes-somos.html")
                html_links = re.findall(r'href="([^"]+\.html)"', content)
                for link in html_links:
                    if link not in ["index.html", "index.html#main"] and not link.endswith("/index.html"):
                        # If it's a link to a file that we moved to a slug folder
                        problems.append(f"[{file}] Potential legacy link: {link}")

    if not problems:
        print("Audit passed! No major issues found.")
    else:
        print("Audit found potential issues:")
        for p in problems:
            print(f" - {p}")

if __name__ == "__main__":
    audit_files()
