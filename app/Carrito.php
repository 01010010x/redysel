<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function paquetes()  {
        return $this->belongsToMany('App\Paquete', 'carrito_paquetes')->withPivot('cantidad');
    }
}
