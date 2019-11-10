<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Productos extends Controller
{
    //
    public function get_platillos(){
        return Producto::all();
        // echo "platillos";
    }

    public function prueba_post(Request $request, Response $response){
        // print_r($request->input());

        return new JsonResponse($request->input());
    }

    public function prueba_get($nombre){
        // print_r($request->input());

        return new JsonResponse(["nombre" => $nombre]);
    }
}
