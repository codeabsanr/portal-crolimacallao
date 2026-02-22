<?php

use App\Http\Controllers\ProfileController;
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
Route::view('/tramites/habilidad', 'pages.tramites.habilidad')->name('tramites.habilidad');
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
Route::view('/capacitacion', 'pages.capacitacion.index')->name('capacitacion');
Route::view('/capacitacion/calendario', 'pages.capacitacion.calendario')->name('capacitacion.calendario');
Route::view('/capacitacion/cursos', 'pages.capacitacion.cursos')->name('capacitacion.cursos');
Route::view('/capacitacion/congresos', 'pages.capacitacion.congresos')->name('capacitacion.congresos');
Route::view('/capacitacion/aula-virtual', 'pages.capacitacion.aula-virtual')->name('capacitacion.aula-virtual');
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
