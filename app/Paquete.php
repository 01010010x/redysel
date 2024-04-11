<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Imagen;

class Paquete extends Model
{
    protected $fillable =[
        'nombre','subtitulo','descripcion', 'precio','folio'
    ];

    // public function imagenes(){
    //     return $this->hasMany('App\Imagen');
    // }
    
}
