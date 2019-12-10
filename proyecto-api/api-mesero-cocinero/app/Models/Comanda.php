<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comanda extends Model
{
    use SoftDeletes; //Implementamos

    protected $table = 'comanda';
    protected $primaryKey = 'id_comanda';

    protected $fillable =[
        "id_usuario",
        "id_mesa",
        "estatus"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ]; //Registramos la nueva columna
}
