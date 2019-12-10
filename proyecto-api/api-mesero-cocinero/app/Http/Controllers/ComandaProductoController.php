<?php

namespace App\Http\Controllers;

use App\Models\Comanda_Producto;
use Illuminate\Http\Request;

class ComandaProductoController extends Controller
{
    public function get_comandas_producto(Request $request){

        $comandas_productos = Comanda_Producto::all();

        return response()->json([
          "comandas_productos" => $comandas_productos
        ]);
    }
}
