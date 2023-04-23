<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\Motorista;
use Illuminate\Support\Facades\DB;

class AuthMotoristaController extends Controller
{
    //

    public function register (Request $request){
        $validator = Validator::make($request->all(),
            [                
                'primerNombre' => 'required|string|max:25',
                'primerApellido' => 'required|string|max:25',
                'telefono' => 'required|string|max:25|unique:persona',
                'dni' => 'required|string|max:25|unique:persona',
                'rtn' => 'required|string|max:20|unique:persona',
                'fechaNacimiento' =>'required|date',
                'email' => 'required|string|email|max:255|unique:persona',
                'password' => 'required|string|min:8',

                'cuentaBancaria' => 'required|string|max:25|unique:motorista',
                'nombreBanco' => 'required|string|max:25',
            ]
        );

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try{ //transaccion para asegurar que solo exista un motirista por persona y viceversa
            DB::connection('sqlsrv')->beginTransaction();


            $user = User::create(
                [

                    'primerNombre' => $request ->primerNombre,
                    'segundoNombre' => $request ->segundoNombre,
                    'primerApellido' => $request ->primerApellido,                
                    'segundoApellido' => $request ->segundoApellido,
                    'telefono' => $request ->telefono,
                    'dni' => $request ->dni,
                    'rtn' => $request ->rtn,
                    'fechaNacimiento' => date('Y-m-d', strtotime($request->fechaNacimiento)), // convertir la cadena a un objeto de fecha
                    'fechaAlta' => Carbon::now(),
                    'nombreEmpresa' => $request ->nombreEmpresa,
                    'estaActivo' => true,


                    'email' => $request ->email,
                    'password' => bcrypt($request ->password)
                ]
            );

        


            Motorista::create(
                [
                    
                    'cuentaBancaria' => $request ->cuentaBancaria,
                    'nombreBanco' => $request -> nombreBanco,
                    'idPersona' => $user->idPersona,
                    
                ]
                );

            $token = $user->createToken('auth_token')->plainTextToken;
            DB::connection('sqlsrv')->commit();

            $user = User::with('motorista')->find($user->idPersona);
            return response()
            ->json(['data' => $user, 'access_token' => $token , 'token_type' => 'Bearer']);

            
        }

         catch (\Exception $e) {
            DB::connection('sqlsrv')->rollback();
            throw $e;
            
            return response()->json(['message' => 'Error creando cliente motorista'], 500);
        }
    }



    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) ){ 
            $user = Auth::user(); 

            if($user->motorista == null){//no esta relacionado a un motorista
                
                return response()
                   ->json(['message' => 'No autorizado motorista'], 401);
            } 


            


            $user->estaActivo = true;
            $user->save();

            $user = Auth::user();
            if ($user instanceof \App\Models\User) {


                $user = User::with('motorista')->find($user->idPersona);
                
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()
            ->json(
                [
                    'message' => 'Hola '.$user->name,
                    'accessToken' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user
                ]
            );
            } else {
                return response()
           ->json(['message' => 'fallo interno'], 401);
            }
          
        }
        

            return response()
           ->json(['message' => 'No autorizado'], 401);
        
    }


    public function logout()
    {
        $user = Auth::user();

        $user->estaActivo = false;
        $user->save();



        if ($user instanceof \App\Models\User) {
                
            $user->currentAccessToken()->delete();
            return Response(['data' => 'Sesion finalizada exitosamente.'],200);


        } else {
            return response()
       ->json(['message' => 'fallo interno'], 401);
        }
        
        
    }


}
