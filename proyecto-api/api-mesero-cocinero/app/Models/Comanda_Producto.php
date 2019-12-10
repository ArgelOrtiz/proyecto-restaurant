<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comanda_Producto extends Model
{
    use SoftDeletes;

    protected $table = 'comanda_producto';
    protected $primaryKey = 'id_comanda_producto';

    protected $fillable =[
        "producto_id_platillo",
        "comanda_id_comanda",
        "cantidad"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ]; //Registramos la nueva columna
}
