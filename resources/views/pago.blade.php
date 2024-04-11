@extends('layouts.app')

@section('content')


<section class="container" style="margin-top:7rem;">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-8 text-center shadow-sm border p-3">
            <h6>Código promocional</h6>
            <form method="POST" action="{{route('pago_aplicarDescuento')}}">
                @csrf
                <input type="text" class="form-control form-control-sm" name="codigoPromo">
                <button class="btn btn-outline-success mt-5 mb-3 btn-sm" type="submit">Aplicar</button>
            </form>
        </div>
        <div class="col-lg-5 col-12 text-center my-5 my-lg-0">
            <h6>Dirección de envío</h6>
            <hr>
            @if(!empty($direccion))
            <div class="card">
                <div class="card-body text-start">
                    <div class="card-text fw-light"><span class=" fw-normal">Direccion:
                        </span>{{$direccion}}</div>
                    <div class="card-text fw-light"><span class=" fw-normal">Municipio:
                        </span>{{$municipio}}</div>
                    <div class="card-text fw-light"><span class=" fw-normal">Telefono:
                        </span>{{$telefono}}</div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-success btn-sm" href="{{route('perfil_modificar')}}">Editar</a>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <div class="alert alert-danger" role="alert">No tiene registrado ninguna
                            direccion, favor de registrarla.</div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-success btn-sm" href="{{route('perfil_editar')}}">Añadir
                        direccion</a>
                </div>
            </div>
            @endif
        </div>
        <div class="col-lg-2 col-5 text-center">
            <h6>Metodo de pago</h6>
            <hr>
            <form action="{{route('pay')}}" method="POST">
                @csrf
                <select name="metodoPago" id="metodoPago" class="form-control form-control-sm">
                    @foreach($plataforma as $pago)
                    <option value="{{$pago->id}}">{{$pago->nombre}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-lg-3 col-12 my-5">
            <table class="table">
                <tr class="table-success tex-center">
                    <td colspan="2">Resumen del pedido</td>
                </tr>
                <tr>
                    <td>Precio Total</td>
                    <td>${{$subtotalPaquetes ?? '0'}}</td>
                </tr>
                <tr>
                    <td>Contrato</td>
                    <td>${{$contrato ?? '0'}}</td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td>${{$descuento ?? '0'}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>${{$total ?? '0'}}</td>
                </tr>
                </form>
                <tr class="text-center">
                    <td colspan="2">
                        <button class="btn btn-primary btn-sm" id="liveAlertBtn" type="submit">Confirmar pedido</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="mt-4" id="liveAlertPlaceholder"></div>

        <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                appendAlert(
                    'Por el momento, esta opción no está disponible. Por favor, póngase en contacto con nosotros para obtener más información. <a target="_blank" href="https://wa.me/529191111944">aqui</a>',
                    'success')
            })
        }
        </script>
</section>


@endsection