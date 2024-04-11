<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset ('css/redysel-style.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->



    <!-- CSS -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset ('css/jquery.mCustomScrollbar.min.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="{{ asset ('css/style.css') }}"> -->


    <link rel="stylesheet" href="{{asset('css/floating-labels.css')}}">
    <!-- version bootstrap-4-6-2 -->
    <link rel="stylesheet" href="{{asset('css/adminRedysel.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-4-6-2.min.css')}}">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

</head>

<body>

    <div id="app">

        <nav
            class="nav navbar-light bg-light navbar navbar-expand-lg nav-tabs pb-lg-0 pb-2 mb-2 mb-lg-4 pt-lg-4 pt-2 mb-lg-5 mb-3">
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" navbar-toggler-icon"></i></span>
                </button>

                <a class="offset-3 navbar-brand" href="admin/paquete"><img src="{{asset('img/logo.png')}}" width="50%"
                        alt="" srcset=""></a>
            </div>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <a href="{{route('paquete_index')}}"
                        class=" nav-item nav-link {{ request()->is('admin/paquete','admin/paquete/filtrar','admin/paquete/eliminar', 'admin/paquete/agregar','admin/paquete/registrar', 'admin/paquete/editar/*') ? 'active' : '' }} ">Paquetes</a>
                    <a href="{{route('cliente_index')}}"
                        class=" nav-item nav-link {{ request()->is('admin/cliente') ? 'active' : '' }} ">Clientes</a>
                </ul>
            </div>
        </nav>
        <br>
    </div>

    <main class="animate__animated animate__fadeIn">
        @yield('content')
    </main>

    </div>



    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <!-- version bootstrap-4-6-2.bundle.min.js  -->
    <script src="{{asset('js/bootstrap-4-6-2.bundle.min.js')}}"></script>
    <script src="{{asset('js/scriptRedysel.js')}}"></script>


</body>

</html>