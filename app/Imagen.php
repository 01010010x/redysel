<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $fillable=[
        'ruta', 'descripcion',
    ];
}
