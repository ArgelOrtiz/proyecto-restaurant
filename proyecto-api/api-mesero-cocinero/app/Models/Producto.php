<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes; //Implementamos 

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

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ]; //Registramos la nueva columna
}
