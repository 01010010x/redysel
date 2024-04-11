<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable =[
        'nombre'
    ];

    public function perfil(){
        return $this->hasMany('App\Perfil');
    }
}
