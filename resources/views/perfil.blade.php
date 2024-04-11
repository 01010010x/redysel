@extends('layouts.app')

@section('content')

<section class="container" style="margin-top:5rem;">
<h4 class="fw-bold">Registro de datos</h4>
    <div class="row mt-5">
        <div class="offset-md-1 col-md-4">
            <form action="{{route('perfil_registrar')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header text-center">Datos de dirección</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input required value="{{$direccion ?? ''}}" type="text" class="form-control" name="direccion">
                        </div>
                        <div class="form-group">
                        <label for="" class="">Elige tu municipio</label>
                        
                            <select required name="municipio" id="municipio" class="form-control form-control-sm">
                                    <option value="">Opciones</option>
                                    @foreach($municipios as $municipio)
                                    <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
                                    @endforeach
                            </select>
                        
                        </div>
                    </div>
                </div>
        </div>
        <div class="offset-md-1 col-md-4">
            <div class="card">
                <div class="card-header text-center">Datos de contacto</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Teléfono</label>
                        <input required value="{{$telefono ?? ''}}" type="number" name="telefono" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-rs mt-5 ">Registrar</button>
        </div>
        </form>
    </div>
</section>

@endsection