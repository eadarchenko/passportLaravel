<?php

namespace App\Http\Controllers;
use Carbon\Carbon; /*Este componente nos ofrece no solo la posibilidad de crear fechas sino también de hacer cálculos obteniendo como resultado fechas futuras o
 pasadas a un valor dado y un intervalo especificado*/

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
   /* public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json([
            'message' => 'Usuario creado perfectamente!'
        ], 201); // respuesta estándar para respuestas correctas 201
    }

  iniciar la sesion y crear el toquen:

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',

        ]);

        $credentials = request(['name','email', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'No esta autoriado'
            ], 401);/*HTTP 401 indica que la petición (request) no ha sido ejecutada porque carece de credenciales
             válidas de autenticación para el recurso solicitado

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
                                            //Con esto sumamos una semana a la fecha dada,

        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
                                                                //pone la fecha así 2022-02-20
        ]);
    }

    //cerrar la sesion y anular el token:
    public function logout(Request $request)
    {
        Auth::user()->tokens->each(function($token,$key) {
            $token->delete();
        });
        return response()->json([
            'message' => 'Deslogueado con exito'
        ],200);// indica que la solicitud ha tenido éxito
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
*/
}




