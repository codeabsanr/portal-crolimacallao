import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Define the structure and metadata for the landing pages
landing_pages = {
    "institucional.html": {
        "title": "Institución",
        "icon": "account_balance",
        "description": "Conoce más sobre el Colegio Regional de Obstetras III Lima-Callao, nuestra historia, autoridades y compromisos institucionales.",
        "links": [
            {"href": "institucional/quienes-somos.html", "title": "Quiénes somos", "icon": "groups", "desc": "Nuestra misión, visión y valores institucionales."},
            {"href": "institucional/autoridades.html", "title": "Autoridades", "icon": "badge", "desc": "Conoce a nuestro Consejo Directivo Regional actual."},
            {"href": "institucional/historia.html", "title": "Historia", "icon": "history_edu", "desc": "La trayectoria y legado de nuestra institución."},
            {"href": "institucional/transparencia.html", "title": "Transparencia / Documentos", "icon": "plagiarism", "desc": "Acceso a información pública y gestión institucional."},
            {"href": "institucional/convenios.html", "title": "Convenios", "icon": "handshake", "desc": "Alianzas estratégicas en beneficio de los colegiados."}
        ]
    },
    "tramites.html": {
        "title": "Trámites y Servicios",
        "icon": "assignment",
        "description": "Accede a toda la información y requisitos para realizar tus trámites colegiales de manera rápida y sencilla.",
        "links": [
            {"href": "tramites/habilidad.html", "title": "Habilidad Profesional", "icon": "verified", "desc": "Requisitos para solicitar el certificado de habilidad."},
            {"href": "tramites/colegiatura.html", "title": "Colegiatura", "icon": "school", "desc": "Inscríbete y forma parte de nuestro Colegio Profesional."},
            {"href": "tramites/registros.html", "title": "Registros de Especialidad", "icon": "workspace_premium", "desc": "Registra tu especialidad, maestría o doctorado."},
            {"href": "tramites/carne.html", "title": "Carné Institucional", "icon": "credit_card", "desc": "Emisión y duplicado del carné de colegiado."},
            {"href": "tramites/mesa-partes.html", "title": "Mesa de Partes Virtual", "icon": "forward_to_inbox", "desc": "Envía tus documentos y solicitudes en línea."},
            {"href": "tramites/faq.html", "title": "Preguntas Frecuentes", "icon": "help_outline", "desc": "Resuelve tus dudas sobre los trámites más comunes."}
        ]
    },
    "colegiados.html": {
        "title": "Portal del Colegiado",
        "icon": "people",
        "description": "Servicios exclusivos, búsquedas y guías para los obstetras agremiados de la región Lima-Callao.",
        "links": [
            {"href": "colegiados/buscador.html", "title": "Buscador de Colegiados", "icon": "person_search", "desc": "Verifica la habilidad y datos de un colegiado."},
            {"href": "colegiados/listados.html", "title": "Listados por Categoría", "icon": "format_list_bulleted", "desc": "Nómina de especialistas, padrones y más."},
            {"href": "colegiados/guia.html", "title": "Guía de Habilitación", "icon": "menu_book", "desc": "Paso a paso para mantener tu habilidad profesional."}
        ]
    },
    "capacitacion.html": {
        "title": "Capacitación Continua",
        "icon": "local_library",
        "description": "Fortalece tus competencias profesionales con nuestra oferta académica y eventos científicos.",
        "links": [
            {"href": "capacitacion/calendario.html", "title": "Calendario Académico", "icon": "event", "desc": "Cronograma anual de actividades y cursos."},
            {"href": "capacitacion/cursos.html", "title": "Cursos y Talleres", "icon": "cast_for_education", "desc": "Oferta actual de capacitación continua."},
            {"href": "capacitacion/congresos.html", "title": "Congresos", "icon": "festival", "desc": "Información sobre congresos nacionales e internacionales."}
        ]
    },
    "normativa.html": {
        "title": "Documentos Normativos",
        "icon": "gavel",
        "description": "Leyes, reglamentos y guías que rigen el ejercicio de la profesión obstétrica en el Perú.",
        "links": [
            {"href": "normativa/leyes.html", "title": "Leyes", "icon": "balance", "desc": "Marco legal principal de la profesión."},
            {"href": "normativa/reglamentos.html", "title": "Reglamentos", "icon": "rule", "desc": "Estatutos y reglamentos internos institucionales."},
            {"href": "normativa/guias.html", "title": "Guías Nacionales", "icon": "import_contacts", "desc": "Guías técnicas y protocolos de atención integral."},
            {"href": "normativa/repositorio.html", "title": "Repositorio Completo", "icon": "folder_open", "desc": "Archivo general de normativas y resoluciones."}
        ]
    }
}

main_regex = re.compile(r'<main id="main".*?</main>', re.DOTALL)

for page_file, data in landing_pages.items():
    page_path = os.path.join(src_dir, page_file)
    if not os.path.exists(page_path):
        continue
        
    with open(page_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    # Generate the grid HTML
    cards_html = ""
    for link in data["links"]:
        cards_html += f"""
                <!-- Card -->
                <a href="{link['href']}" class="group flex flex-col bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg p-6 hover:shadow-lg hover:border-primary transition-all duration-300">
                    <div class="size-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-icons-outlined text-3xl">{link['icon']}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">{link['title']}</h3>
                    <p class="text-slate-600 dark:text-slate-400 font-medium flex-grow">{link['desc']}</p>
                    <div class="mt-4 flex items-center text-primary font-bold text-sm uppercase tracking-wider">
                        Ver sección <span class="material-icons-outlined ml-1 text-sm transform transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </a>
"""

    new_main = f"""<main id="main">
        <!-- Hero Index Section -->
        <section class="bg-surface-light dark:bg-surface-dark py-12 md:py-20 border-b border-slate-200 dark:border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center justify-center p-4 bg-primary/10 rounded-full mb-6">
                    <span class="material-icons-outlined text-5xl text-primary">{data['icon']}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-6">
                    {data['title']}
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                    {data['description']}
                </p>
            </div>
        </section>

        <!-- Grid Links Section -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
{cards_html}
            </div>
        </section>
    </main>"""
    
    # Replace the existing main with the new landing page main
    content = main_regex.sub(new_main, content)
    
    with open(page_path, "w", encoding="utf-8") as f:
        f.write(content)
    print(f"Refactored {page_file} into Landing Page.")
