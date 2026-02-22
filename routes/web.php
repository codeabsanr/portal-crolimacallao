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
Route::view('/tramites', 'pages.tramites.index')->name('tramites');
Route::view('/actualidad', 'pages.actualidad.index')->name('actualidad');
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::view('/colegiados', 'pages.colegiados.index')->name('colegiados');
Route::view('/capacitacion', 'pages.capacitacion.index')->name('capacitacion');

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
        'colegiados',
        'capacitacion',
        'actualidad',
        'normativa',
        'contacto'
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
