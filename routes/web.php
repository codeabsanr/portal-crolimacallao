<?php

use App\Http\Controllers\ProfileController;
use App\Support\TrainingCatalog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/institucional', 'pages.institucional.index')->name('institucional');
Route::view('/institucional/quienes-somos', 'pages.institucional.quienes-somos')->name('institucional.quienes-somos');
Route::view('/institucional/consejo-directivo', 'pages.institucional.consejo-directivo')->name('institucional.consejo-directivo');
Route::view('/institucional/resena-historica', 'pages.institucional.resena-historica')->name('institucional.resena-historica');
Route::view('/institucional/simbolos', 'pages.institucional.simbolos')->name('institucional.simbolos');
Route::view('/institucional/compendio-de-normas', 'pages.institucional.compendio-de-normas')->name('institucional.compendio-de-normas');
Route::view('/institucional/reglamento', 'pages.institucional.reglamento')->name('institucional.reglamento');
Route::view('/institucional/normatividad', 'pages.institucional.normatividad')->name('institucional.normatividad');
Route::view('/institucional/convenios', 'pages.institucional.convenios')->name('institucional.convenios');
Route::view('/normativa', 'pages.normativa.index')->name('normativa');
Route::view('/normativa/leyes', 'pages.normativa.leyes')->name('normativa.leyes');
Route::view('/normativa/reglamentos', 'pages.normativa.reglamentos')->name('normativa.reglamentos');
Route::view('/normativa/guias', 'pages.normativa.guias')->name('normativa.guias');
Route::view('/normativa/repositorio', 'pages.normativa.repositorio')->name('normativa.repositorio');
Route::view('/tramites', 'pages.tramites.index')->name('tramites');
Route::view('/tramites/preguntas-frecuentes', 'pages.tramites.preguntas-frecuentes')->name('tramites.faq');
Route::get('/tramites/habilidad', function () {
    $trackingExamples = ['HAB-2026-00127', 'HAB-2026-00421', 'HAB-2026-00605'];
    return view('pages.tramites.habilidad', compact('trackingExamples'));
})->name('tramites.habilidad');
Route::get('/tramites/seguimiento', function () {
    $trackingCatalog = [
        'habilidad' => [
            'label' => 'Habilidad profesional',
            'sampleCode' => 'HAB-2026-00421',
            'sla' => '3 a 5 días hábiles',
            'stages' => [
                ['title' => 'Registro de expediente', 'detail' => 'Ingreso del expediente por canal virtual o presencial.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Validación documentaria', 'detail' => 'Verificación de requisitos y consistencia de anexos.', 'owner' => 'Unidad de Trámites'],
                ['title' => 'Evaluación administrativa', 'detail' => 'Revisión interna para aprobación y emisión.', 'owner' => 'Secretaría técnica'],
                ['title' => 'Emisión de constancia', 'detail' => 'Publicación de resultado y habilitación de descarga digital.', 'owner' => 'Plataforma institucional'],
            ],
            'documents' => ['Solicitud simple firmada', 'Constancia de no adeudo', 'Comprobante de pago'],
        ],
        'colegiatura' => [
            'label' => 'Colegiatura',
            'sampleCode' => 'COL-2026-00158',
            'sla' => '7 a 10 días hábiles',
            'stages' => [
                ['title' => 'Registro de expediente', 'detail' => 'Recepción del expediente de colegiatura.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Control documentario', 'detail' => 'Revisión de títulos, identidad y requisitos reglamentarios.', 'owner' => 'Unidad de Colegiatura'],
                ['title' => 'Evaluación de cumplimiento', 'detail' => 'Validación administrativa para continuidad del trámite.', 'owner' => 'Secretaría técnica'],
                ['title' => 'Resolución y alta', 'detail' => 'Emisión de resolución y actualización en padrón institucional.', 'owner' => 'Registro institucional'],
            ],
            'documents' => ['Solicitud de colegiatura', 'Título o grado académico', 'Comprobante de pago de derecho'],
        ],
        'registros' => [
            'label' => 'Registros académicos',
            'sampleCode' => 'REG-2026-00092',
            'sla' => '4 a 6 días hábiles',
            'stages' => [
                ['title' => 'Ingreso de solicitud', 'detail' => 'Registro de actualización académica y anexos.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Validación de soporte', 'detail' => 'Revisión de certificados, grados o constancias.', 'owner' => 'Unidad de Registros'],
                ['title' => 'Consolidación en sistema', 'detail' => 'Actualización de datos en el perfil institucional.', 'owner' => 'Registro institucional'],
                ['title' => 'Cierre de trámite', 'detail' => 'Confirmación de actualización y notificación.', 'owner' => 'Atención al colegiado'],
            ],
            'documents' => ['Formato de actualización', 'Documento académico de sustento', 'Comprobante de pago (si aplica)'],
        ],
        'carne' => [
            'label' => 'Carné institucional',
            'sampleCode' => 'CAR-2026-00231',
            'sla' => '2 a 4 días hábiles',
            'stages' => [
                ['title' => 'Solicitud registrada', 'detail' => 'Recepción de solicitud de emisión, renovación o duplicado.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Validación de datos', 'detail' => 'Verificación de identidad y estado de colegiatura.', 'owner' => 'Atención al colegiado'],
                ['title' => 'Producción de carné', 'detail' => 'Generación del carné institucional.', 'owner' => 'Unidad administrativa'],
                ['title' => 'Entrega o habilitación', 'detail' => 'Notificación para entrega física o constancia digital.', 'owner' => 'Atención al colegiado'],
            ],
            'documents' => ['Solicitud de carné', 'Documento de identidad vigente', 'Comprobante de pago'],
        ],
        'mesa-partes' => [
            'label' => 'Mesa de Partes',
            'sampleCode' => 'MDP-2026-01844',
            'sla' => '24 a 72 horas para derivación',
            'stages' => [
                ['title' => 'Documento recibido', 'detail' => 'Registro inicial y asignación de número de expediente.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Control de admisibilidad', 'detail' => 'Revisión básica de formato y anexos mínimos.', 'owner' => 'Mesa de Partes'],
                ['title' => 'Derivación interna', 'detail' => 'Envío al área competente según materia.', 'owner' => 'Secretaría general'],
                ['title' => 'Trámite en área', 'detail' => 'Gestión interna según procedimiento aplicable.', 'owner' => 'Área responsable'],
            ],
            'documents' => ['Documento principal', 'Anexos de sustento', 'Datos de contacto del solicitante'],
        ],
    ];

    $trackingCode = trim((string) request('codigo', ''));
    $trackingType = trim((string) request('tipo', ''));

    if ($trackingType === '' && $trackingCode !== '') {
        $prefixMap = [
            'HAB-' => 'habilidad',
            'COL-' => 'colegiatura',
            'REG-' => 'registros',
            'CAR-' => 'carne',
            'MDP-' => 'mesa-partes',
        ];
        $normalizedCode = strtoupper($trackingCode);
        foreach ($prefixMap as $prefix => $type) {
            if (str_starts_with($normalizedCode, $prefix)) {
                $trackingType = $type;
                break;
            }
        }
    }

    if (!array_key_exists($trackingType, $trackingCatalog)) {
        $trackingType = 'habilidad';
    }

    $typeConfig = $trackingCatalog[$trackingType];
    if ($trackingCode === '') {
        $trackingCode = $typeConfig['sampleCode'];
    }

    $statusByIndex = ['completed', 'completed', 'current', 'pending'];
    $dateByIndex = ['28 Feb 2026 - 09:12', '28 Feb 2026 - 14:45', '01 Mar 2026 - 10:30', 'Pendiente'];
    $timeline = [];
    foreach ($typeConfig['stages'] as $index => $stage) {
        $timeline[] = [
            'title' => $stage['title'],
            'detail' => $stage['detail'],
            'datetime' => $dateByIndex[$index] ?? 'Pendiente',
            'status' => $statusByIndex[$index] ?? 'pending',
            'owner' => $stage['owner'],
        ];
    }

    $documentStatusByIndex = ['Validado', 'Validado', 'En revisión'];
    $documents = [];
    foreach ($typeConfig['documents'] as $index => $name) {
        $documents[] = ['name' => $name, 'status' => $documentStatusByIndex[$index] ?? 'Recibido'];
    }

    $summary = [
        'tramite' => $typeConfig['label'],
        'estado' => 'En evaluación administrativa',
        'sla' => 'Plazo referencial: ' . $typeConfig['sla'],
        'lastUpdate' => 'Actualizado el 01 Mar 2026 a las 10:30',
    ];

    $typeOptions = [];
    foreach ($trackingCatalog as $key => $config) {
        $typeOptions[] = ['value' => $key, 'label' => $config['label']];
    }

    return view('pages.tramites.seguimiento', compact('trackingCode', 'trackingType', 'timeline', 'documents', 'summary', 'typeOptions'));
})->name('tramites.tracking');
Route::get('/tramites/habilidad/seguimiento', function () {
    return redirect()->route('tramites.tracking', [
        'tipo' => 'habilidad',
        'codigo' => request('codigo'),
    ]);
})->name('tramites.habilidad.tracking');
Route::view('/tramites/colegiatura', 'pages.tramites.colegiatura')->name('tramites.colegiatura');
Route::view('/tramites/registros', 'pages.tramites.registros')->name('tramites.registros');
Route::view('/tramites/carne', 'pages.tramites.carne')->name('tramites.carne');
Route::view('/tramites/mesa-partes', 'pages.tramites.mesa-partes')->name('tramites.mesa-partes');
Route::view('/actualidad', 'pages.actualidad.index')->name('actualidad');
Route::view('/actualidad/noticias', 'pages.actualidad.noticias')->name('actualidad.noticias');
Route::view('/actualidad/eventos', 'pages.actualidad.eventos')->name('actualidad.eventos');
Route::view('/actualidad/comunicados', 'pages.actualidad.comunicados')->name('actualidad.comunicados');
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::view('/terminos-condiciones', 'pages.terminos-condiciones')->name('terminos');
Route::view('/politica-privacidad', 'pages.politica-privacidad')->name('privacidad');
Route::view('/colegiados', 'pages.colegiados.index')->name('colegiados');
Route::view('/colegiados/buscador', 'pages.colegiados.buscador')->name('colegiados.buscador');
Route::view('/colegiados/listados', 'pages.colegiados.listados')->name('colegiados.listados');
Route::view('/colegiados/guia', 'pages.colegiados.guia')->name('colegiados.guia');
Route::get('/capacitacion', function () {
    $destacados = TrainingCatalog::featuredCurrent();
    return view('pages.capacitacion.index', compact('destacados'));
})->name('capacitacion');

Route::get('/capacitacion/calendario', function () {
    $calendario = TrainingCatalog::calendarCurrent();
    return view('pages.capacitacion.calendario', compact('calendario'));
})->name('capacitacion.calendario');

Route::get('/capacitacion/cursos', function () {
    $currentCourses = TrainingCatalog::current('Curso');
    $archivedCourses = TrainingCatalog::archived('Curso');
    return view('pages.capacitacion.cursos', compact('currentCourses', 'archivedCourses'));
})->name('capacitacion.cursos');

Route::get('/capacitacion/congresos', function () {
    $currentConferences = TrainingCatalog::current('Conferencia');
    $archivedConferences = TrainingCatalog::archived('Conferencia');
    return view('pages.capacitacion.congresos', compact('currentConferences', 'archivedConferences'));
})->name('capacitacion.congresos');

Route::get('/capacitacion/archivo', function () {
    $archivedCourses = TrainingCatalog::archived('Curso');
    $archivedConferences = TrainingCatalog::archived('Conferencia');
    return view('pages.capacitacion.archivo', compact('archivedCourses', 'archivedConferences'));
})->name('capacitacion.archivo');

Route::view('/capacitacion/aula-virtual', 'pages.capacitacion.aula-virtual')->name('capacitacion.aula-virtual');
Route::get('/capacitacion/programa/{slug}/vista-previa', function (string $slug) {
    $program = TrainingCatalog::find($slug);
    if (!$program) {
        abort(404);
    }

    return view('pages.capacitacion.preview', compact('program', 'slug'));
})->name('capacitacion.programa.preview');

Route::get('/capacitacion/programa/{slug}', function (string $slug) {
    $program = TrainingCatalog::find($slug);
    if (!$program) {
        abort(404);
    }

    return view('pages.capacitacion.programa', compact('program', 'slug'));
})->name('capacitacion.programa');
Route::view('/obstetras', 'pages.busca-tu-obstetra')->name('obstetras.index');
Route::get('/obstetras/{cop}', function (string $cop) {
    $mockByCode = [
        '12874' => [
            'nombre' => 'Obst. Maria Fernanda Quispe Ramirez',
            'habilitado' => 'HABILITADO',
            'situacion' => 'Activo',
            'foto' => 'https://i.pravatar.cc/320?img=47',
            'carrera' => 'Obstetricia',
            'cop' => '12874',
            'especialidad' => 'Salud Materno Perinatal',
            'curso' => 'Emergencias Obstetricas 2024',
            'ponencia' => 'Lactancia y puerperio seguro',
            'colegiatura_desde' => '2016',
            'documento' => 'DNI 43658791',
            'resumen' => 'Obstetra con enfoque en salud materno perinatal, atencion prenatal de alto riesgo y acompanamiento integral durante puerperio.',
            'experiencia_anios' => '9',
            'ultimo_centro' => 'Hospital Nacional Docente Madre Nino San Bartolome',
            'ubicacion' => 'Lima Metropolitana',
            'idiomas' => 'Espanol, Ingles intermedio',
            'modalidad' => 'Presencial y guardias rotativas',
            'disponibilidad' => 'Inmediata',
            'certificaciones' => ['Reanimacion neonatal', 'Lactancia materna y consejeria', 'Atencion obstetrica de emergencia'],
            'areas' => ['Control prenatal', 'Psicoprofilaxis obstetrica', 'Salud sexual y reproductiva'],
            'experiencia' => [
                ['cargo' => 'Obstetra asistencial', 'institucion' => 'Hospital San Bartolome', 'periodo' => '2021 - Actualidad'],
                ['cargo' => 'Obstetra de guardia', 'institucion' => 'Clinica Santa Isabel', 'periodo' => '2018 - 2021'],
            ],
        ],
        '30951' => [
            'nombre' => 'Obst. Ana Lucia Ramos Gutierrez',
            'habilitado' => 'NO HABILITADO',
            'situacion' => 'No activo',
            'foto' => 'https://i.pravatar.cc/320?img=5',
            'carrera' => 'Obstetricia',
            'cop' => '30951',
            'especialidad' => 'Gestion de Servicios de Salud',
            'curso' => 'Auditoria clinica y calidad',
            'ponencia' => 'Sin registro de ponencias',
            'colegiatura_desde' => '2019',
            'documento' => 'DNI 71893254',
            'resumen' => 'Obstetra orientada a gestion de servicios de salud y procesos de mejora continua en establecimientos asistenciales.',
            'experiencia_anios' => '6',
            'ultimo_centro' => 'Red de Salud Lima Centro',
            'ubicacion' => 'Lima - Callao',
            'idiomas' => 'Espanol',
            'modalidad' => 'Administrativo presencial',
            'disponibilidad' => 'Sujeto a regularizacion',
            'certificaciones' => ['Gestion de calidad', 'Auditoria clinica'],
            'areas' => ['Gestion sanitaria', 'Calidad asistencial', 'Capacitacion en servicios'],
            'experiencia' => [
                ['cargo' => 'Coordinadora de calidad', 'institucion' => 'Red de Salud Lima Centro', 'periodo' => '2022 - Actualidad'],
                ['cargo' => 'Obstetra asistencial', 'institucion' => 'Centro Materno', 'periodo' => '2019 - 2022'],
            ],
        ],
    ];

    $item = $mockByCode[$cop ?? ''] ?? $mockByCode['12874'];
    return view('pages.portal-colegiado-perfil', compact('item'));
})->name('obstetras.perfil');
Route::view('/bolsa-trabajo', 'pages.bolsa-trabajo')->name('bolsa.trabajo');
Route::view('/admin', 'pages.admin.index')->middleware(['auth', 'verified'])->name('admin.intranet');
Route::view('/pruebas/marca-contacto-propuestas', 'pages.lab.marca-contacto-propuestas')->name('lab.marca-contacto-propuestas');
Route::view('/pruebas/page-hero-with-cta', 'pages.lab.page-hero-with-cta')->name('lab.page-hero-with-cta');

Route::get('/sitemap.xml', function () {
    $pages = [
        'home',
        'institucional',
        'institucional.quienes-somos',
        'institucional.consejo-directivo',
        'institucional.resena-historica',
        'institucional.simbolos',
        'institucional.compendio-de-normas',
        'institucional.reglamento',
        'institucional.normatividad',
        'institucional.convenios',
        'tramites',
        'tramites.faq',
        'tramites.tracking',
        'tramites.habilidad',
        'tramites.colegiatura',
        'tramites.registros',
        'tramites.carne',
        'tramites.mesa-partes',
        'colegiados',
        'colegiados.buscador',
        'colegiados.listados',
        'colegiados.guia',
        'obstetras.index',
        'bolsa.trabajo',
        'capacitacion',
        'capacitacion.calendario',
        'capacitacion.cursos',
        'capacitacion.congresos',
        'capacitacion.archivo',
        'capacitacion.aula-virtual',
        'actualidad',
        'actualidad.noticias',
        'actualidad.eventos',
        'actualidad.comunicados',
        'normativa',
        'normativa.leyes',
        'normativa.reglamentos',
        'normativa.guias',
        'normativa.repositorio',
        'admin.intranet',
        'contacto',
        'terminos',
        'privacidad'
    ];
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($pages as $page) {
        $xml .= '<url><loc>' . route($page) . '</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>';
    }
    $xml .= '</urlset>';
    return response($xml)->header('Content-Type', 'text/xml');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/portal-colegiado', function () {
        return redirect()->route('portal.colegiado.perfil');
    })->name('portal.colegiado');

    Route::prefix('/portal-colegiado')->name('portal.colegiado.')->group(function () {
        Route::view('/perfil', 'pages.portal-privado.perfil')->name('perfil');
        Route::view('/tramites', 'pages.portal-privado.tramites')->name('tramites');
        Route::view('/pagos', 'pages.portal-privado.pagos')->name('pagos');
        Route::view('/documentos', 'pages.portal-privado.documentos')->name('documentos');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
