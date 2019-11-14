<?php

namespace App\Http\Controllers;
use App\Utils\RandomHash;

use App\Models\Usuario;
use App\Models\UsuarioSession;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function inicia_sesion (Request $request) {
        date_default_timezone_set('America/Mexico_City');
        $fecha_actual = date("Y-m-d H:i:s");
        $fecha_mas_horas = strtotime('-8 hour', strtotime($fecha_actual));
        $formato_fecha_mas_horas = date( 'Y-m-d H:i:s' , $fecha_mas_horas );

        $request->session()->flush();   // Eliminar el token actual

        if($request->exists('usuario') && $request->exists('contrasena')){
            $usuario = $request->usuario;
            $contrasena = $request->contrasena;

            if(Usuario::where(['usuario'=> $usuario])->exists()){
                $usuario = Usuario::where(['usuario'=> $usuario])->first();

                if($usuario['contrasena'] == $contrasena){
                    $token = RandomHash::randomStr(200);

                    $sesion = UsuarioSession::create([
                        'id_usuario' => $usuario['id_usuario'],
                        'expired_date' => $formato_fecha_mas_horas,
                        'token' => $token
                    ]);
                    session(['token' => $token]);
                    
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

    public function obten_usuarios (Request $request) {
        return response()->json(["usuarios" => Usuario::all()]);
    }
}
