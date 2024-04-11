<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;

class ResidenciaController extends Controller
{
    public function index()
    {
        return view('residencial', ['paquetes' => Paquete::where('subtitulo', 'not like', '%negocio%')->get()]);

    }
}
