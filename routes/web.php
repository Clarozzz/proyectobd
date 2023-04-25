<?php


use App\Http\Controllers\AuthEmpleadosController;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TalentoHumanoController;
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


Route::get('/',  [ClienteController::class, 'index']);


Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.inicio');

Route::get('/clientes/registro', [ClienteController::class, 'indexRegistro'])->name('clientes.registro');

Route::get('/clientes/solicitud', [ClienteController::class, 'indexSolicitud'])->name('clientes.solicitud');

Route::get('/clientes/factura', [ClienteController::class, 'indexFactura'])->name('clientes.factura');

Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Route::get('/clientes', function () {
//    return view('clientes.inicio');
// })->name('clientes.inicio');

// Route::get('/clientes/registro', function () {
//     return view('clientes.registro');
// })->name('clientes.registro');

// Route::get('/clientes/solicitud', function () {
//     return view('clientes.solicitud');
// })->name('clientes.solicitud');

// Route::get('/clientes/factura', function () {
//     return view('clientes.factura');
// })->name('clientes.factura');



/*------------- 

    Motoristas 
    
-------------*/


Route::get('/motoristas', [MotoristaController::class, 'index'])->name('motoristas.inicio');

Route::get('/motoristas/registro', [MotoristaController::class, 'indexRegistro'])->name('motoristas.registro');

Route::get('/motoristas/espera', [MotoristaController::class, 'indexEspera'])->name('motoristas.espera');

Route::get('/motoristas/solicitud', [MotoristaController::class, 'indexSolicitud'])->name('motoristas.solicitud');

Route::get('/motoristas/{solicitud}', [MotoristaController::class, 'factura'])->name('motoristas.factura');


/*------------- 

    Empleados 
    
-------------*/




Route::get('/empleados', [EmpleadoController::class, 'index'])
->middleware('guest') //puede acceder sin logearse
->name('empleados.inicio');

Route::post('/empleados/loginAdmin', [AuthEmpleadosController::class, 'inicioAdmin'])

->name('login.inicioAdmin');

Route::get('/empleados/logoutAdmin', [AuthEmpleadosController::class, 'cerrarSesionAdmin'])
->middleware('auth.admin')
->name('logout.cerrarAdmin');

Route::get('/empleados/clientes', [EmpleadoController::class, 'indexClientes'])
->middleware('auth.admin')
->name('empleados.clientes');

Route::get('/empleados/solicitudes', [EmpleadoController::class, 'indexSolicitudes'])
->middleware('auth.admin')
->name('empleados.solicitudes');

Route::get('/empleados/motoristas', [EmpleadoController::class, 'indexMotoristas'])
->middleware('auth.admin')
->name('empleados.motoristas');

Route::get('/empleados/dashboard', [EmpleadoController::class, 'indexDashboard'])
->middleware('auth.admin')
->name('empleados.dashboard');

Route::get('/empleados/asignarsolicitud', [EmpleadoController::class, 'indexAsignarSolicitud'])
->middleware('auth.admin')
->name('empleados.asignarsolicitud');


/*------------- 

    RRHH 
    
-------------*/


Route::get('/talentoHumano', [TalentoHumanoController::class, 'index'])
->middleware('guest') //puede acceder sin logearse
->name('talentoHumano.inicio');

Route::get('/talentoHumano/empleados', [TalentoHumanoController::class, 'indexEmpleados'])
->middleware('auth.RRHH')
->name('talentoHumano.empleados');

Route::get('/talentoHumano/index', [TalentoHumanoController::class, 'indexInfo'])
->middleware('auth.RRHH')
->name('talentoHumano.index');

Route::post('/talentoHumano/loginRRHH', [AuthEmpleadosController::class, 'inicioRRHH'])
->name('login.inicioRRHH');

Route::get('/talentoHumano/logoutRRHH', [AuthEmpleadosController::class, 'cerrarSesionRRHH'])
->middleware('auth.RRHH')
->name('logout.cerrarRRHH');

// Route::get('/recursosHumanos', function () {
//     return view('rrhh.inicio');
// })->name('recursosHumanos.inicio');

// Route::get('/recursosHumanos/index', function () {
//     return view('rrhh.index');
// })->name('recursosHumanos.index');

// Route::get('/recursosHumanos/empleados', function () {
//     return view('rrhh.empleados');
// })->name('recursosHumanos.empleados');