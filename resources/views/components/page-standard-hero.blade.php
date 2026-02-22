@php
    $routeName = request()->route()?->getName();

    $map = [
        'institucional' => [
            'eyebrow' => 'Colegio Regional de Obstetras III',
            'title' => 'Institucional',
            'summary' => 'Institución autónoma sin fines de lucro que regula y representa el ejercicio de la obstetricia en Lima Metropolitana y Callao, conforme al Decreto Ley N.º 21210.',
            'icon' => 'account_balance',
            'assistEyebrow' => 'Navegación institucional',
            'assistTitle' => 'Secciones clave de gobierno, normativa y gestión',
            'assistFooter' => 'Misión institucional: velar por el ejercicio ético de la obstetricia y promover actualización científica, defensa gremial y fortalecimiento institucional en la jurisdicción Lima y Callao.',
            'chips' => ['Regulación profesional', 'Defensa gremial', 'Actualización científica'],
            'cta1' => ['text' => 'Conocer la institución', 'route' => 'institucional.quienes-somos'],
            'cta2' => ['text' => 'Marco normativo', 'route' => 'institucional.normatividad'],
            'helpLinks' => [
                ['label' => 'Resumen de gestión', 'href' => route('institucional') . '#resumen', 'icon' => 'summarize'],
                ['label' => 'Consejo directivo', 'route' => 'institucional.consejo-directivo', 'icon' => 'groups'],
                ['label' => 'Normatividad', 'route' => 'institucional.normatividad', 'icon' => 'gavel'],
                ['label' => 'Compendio de normas', 'route' => 'institucional.compendio-de-normas', 'icon' => 'library_books'],
                ['label' => 'Reseña histórica', 'route' => 'institucional.resena-historica', 'icon' => 'history_edu'],
                ['label' => 'Convenios institucionales', 'route' => 'institucional.convenios', 'icon' => 'handshake'],
            ],
            'stats' => [
                ['label' => 'Fundación', 'value' => '1995'],
                ['label' => 'Jurisdicción', 'value' => 'Lima y Callao'],
                ['label' => 'Gestión vigente', 'value' => 'Consejo Regional 2025-2028'],
            ],
        ],
        'contacto' => [
            'eyebrow' => 'Canales de atención',
            'title' => 'Contáctanos',
            'summary' => 'Atención directa para consultas institucionales, trámites y soporte al colegiado.',
            'icon' => 'support_agent',
            'assistEyebrow' => 'Contacto único',
            'assistTitle' => 'Te respondemos por canal oficial',
            'assistFooter' => 'Elige el canal que prefieras y te orientamos según tu consulta.',
            'chips' => [],
            'cta1' => ['text' => 'Ir al formulario', 'href' => '#contacto-formulario'],
            'cta2' => ['text' => 'Llamar ahora', 'href' => 'tel:+51982520891'],
            'stats' => [
                ['label' => 'Teléfono', 'value' => '+51 982 520 891'],
                ['label' => 'Correo', 'value' => 'tramitedocumentario@crolimacallao.org.pe'],
                ['label' => 'Atención', 'value' => 'Canales virtual y presencial'],
            ],
        ],
        'tramites' => [
            'eyebrow' => 'Gestión institucional',
            'title' => 'Trámites y servicios al colegiado',
            'summary' => 'Consulte requisitos, pagos y pasos para colegiatura, habilidad profesional, registros académicos, carné y trámite documentario.',
            'icon' => 'folder_open',
            'assistEyebrow' => 'Ayuda de trámites',
            'assistTitle' => '¿Necesitas ayuda para iniciar?',
            'chips' => ['Colegiatura', 'Habilidad profesional', 'Mesa de Partes Virtual'],
            'cta1' => ['text' => 'Ver catálogo', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar soporte', 'route' => 'contacto'],
            'helpLinks' => [
                ['label' => 'Ver preguntas frecuentes', 'route' => 'tramites.faq', 'icon' => 'help'],
            ],
            'stats' => [
                ['label' => 'Canal preferente', 'value' => 'Mesa de Partes Virtual'],
                ['label' => 'Modalidad', 'value' => 'Atención híbrida'],
                ['label' => 'Flujo', 'value' => 'Registro, verificación y respuesta'],
            ],
        ],
        'tramites.faq' => [
            'eyebrow' => 'Gestión institucional',
            'title' => 'Preguntas frecuentes',
            'summary' => 'Resuelva dudas comunes sobre requisitos, pagos, tiempos de atención y canales de soporte de trámites.',
            'icon' => 'help',
            'assistEyebrow' => 'Ayuda rápida',
            'assistTitle' => '¿No encuentras tu respuesta?',
            'assistFooter' => 'Si tu caso requiere validación específica, te orientamos por contacto directo.',
            'chips' => ['Requisitos', 'Pagos', 'Tiempos de respuesta'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar soporte', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Tipo de consulta', 'value' => 'Orientación general'],
                ['label' => 'Canal', 'value' => 'Web y soporte directo'],
            ],
        ],
        'tramites.habilidad' => [
            'eyebrow' => 'Trámites especializados',
            'title' => 'Habilidad profesional',
            'summary' => 'Requisitos y flujo para emisión o renovación de habilidad profesional.',
            'icon' => 'verified',
            'chips' => ['Certificación', 'Vigencia', 'Validación'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Estado', 'value' => 'Trámite documentario'],
                ['label' => 'Salida', 'value' => 'Constancia institucional'],
            ],
        ],
        'tramites.colegiatura' => [
            'eyebrow' => 'Trámites especializados',
            'title' => 'Colegiatura',
            'summary' => 'Guía inicial para inscripción y validación administrativa.',
            'icon' => 'school',
            'chips' => ['Inscripción', 'Evaluación', 'Alta en padrón'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Ir a buscador', 'route' => 'colegiados.buscador'],
            'stats' => [
                ['label' => 'Etapas', 'value' => 'Registro, revisión y aprobación'],
                ['label' => 'Canal', 'value' => 'Virtual y presencial'],
            ],
        ],
        'tramites.registros' => [
            'eyebrow' => 'Trámites especializados',
            'title' => 'Registros académicos',
            'summary' => 'Actualización de especialidades, maestrías y doctorados.',
            'icon' => 'workspace_premium',
            'chips' => ['Especialidades', 'Maestrías', 'Doctorados'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Documento', 'value' => 'Actualización de perfil'],
                ['label' => 'Proceso', 'value' => 'Revisión y registro'],
            ],
        ],
        'tramites.carne' => [
            'eyebrow' => 'Trámites especializados',
            'title' => 'Carné institucional',
            'summary' => 'Emisión, renovación y duplicado con control de vigencia.',
            'icon' => 'credit_card',
            'chips' => ['Nuevo', 'Renovación', 'Duplicado'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Gestión', 'value' => 'Identificación institucional'],
                ['label' => 'Canal', 'value' => 'Atención administrativa'],
            ],
        ],
        'tramites.mesa-partes' => [
            'eyebrow' => 'Canal digital',
            'title' => 'Mesa de partes virtual',
            'summary' => 'Recepción digital de documentos, expedientes y solicitudes.',
            'icon' => 'forward_to_inbox',
            'chips' => ['Registro', 'Seguimiento', 'Respuesta'],
            'cta1' => ['text' => 'Volver a trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Disponibilidad', 'value' => '24/7'],
                ['label' => 'Trazabilidad', 'value' => 'Código de seguimiento'],
            ],
        ],
        'colegiados' => [
            'eyebrow' => 'Servicios al colegiado',
            'title' => 'Colegiados',
            'summary' => 'Buscador, listados y herramientas de orientación institucional.',
            'icon' => 'groups',
            'assistEyebrow' => 'Servicios para colegiados',
            'assistTitle' => 'Accesos rápidos para consultas y validación',
            'assistFooter' => 'Información confiable para validar datos profesionales en toda la jurisdicción de Lima y Callao.',
            'chips' => ['Busca obstetra', 'Listados', 'Guía de uso'],
            'cta1' => ['text' => 'Buscar obstetra', 'route' => 'colegiados.buscador'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Servicio clave', 'value' => 'Verificación profesional'],
                ['label' => 'Cobertura', 'value' => 'Lima y Callao'],
            ],
        ],
        'colegiados.buscador' => [
            'eyebrow' => 'Servicios al colegiado',
            'title' => 'Buscador de obstetra',
            'summary' => 'Consulta de colegiatura y estado de habilidad profesional.',
            'icon' => 'person_search',
            'chips' => ['Consulta rápida', 'Estado de habilidad', 'Validación'],
            'cta1' => ['text' => 'Volver a colegiados', 'route' => 'colegiados'],
            'cta2' => ['text' => 'Listados', 'route' => 'colegiados.listados'],
            'stats' => [
                ['label' => 'Tipo', 'value' => 'Consulta pública'],
                ['label' => 'Resultado', 'value' => 'Estado profesional'],
            ],
        ],
        'colegiados.listados' => [
            'eyebrow' => 'Servicios al colegiado',
            'title' => 'Listados oficiales',
            'summary' => 'Padrones institucionales por categoría y vigencia.',
            'icon' => 'format_list_bulleted',
            'chips' => ['Padrón hábil', 'Nuevas colegiaturas', 'Especialidades'],
            'cta1' => ['text' => 'Volver a colegiados', 'route' => 'colegiados'],
            'cta2' => ['text' => 'Buscador', 'route' => 'colegiados.buscador'],
            'stats' => [
                ['label' => 'Formato', 'value' => 'Listado referencial'],
                ['label' => 'Actualización', 'value' => 'Periódica'],
            ],
        ],
        'colegiados.guia' => [
            'eyebrow' => 'Servicios al colegiado',
            'title' => 'Guía de uso del portal',
            'summary' => 'Pasos rápidos para navegar trámites, consultas y servicios.',
            'icon' => 'menu_book',
            'chips' => ['Navegación', 'Requisitos', 'Seguimiento'],
            'cta1' => ['text' => 'Volver a colegiados', 'route' => 'colegiados'],
            'cta2' => ['text' => 'Ir a trámites', 'route' => 'tramites'],
            'stats' => [
                ['label' => 'Objetivo', 'value' => 'Uso simple y claro'],
                ['label' => 'Enfoque', 'value' => 'Atención institucional'],
            ],
        ],
        'capacitacion' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Capacitación',
            'summary' => 'Programas académicos, actividades científicas y actualización continua.',
            'icon' => 'school',
            'assistEyebrow' => 'Ayuda de capacitación',
            'assistTitle' => 'Accesos rápidos por tipo de formación',
            'assistFooter' => 'Oferta formativa oficial para fortalecer competencias profesionales de obstetras en Lima y Callao.',
            'chips' => ['Calendario', 'Cursos', 'Congresos'],
            'cta1' => ['text' => 'Ver cursos', 'route' => 'capacitacion.cursos'],
            'cta2' => ['text' => 'Ver calendario', 'route' => 'capacitacion.calendario'],
            'helpLinks' => [
                ['label' => 'Calendario', 'route' => 'capacitacion.calendario', 'icon' => 'event'],
                ['label' => 'Cursos', 'route' => 'capacitacion.cursos', 'icon' => 'cast_for_education'],
                ['label' => 'Congresos', 'route' => 'capacitacion.congresos', 'icon' => 'festival'],
                ['label' => 'Aula virtual', 'route' => 'capacitacion.aula-virtual', 'icon' => 'desktop_windows'],
            ],
            'stats' => [
                ['label' => 'Modalidad', 'value' => 'Presencial, virtual e híbrida'],
                ['label' => 'Alcance', 'value' => 'Formación continua'],
            ],
        ],
        'capacitacion.calendario' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Calendario académico',
            'summary' => 'Programación de cursos, jornadas y talleres por mes.',
            'icon' => 'event',
            'chips' => ['Fechas clave', 'Vacantes', 'Cronograma'],
            'cta1' => ['text' => 'Volver a capacitación', 'route' => 'capacitacion'],
            'cta2' => ['text' => 'Ver cursos', 'route' => 'capacitacion.cursos'],
            'stats' => [
                ['label' => 'Visión', 'value' => 'Planificación trimestral'],
                ['label' => 'Meta', 'value' => 'Participación activa'],
            ],
        ],
        'capacitacion.cursos' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Catálogo de cursos',
            'summary' => 'Oferta de formación continua para colegiados.',
            'icon' => 'cast_for_education',
            'chips' => ['Clínico', 'Normativo', 'Investigación'],
            'cta1' => ['text' => 'Volver a capacitación', 'route' => 'capacitacion'],
            'cta2' => ['text' => 'Calendario', 'route' => 'capacitacion.calendario'],
            'stats' => [
                ['label' => 'Formato', 'value' => 'Módulos especializados'],
                ['label' => 'Constancia', 'value' => 'Acreditación institucional'],
            ],
        ],
        'capacitacion.congresos' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Congresos y encuentros',
            'summary' => 'Eventos científicos y académicos para actualización profesional.',
            'icon' => 'festival',
            'chips' => ['Congresos', 'Encuentros', 'Foros'],
            'cta1' => ['text' => 'Volver a capacitación', 'route' => 'capacitacion'],
            'cta2' => ['text' => 'Calendario', 'route' => 'capacitacion.calendario'],
            'stats' => [
                ['label' => 'Enfoque', 'value' => 'Intercambio científico'],
                ['label' => 'Ámbito', 'value' => 'Regional y nacional'],
            ],
        ],
        'capacitacion.aula-virtual' => [
            'eyebrow' => 'Desarrollo profesional',
            'title' => 'Aula virtual',
            'summary' => 'Ingreso a plataforma académica y recursos de aprendizaje.',
            'icon' => 'desktop_windows',
            'chips' => ['Campus', 'Recursos', 'Notificaciones'],
            'cta1' => ['text' => 'Volver a capacitación', 'route' => 'capacitacion'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Estado', 'value' => 'Implementación progresiva'],
                ['label' => 'Acceso', 'value' => 'Credenciales institucionales'],
            ],
        ],
        'actualidad' => [
            'eyebrow' => 'Información institucional',
            'title' => 'Actualidad institucional',
            'summary' => 'Noticias, comunicados y agenda de actividades para la comunidad profesional.',
            'icon' => 'newspaper',
            'assistEyebrow' => 'Actualidad y agenda',
            'assistTitle' => 'Accesos rápidos de información oficial',
            'assistFooter' => 'Novedades verificadas del Colegio Regional de Obstetras III Lima-Callao, en un lenguaje claro y cercano.',
            'chips' => ['Noticias', 'Eventos', 'Comunicados'],
            'cta1' => ['text' => 'Ver noticias', 'route' => 'actualidad.noticias'],
            'cta2' => ['text' => 'Ver eventos', 'route' => 'actualidad.eventos'],
            'stats' => [
                ['label' => 'Canal', 'value' => 'Difusión oficial'],
                ['label' => 'Cobertura', 'value' => 'Comunidad profesional'],
            ],
        ],
        'actualidad.noticias' => [
            'eyebrow' => 'Información institucional',
            'title' => 'Noticias institucionales',
            'summary' => 'Resumen de acuerdos, actividades y publicaciones recientes.',
            'icon' => 'article',
            'chips' => ['Publicaciones', 'Acuerdos', 'Novedades'],
            'cta1' => ['text' => 'Volver a actualidad', 'route' => 'actualidad'],
            'cta2' => ['text' => 'Comunicados', 'route' => 'actualidad.comunicados'],
            'stats' => [
                ['label' => 'Actualización', 'value' => 'Constante'],
                ['label' => 'Origen', 'value' => 'Canal institucional'],
            ],
        ],
        'actualidad.eventos' => [
            'eyebrow' => 'Información institucional',
            'title' => 'Eventos y calendario',
            'summary' => 'Agenda de actividades académicas e institucionales.',
            'icon' => 'calendar_month',
            'chips' => ['Agenda', 'Modalidades', 'Participación'],
            'cta1' => ['text' => 'Volver a actualidad', 'route' => 'actualidad'],
            'cta2' => ['text' => 'Noticias', 'route' => 'actualidad.noticias'],
            'stats' => [
                ['label' => 'Planificación', 'value' => 'Trimestral'],
                ['label' => 'Cobertura', 'value' => 'Presencial y virtual'],
            ],
        ],
        'actualidad.comunicados' => [
            'eyebrow' => 'Información institucional',
            'title' => 'Comunicados oficiales',
            'summary' => 'Documentos y avisos administrativos para colegiados.',
            'icon' => 'campaign',
            'chips' => ['Urgente', 'Vigente', 'Histórico'],
            'cta1' => ['text' => 'Volver a actualidad', 'route' => 'actualidad'],
            'cta2' => ['text' => 'Contactar', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Tipo', 'value' => 'Publicación oficial'],
                ['label' => 'Validez', 'value' => 'Según estado'],
            ],
        ],
        'normativa' => [
            'eyebrow' => 'Transparencia y cumplimiento',
            'title' => 'Normativa',
            'summary' => 'Marco legal y documental para el ejercicio profesional y la gestión institucional.',
            'icon' => 'gavel',
            'assistEyebrow' => 'Soporte normativo',
            'assistTitle' => 'Accesos rápidos al marco legal',
            'assistFooter' => 'Documentación oficial para orientar decisiones con seguridad jurídica y criterio institucional.',
            'chips' => ['Leyes', 'Reglamentos', 'Repositorio'],
            'cta1' => ['text' => 'Ir a repositorio', 'route' => 'normativa.repositorio'],
            'cta2' => ['text' => 'Ver leyes', 'route' => 'normativa.leyes'],
            'stats' => [
                ['label' => 'Ámbito', 'value' => 'Regulación profesional'],
                ['label' => 'Consulta', 'value' => 'Documentación pública'],
            ],
        ],
        'normativa.leyes' => [
            'eyebrow' => 'Transparencia y cumplimiento',
            'title' => 'Leyes aplicables',
            'summary' => 'Compendio de normas nacionales vinculadas al ejercicio profesional.',
            'icon' => 'balance',
            'chips' => ['Ley 28686', 'Ley 27853', 'Ley general de salud'],
            'cta1' => ['text' => 'Volver a normativa', 'route' => 'normativa'],
            'cta2' => ['text' => 'Repositorio', 'route' => 'normativa.repositorio'],
            'stats' => [
                ['label' => 'Estado', 'value' => 'Normativa vigente'],
                ['label' => 'Uso', 'value' => 'Referencia institucional'],
            ],
        ],
        'normativa.reglamentos' => [
            'eyebrow' => 'Transparencia y cumplimiento',
            'title' => 'Reglamentos institucionales',
            'summary' => 'Normas internas y reglamentos de cumplimiento obligatorio.',
            'icon' => 'rule',
            'chips' => ['General', 'Disciplina', 'Procedimientos'],
            'cta1' => ['text' => 'Volver a normativa', 'route' => 'normativa'],
            'cta2' => ['text' => 'Repositorio', 'route' => 'normativa.repositorio'],
            'stats' => [
                ['label' => 'Aplicación', 'value' => 'Gestión institucional'],
                ['label' => 'Alcance', 'value' => 'Comunidad colegiada'],
            ],
        ],
        'normativa.guias' => [
            'eyebrow' => 'Transparencia y cumplimiento',
            'title' => 'Guías técnicas',
            'summary' => 'Material de orientación para atención, gestión y buenas prácticas.',
            'icon' => 'import_contacts',
            'chips' => ['Guías', 'Manuales', 'Referencia'],
            'cta1' => ['text' => 'Volver a normativa', 'route' => 'normativa'],
            'cta2' => ['text' => 'Repositorio', 'route' => 'normativa.repositorio'],
            'stats' => [
                ['label' => 'Finalidad', 'value' => 'Estandarizar procesos'],
                ['label' => 'Formato', 'value' => 'Consulta rápida'],
            ],
        ],
        'normativa.repositorio' => [
            'eyebrow' => 'Transparencia y cumplimiento',
            'title' => 'Repositorio documental',
            'summary' => 'Buscador por tipo de norma, periodo y palabra clave.',
            'icon' => 'folder_open',
            'chips' => ['Búsqueda', 'Filtros', 'Histórico'],
            'cta1' => ['text' => 'Volver a normativa', 'route' => 'normativa'],
            'cta2' => ['text' => 'Ver leyes', 'route' => 'normativa.leyes'],
            'stats' => [
                ['label' => 'Cobertura', 'value' => 'Archivo documental'],
                ['label' => 'Consulta', 'value' => 'Acceso público'],
            ],
        ],
        'admin.intranet' => [
            'eyebrow' => 'Portal del colegiado',
            'title' => 'Intranet institucional',
            'summary' => 'Acceso a servicios privados: estado de cuenta, trámites personales y notificaciones.',
            'icon' => 'shield',
            'chips' => ['Perfil', 'Pagos', 'Notificaciones'],
            'cta1' => ['text' => 'Iniciar sesión', 'route' => 'login'],
            'cta2' => ['text' => 'Recuperar acceso', 'route' => 'password.request'],
            'stats' => [
                ['label' => 'Acceso', 'value' => 'Restringido'],
                ['label' => 'Seguridad', 'value' => 'Credenciales verificadas'],
            ],
        ],
        'terminos' => [
            'eyebrow' => 'Marco legal',
            'title' => 'Términos y condiciones',
            'summary' => 'Lineamientos de uso para navegación y servicios digitales del portal.',
            'icon' => 'gavel',
            'chips' => ['Uso del portal', 'Responsabilidad', 'Cumplimiento'],
            'cta1' => ['text' => 'Política de privacidad', 'route' => 'privacidad'],
            'cta2' => ['text' => 'Contacto', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Documento', 'value' => 'Condiciones generales'],
                ['label' => 'Ámbito', 'value' => 'Servicios web institucionales'],
            ],
        ],
        'privacidad' => [
            'eyebrow' => 'Marco legal',
            'title' => 'Política de privacidad',
            'summary' => 'Tratamiento de datos personales en servicios institucionales.',
            'icon' => 'policy',
            'chips' => ['Datos personales', 'Seguridad', 'Derechos'],
            'cta1' => ['text' => 'Términos', 'route' => 'terminos'],
            'cta2' => ['text' => 'Contacto', 'route' => 'contacto'],
            'stats' => [
                ['label' => 'Protección', 'value' => 'Información personal'],
                ['label' => 'Principio', 'value' => 'Uso mínimo necesario'],
            ],
        ],
    ];

    $hero = $map[$routeName] ?? null;

    if ($hero) {
        $quickLinks = $hero['helpLinks'] ?? [];

        if (empty($quickLinks)) {
            if (!empty($hero['cta1']['route']) && !empty($hero['cta1']['text'])) {
                $quickLinks[] = [
                    'label' => $hero['cta1']['text'],
                    'route' => $hero['cta1']['route'],
                    'icon' => $hero['icon'] ?? 'arrow_forward',
                ];
            }
            if (!empty($hero['cta2']['route']) && !empty($hero['cta2']['text'])) {
                $quickLinks[] = [
                    'label' => $hero['cta2']['text'],
                    'route' => $hero['cta2']['route'],
                    'icon' => 'support_agent',
                ];
            }
        }

        $hero['helpLinks'] = $quickLinks;
        $hero['assistEyebrow'] = $hero['assistEyebrow'] ?? 'Ayuda institucional';
        $hero['assistTitle'] = $hero['assistTitle'] ?? 'Accesos rápidos según su necesidad';
        $hero['assistFooter'] = $hero['assistFooter'] ?? 'Información oficial y rutas claras para colegiadas y colegiados de Lima y Callao.';
    }
@endphp

@if ($hero)
    @php($isUnifiedHero = true)
    <section class="relative overflow-hidden min-h-0 bg-inst-hero" style="background-image: linear-gradient(120deg, #660219 0%, #8c0f2f 40%, #17365b 100%);">
        <div class="relative grid lg:grid-cols-2 border-y-2 border-slate-300">
            @if ($isUnifiedHero)
                <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 md:pr-4 z-[1]">
                    <span class="absolute right-[8%] top-1/2 -translate-y-1/2 h-[48%] w-[48%] rounded-full bg-white/8 blur-3xl"></span>
                    <span class="material-icons-outlined relative leading-[0.85] text-white/28 drop-shadow-[0_10px_24px_rgba(255,255,255,0.18)]" style="font-size: clamp(5.5rem, 18vh, 12rem);">{{ $hero['icon'] }}</span>
                </div>
            @endif
            <div class="{{ $isUnifiedHero ? 'bg-transparent' : 'bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)]' }}">
                <div class="mx-auto lg:mx-0 w-full max-w-[40rem] lg:ml-auto lg:mr-0 px-4 sm:px-6 lg:px-8 py-10 md:py-12">
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-[0.16em] {{ $isUnifiedHero ? 'text-brand-gold-light' : 'text-primary' }} mb-2">{{ $hero['eyebrow'] }}</p>
                    <h1 class="{{ $isUnifiedHero ? 'text-white' : 'text-secondary' }} text-3xl sm:text-4xl md:text-5xl font-black tracking-tight leading-[1.06] max-w-4xl">{{ $hero['title'] }}</h1>
                    <div class="mt-3 h-[3px] w-20 bg-brand-gold-light"></div>
                    <p class="mt-5 max-w-3xl {{ $isUnifiedHero ? 'text-white/90' : 'text-secondary-light' }} text-base sm:text-lg leading-relaxed">{{ $hero['summary'] }}</p>

                    @php($cta1Href = $hero['cta1']['href'] ?? (!empty($hero['cta1']['route']) ? route($hero['cta1']['route']) : null))
                    @php($cta2Href = $hero['cta2']['href'] ?? (!empty($hero['cta2']['route']) ? route($hero['cta2']['route']) : null))
                    @php($cta1IsAnchor = is_string($cta1Href) && str_starts_with($cta1Href, '#'))
                    <div class="mt-7 flex flex-col sm:flex-row gap-3">
                        @if (!empty($hero['cta1']['text']) && $cta1Href)
                            <a href="{{ $cta1Href }}" class="inst-btn bg-primary text-white hover:bg-primary-dark w-full sm:w-auto {{ $routeName === 'contacto' && $cta1IsAnchor ? 'inst-btn-scroll-guide' : '' }}">
                                <span>{{ $hero['cta1']['text'] }}</span>
                                @if ($routeName === 'contacto' && $cta1IsAnchor)
                                    <span aria-hidden="true" class="material-icons-outlined text-[1.1rem]">south</span>
                                @endif
                            </a>
                        @endif
                        @if (!empty($hero['cta2']['text']) && $cta2Href)
                            <a href="{{ $cta2Href }}" class="inst-btn {{ $isUnifiedHero ? 'border-white text-white hover:bg-white/10' : 'border-secondary text-secondary hover:bg-brand-gold-soft hover:border-primary hover:text-primary' }} w-full sm:w-auto">{{ $hero['cta2']['text'] }}</a>
                        @endif
                    </div>

                    @if (!empty($hero['chips']))
                        <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2.5 text-sm md:text-base">
                            @foreach ($hero['chips'] as $chip)
                                <span class="inline-flex items-center gap-1.5 {{ $isUnifiedHero ? 'text-white/90' : 'text-secondary-light' }}">
                                    <span class="material-icons-outlined text-brand-gold text-[1.15rem]">check_circle</span>
                                    <span class="font-semibold">{{ $chip }}</span>
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <aside class="relative z-10 text-white {{ $isUnifiedHero ? 'bg-transparent' : 'bg-inst-hero inst-tramites-cut' }}">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_12%_18%,rgba(219,169,59,0.14),transparent_34%),radial-gradient(circle_at_88%_82%,rgba(255,255,255,0.06),transparent_38%)]"></div>
                <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>
                @if (!$isUnifiedHero)
                    <div aria-hidden="true" class="absolute right-5 top-5 md:right-10 md:top-8 opacity-[0.08] z-0">
                        <span class="material-icons-outlined text-[4.75rem] md:text-[7rem] leading-none">{{ $hero['icon'] }}</span>
                    </div>
                @endif

                <div class="relative z-10 mx-auto lg:mx-0 w-full max-w-[34rem] lg:mr-auto lg:ml-0 px-4 sm:px-6 lg:px-8 lg:pl-10 py-8 md:py-10">
                    <div class="relative border border-white/20 bg-[#102a52]/55 backdrop-blur-xl p-4 md:p-5 shadow-hero-panel overflow-hidden">
                        <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold mb-2">{{ $hero['assistEyebrow'] }}</p>
                        <p class="font-bold text-white text-lg sm:text-xl md:text-2xl leading-tight">{{ $hero['assistTitle'] }}</p>

                        @if ($routeName === 'contacto')
                            <div class="mt-5 space-y-3">
                                <a href="mailto:tramitedocumentario@crolimacallao.org.pe" class="flex items-center gap-2 border border-white/25 bg-white/10 px-3.5 py-3 text-white hover:bg-white/15 transition-colors">
                                    <span class="material-icons-outlined text-brand-gold-light">mail</span>
                                    <span class="font-semibold">tramitedocumentario@crolimacallao.org.pe</span>
                                </a>
                                <a href="tel:+51982520891" class="flex items-center gap-2 border border-white/25 bg-white/10 px-3.5 py-3 text-white hover:bg-white/15 transition-colors">
                                    <span class="material-icons-outlined text-brand-gold-light">call</span>
                                    <span class="font-semibold">+51 982 520 891</span>
                                </a>
                            </div>
                            <p class="mt-4 text-sm md:text-base text-white/85">{{ $hero['assistFooter'] }}</p>
                        @elseif ($routeName === 'tramites')
                            @if (!empty($hero['helpLinks']))
                                @php($faqLink = $hero['helpLinks'][0])
                                @php($faqHref = $faqLink['href'] ?? route($faqLink['route']))
                                <a href="{{ $faqHref }}" class="mt-4 inst-btn !w-full !bg-white !text-primary hover:!bg-brand-gold-soft !py-2.5 !text-sm">
                                    {{ $faqLink['label'] }}
                                </a>
                            @endif
                            <div class="mt-3 border border-white/20 bg-white/10 px-4 py-2.5 text-sm text-white/90">
                                <p class="font-semibold text-white">Llamar para soporte rápido</p>
                                <a href="tel:+51982520891" class="mt-1 inline-flex items-center gap-2 text-brand-gold-soft hover:text-brand-gold-light">
                                    <span class="material-icons-outlined text-base">call</span>
                                    <span>+51 982 520 891</span>
                                </a>
                            </div>
                        @else
                            @if (!empty($hero['helpLinks']))
                                <div class="mt-4 grid sm:grid-cols-2 gap-2.5">
                                    @foreach ($hero['helpLinks'] as $link)
                                        @php($linkHref = $link['href'] ?? route($link['route']))
                                        <a href="{{ $linkHref }}" class="group inline-flex items-center justify-between gap-2 border border-white/25 bg-white/10 px-3 py-2.5 text-white hover:bg-white/15 hover:border-white/40 transition-colors">
                                            <span class="inline-flex items-center gap-2">
                                                <span class="material-icons-outlined text-lg text-brand-gold-light">{{ $link['icon'] ?? 'arrow_forward' }}</span>
                                                <span class="text-sm sm:text-base font-semibold">{{ $link['label'] }}</span>
                                            </span>
                                            <span class="material-icons-outlined text-base text-white/90">east</span>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            <p class="mt-4 text-sm md:text-base text-white/85">{{ $hero['assistFooter'] }}</p>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endif
