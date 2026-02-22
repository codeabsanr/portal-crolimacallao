import os
import re

base_dir = r"C:\laragon\www\portal-crolimacallao\static_html"

# This cleanup script removes duplicated support sections and standardizes the primary help banner.
support_section_regex = re.compile(r'<!-- Always with you Support Block -->\s*<section.*?</section>', re.DOTALL)

standard_support_block = """<!-- Help Section -->
<section class="py-16 bg-slate-50 dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-surface-dark rounded-md p-8 shadow-sm border border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="max-w-xl">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-white mb-2">¿Te sientes perdido o necesitas ayuda con un trámite?</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Nuestro equipo está listo para acompañarte paso a paso. No dejes que las dudas te detengan.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <a href="tel:+51982520891" class="inline-flex items-center justify-center px-8 py-3 border border-primary text-primary hover:bg-primary hover:text-white font-bold rounded-sm transition-colors group">
                    <span class="material-icons-outlined mr-2 group-hover:animate-pulse">call</span> Llamar ahora
                </a>
                <a href="{prefix}contacto/" class="inline-flex items-center justify-center px-8 py-3 bg-red-900 text-white hover:bg-red-950 font-bold rounded-sm shadow-lg transition-colors group">
                    <span class="material-icons-outlined mr-2">support_agent</span> Central de Ayuda
                </a>
            </div>
        </div>
    </div>
</section>"""

def deduplicate_and_standardize():
    for root, dirs, files in os.walk(base_dir):
        if "assets" in root or "admin" in root:
            continue
        for file in files:
            if file.endswith(".html"):
                full_path = os.path.join(root, file)
                rel_path = os.path.relpath(full_path, base_dir)
                depth = rel_path.count(os.sep) if rel_path != "index.html" else 0
                prefix = "../" * depth
                
                with open(full_path, "r", encoding="utf-8") as f:
                    content = f.read()
                
                # Replace ALL support sections with just one standardized block
                if support_section_regex.search(content):
                    content = support_section_regex.sub("", content)
                    # Inject the standard one before the footer or at the end of main
                    if "</main>" in content:
                        content = content.replace("</main>", standard_support_block.format(prefix=prefix) + "\n    </main>")
                    else:
                        content = content.replace("<footer", standard_support_block.format(prefix=prefix) + "\n    <footer")
                
                with open(full_path, "w", encoding="utf-8") as f:
                    f.write(content)

if __name__ == "__main__":
    deduplicate_and_standardize()
    print("Deduplication and stabilization finished.")
