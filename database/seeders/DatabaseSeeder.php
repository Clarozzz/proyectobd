<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Empleado;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        



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
                'descripcion' => 'permisos descripcion',
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
