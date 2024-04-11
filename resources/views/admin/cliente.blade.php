@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <div class="alert alert-danger" role="alert"> Por razones de privacidad no podemos alterar la informacion de nuestros clientes
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container clientes">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Clientes</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-actions float-right">
                        </div>

                    </div>

                    <div class="card-body table-responsive pt-0">
                        <table class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Municipio</th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-success text-white">
                                    <td class="">{{ $admin->id }}</td>
                                    <td></td>
                                    <td class="">{{ $admin->name }}</td>
                                    <td class="">{{ $admin->email }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>ADMINISTRADOR</td>
                                </tr>
                                @foreach ($clientes as $cliente)
                                @if (!$cliente->is_admin)
                                <input type="hidden" name="perfil_id" value="{{ $cliente->perfil }}">
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td><i class="bi bi-person-circle "></i></td>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->direccion ? $cliente->direccion : 'No registrado' }}</td>
                                    <td>Chiapas, {{ $cliente->municipio ? $cliente->municipio : 'No registrado' }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td><span class="badge bg-success text-white">Active</span></td>
                                </tr>
                                @endif
                                @endforeach


                            </tbody>

                        </table>

                    </div>
                </div>
                <div class="pagination justify-content-center ">

                    {{ $clientes->links() }}

                </div>
            </div>
        </div>

    </div>
</div>


@endsection