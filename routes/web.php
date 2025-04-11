<?php

use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\WebSite\BlogController;
use App\Http\Controllers\WebSite\HomeController;
use App\Http\Controllers\WebSite\PropertyController;
use App\Http\Controllers\WebSite\SearchController;
use App\Models\Image;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contable', [HomeController::class, 'contable']);
Route::get('/juridico', [HomeController::class, 'juridico']);
Route::get('/inmobiliario', [HomeController::class, 'inmobiliario']);
Route::get('/desarrollos', [HomeController::class, 'desarrollos']);

Route::post('/busqueda', [SearchController::class, 'search'])->name('properties.search');
Route::get('/alquilar', [PropertyController::class, 'renting'])->name('properties.renting');
Route::get('/comprar', [PropertyController::class, 'selling'])->name('properties.selling');
Route::get('/propiedad/{id}', [PropertyController::class, 'getProperty'])->name('property.detail.page');

Route::get('/tu-red', [HomeController::class, 'tuRed']);
Route::get('/staff', [HomeController::class, 'staff']);

Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contacto-gracias', [HomeController::class, 'contactThankyou']);
Route::get('/tasar', [HomeController::class, 'sell']);
Route::get('/tasar-gracias', [ContactController::class, 'sellThankyou']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/post/{id}', [BlogController::class, 'getPost']);

/**
 * Redirecciones para el index-search de Google
 * de secciones viejas de la web
 */
Route::get('/servicios', function (){
    return redirect('/inmobiliario');
});

Route::get('/agents', function (){
    return redirect('/staff');
});

Route::get('/sucursales', function (){
    return redirect('/tu-red');
});



/*
 * Administration Panel Routes
 */

require __DIR__ . '/admin.php';



