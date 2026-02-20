import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Update Footer contact info regexes
# Address
address_regex = re.compile(r'Institución comprometida con la excelencia y el desarrollo de la obstetricia en nuestra región\.', re.IGNORECASE)
new_address_text = r'Institución comprometida con la excelencia y el desarrollo de la obstetricia en nuestra región.<br><br><span class="material-icons-outlined !text-sm align-middle">location_on</span> Mariscal Sucre 1351, Pueblo Libre, Lima<br><span class="material-icons-outlined !text-sm align-middle">schedule</span> Lunes a Viernes 9:00 a.m. a 5:30 p.m. / Sábados 9:00 a.m. a 12 m.'

# Only in contacto.html
contacto_address_regex = re.compile(r'Av\. Petit\s*<br>\s*Thouars 1775\s*<br>\s*Lince, Lima - Perú|Av\. Petit Thouars 1775<br>Lince, Lima - Perú', re.IGNORECASE)
contacto_new_address = r'Mariscal Sucre 1351<br>Pueblo Libre, Lima - Perú'

contacto_hours_regex = re.compile(r'Lunes a\s*<br>\s*Viernes\s*<br>\s*09:00 a\.m\. a 05:00 p\.m\.|Lunes a Viernes<br>09:00 a\.m\. a 05:00 p\.m\.', re.IGNORECASE)
contacto_new_hours = r'Lunes a Viernes: 9:00 a.m. a 5:30 p.m.<br>Sábados: 9:00 a.m. a 12 m.'

for filename in os.listdir(src_dir):
    if filename.endswith(".html") and not filename.startswith("admin"):
        filepath = os.path.join(src_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()
        
        # 1. Update Footer (all pages)
        content = address_regex.sub(new_address_text, content)
        
        # 2. Update specific contacto.html
        if filename == "contacto.html":
            content = contacto_address_regex.sub(contacto_new_address, content)
            content = contacto_hours_regex.sub(contacto_new_hours, content)

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Updated contact info in {filename}")
