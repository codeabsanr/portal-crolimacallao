@php
    $routeName = request()->route()?->getName();

    $map = [
        'institucional' => [
            'eyebrow' => 'Colegio Regional de Obstetras III',
            'title' => 'Institucional',
            'summary' => 'Portal oficial de gobierno institucional, representación gremial y orientación normativa para las obstetras de Lima y Callao.',
            'icon' => 'account_balance',
            'chips' => ['Representación oficial', 'Ética y legalidad', 'Atención institucional'],
            'cta1' => ['text' => 'Conocer la institución', 'route' => 'institucional.quienes-somos'],
            'cta2' => ['text' => 'Marco normativo', 'route' => 'institucional.normatividad'],
            'stats' => [
                ['label' => 'Fundación', 'value' => '1995'],
                ['label' => 'Jurisdicción', 'value' => 'Lima y Callao'],
                ['label' => 'Gestión vigente', 'value' => 'Consejo Regional 2025-2028'],
            ],
        ],
        'contacto' => [
            'eyebrow' => 'Canales de atención',
            'title' => 'Contáctanos',
            'summary' => 'Estamos aquí para escucharte y ayudarte con tus consultas institucionales y trámites.',
            'icon' => 'support_agent',
            'chips' => ['Atención institucional', 'Mesa de partes', 'Soporte al colegiado'],
            'cta1' => ['text' => 'Ver trámites', 'route' => 'tramites'],
            'cta2' => ['text' => 'Intranet', 'route' => 'admin.intranet'],
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
            'chips' => ['Colegiatura', 'Habilidad profesional', 'Mesa de Partes Virtual'],
            'cta1' => ['text' => 'Ver catálogo', 'route' => 'tramites'],
            'cta2' => ['text' => 'Contactar soporte', 'route' => 'contacto'],
            'helpLinks' => [
                ['label' => 'Habilidad', 'route' => 'tramites.habilidad', 'icon' => 'verified'],
                ['label' => 'Colegiatura', 'route' => 'tramites.colegiatura', 'icon' => 'school'],
                ['label' => 'Registros', 'route' => 'tramites.registros', 'icon' => 'workspace_premium'],
                ['label' => 'Carné', 'route' => 'tramites.carne', 'icon' => 'credit_card'],
                ['label' => 'Mesa de Partes', 'route' => 'tramites.mesa-partes', 'icon' => 'forward_to_inbox'],
                ['label' => 'Buscador de obstetra', 'route' => 'colegiados.buscador', 'icon' => 'person_search'],
            ],
            'stats' => [
                ['label' => 'Canal preferente', 'value' => 'Mesa de Partes Virtual'],
                ['label' => 'Modalidad', 'value' => 'Atención híbrida'],
                ['label' => 'Flujo', 'value' => 'Registro, verificación y respuesta'],
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
@endphp

@if ($hero)
    @if ($routeName === 'tramites')
        <section class="relative overflow-hidden min-h-0 bg-[linear-gradient(180deg,#f8f4ea_0%,#edf3fb_34%,#e9eff7_100%)]">
            <div class="grid lg:grid-cols-2 border-y-2 border-slate-300">
                <div class="bg-[linear-gradient(180deg,#ffffff_0%,#fffdfa_100%)]">
                    <div class="mx-auto lg:mx-0 w-full max-w-[40rem] lg:ml-auto lg:mr-0 px-4 sm:px-6 lg:px-8 py-8 md:py-10">
                        <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold">{{ $hero['eyebrow'] }}</p>
                        <h1 class="text-secondary text-4xl md:text-[2.55rem] lg:text-[2.9rem] font-black tracking-tight leading-[1.08] mt-2">{{ $hero['title'] }}</h1>
                        <div class="mt-3 h-[3px] w-20 bg-brand-gold-light"></div>
                        <p class="mt-4 text-secondary-light text-base md:text-lg leading-relaxed max-w-3xl">{{ $hero['summary'] }}</p>

                        <div class="mt-6 flex flex-col sm:flex-row gap-3">
                            <a href="{{ route($hero['cta1']['route']) }}" class="inst-btn bg-primary text-white hover:bg-primary-dark w-full sm:w-auto">{{ $hero['cta1']['text'] }}</a>
                            <a href="{{ route($hero['cta2']['route']) }}" class="inst-btn border-brand-gold text-secondary hover:bg-brand-gold-soft hover:border-brand-gold hover:text-primary w-full sm:w-auto">{{ $hero['cta2']['text'] }}</a>
                        </div>
                    </div>
                </div>

                <aside class="relative bg-inst-hero text-white inst-tramites-cut">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_12%_18%,rgba(219,169,59,0.18),transparent_34%),radial-gradient(circle_at_88%_82%,rgba(255,255,255,0.08),transparent_38%)]"></div>
                    <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#dba93b_0%,#ba7c00_46%,#f3cc79_100%)]"></div>
                    <div class="relative z-10 mx-auto lg:mx-0 w-full max-w-[40rem] lg:mr-auto lg:ml-0 px-4 sm:px-6 lg:px-8 lg:pl-14 py-8 md:py-10">
                        <p class="text-xs uppercase tracking-[0.15em] text-brand-gold-light font-semibold">Ayuda de trámites</p>
                        <p class="font-bold mt-1 text-xl text-white">Accesos rápidos por tipo de solicitud</p>
                        <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-2.5">
                            @foreach ($hero['helpLinks'] as $link)
                                <a href="{{ route($link['route']) }}" class="group inline-flex items-center justify-between gap-3 border border-white/20 bg-white/10 px-3 py-2.5 text-white hover:bg-brand-gold-soft/10 hover:border-brand-gold-light/40 hover:text-brand-gold-soft transition-colors">
                                    <span class="inline-flex items-center gap-2">
                                        <span class="material-icons-outlined text-base text-brand-gold-light">{{ $link['icon'] }}</span>
                                        <span>{{ $link['label'] }}</span>
                                    </span>
                                    <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center bg-white text-primary transition-colors group-hover:bg-brand-gold-soft group-hover:text-primary">
                                        <span class="material-icons-outlined text-[1.1rem]">east</span>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-5 pt-3 w-full flex items-center justify-center text-center text-sm text-white/90">
                            <a href="#tramites-contenido" class="inline-flex items-center gap-2 hover:text-brand-gold-soft transition-colors">
                                <span class="material-icons-outlined text-base animate-bounce">south</span>
                                <span>Desliza para ver requisitos, pasos y preguntas frecuentes</span>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    @else
    <section class="inst-page-hero relative overflow-hidden text-white">
        <div class="{{ $routeName === 'capacitacion' ? 'absolute inset-0 bg-[linear-gradient(122deg,#5b0d26_0%,#6a1a38_42%,#2a3655_100%)]' : 'absolute inset-0 bg-inst-hero' }}"></div>
        <div class="{{ $routeName === 'capacitacion' ? 'absolute inset-0 bg-[radial-gradient(circle_at_18%_16%,rgba(255,255,255,0.08),transparent_36%),radial-gradient(circle_at_84%_80%,rgba(186,124,0,0.12),transparent_38%)]' : 'absolute inset-0 bg-inst-hero-overlay' }}"></div>
        <div aria-hidden="true" class="absolute right-5 top-5 md:right-10 md:top-8 opacity-[0.08]">
            <span class="material-icons-outlined text-[4.75rem] md:text-[7rem] leading-none">{{ $hero['icon'] }}</span>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-12 relative z-10">
            <div class="grid lg:grid-cols-[1.08fr_0.92fr] gap-6 md:gap-8 items-stretch">
                <div>
                    <p class="text-xs md:text-sm font-semibold uppercase tracking-[0.16em] {{ $routeName === 'capacitacion' ? 'text-brand-gold-soft' : 'text-white/75' }} mb-2">{{ $hero['eyebrow'] }}</p>
                    <h1 class="text-white text-4xl md:text-5xl font-black tracking-tight leading-[1.08] max-w-4xl">{{ $hero['title'] }}</h1>
                    <p class="mt-4 max-w-3xl {{ $routeName === 'capacitacion' ? 'text-white/85' : 'text-white/90' }} text-base md:text-lg leading-relaxed">{{ $hero['summary'] }}</p>

                    <div class="mt-6 flex flex-col sm:flex-row gap-2.5 sm:gap-3">
                        <a href="{{ route($hero['cta1']['route']) }}" class="inst-btn border-white bg-white text-primary hover:bg-brand-gold-soft w-full sm:w-auto">{{ $hero['cta1']['text'] }}</a>
                        <a href="{{ route($hero['cta2']['route']) }}" class="inst-btn-secondary {{ $routeName === 'capacitacion' ? 'border-brand-gold-light text-brand-gold-soft hover:bg-brand-gold-soft hover:text-primary hover:border-brand-gold' : 'border-white text-white hover:bg-white/10' }} w-full sm:w-auto">{{ $hero['cta2']['text'] }}</a>
                    </div>

                    <div class="mt-5 flex flex-wrap gap-x-5 gap-y-2.5 text-sm md:text-base">
                        @foreach ($hero['chips'] as $chip)
                            <span class="inline-flex items-center gap-1.5 {{ $routeName === 'capacitacion' ? 'text-white/85' : 'text-white/90' }}">
                                <span class="material-icons-outlined {{ $routeName === 'capacitacion' ? 'text-brand-gold' : 'text-brand-gold-light' }} text-[1.15rem]">check_circle</span>
                                <span class="font-semibold">{{ $chip }}</span>
                            </span>
                        @endforeach
                    </div>
                </div>

                @if ($routeName === 'capacitacion' && !empty($hero['helpLinks']))
                    <aside class="relative border border-white/15 bg-[linear-gradient(142deg,#223550_0%,#3b3551_58%,#4c2e46_100%)] p-4 md:p-5 shadow-hero-panel overflow-hidden">
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,#cfa349_0%,#ba7c00_46%,#e4c98a_100%)]"></div>
                        <p class="text-xs uppercase tracking-[0.16em] text-brand-gold-light font-bold mb-2">Ayuda de capacitación</p>
                        <p class="font-bold text-white text-xl">Accesos rápidos por tipo de formación</p>
                        <div class="mt-4 grid sm:grid-cols-2 gap-2.5">
                            @foreach ($hero['helpLinks'] as $link)
                                <a href="{{ route($link['route']) }}" class="group inline-flex items-center justify-between gap-3 border border-white/15 bg-white/8 px-3 py-2.5 text-white/95 hover:bg-white/12 hover:border-brand-gold-light/45 hover:text-white transition-colors">
                                    <span class="inline-flex items-center gap-2">
                                        <span class="material-icons-outlined text-base text-brand-gold-light">{{ $link['icon'] }}</span>
                                        <span>{{ $link['label'] }}</span>
                                    </span>
                                    <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center bg-brand-gold-soft text-primary transition-colors group-hover:bg-brand-gold-light group-hover:text-primary">
                                        <span class="material-icons-outlined text-[1.1rem]">east</span>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </aside>
                @else
                    <aside class="border border-white/20 bg-white/10 backdrop-blur-sm p-4 md:p-5 shadow-hero-panel">
                        <p class="text-xs uppercase tracking-[0.16em] text-white/80 font-bold mb-4">Resumen institucional</p>
                        <div class="grid gap-3">
                            @foreach ($hero['stats'] as $stat)
                                <div class="border border-white/20 bg-white/[0.04] px-4 py-3">
                                    <p class="text-xs uppercase tracking-[0.14em] text-white/80">{{ $stat['label'] }}</p>
                                    <p class="text-xl md:text-2xl font-black leading-tight text-white mt-1">{{ $stat['value'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                @endif
            </div>
        </div>
    </section>
    @endif
@endif
