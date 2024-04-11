@extends('admin.home')

@section('item')



<div class="modal overflow-auto fade show" role="dialog" tabindex="-1" id="detalles-modal" style="display:block;">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h5 class="modal-title">Información del pedido</h5>
                            <a type="button" href="/admin/home" class="close" data-dismiss="modal">
                                <span aria-hidden="true">X</span></a>
                        </div>
                        <div class="modal-body  text-center">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        
                                        <tr class=" bg-success text-white">
                                            <th class="col-2">Folio</th>
                                            <th class="col-3">Nombre</th>
                                            <th class="col-1">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($paquetes as $paquete)
                                        <tr>
                                            <th class="col-2" >{{$paquete->folio}}</th>
                                            <td>{{$paquete->nombre}}</td>
                                            <td>#{{$paquete->cantidad}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-backdrop fade show"></div>


@endsection