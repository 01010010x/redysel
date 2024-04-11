<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use Auth;
use App\Carrito;
use App\Envio;
use App\PlataformaPago;
use App\CodigoPromocional;

class PagoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        
    }

    public function index() {
        $usuario = Auth::user();

        $total = 0;
        $subtotalPaquetes = 0;
        $paquetes = $usuario->carrito->paquetes;

        foreach($paquetes as $paquete){
            $subtotal= $paquete->precio * $paquete->pivot->cantidad;
            $subtotalPaquetes = $subtotalPaquetes + $subtotal;
        };

        $contrato = 2000;
        $total =$subtotalPaquetes + $contrato;
        session()->put('total', $total);
        
        if ($usuario->perfil) {
            $perfil = $usuario->perfil;
            $direccion = $perfil->direccion;
            $municipio = $perfil->municipio->nombre;
            $telefono = $perfil->telefono;
            return view('pago', ['direccion' => $direccion, 'municipio' => $municipio, 'telefono' => $telefono, 'plataforma' => PlataformaPago::all(),'subtotalPaquetes'=>$subtotalPaquetes, 'contrato'=> $contrato, 'total'=>$total]);
        } else {
            // Manejar el caso en el que el usuario no tiene un perfil.
            return view('pago', ['plataforma' => PlataformaPago::all(),'subtotalPaquetes'=>$subtotalPaquetes, 'contrato'=> $contrato, 'total'=>$total]);
        }
    }

    public function aplicarDescuento(Request $request){
        $codigo = CodigoPromocional::where('codigo',$request->codigoPromo)->take(1)->get();
        $porcentajeDescuento = 0;
        if(sizeof($codigo)>0){
            if((now()->toDateString()>= $codigo[0]->fecha_ini) && (now()->toDateString() <= $codigo[0]->fecha_fin)){
                $porcentajeDescuento = $codigo[0]->descuento;
            }
        }
        $usuario = Auth::user();
        $perfil = $usuario->perfil;

        $total = 0;
        $subtotalPaquetes = 0;
        $paquetes = $usuario->carrito->paquetes;

        foreach ($paquetes as $paquete) {
            $subtotal = $paquete->precio * $paquete->pivot->cantidad;
            $subtotalPaquetes += $subtotal;
        }

        $contrato = 2000;
        $descuento = $subtotalPaquetes * ($porcentajeDescuento / 100);
        $total = $subtotalPaquetes + $contrato - $descuento;
        session()->put('total', $total);

    // Verifica si el perfil existe antes de acceder a sus propiedades
        if ($perfil) {
            $direccion = $perfil->direccion;
            $municipio = $perfil->municipio->nombre;
            $telefono = $perfil->telefono;

            return view('pago', ['direccion' => $direccion,'municipio' => $municipio,'telefono' => $telefono,'plataforma' => PlataformaPago::all(),'subtotalPaquetes' => $subtotalPaquetes,'contrato' => $contrato,'total' => $total,'descuento' => $descuento,]);
        } else {
            return view('pago', ['plataforma' => PlataformaPago::all(),'subtotalPaquetes'=>$subtotalPaquetes, 'contrato'=> $contrato, 'total'=>$total, 'descuento' => $descuento]);
        }
    }
    
}
