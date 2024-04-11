@extends('layouts.admin')

@section('content')



<div class="container transacciones">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="position-relative card table-nowrap table-card ">
                    <div class="card-header container">
                        <div class="row align-items-lg-center align-items-start">
                            <div class="col">
                                <h5 style="padding: .375rem .75rem;" class="mb-3">Ultimas Transacciones</h5>
                            </div>
                            <form action="{{route('pedido_filtrar')}}" method="post">
                        @csrf
                        <div class="row ">
                            <div class="col">
                                <p class="fw-bold" style="padding: .375rem .75rem;">Buscar por:</p>
                            </div>
                            <div class="col">
                                <select name="opc" id="opc" class="form-control  mb-1">
                                    <option value="cliente">Nombre cliente</option>
                                    <option value="comprobante">Comprobante</option>
                                </select>
                            </div>
                            <div class="col">
                                <input class="form-control mb-3" type="text" name="valor" required>
                            </div>
                            <div class="col">
                                <button class="btn rounded-3 btn-outline-success " type="submit" style="padding: .375rem .75rem;">Buscar</button>
                            </div>
                        </div>
                        </form>
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table vh">
                            <thead class="small text-uppercase bg-body text-muted">
                                <tr>
                                    <th>Comprobante</th>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>$</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr class="align-middle">
                                    <td>{{ $pedido->comprobante }}</td>
                                    <td>{{ $pedido->fecha }}</td>
                                    <td>{{ $pedido->cliente }}</td>
                                    <td>$ {{ $pedido->precio + 2000}}</td>
                                    <form action="{{ route('pedido_seguimiento') }}" method="POST">
                                    @csrf
                                    <td class="pl-0 pr-0">
                                        <div class="form-group m-0">
                                        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                                            <select class="form-control" name="estado" id="estado">

                                            <option value="{{ $pedido->estado }}">{{ $pedido->estado }}</option>
                                            <option value="{{ $pedido->estado == 'pagado' ? 'instalado' : 'pagado' }}">{{ $pedido->estado == 'pagado' ? 'instalado' : 'pagado' }}</option>

                                            </select>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn-group align-top">
                                                <a class="btn btn-sm btn-outline-secondary badge" href="item/{{ $pedido->id }}">Detalles</a>
                                                <button class="btn btn-sm btn-outline-secondary badge" type="submit"><i class="bi bi-floppy-fill"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <br><br><br><br><br>
                <div class="d-flex justify-content-center">
                    <ul class="pagination mt-3 mb-0">
                    {{ $pedidos->links() }}
                    </ul>
                </div>
            </div>

            @yield('item')

        </div>
    </div>


@endsection