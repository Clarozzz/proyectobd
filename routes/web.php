<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*------------- 

    Clientes 

-------------*/

Route::get('/clientes', function () {
    return view('clientes.inicio');
})->name('clientes.inicio');

Route::get('/clientes/registro', function () {
    return view('clientes.registro');
})->name('clientes.registro');

Route::get('/clientes/solicitud', function () {
    return view('clientes.solicitud');
})->name('clientes.solicitud');

Route::get('/clientes/factura', function () {
    return view('clientes.factura');
})->name('clientes.factura');


/*------------- 

    Motoristas 
    
-------------*/


Route::get('/motoristas', function () {
    return view('motoristas.inicio');
})->name('motoristas.inicio');

Route::get('/motoristas/registro', function () {
    return view('motoristas.registro');
})->name('motoristas.registro');

Route::get('/motoristas/espera', function () {
    return view('motoristas.espera');
})->name('motoristas.espera');

Route::get('/motoristas/solicitud', function () {
    return view('motoristas.solicitud');
})->name('motoristas.solicitud');


/*------------- 

    Empleados 
    
-------------*/

Route::get('/prueba', function () {
    return 'prueba';
});


Route::get('/empleados', function () {
    return view('empleados.inicio');
})->name('empleados.inicio');

Route::get('/empleados/index', function () {
    return view('empleados.index');
})->name('empleados.index');

Route::get('/empleados/motoristas', function () {
    return view('empleados.motoristas');
})->name('empleados.motoristas');

Route::get('/empleados/solicitudes', function () {
    return view('empleados.solicitudes');
})->name('empleados.solicitudes');

Route::get('/empleados/clientes', function () {
    return view('empleados.clientes');
})->name('empleados.clientes');

Route::get('/empleados/asignarSolicitud', function () {
    return view('empleados.asignarsolicitud');
})->name('empleados.asignarSolicitud');


/*------------- 

    RRHH 
    
-------------*/


Route::get('/recursosHumanos', function () {
    return view('rrhh.inicio');
})->name('recursosHumanos.inicio');

Route::get('/recursosHumanos/index', function () {
    return view('rrhh.index');
})->name('recursosHumanos.index');

Route::get('/recursosHumanos/empleados', function () {
    return view('rrhh.empleados');
})->name('recursosHumanos.empleados');