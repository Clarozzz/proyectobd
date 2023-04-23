<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthEmpleadosController extends Controller
{
    //

    public function inicioAdmin() { //auntenticar un administrador

        if(auth() -> attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos,
                vuelve a intentar',
            ]);           
        } else {
            if(auth()-> user() -> empleado != null &&  auth()-> user() -> empleado -> permisoSistema -> nivelPermiso  == 2 ){
                return redirect() -> to(route('empleados.dashboard'));
            }else{
                return back()->withErrors([
                    'message' => 'No tienes permisos de administrador',
                ]);  
            }
        }


       

    }



    public function cerrarSesionEmpleado() {
        auth() -> logout();

        return redirect() -> to(route('empleados.inicio'));

    }

}
