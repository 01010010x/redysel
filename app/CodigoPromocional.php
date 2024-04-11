<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodigoPromocional extends Model
{
    protected $fillable =[
        'codigo', 'descuento','fecha_ini','fecha_fin'
    ];
}
