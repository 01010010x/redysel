<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\PayPalService;
use Auth;
use App\Carrito;
use App\Pedido;
use App\ItemPedido;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $paymentPlatform = new PayPalService();
        $total = session()->get('total');
        $order = json_decode($paymentPlatform->createOrder($total, 'MXN'));

        session()->put('approvalId', $order->id);

        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();
        return redirect($approve->href);

    }
    public function approval()
    {
        if (session()->has('approvalId')) {
            $paymentPlatform = new PayPalService();
            $approvalId = session()->get('approvalId');
            $payment = json_decode($paymentPlatform->capturePayment($approvalId));
            $name = $payment->payer->name->given_name;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;

            $usuario = Auth::user();
            $pedido = new Pedido();
            $usuario->pedidos()->save($pedido);

            $carrito = $usuario->carrito;
            $comprobante = uniqid('COMP-');
            foreach ($carrito->paquetes as $paquete) {
                $item = new ItemPedido();
                $item->comprobante = $comprobante;
                $item->nombre = $paquete->nombre;
                $item->descripcion = $paquete->descripcion;
                $item->precio = $paquete->precio;
                $item->folio = $paquete->folio;
                $item->cantidad = $paquete->pivot->cantidad;
                $item->paquete_id = $paquete->id;
                $pedido->items()->save($item);
                $carrito->paquetes()->detach($paquete->id);
            }

            return view('pagoRealizado')->with(['name' => $name, 'amount' => $amount, 'currency' => $currency, 'comprobante' => $comprobante]);


        }
    }

    public function cancelled()
    {
        $usuario = Auth::user();
        $carrito = $usuario->carrito;
        return redirect()->route('carrito_mostrar')->with(['paquetes' => $carrito->paquetes]);
    }
}
