@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </div>
                    @endif

                    'Antes de continuar, por favor revisa tu correo electrónico para obtener un enlace de verificación.'
'Si no recibiste el correo electrónico',

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">'haz clic aquí para solicitar otro'
</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
