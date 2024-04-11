<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function municipio(){
        return $this->belongsTo('App\Municipio');
        
    }
}
