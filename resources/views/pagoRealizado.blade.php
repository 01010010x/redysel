@extends('layouts.app')
@section('content')

<br><br><br><br><br><br><br><br>

<section class="container">
    <div class="offset-md-2 col-8">
        <div class="card " id="contenidoPDF">
            <div class="card-header titulos text-center">Pago recibido</div>
            <div class="card-body">
                <div class="card-text textos" id="contenidoPDF">
                    <h2>Compra realizada con éxito</h2>
                    <h5>Comprobante: {{ $comprobante }}</h5>
                    <p>Nombre: {{ $name }}</p>
                    <p>Monto: {{ $amount }} {{ $currency }}</p>
                </div>
            </div>
            <div class=" card-footer">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Presiona CTRL + P para imprimir tu comprobante o captura la pantalla
                </div>

            </div>

        </div>
    </div>
    <!-- $comprobante = 'COMP-*****';
    $itemPedido = ItemPedido::where('comprobante', $comprobante)->get(); -->

</section>


<br><br><br><br><br>

@endsection