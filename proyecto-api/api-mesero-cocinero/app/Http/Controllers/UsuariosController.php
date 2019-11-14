<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function inicia_sesion (Request $request) {

        if($request->exists('usuario') && $request->exists('contrasena')){
            $usuario = $request->usuario;
            $contrasena = $request->contrasena;

            if(Usuario::where(['usuario'=> $usuario])->exists()){
                $usuario = Usuario::where(['usuario'=> $usuario])->first();

                if($usuario['contrasena'] == $contrasena){

                    

                    return response()->json(["message" => "Usuario loggeado", "status" => 1]);
                }else{
                    return response()->json(["message" => "Contraseña incorrecta", "status" => 0]);
                }
            }else{
                return response()->json(["message" => "No existe usuario", "status" => 0]);
            }


            
        }else{
            return response()->json(["message" => "Ingresar todos los campos"]);
        }
        
        
        // print_r( $request->usuario);
        // return response()->json(["atributo" => 1]);
    }
}
