<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function get_productos(Request $request)
    {

        $platillos = Producto::where('tipo', 1)->get();
        $bebidas = Producto::where('tipo', 2)->get();
        $postres = Producto::where('tipo', 3)->get();

        return response()->json([
            "platillos" => $platillos,
            "bebidas" => $bebidas,
            "postres" => $postres
        ]);
    }

    public function nuevo_producto(Request $request)
    {

        $info_producto = $request->producto;

        $nombre = $info_producto['nombre'];
        $precio = $info_producto['precio'];
        $stock = $info_producto['stock'];
        $descripcion = $info_producto['descripcion'];
        // $imagen = $info_producto['imagen'];
        $status = $info_producto['status'];
        $tipo = $info_producto['tipo'];
        $img = $info_producto['img'];

        // $datos = array();

        // array_push($datos, $nombre, $precio, $stock, $descripcion, $status);

        // print_r($datos);

        $producto = Producto::create([
            "nombre" => $nombre,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "estatus" => $status,
            "tipo" => $tipo,
            "img_url" => $img,
            "stock" => $stock
        ]);

        if ($producto) {
            return response()->json([
                "message" => "Inserción correcta"
            ]);
        } else {
            return response()->json([
                "message" => "Error al hacer inserción"
            ]);
        }
    }

    public function eliminar_producto(Request $request)
    {
        $id_producto = $request->id_producto;

        if (Producto::where('id_platillo', $id_producto)->exists()) {
            $producto = Producto::where('id_platillo', $id_producto)->first();
            $producto->delete();

            return response()->json([
                "message" => "Eliminación correcta"
            ]);
        } else {
            return response()->json([
                "message" => "No existe el producto"
            ]);
        }
    }

    public function editar_producto(Request $request)
    {

        $info_producto = $request->producto;

        $id_platillo = $info_producto['id_platillo'];
        $nombre = $info_producto['nombre'];
        $precio = $info_producto['precio'];
        $stock = $info_producto['stock'];
        $descripcion = $info_producto['descripcion'];
        // $imagen = $info_producto['imagen'];
        $status = $info_producto['estatus'];
        $tipo = $info_producto['tipo'];
        $img_url = $info_producto['img_url'];

        // $datos = array();

        // array_push($datos, $nombre, $precio, $stock, $descripcion, $status);

        // print_r($datos);
        if(Producto::where('id_platillo', $id_platillo)->exists()){
            $producto = Producto::where('id_platillo', $id_platillo)->update([
                "nombre" => $nombre,
                "descripcion" => $descripcion,
                "precio" => $precio,
                "estatus" => $status,
                "tipo" => $tipo,
                "img_url" => $img_url,
                "stock" => $stock
            ]);
            return response()->json([
                "message" => "Actualización realizada"
            ]); 
        }else{
            return response()->json([
                "message" => "No existe el producto"
            ]); 
        }
    }
}
