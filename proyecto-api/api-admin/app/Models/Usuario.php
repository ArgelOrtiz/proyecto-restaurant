<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
   use SoftDeletes; //

   protected $table       = 'usuario';
   protected $primaryKey  = 'id_usuario';

   protected $fillable = [
      "usuario"   ,
      "contrasena",
      "nombre"    ,
      "apellido"  ,
      "tipo"      ,
      "estatus"
   ];

   protected $dates    = [
      'created_at',
      'updated_at',
      'deleted_at'
   ];
}
