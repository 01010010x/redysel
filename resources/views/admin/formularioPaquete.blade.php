@extends('admin.paquete')

@section('formularioPaquete')
<br>


<!-- paquete Form Modal -->
<div class="modal fade show overflow-auto" role="dialog" tabindex="-1" id="paquete-form-modal" style="display:block;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nuevo paquete</h5>
                <a href="/admin/paquete" class="close" data-dismiss="modal">
                    <span aria-hidden="true">X</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="py-1">
                    <form action="{{ route('paquete_registrar') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        @if (isset($paquete->id))
                        <input type="hidden" name="paquete_id" value="{{ $paquete->id }}">
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Folio</label>
                                            <input class="form-control" type="text" name="folio"
                                                value="{{ $paquete->folio ?? '' }}" placeholder="f-1231">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" type="text" name="nombre"
                                                value="{{ $paquete->nombre ?? '' }}" placeholder="2 megas" ">
                                                        </div>
                                                    </div>
                                                    <div class=" col">
                                            <div class="form-group">
                                                <label>Plan</label>
                                                <input class="form-control" type="text" name="subtitulo"
                                                    value="{{ $paquete->subtitulo ?? '' }}" placeholder="Plan Personal">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <textarea class="form-control" rows="5"
                                                    name="descripcion">{{ $paquete->descripcion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-5 offset-md-1 mb-3">
                                    <div class="mb-2">
                                        <h4 class="fw-bold">Precio</h4>
                                    </div>

                                    <div class="p-0 col-7 form-group">
                                        <input class="form-control" type="text" name="precio" placeholder="$"
                                            value="{{ $paquete->precio ?? '' }}">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-backdrop fade show"></div>

@endsection