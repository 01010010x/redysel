@extends('layouts.app')

@section('content')

<section class="container pdf aviso ">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bold">CÓDIGO DE POLITICAS Y GESTIÓN DE LA RED</h1>
        </div>
        <div class="col my-5 pt-5">
            <embed src="{{asset('docs/CÓDIGO DE POLITICAS Y GESTIÓN DE LA RED.pdf')}}" type="application/pdf">
        </div>
    </div>
</section>


@endsection