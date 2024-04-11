<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Imagen;
use App\Paquete;

class PedidoController extends Controller
{
    private $pedidos;
    public function __construct()
    {
        $this->pedidos = DB::table('pedidos')
            ->join('users', 'users.id', '=', 'pedidos.user_id')
            ->join('item_pedidos', 'item_pedidos.pedido_id', '=', 'pedidos.id')
            ->select('pedidos.id', 'item_pedidos.comprobante','item_pedidos.precio', 'pedidos.estado', 'pedidos.fecha', 'users.name as cliente')
            ->paginate(4);


    }
    public function index()
    {
        return view('admin.home', ['pedidos' => $this->pedidos]);
    }
    public function mostrar($id)
    {
        $pedido = Pedido::find($id);
        $items = $pedido->items;
        $imagenesPaquetes = Imagen::whereIn('paquete_id', $items->pluck('paquete_id'))->get();

        return view('admin.item', ['paquetes' => $items, 'pedidos' => $this->pedidos, 'imagenesPaquetes' => $imagenesPaquetes]);
    }
    public function seguimiento(Request $request)
    {
        $pedido_id = $request->pedido_id;
        $estado = $request->estado;
        $pedido = Pedido::find($pedido_id);
        $pedido->estado = $estado;
        $pedido->save();
        $pedidoController = new PedidoController();
        return view('admin.home', ['pedidos' => $pedidoController->pedidos]);
    }
    public function filtrar(Request $request)
    {
        $opc = $request->opc;
        $valor = $request->valor;

        // Dependiendo de la opción seleccionada, configura el operador de búsqueda
        $operador = ($opc == 'cliente') ? 'like' : '=';

        // Si la opción es "cliente", agregamos los caracteres de comodín para realizar una búsqueda parcial
        $valor = ($opc == 'cliente') ? '%' . $valor . '%' : $valor;

        $pedidos = DB::table('pedidos')
            ->join('users', 'users.id', '=', 'pedidos.user_id')
            ->join('item_pedidos', 'item_pedidos.pedido_id', '=', 'pedidos.id')
            ->select('pedidos.id', 'item_pedidos.comprobante','item_pedidos.precio' , 'pedidos.estado', 'pedidos.fecha', 'users.name as cliente')->where(function ($query) use ($opc, $operador , $valor) {
                $query->where('users.name', $operador, $valor)
                    ->orWhere('item_pedidos.comprobante', $operador , $valor);
            })->paginate(10);

        return view('admin.home', ['pedidos' => $pedidos]);

    }
}
