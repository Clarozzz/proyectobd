<?php

use App\Http\Controllers\AuthClienteController;
use App\Http\Controllers\AuthMotoristaController;
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
    

    if($request->user()->cliente != null){
        return $request->user()->primerNombre;
    }


    if($request->user()->motorista != null){
        return $request->user()->email;
    }
});

/* rutas accesibles a usuarios sin logearse CLIENTES*/  
Route::post('cliente/registro', [AuthClienteController::class, 'register']);
Route::post('cliente/iniciarSesion', [AuthClienteController::class, 'login']);


Route::middleware('auth:sanctum')->get('cliente/verificar', function (Request $request) {
    

    if($request->user()->cliente != null){
        return $request->user();
    }

    return response()
    ->json(['message' => 'No es un cliente'], 401);
    
});


Route::group(['prefix' => 'cliente','middleware' => 'auth:sanctum'],function(){ //rutas accesibles solo a usuarios clientes logeados "api/cliente/.."
    Route::get('cerrarSesion',[AuthClienteController::class,'logout']);

    Route::get('prueba', function() {
        return 'esta logeado';
    });
});


/* rutas accesibles a usuarios sin logearse CLIENTES*/  
Route::post('motorista/registro', [AuthMotoristaController::class, 'register']);
Route::post('motorista/iniciarSesion', [AuthMotoristaController::class, 'login']);

Route::middleware('auth:sanctum')->get('motorista/verificar', function (Request $request) {
    

    if($request->user()->motorista != null){
        //return $request->user();
        return response()->json([$request->user()], 200);
    }

    return response()
    ->json(['message' => 'No es un motorista'], 401);
    
});


Route::group(['prefix' => 'motorista','middleware' => 'auth:sanctum'],function(){ //rutas accesibles solo a usuarios motoristas logeados "api/cliente/.."
    Route::get('cerrarSesion',[AuthClienteController::class,'logout']);

    Route::get('prueba', function() {
        return 'esta logeado';
    });
});

