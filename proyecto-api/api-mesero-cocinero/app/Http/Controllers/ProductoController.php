<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function get_productos(Request $request) {

        $platillos = Producto::where('tipo', 1)->get();
        $bebidas = Producto::where('tipo', 2)->get();
        $postres = Producto::where('tipo', 3)->get();

        return response()->json([
            "platillos" => $platillos,
            "bebidas" => $bebidas,
            "postres" => $postres
            ]);
    }
}
