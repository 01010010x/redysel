<?php

namespace App\Http\Controllers;
use Auth;
use App\Paquete;
use App\Carrito;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    protected $carrito;

    public function __construct(){
        $this->middleware('auth');
    }
    private function obtenerCarrito(){
        $usuario = Auth::user();
        $this->carrito = $usuario->carrito;

        if(is_null($this->carrito)){  
            $this->carrito = new Carrito();
            $usuario->carrito()->save($this->carrito);
        }


    }
    public function agregar(Request $request) {
        $this->obtenerCarrito();
        $paquete = Paquete::find($request->id_paquete);

        $this->carrito->paquetes()->syncWithoutDetaching([$paquete->id=>['cantidad'=>1]]);
        return view('carrito',['paquetes'=>$this->carrito->paquetes]);
    }

    public function mostrar(){
        $this->obtenerCarrito();
        return view('carrito',['paquetes'=>$this->carrito->paquetes]);
    }

    public function modificar(Request $request){
        $this->obtenerCarrito();
        $cantidad = $request->cantidad;
        $paquete = Paquete::find($request->id_paquete);
        $this->carrito->paquetes()->updateExistingPivot($paquete->id,['cantidad'=>$cantidad]);
    
        return view('carrito',['paquetes'=>$this->carrito->paquetes]);
    }

    public function eliminar(Request $request){

        $this->obtenerCarrito();
        $paquete = Paquete::find($request->id_paquete);

        $this->carrito->paquetes()->detach($paquete->id);

        return view('carrito',['paquetes'=>$this->carrito->paquetes]);
        
    }
}
