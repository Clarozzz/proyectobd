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

class AuthClienteController extends Controller
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
                'password' => Hash::make($request ->password)
            ]
            );

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()
            ->json(['data' => $user, 'access_token' => $token , 'token_type' => 'Bearer']);

    }
}
