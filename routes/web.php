<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; //Llamar al controlador

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/cliente', [ClienteController::class, 'index']); //  /cliente es el nombre de la ruta
Route::post('/guardar_informacion', [ClienteController::class, 'guardar']);
Route::get('/informacion', [ClienteController::class, 'informacion']);
Route::get('/editar/{id}', [ClienteController::class, 'editar']);
Route::put('/actualizar_Info/{id}', [ClienteController::class, 'actualizar']);
Route::delete('/eliminar/{id}',[ClienteController::class, 'eliminar']);

//Rutas Administrativas
Route::get('/adminCompu', [ClienteController::class, '']);