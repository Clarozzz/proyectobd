<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Empleado;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PermisoSistema;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        




        try{
        DB::connection('sqlsrv')->beginTransaction();
        $user = User::create(
            [

                'primerNombre' => 'Admin',
                'primerApellido' => 'Admin',               
                'telefono' => '2514511',
                'dni' => '14745414',
                'rtn' => '5515121',
                'fechaNacimiento' => date('2000-02-05'), // convertir la cadena a un objeto de fecha
                'fechaAlta' => Carbon::now(),
                'estaActivo' => true,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678')
            ]
        );

        $empleado =  Empleado::create(
            [
            'activo' => true,
            'idPersona'   => $user->idPersona,  

            ]
        );

        PermisoSistema::create(
            [
            'nivelPermiso' => 2,
            'descripcion' => 'permisos administrador',
            'idEmpleado'   => $empleado->idEmpleado,  

            ]
        );
        DB::connection('sqlsrv')->commit();
        }
        catch (\Exception $e) {
            DB::connection('sqlsrv')->rollback();
            throw $e;
        }





        try{
            DB::connection('sqlsrv')->beginTransaction();
            $user = User::create(
                [
    
                    'primerNombre' => 'rrhh',
                    'primerApellido' => 'rrhh',               
                    'telefono' => '25145114',
                    'dni' => '147454143',
                    'rtn' => '55151214',
                    'fechaNacimiento' => date('2000-02-05'), // convertir la cadena a un objeto de fecha
                    'fechaAlta' => Carbon::now(),
                    'estaActivo' => true,
                    'email' => 'rrhh@gmail.com',
                    'password' => bcrypt('12345678')
                ]
            );
    
            $empleado =  Empleado::create(
                [
                'activo' => true,
                'idPersona'   => $user->idPersona,  
    
                ]
            );
    
            PermisoSistema::create(
                [
                'nivelPermiso' => 1,
                'descripcion' => 'permisos RRHH',
                'idEmpleado'   => $empleado->idEmpleado,  
    
                ]
            );
            DB::connection('sqlsrv')->commit();
            }
            catch (\Exception $e) {
                DB::connection('sqlsrv')->rollback();
                throw $e;
            }


    }
}
