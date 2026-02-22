import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Data for Landing Pages (Parents)
landing_data = {
    "institucional/index.html": {
        "title": "Institución", "icon": "account_balance",
        "description": "Nuestra historia, autoridades y compromisos institucionales.",
        "links": [
            {"href": "quienes-somos.html", "title": "Quiénes somos", "icon": "groups", "desc": "Misión, visión y valores."},
            {"href": "autoridades.html", "title": "Autoridades", "icon": "badge", "desc": "Consejo Directivo Regional."},
            {"href": "historia.html", "title": "Historia", "icon": "history_edu", "desc": "Trayectoria institucional."},
            {"href": "transparencia.html", "title": "Transparencia", "icon": "plagiarism", "desc": "Documentos y gestión."},
            {"href": "convenios.html", "title": "Convenios", "icon": "handshake", "desc": "Alianzas estratégicas."}
        ]
    },
    "tramites/index.html": {
        "title": "Trámites", "icon": "assignment",
        "description": "Servicios y requisitos para el colegiado.",
        "links": [
            {"href": "habilidad.html", "title": "Habilidad", "icon": "verified", "desc": "Certificado de habilidad profesional."},
            {"href": "colegiatura.html", "title": "Colegiatura", "icon": "school", "desc": "Inscripción en el Colegio."},
            {"href": "registros.html", "title": "Registros", "icon": "workspace_premium", "desc": "Especialidades y postgrados."},
            {"href": "carne.html", "title": "Carné", "icon": "credit_card", "desc": "Emisión de identificación."},
            {"href": "mesa-partes.html", "title": "Mesa de Partes", "icon": "forward_to_inbox", "desc": "Trámites virtuales."},
            {"href": "faq.html", "title": "Preguntas", "icon": "help_outline", "desc": "Dudas frecuentes."}
        ]
    },
    "colegiados/index.html": {
        "title": "Colegiados", "icon": "people",
        "description": "Portal exclusivo para miembros de la orden.",
        "links": [
            {"href": "buscador.html", "title": "Buscador", "icon": "person_search", "desc": "Consulta de habilitados."},
            {"href": "listados.html", "title": "Listados", "icon": "format_list_bulleted", "desc": "Padrones y especialistas."},
            {"href": "guia.html", "title": "Guía", "icon": "menu_book", "desc": "Manual de usuario."}
        ]
    },
    "capacitacion/index.html": {
        "title": "Capacitación", "icon": "local_library",
        "description": "Fortalecimiento profesional y oferta académica.",
        "links": [
            {"href": "calendario.html", "title": "Calendario", "icon": "event", "desc": "Cronograma de eventos."},
            {"href": "cursos.html", "title": "Cursos", "icon": "cast_for_education", "desc": "Diplomados y talleres."},
            {"href": "congresos.html", "title": "Congresos", "icon": "festival", "desc": "Eventos científicos."}
        ]
    },
    "normativa/index.html": {
        "title": "Normativa", "icon": "gavel",
        "description": "Leyes y reglamentos de la profesión.",
        "links": [
            {"href": "leyes.html", "title": "Leyes", "icon": "balance", "desc": "Marco legal nacional."},
            {"href": "reglamentos.html", "title": "Reglamentos", "icon": "rule", "desc": "Estatutos institucionales."},
            {"href": "guias.html", "title": "Guías", "icon": "import_contacts", "desc": "Guías técnicas MINSA."},
            {"href": "repositorio.html", "title": "Repositorio", "icon": "folder_open", "desc": "Archivo general."}
        ]
    },
    "contacto/index.html": {
        "title": "Contacto", "icon": "contact_support",
        "description": "Canales de atención y horarios.",
        "links": [
            {"href": "canales.html", "title": "Canales", "icon": "support_agent", "desc": "Teléfonos y correos."},
            {"href": "horarios.html", "title": "Horarios", "icon": "schedule", "desc": "Sedes y atención."}
        ]
    }
}

main_regex = re.compile(r'<main.*?</main>', re.DOTALL)

def apply_landing_template(file_path, data):
    cards_html = ""
    for link in data["links"]:
        cards_html += f'''
                <a href="{link['href']}" class="group bg-white dark:bg-surface-dark border p-8 rounded-lg shadow-sm hover:shadow-md hover:border-primary transition-all">
                    <div class="size-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-icons-outlined text-4xl">{link['icon']}</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">{link['title']}</h3>
                    <p class="text-slate-600 mb-6">{link['desc']}</p>
                    <span class="text-primary font-bold flex items-center text-sm uppercase tracking-wider">
                        Ver más <span class="material-icons-outlined ml-1">arrow_forward</span>
                    </span>
                </a>
'''
    content_html = f'''
    <main id="main">
        <section class="bg-primary text-white py-20 text-center">
            <div class="max-w-4xl mx-auto px-6">
                <span class="material-icons-outlined text-6xl opacity-80 mb-4">{data['icon']}</span>
                <h1 class="text-5xl font-extrabold mb-6">{data['title']}</h1>
                <p class="text-xl opacity-90">{data['description']}</p>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {cards_html}
            </div>
        </section>
    </main>
'''
    with open(file_path, "r", encoding="utf-8") as f:
        file_content = f.read()
    
    file_content = main_regex.sub(content_html, file_content)
    
    with open(file_path, "w", encoding="utf-8") as f:
        f.write(file_content)
    print(f"Restored Landing Page: {file_path}")

# Apply Landing Pages
for rel_path, data in landing_data.items():
    full_path = os.path.join(src_dir, rel_path.replace('/', os.sep))
    if os.path.exists(full_path):
        apply_landing_template(full_path, data)

# 4. Special Content Refinement (Real IDs for Capacitación)
capacitacion_cursos_path = os.path.join(src_dir, "capacitacion", "cursos.html")
if os.path.exists(capacitacion_cursos_path):
    with open(capacitacion_cursos_path, "r", encoding="utf-8") as f:
        content = f.read()
    
    # Injecting real IDs and descriptions
    real_content = '''
            <section id="especializacion-ecografia" class="mb-16">
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm flex flex-col md:flex-row">
                    <div class="md:w-1/3 bg-slate-200">
                        <img src="../assets/img/hero-image.jpg" class="h-full w-full object-cover">
                    </div>
                    <div class="p-8 md:w-2/3">
                        <span class="text-primary font-bold text-xs uppercase tracking-widest">Diplomado 2026</span>
                        <h2 class="text-3xl font-extrabold text-slate-900 mt-2 mb-4">Especialización en Ecografía Obstétrica</h2>
                        <p class="text-lg text-slate-600 mb-6">Capacitación intensiva con certificación nacional para la detección temprana de anomalías fetales y manejo de doppler avanzado.</p>
                        <div class="flex flex-wrap gap-4 mb-6">
                            <span class="bg-slate-100 px-3 py-1 rounded-sm text-sm font-medium">120 Horas</span>
                            <span class="bg-slate-100 px-3 py-1 rounded-sm text-sm font-medium">Créditos: 5.0</span>
                        </div>
                        <a href="index.html" class="bg-primary text-white px-8 py-3 rounded font-bold hover:bg-primary-dark transition-colors inline-block">Ver Temario Completo</a>
                    </div>
                </div>
            </section>
            
            <section id="taller-emergencias-obstetricas" class="mb-16">
                <div class="bg-white border rounded-xl overflow-hidden shadow-sm flex flex-col md:flex-row">
                    <div class="md:w-1/3 bg-slate-100 flex items-center justify-center">
                        <span class="material-icons-outlined text-8xl text-slate-300">medical_services</span>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <span class="text-primary font-bold text-xs uppercase tracking-widest">Taller Presencial</span>
                        <h2 class="text-3xl font-extrabold text-slate-900 mt-2 mb-4">Clave Roja y Emergencias Obstétricas</h2>
                        <p class="text-lg text-slate-600 mb-6">Entrenamiento práctico en simulación de alta fidelidad para el manejo de hemorragias postparto y shock hipovolémico.</p>
                        <div class="flex flex-wrap gap-4 mb-6">
                            <span class="bg-slate-100 px-3 py-1 rounded-sm text-sm font-medium">20 Horas</span>
                            <span class="bg-slate-100 px-3 py-1 rounded-sm text-sm font-medium">Presencial</span>
                        </div>
                        <button class="bg-primary text-white px-8 py-3 rounded font-bold hover:bg-primary-dark transition-colors">Solicitar Información</button>
                    </div>
                </div>
            </section>
'''
    # Find the div where content should go
    content = re.sub(r'<div class="max-w-4xl mx-auto px-6 mt-12">.*?<div class="mt-12 flex justify-start">', 
                    f'<div class="max-w-4xl mx-auto px-6 mt-12">{real_content}<div class="mt-12 flex justify-start">', 
                    content, flags=re.DOTALL)
    
    with open(capacitacion_cursos_path, "w", encoding="utf-8") as f:
        f.write(content)
    print("Refined Capacitación Courses content.")

print("Content refinement complete.")
