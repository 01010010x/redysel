<?php

namespace App\Http\Controllers;
use App\Paquete;

use Illuminate\Http\Request;

class NegocioController extends Controller
{
    public function index(){
        return view('negocio', ['paquetes' => Paquete::where('subtitulo', 'like', '%negocio%')->get()]);

    }
}