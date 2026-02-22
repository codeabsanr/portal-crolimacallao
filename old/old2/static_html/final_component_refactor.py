import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

def final_component_refactor():
    for root, dirs, files in os.walk(base_dir):
        if any(x in root for x in ["assets", "partials", "admin", ".git"]):
            continue
            
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                
                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()

                # 1. Clean up any remaining static navbar/footer/head leftovers
                # (The previous script might have left some artifacts if regex didn't match perfectly)
                
                # 2. Extract and replace the Support/Help Section
                # Specifically matching the "Always with you" or similar banners
                support_patterns = [
                    r'<!-- Help Section -->.*?<section.*?</section>',
                    r'<div class="bg-secondary rounded-lg p-8 text-white relative overflow-hidden">.*?</div>\s*</div>\s*</div>\s*</section>', # Homepage special
                    r'<section class="py-16 bg-slate-50.*?¿Te sientes perdido.*?/section>'
                ]
                
                for p in support_patterns:
                    if re.search(p, content, re.DOTALL):
                        content = re.sub(p, '<div data-include="support"></div>', content, flags=re.DOTALL)

                # 3. Ensure navbar and footer are there exactly once
                if '<div data-include="navbar"></div>' not in content:
                    # Place before main
                    content = content.replace('<main', '<div data-include="navbar"></div>\n    <main')
                
                if '<div data-include="footer"></div>' not in content:
                    # Place after main
                    content = content.replace('</main>', '</main>\n    <div data-include="footer"></div>')

                # 4. Remove empty placeholders or redundant tags
                content = content.replace('<!-- Footer -->', '')
                content = content.replace('<!-- Top Bar -->', '')
                
                # Strip excessive whitespace around includes
                content = re.sub(r'\s*<div data-include="navbar"></div>\s*', '\n    <div data-include="navbar"></div>\n    ', content)
                content = re.sub(r'\s*<div data-include="footer"></div>\s*', '\n    <div data-include="footer"></div>\n    ', content)

                with open(full_path, "w", encoding="utf-8") as f:
                    f.write(content)

if __name__ == "__main__":
    final_component_refactor()
    print("Final component refactor finished.")
