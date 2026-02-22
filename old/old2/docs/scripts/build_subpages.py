import os
import re

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Dictionary of semantic mock content for the 21 subpages
subpages_content = {
    "institucional/quienes-somos.html": {
        "title": "Quiénes somos",
        "icon": "groups",
        "description": "Nuestra misión, visión y valores institucionales delineando nuestro compromiso con la salud materno-perinatal.",
        "content": '''
            <section id="mision" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Misión</h2>
                <p class="text-lg text-slate-700 leading-relaxed bg-white p-6 rounded-lg shadow-sm">Somos una institución deontológica que agrupa a los profesionales Obstetras de la Región Lima Callao, encargada de velar por el ejercicio ético y legal de la profesión...</p>
            </section>
            <section id="vision" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Visión</h2>
                <p class="text-lg text-slate-700 leading-relaxed bg-white p-6 rounded-lg shadow-sm">Ser una institución líder, innovadora y proactiva, reconocida por su contribución al desarrollo de la salud pública, empoderando a la profesión obstétrica...</p>
            </section>
        '''
    },
    "institucional/autoridades.html": {
        "title": "Autoridades",
        "icon": "badge",
        "description": "Conoce a los miembros del Consejo Directivo Regional actual, periodo 2024-2027.",
        "content": '''
            <section id="consejo-directivo" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Consejo Directivo Regional III Lima-Callao</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Example Card -->
                    <div class="bg-white border rounded-lg p-6 text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-200 rounded-full mx-auto mb-4 flex items-center justify-center text-slate-400">
                            <span class="material-icons-outlined text-4xl">person</span>
                        </div>
                        <h3 class="font-bold text-xl text-primary mb-1">Decana Regional</h3>
                        <p class="text-slate-600">[Nombre de la Autoridad]</p>
                    </div>
                    <!-- Example Card -->
                     <div class="bg-white border rounded-lg p-6 text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-200 rounded-full mx-auto mb-4 flex items-center justify-center text-slate-400">
                            <span class="material-icons-outlined text-4xl">person</span>
                        </div>
                        <h3 class="font-bold text-xl text-primary mb-1">Vicedecana Regional</h3>
                        <p class="text-slate-600">[Nombre de la Autoridad]</p>
                    </div>
                </div>
            </section>
        '''
    },
    "institucional/historia.html": {
        "title": "Historia",
        "icon": "history_edu",
        "description": "La trayectoria y legado de nuestra institución en el Perú.",
        "content": '''
            <section id="resena-historica" class="mb-12 bg-white p-8 rounded-lg shadow-sm relative overflow-hidden">
                <span class="material-icons-outlined absolute -bottom-10 -right-10 text-9xl text-slate-100 opacity-50 pointer-events-none">auto_stories</span>
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6 relative z-10">Cronología Institucional</h2>
                <p class="text-lg text-slate-700 leading-relaxed mb-4 relative z-10">La historia del Colegio de Obstetras del Perú se remonta a [año], cuando...</p>
                <div class="space-y-6 relative z-10">
                    <div class="border-l-2 border-primary pl-6 py-2">
                        <span class="text-primary font-bold">1981</span>
                        <p class="text-slate-600">Creación oficial mediante la Ley N° 23346.</p>
                    </div>
                </div>
            </section>
        '''
    },
    "institucional/transparencia.html": {
        "title": "Transparencia / Documentos",
        "icon": "plagiarism",
        "description": "Acceso a información pública, reglamentos y gestión institucional.",
        "content": '''
            <section id="memorias-gestion" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Memorias Institucionales</h2>
                <div class="bg-white rounded-lg border shadow-sm divide-y">
                    <a href="#" class="flex items-center justify-between p-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="material-icons-outlined text-red-500">picture_as_pdf</span>
                            <span class="text-slate-700 font-medium">Memoria Anual 2023</span>
                        </div>
                        <span class="material-icons-outlined text-slate-400">download</span>
                    </a>
                </div>
            </section>
        '''
    },
    "institucional/convenios.html": {
        "title": "Convenios Institucionales",
        "icon": "handshake",
        "description": "Alianzas estratégicas en beneficio de los colegiados habilitados.",
        "content": '''
            <section id="convenios-universidad" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Convenios Académicos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border rounded-lg p-6 shadow-sm flex items-start gap-4">
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-lg">
                            <span class="material-icons-outlined text-2xl">school</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">[Nombre Universidad]</h3>
                            <p class="text-slate-600 text-sm">Descuento del 15% en maestrías y diplomados para colegiados habilitados.</p>
                        </div>
                    </div>
                </div>
            </section>
        '''
    },
    # TRAMITES
    "tramites/habilidad.html": {
        "title": "Habilidad Profesional",
        "icon": "verified",
        "description": "Certificado indispensable para el ejercicio legal de la profesión.",
        "content": '''
            <section id="requisitos-habilidad" class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Requisitos</h2>
                <ul class="space-y-4 bg-white p-6 rounded-lg border shadow-sm text-slate-700">
                    <li class="flex items-start gap-3"><span class="material-icons-outlined text-green-500 mt-0.5">check_circle</span> Estar al día en sus cuotas mensuales.</li>
                    <li class="flex items-start gap-3"><span class="material-icons-outlined text-green-500 mt-0.5">check_circle</span> Pagar el derecho de certificado de habilidad.</li>
                </ul>
                <div class="mt-8">
                    <a href="../admin/index.html" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded hover:bg-primary-dark transition-colors font-bold">
                        Solicitar por el Portal Colegiado <span class="material-icons-outlined ml-2">open_in_new</span>
                    </a>
                </div>
            </section>
        '''
    },
    "tramites/colegiatura.html": {"title": "Colegiatura", "icon": "school", "description": "Forma parte del Colegio de Obstetras del Perú.", "content": '<section id="requisitos-colegiatura"><div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-8"><p class="text-yellow-800 font-medium">Atención presencial previa cita o recepción de expedientes digitales vía Mesa de Partes.</p></div><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Requisitos de Inscripción</h2><p class="text-slate-600 bg-white p-6 rounded shadow-sm">1. Título Original registrado por SUNEDU<br>2. DNI vigente<br>3. Fotografías tamaño pasaporte...</p></section>'},
    "tramites/registros.html": {"title": "Registros de Especialidad", "icon": "workspace_premium", "description": "Inscripción en el Registro Nacional de Especialistas.", "content": '<section id="registro-nacional"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Especialidades, Maestrías y Doctorados</h2><p class="text-slate-600 bg-white p-6 rounded shadow-sm">Todo obstetra con grado de Maestro, Doctor o Título de Especialista debe registrarlo para ejercer legalmente dicha competencia.</p></section>'},
    "tramites/carne.html": {"title": "Carné Institucional", "icon": "credit_card", "description": "Obtén tu identificación oficial como miembro de la orden.", "content": '<section id="emision-carne"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Trámite de Carné</h2><p class="text-slate-600 bg-white p-6 rounded shadow-sm">Se requiere foto actualizada fondo blanco y comprobante de pago por derecho de emisión.</p></section>'},
    "tramites/mesa-partes.html": {"title": "Mesa de Partes Virtual", "icon": "forward_to_inbox", "description": "Recepción de documentos y solicitudes las 24 horas.", "content": '<section id="formulario-mesa"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Envío de Documentos</h2><div class="bg-white p-8 rounded border shadow-sm"><p class="text-slate-600 mb-6">Complete el siguiente formulario adjuntando su documento principal en formato PDF (Max. 10MB).</p> <form class="space-y-4"><input type="text" placeholder="Asunto del Trámite" class="w-full p-3 border rounded"><input type="file" accept=".pdf" class="w-full p-3 border rounded"><button type="button" class="bg-primary text-white font-bold py-3 px-6 rounded">Enviar Documento</button></form></div></section>'},
    "tramites/faq.html": {"title": "Preguntas Frecuentes", "icon": "help_outline", "description": "Respuestas rápidas a las consultas habituales.", "content": '<section id="preguntas-habilidad"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Sobre Habilidad</h2><div class="space-y-4"><details class="bg-white p-4 border rounded shadow-sm"><summary class="font-bold cursor-pointer text-primary">¿Cuánto tiempo dura el certificado de habilidad?</summary><p class="mt-4 text-slate-600">Tiene una vigencia de 3 meses naturales desde su fecha de emisión.</p></details></div></section>'},
    
    # COLEGIADOS
    "colegiados/buscador.html": {"title": "Buscador de Colegiados", "icon": "person_search", "description": "Consulta pública de habilidad de obstetras.", "content": '<section id="buscador-publico"><div class="max-w-xl mx-auto bg-white p-8 rounded border shadow-sm"><h2 class="font-bold text-xl mb-4 text-center">Ingrese el número de COP o DNI</h2><div class="flex gap-2"><input type="text" class="flex-grow border p-3 rounded" placeholder="Ej. 12345"><button class="bg-primary text-white px-6 font-bold rounded">Buscar</button></div></div></section>'},
    "colegiados/listados.html": {"title": "Listados y Padrones", "icon": "format_list_bulleted", "description": "Nómina de especialistas y registros públicos.", "content": '<section id="listado-especialistas"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Padrones Públicos</h2><ul class="space-y-3"><li class="bg-white p-4 border rounded shadow-sm text-primary font-bold cursor-pointer hover:bg-slate-50"><span class="material-icons-outlined align-middle mr-2">download</span> Padrón de Especialistas - Febrero 2026</li></ul></section>'},
    "colegiados/guia.html": {"title": "Guía de Habilitación", "icon": "menu_book", "description": "Aprende a mantenerte hábil a través de nuestro portal.", "content": '<section id="guia-pasos"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Video Tutorial</h2><div class="aspect-w-16 aspect-h-9 bg-slate-200 rounded flex items-center justify-center text-slate-400 font-bold p-24 text-center border-2 border-dashed border-slate-300">Espacio para Video de YouTube o Guía PDF Interactiva</div></section>'},

    # CAPACITACION
    "capacitacion/calendario.html": {"title": "Calendario de Capacitaciones", "icon": "event", "description": "No te pierdas de los eventos formativos de este mes.", "content": '<section id="calendario-mes"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Agenda Académica</h2><div class="bg-white p-12 text-center rounded border shadow-sm text-slate-500 font-medium">Aquí se integrará el plugin de calendario de cursos.</div></section>'},
    "capacitacion/cursos.html": {"title": "Cursos y Talleres", "icon": "cast_for_education", "description": "Oferta vigente de formación con puntaje válido para recertificación.", "content": '<section id="cursos-abiertos"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Inscripciones Abiertas</h2><div class="grid grid-cols-1 md:grid-cols-2 gap-6"><div class="bg-white border rounded shadow-sm overflow-hidden"><img src="../assets/img/hero-image.jpg" class="w-full h-48 object-cover"><div class="p-6"><h3 class="font-bold text-xl mb-2">Curso: Ecografía Obstétrica Avanzada</h3><p class="text-slate-600 mb-4">Créditos: 2.0 | Modalidad: Híbrida.</p><button class="w-full bg-primary text-white py-2 font-bold rounded">Ver Temario</button></div></div></div></section>'},
    "capacitacion/congresos.html": {"title": "Congresos", "icon": "festival", "description": "Encuentros nacionales e internacionales organizados por el CRO III.", "content": '<section id="congresos-anuales"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Próximo Congreso</h2><div class="bg-primary text-white p-8 rounded shadow-sm text-center"><h3 class="text-2xl font-bold mb-2">Congreso Regional 2026</h3><p class="mb-6 opacity-80">Lima, Perú | 15 - 18 de Noviembre</p><button class="bg-white text-primary font-bold px-8 py-3 rounded-full hover:bg-slate-100">Visitar Web del Congreso</button></div></section>'},

    # NORMATIVA
    "normativa/leyes.html": {"title": "Leyes de la Profesión", "icon": "balance", "description": "Base legal que ampara el ejercicio pleno del profesional obstetra.", "content": '<section id="leyes-principales"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Leyes Nacionales</h2><div class="bg-white rounded border shadow-sm divide-y"><div class="p-4"><p class="font-bold text-primary">Ley N° 23346</p><p class="text-slate-600 text-sm">Ley que reconoce la Profesión Médica a los Obstetrices.</p></div><div class="p-4"><p class="font-bold text-primary">Ley N° 28686</p><p class="text-slate-600 text-sm">Ley del Colegio de Obstetras del Perú.</p></div></div></section>'},
    "normativa/reglamentos.html": {"title": "Reglamentos Estatutarios", "icon": "rule", "description": "Normativas internas que rigen la vida institucional.", "content": '<section id="estatutos"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Estatutos</h2><div class="bg-white p-6 rounded border shadow-sm"><a href="#" class="flex items-center text-red-600 font-bold hover:underline"><span class="material-icons-outlined mr-2">picture_as_pdf</span> Estatuto del COP Vigente (PDF)</a></div></section>'},
    "normativa/guias.html": {"title": "Guías Nacionales", "icon": "import_contacts", "description": "Guías Técnicas MINSA aplicables a la atención materno perinatal.", "content": '<section id="guias-minsa"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Guías Clínicas</h2><div class="grid grid-cols-1 md:grid-cols-2 gap-4"><div class="border p-4 rounded bg-white"><h3 class="font-bold">Guía de Planificación Familiar</h3></div><div class="border p-4 rounded bg-white"><h3 class="font-bold">Guía Práctica Clínica Atención Materna</h3></div></div></section>'},
    "normativa/repositorio.html": {"title": "Repositorio Completo", "icon": "folder_open", "description": "Buscador global de todas las resoluciones y normativas.", "content": '<section id="repositorio-general"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Búsqueda Documental</h2><div class="bg-slate-50 border p-6 rounded"><input type="text" placeholder="Buscar por año, resolución o palabra..." class="w-full p-3 border rounded shadow-inner"></div></section>'},

    # CONTACTO
    "contacto/canales.html": {"title": "Canales de Atención", "icon": "support_agent", "description": "Diversas vías para comunicarse con nuestras oficinas.", "content": '<section id="telefonos-correos"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Contáctenos</h2><div class="grid grid-cols-1 md:grid-cols-3 gap-6"><div class="text-center p-6 bg-white border rounded"><span class="material-icons-outlined text-4xl text-primary mb-2">location_on</span><p>Mariscal Sucre 1351, Pueblo Libre, Lima</p></div><div class="text-center p-6 bg-white border rounded"><span class="material-icons-outlined text-4xl text-primary mb-2">call</span><p>(01) 461-2345</p></div><div class="text-center p-6 bg-white border rounded"><span class="material-icons-outlined text-4xl text-primary mb-2">email</span><p>informes@crolimacallao.org.pe</p></div></div></section>'},
    "contacto/horarios.html": {"title": "Horarios de Atención", "icon": "schedule", "description": "Días y horas de labor en sede central y modalidades virtuales.", "content": '<section id="horarios-sede"><h2 class="text-3xl font-bold text-slate-900 border-l-4 border-primary pl-4 mb-6">Sede Administrativa</h2><table class="w-full text-left bg-white border rounded shadow-sm overflow-hidden"><thead class="bg-slate-100 border-b"><tr><th class="p-4">Día</th><th class="p-4">Horario</th></tr></thead><tbody><tr class="border-b"><td class="p-4 font-medium">Lunes a Viernes</td><td class="p-4 text-slate-600">9:00 a.m. a 5:30 p.m.</td></tr><tr><td class="p-4 font-medium">Sábados</td><td class="p-4 text-slate-600">9:00 a.m. a 12:00 m.</td></tr></tbody></table></section>'}
}

main_regex = re.compile(r'<main.*?</main>', re.DOTALL)

for page_path_rel, data in subpages_content.items():
    page_path = os.path.join(src_dir, page_path_rel.replace('/', os.sep))
    if not os.path.exists(page_path):
        continue
        
    with open(page_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    # The new dedicated content for the subpage
    new_main = f"""<main id="main" class="min-h-screen bg-slate-50 dark:bg-slate-900 pb-16">
        <!-- Simplified Header/Hero for Subpages -->
        <div class="bg-primary text-white py-12 md:py-16 shadow-inner">
            <div class="max-w-4xl mx-auto px-6">
                <div class="flex items-center gap-4 mb-4">
                    <span class="material-icons-outlined text-4xl opacity-80">{data['icon']}</span>
                    <h1 class="text-3xl md:text-5xl font-extrabold">{data['title']}</h1>
                </div>
                <p class="text-lg md:text-xl opacity-90">{data['description']}</p>
            </div>
        </div>
        
        <!-- Main Content Area with isolated semantic tags -->
        <div class="max-w-4xl mx-auto px-6 mt-12">
            {data['content']}
            
            <div class="mt-12 flex justify-start">
                <a href="javascript:history.back()" class="inline-flex items-center text-primary font-bold hover:underline">
                    <span class="material-icons-outlined mr-1">arrow_back</span> Regresar
                </a>
            </div>
        </div>
    </main>"""
    
    # Replace old inherited giant <main> with the isolated specific <main>
    content = main_regex.sub(new_main, content)
    
    # Fix the title tag to match exactly this subpage
    title_regex = re.compile(r'<title>.*?</title>')
    content = title_regex.sub(f"<title>{data['title']} | Colegio Regional de Obstetras III</title>", content)
    
    with open(page_path, "w", encoding="utf-8") as f:
        f.write(content)
        
    print(f"Injected isolated semantic content into {page_path_rel}")
