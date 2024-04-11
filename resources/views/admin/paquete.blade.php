@extends('layouts.admin')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col">

            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($errors->has('message'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>
</div>


<div class="container paquete">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row flex-lg-nowrap">

                <div class="col-12 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center px-xl-3">
                                <a class="btn btn-success btn-block" href="{{route('paquete_agregar')}}">Agregar</a>
                            </div>
                            <hr class="my-3">
                            <div class="e-navlist e-navlist--active-bold">

                            </div>
                            <hr class="my-3">
                            <div>

                                <form action="{{route('paquete_filtrar')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="opc">Buscar por:</label>
                                        <select class="form-control" name="opc" id="opc">
                                            <option value="nombre">Nombre</option>
                                            <option value="precio">Precio</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex">
                                        <input class="form-control" type="text" name="valor" required>
                                        <button type="submit" class="btn btn-success ml-2 pl-4 pr-4 ">Buscar</button>
                                    </div>
                            </div>
                            </form>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>

                <div class="col overflow-auto mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>Nombre</span><small class="px-1">Se un buen
                                        administrador</small></h6>
                            </div>
                            <div class="">
                                <div class="table-responsive mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Folio</th>
                                                <th class="max-width">Nombre</th>
                                                <th class="sortable">Plan</th>
                                                <th class="sortable">Descripción</th>
                                                <th class="sortable">Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($paquetes as $paquete)
                                            <form action="{{route('paquete_eliminar')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="paquete_id" value="{{ $paquete->id }}">
                                                <tr>
                                                    <td class="text-nowrap align-middle">{{ $paquete->folio }}</td>
                                                    <td class="text-nowrap align-middle">{{ $paquete->nombre }}</td>
                                                    <td class="text-nowrap align-middle">{{ $paquete->subtitulo }}</td>
                                                    <td class="align-middle" style="width: 270px; height: 80px;">
                                                        <div class="overflow-auto" style="
                                                            max-width: 250px;
                                                            max-height: 90px;">{{ $paquete->descripcion }}
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap align-middle">$ {{ $paquete->precio }}</td>
                                                    <td class="text-center align-middle">
                                                        <div class="btn-group align-top">
                                                            <a class="btn btn-sm btn-outline-secondary badge"
                                                                href="{{ route('paquete_editar', ['id' => $paquete->id]) }}">Edit</a>
                                                            <button class="btn btn-sm btn-outline-secondary badge"
                                                                type="submit"><i class="bi bi-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </form>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">

                                    {{ $paquetes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @yield('formularioPaquete')


        </div>
    </div>
</div>



@endsection