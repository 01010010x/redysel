@extends('layouts.app')

@section('content')

<section class="container carrito" style="margin-top:7rem;">
    <a href="/home" class="btn btn-rs mb-4">Regresar</a>
    <div class="row">
        @if($paquetes->isEmpty())
        <div class="alert alert-warning" role="alert">
            No hay paquetes en tu carrito
        </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover table-bordered " style="vertical-align: middle;">
                <thead>
                    <tr>
                        <th class="max-width">Nombre</th>
                        <th class="sortable">Cantidad</th>
                        <th class="sortable">Acciones</th>
                        <th class="sortable">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($paquetes as $paquete)
                    <tr>
                        <td>{{ $paquete->nombre }}</td>
                        <td>
                            <form action="{{route('carrito_modificar')}}" method="post">
                                <input type="hidden" name="id_paquete" value="{{$paquete->id}}">
                                @csrf
                                <input class="form-control text-center" type="number" class="text-center"
                                    name="cantidad" value="{{$paquete->pivot->cantidad}}">
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary" type="submit"><i
                                    class="bi bi-arrow-counterclockwise"></i></button>
                            </form>
                            <form action="{{route('carrito_eliminar')}}" method="post">
                                @csrf
                                <input type="hidden" name="id_paquete" value="{{$paquete->id}}">
                                <button type="submit" href="Eliminar"
                                    class="btn btn-danger btn-sm my-2">Eliminar</button>
                            </form>
                        </td>
                        @php $subtotal = $paquete->precio * $paquete->pivot->cantidad;
                        $total = $total + $subtotal;
                        @endphp
                        <td>${{$subtotal}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form action="{{ route('pago_index') }}" method="POST">
            @csrf
            <div class="row border-top py-5">
                <div class="col">
                    <button href="" class="btn btn-rs btn-sm ">Procesar compra</button>
                </div>
                <div class="col text-center">
                    Subtotal + Contrato <h4>${{$total + 2000}}</h4>
                </div>

            </div>
        </form>
        @endif
    </div>
</section>
@endsection