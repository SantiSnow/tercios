<?php

use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/cities/{id}', [CityController::class, 'cities']);
Route::post('/newsletter', [ContactController::class, 'newsletter']);
Route::get('/zones', [CityController::class, 'getZones']);
Route::get('/properties', [PropertyController::class, 'getAll']);
Route::post('/property-question', [PropertyController::class, 'store']);

Route::post('/contact', [ContactController::class, 'store']);
Route::post('/staff', [ContactController::class, 'staff']);
Route::post('/tasar', [ContactController::class, 'save_sell_request']);

//Edición de propiedades:
Route::delete('/picture', [PropertyController::class, 'deletePicture']);
Route::delete('/amenity', [PropertyController::class, 'deleteAmenity']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
