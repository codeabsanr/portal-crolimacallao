<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/institucional', 'pages.institucional.index')->name('institucional');
Route::view('/normativa', 'pages.normativa.index')->name('normativa');
Route::view('/tramites', 'pages.tramites.index')->name('tramites');
Route::view('/actualidad', 'pages.actualidad.index')->name('actualidad');
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::view('/colegiados', 'pages.colegiados.index')->name('colegiados');
Route::view('/capacitacion', 'pages.capacitacion.index')->name('capacitacion');

Route::get('/sitemap.xml', function () {
    $pages = ['home', 'institucional', 'tramites', 'colegiados', 'capacitacion', 'actualidad', 'normativa', 'contacto'];
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
