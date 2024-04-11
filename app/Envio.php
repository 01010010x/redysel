<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    protected $fillable = [
        'transportista','precio','servicio'
    ];
}
