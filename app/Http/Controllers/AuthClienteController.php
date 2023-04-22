<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use \stdClass;
use HasAvatar;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\JsonResponse;




class AuthClienteController extends Controller
{

    

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
            ]
        );

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

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


                'email' => $request ->email,
                'password' => bcrypt($request ->password)
            ]
            );

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()
            ->json(['data' => $user, 'access_token' => $token , 'token_type' => 'Bearer']);

    }




    // public function login(Request $request){

    //     if(!Auth::attempt($request->only('email', 'password')) )
    //     {
    //         return response()
    //         ->json(['message' => 'No autorizado'], 401);
    //     }
        


    //     $user = User::where('email', $request['email'])->firstOrFail();

    //     // if($user->Admin == null){
    //     //     return response()
    //     //     ->json(['message' => 'No eres admin'], 401);
    //     // }

    //     $token = $user -> createToken('auth_token') -> plainTextToken;

    //     return response()
    //         ->json(
    //             [
    //                 'message' => 'Hola '.$user->name,
    //                 'accessToken' => $token,
    //                 'token_type' => 'Bearer',
    //                 'user' => $user
    //             ]
    //         );
        
    // }

    

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 


            $user = Auth::user();
            if ($user instanceof \App\Models\User) {
                
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
        else{ 
            return response()
           ->json(['message' => 'No autorizado'], 401);
        } 
    }


    public function logout()
    {
        $user = Auth::user();

        


        if ($user instanceof \App\Models\User) {
                
            $user->currentAccessToken()->delete();
            return Response(['data' => 'Sesion finalizada exitosamente.'],200);


        } else {
            return response()
       ->json(['message' => 'fallo interno'], 401);
        }
        
        
    }

}
