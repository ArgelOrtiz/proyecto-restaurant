<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioSession extends Model
{
    protected $table = 'usuario_session';
    protected $primaryKey = 'id_session';

    protected $fillable = [
        "id_usuario",
        "expired_date",
        "token"
    ];

    // protected $attributes = [
    //     "id_usuario",
    //     "expired_date"
    // ];

}
