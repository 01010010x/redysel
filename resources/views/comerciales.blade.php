@extends('layouts.app')

@section('content')

<section class="container pdf aviso ">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bold">CODIGO DE PRACTICAS COMERCIALES</h1>
        </div>
        <div class="col my-5 pt-5">
            <embed src="{{asset('docs/CODIGO DE PRACTICAS COMERCIALES.pdf')}}" type="application/pdf">
        </div>
    </div>
</section>


@endsection