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
Route::view('/admin', 'pages.admin.index')->name('admin.intranet');

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
        'tramites.habilidad',
        'tramites.colegiatura',
        'tramites.registros',
        'tramites.carne',
        'tramites.mesa-partes',
        'colegiados',
        'colegiados.buscador',
        'colegiados.listados',
        'colegiados.guia',
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
