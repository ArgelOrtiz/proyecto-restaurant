<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_platillo';

    protected $fillable = [
        "nombre",
        "descripcion",
        "precio",
        "estatus",
        "tipo",
        "img_url",
        "stock"
    ];
}
