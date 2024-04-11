<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Municipio;
use App\Perfil;
use App\Envio;
use App\PlataformaPago;
use App\Carrito;

class PerfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function editar(){
        return view('perfil', ['municipios'=>Municipio::all()]);
    }
    public function registrar(Request $request) {

        $usuario =Auth::user();
        $perfil =$usuario->perfil;

        if(is_null($perfil)){
            $perfil = new Perfil();
            $perfil->user_id = $usuario->id;
        }
            $perfil->direccion = $request->direccion;
            $perfil->municipio_id = $request->municipio;
            $perfil->telefono = $request->telefono;

            $perfil->save();

            $direccion = $perfil->direccion;
            $municipio = $perfil->municipio->nombre;
            $telefono = $perfil->telefono;

            $total = 0;
            $subtotalPaquetes = 0;
            $paquetes = $usuario->carrito->paquetes;

            foreach($paquetes as $paquete){
                $subtotal= $paquete->precio * $paquete->pivot->cantidad;
                $subtotalPaquetes = $subtotalPaquetes + $subtotal;
            };

            $contrato = 2500;
            $total =$subtotalPaquetes + $contrato;



        return view('pago',['municipios'=>Municipio::all(),'direccion'=>$direccion, 'municipio'=>$municipio,'telefono'=>$telefono, 'plataforma' => PlataformaPago::all(),'subtotalPaquetes'=>$subtotalPaquetes, 'contrato'=> $contrato, 'total'=>$total]);
    }

    public function modificar(){
        $usuario = Auth::user();
        $perfil = $usuario->perfil;
        $direccion = $perfil->direccion;
        $municipio = $perfil->municipio->nombre;
        $telefono = $perfil->telefono;
        $envio = Envio::first()->precio;


        return view('perfil', ['municipios'=>Municipio::all(),'direccion'=>$direccion, 'municipio'=>$municipio,'telefono'=>$telefono, 'plataforma' => PlataformaPago::all(), 'envio'=>$envio]);
    }
}

