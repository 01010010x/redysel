<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function items()
    {
        return $this->hasMany('App\ItemPedido');
    }
}
