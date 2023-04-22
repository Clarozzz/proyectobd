<?php

use App\Http\Controllers\AuthClienteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* rutas accesibles a usuarios en general */
Route::post('registro', [AuthClienteController::class, 'register']);

Route::post('iniciarSesion', [AuthClienteController::class, 'login']);


Route::group(['middleware' => 'auth:sanctum'],function(){ //rutas accesibles solo a usuarios logeados
    Route::get('cerrarSesion',[AuthClienteController::class,'logout']);

    Route::get('prueba', function() {
        return 'esta logeado';
    });
});