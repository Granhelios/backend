<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;



//inicio de todo el Route 


Route::get('regiones', [RegionController::class, 'indice']);
Route::get('regiones/{id}', [RegionController::class, 'mostrar']);

Route::get('provincias', [ProvinciaController::class, 'indice']);
Route::get('provincias/{id}', [ProvinciaController::class, 'mostrar']);
Route::get('provincias/regiones/{id}', [ProvinciaController::class, 'provinciasDeRegion']);

Route::get('ciudades', [CiudadController::class, 'indice']);
Route::get('ciudades/{id}', [CiudadController::class, 'mostrar']);
Route::get('ciudades/provincia/{id}', [CiudadController::class, 'ciudadesDeProvincia']);

Route::get('calles', [CalleController::class, 'indice']);
Route::get('calles/{id}', [CalleController::class, 'mostrar']);
Route::post('calles', [CalleController::class, 'guardar']);
Route::put('nada/{id}', [CalleController::class, 'actualizar']);
Route::get('calle/datos', [CalleController::class, 'datosTodasLasCalles']);
Route::get('calles/datos/{id}', [CalleController::class, 'datosCalle']);
Route::delete('calle/{id}', [CalleController::class, 'deleteCalle']);
