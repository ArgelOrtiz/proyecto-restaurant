<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use Illuminate\Http\Request;

class ComandController extends Controller
{
    public function get_comandas(Request $request){

        $comandas = Comanda::all();

        return response()->json([
          "comandas" => $comandas
        ]);
    }
    
}
