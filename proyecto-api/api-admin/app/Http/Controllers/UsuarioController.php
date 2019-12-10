<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function get_usuarios(Request $request)
    {
       $usuarios = Usuario::all();

       return response()->json([
         "usuarios" => $usuarios
       ]);
    
    }

    public function nuevo_usuario(Request $request)
    {
      $info_usuario = $request->usuario;

      $usuario      = $info_usuario['usuario'   ];
      $contrasena   = $info_usuario['contrasena']; 
      $nombre       = $info_usuario['nombre'    ];
      $apellido     = $info_usuario['apellido'  ];
      $tipo         = $info_usuario['tipo'      ];
      $status       = $info_usuario['estatus'   ];

      $bUsuario  =  Usuario::create([
        "usuario"    => $usuario,
        "contrasena" => $contrasena,
        "nombre"     => $nombre,
        "apellido"   => $apellido,
        "tipo"       => $tipo,
        "estatus"    => $status
      ]);
      
      if ($bUsuario){
         return response()->json([
           "message" => "Inserción correcta"
         ]);
      }
      else{
         return response()->json([
           "message" => "Error al hacer inserción"
         ]);
      }
    }

    public function eliminar_usuario(Request $request){

      $id_usuario = $request->id_usuario;

      if(Usuario::where('id_usuario',$id_usuario)->exists()){
        
         $usuario = Usuario::where('id_usuario',$id_usuario)->first();
         $usuario->delete();

         return response()->json([
           "message" => "Eliminación correcta"
         ]);
      }
      else{
         return response()->json([
           "message" => "No existe el ususario"
         ]);
      }
    }

    public function editar_usuario(Request $request){

      $info_usuario = $request->usuario;

      $id_usuario   = $info_usuario['id_usuario'];
      $usuario      = $info_usuario['usuario'   ];
      $contrasena   = $info_usuario['contrasena'];
      $nombre       = $info_usuario['nombre'    ];
      $apellido     = $info_usuario['apellido'  ];
      $tipo         = $info_usuario['tipo'      ];
      $status       = $info_usuario['estatus'   ];


      if(Usuario::where('id_usuario',$id_usuario)->exists()){

        $usuario = Usuario::where('id_usuario',$id_usuario)->update([
          "usuario"    => $usuario   ,
          "contrasena" => $contrasena,
          "nombre"     => $nombre    ,
          "apellido"   => $apellido  ,
          "tipo"       => $tipo      ,
          "estatus"    => $status
        ]);

        return response()->json([
          "message" => "Actualización exitosa"
        ]);
      }
      else{
        return response()->json([
          "messaje" => "No existe el usuario"
        ]);

      }
    }
}
