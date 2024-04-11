<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- NUEVOS ESTILOS -->


    <link rel="stylesheet" href="{{ asset('css/bootstrap-5-3-3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redyselEstilos.css') }}">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">


</head>

<body id="body" class="">

    <div id="app">

        <nav id="nav" class="fijo navbar navbar-expand-lg bg-white nav shadow-sm-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="/hogar"><img src="{{asset('img/logo.png')}}" width="50%" alt=""></a>
                
                <button class="btn btn-rs px-4  text-center open navOpenBtn"><i
                        class="bi bi-justify-left mx-3"></i></button>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-links"><i
                        class=" text-danger bi bi-x-lg navCloseBtn"></i>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('hogar') ? 'active' : '' }}" aria-current="page"
                            href="/hogar">Hogar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('negocio') ? 'active' : '' }}" href="/negocio">Negocio</a>
                    </li>
                    <li class="nav-item">
                        <!-- <div class="dropdown-center">
                            <a data-bs-toggle="dropdown" type="button"
                                class="nav-link dropdown-toggle {{ request()->is('seguridad') ? 'active' : '' }}"
                                href="/seguridad">Seguridad</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/camaras">Camaras</a></li>
                                <li><a class="dropdown-item" href="#">Sensores</a></li>
                                <li><a class="dropdown-item" href="#">Alarmas</a></li>
                            </ul>

                        </div> -->
                        <a class="nav-link {{ request()->is('seguridad') ? 'active' : '' }}"
                            href="/seguridad">Seguridad</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('acercade') ? 'active' : '' }}" href=" /acercade">Acerca
                            de</a>
                    </li>
                    <button type="button" class="btn btn-rs px-4 mx-3" data-bs-toggle="modal" data-bs-target="#miCuenta"><i class="bi bi-person-circle"></i></button>@guest @if (Route::has('register')) @endif @else
                    <a href="{{route('carrito_mostrar')}}" type="button" class="btn btn-rs position-relative">
                        <i class="bi bi-cart-fill"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">@if(is_null(Auth::user()->carrito))
                            0 @else {{Auth::user()->carrito->paquetes()->sum('cantidad')}} @endif</span>
                    </a> @endguest

                </ul>

                <div class="modal fade" id="miCuenta">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">@guest @if (Route::has('register')) <h5
                                    class="modal-title fw-bold">Cuenta</h5> @endif @else <h5
                                    class="modal-title fw-bold">Perfil</h5> @endguest
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @guest @if (Route::has('register'))
                                <div class="modal-container" id="modal-container">
                                    <div class="form-container sign-up-container">
                                        <form action="{{ route('register') }} " method="POST">
                                            @csrf
                                            <h1>Crear cuenta</h1>
                                            <div class="social-container">
                                                <a href="https://www.facebook.com/RedyselInternet" class="social"><i
                                                        class="bi bi-facebook"></i></a>
                                            </div>

                                            <input id="name" class="@error('name') is-invalid @enderror" name="name"
                                                type="text" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}"
                                                autocomplete="name" required />@error('name') <span
                                                class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                            </span> @enderror

                                            <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                placeholder="{{ __('Correo Electronico') }}" autocomplete="email">
                                            @error('email') <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span> @enderror


                                            <input id="password" type="password"
                                                class=" @error('password') is-invalid @enderror" name="password"
                                                placeholder="{{ __('Contraseña') }}" required
                                                autocomplete="new-password"> @error('password')<span
                                                class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                            </span> @enderror

                                            <input id="password-confirm" type="password" class=""
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="{{ __('Confirma tu contraseña') }}">

                                            <button type="submit">Registrarme</button>
                                        </form>
                                    </div>
                                    <div class="form-container sign-in-container">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <h1>Iniciar</h1>
                                            <div class="social-container">
                                                <a href="https://www.facebook.com/RedyselInternet" class="social"
                                                    target="_blank"><i class="bi bi-facebook"></i></a>
                                            </div>

                                            <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                                placeholder="{{ __('Correo Electronico') }}" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" required>
                                            @error('email')<span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span> @enderror

                                            <input id="password" type="password"
                                                class=" @error('password') is-invalid @enderror" name="password"
                                                autocomplete="current-password" placeholder="{{ __('Contraseña') }}"
                                                required> @error('password')<span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong> </span> @enderror

                                            <div class="form-group row">
                                                <div class="col-1 col-lg-6">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordarme') }}
                                                    </label>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('¿Olvidaste tu contraseña?') }}
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="submit">Iniciar</button>
                                        </form>
                                    </div>
                                    <div class="overlay-container">
                                        <div class="overlay">
                                            <div class="overlay-panel overlay-left">
                                                <h1>!Bienvenido de nuevo!</h1>
                                                <p>Para mantenerse conectado con nosotros, inicie sesión con su
                                                    información
                                                    personal</p>
                                                <button class="ghost" id="signIn">Iniciar</button>
                                            </div>
                                            <div class="overlay-panel overlay-right">
                                                <h1>Hola, amigo!</h1>
                                                <p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                                                <button class="ghost" id="signUp">Registrarse</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endif @else

                                <div class="d-flex flex-column align-items-center text-center"> <img
                                        src="{{asset('img/perfil-vacio.webp')}}" alt="Admin"
                                        class="rounded-circle p-1 bg-redysel" width="40%">
                                    <div class="mt-5">
                                        <h4 class="fw-bold">{{ Auth::user()->name }}</h4>
                                        <p class="fw-normal fs-5">{{ Auth::user()->email }}</p>

                                    </div>
                                    <div class="mt-4">
                                        <a type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
                                            class="btn btn-danger text-white" data-bs-dismiss="modal">Cerrar sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                @endguest

                            </div>

                        </div>
                    </div>
                </div>
                <script>
                const signUpButton = document.getElementById('signUp');
                const signInButton = document.getElementById('signIn');
                const container = document.getElementById('modal-container');

                signUpButton.addEventListener('click', () => {
                    container.classList.add("right-panel-active");
                });

                signInButton.addEventListener('click', () => {
                    container.classList.remove("right-panel-active");
                });
                </script>

            </div>
        </nav>




    </div>



    <main class="animate__animated animate__fadeIn">
        @yield('content')
    </main>

    <!-- Footer -->

    <section id="dudas" class="dudas container">
        <div class="bag"></div>
        <div class="card-dudas">
            <div class="panel-content">
                <p class="text-center fw-bold fs-4">¿DUDAS <span class="text-rs-inf">LLAMANOS</span></p>
                <div class="row text-center">
                    <div class="call-button-holder m-b-20">
                        <span class="phone-holder"><img src="{{asset('img/DUDAS/phone.png')}}" alt="" srcset=""></span>
                        <a target="_blank" href="https://wa.me/529191111944" class="btn btn-rs">Llámame ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer-dark" class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 mx-5 border-top">
            <div class="col mb-3">
                <div class="my-1">
                   
                    <a href="/hogar" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="{{asset('img/logo-white.png')}}" alt="LOGO-WHITE" srcset="">
                    </a>
                    
                    <script>
                    var year = new Date().getFullYear();
                    document.write("<p class='text-white'>© " + year + "</p>");
                    </script>
                </div>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5 class="text-white fw-bold">Conoce más</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/acercade" class="nav-link p-0 text-white">Acerca de
                            Redysel
                        </a></li>
                    <li class="nav-item mb-2"><a href="/acercade#vision" class="nav-link p-0 text-white">Visión</a></li>
                    <li class="nav-item mb-2"><a href="/acercade#mision" class="nav-link p-0 text-white">Misión</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white fw-bold">Soporte</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/sucursales-y-cobertura" class="nav-link p-0 text-white">Sucursales</a></li>
                    <li class="nav-item mb-2"><a href="/sucursales-y-cobertura#cobertura" class="nav-link p-0 text-white">Cobertura</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white fw-bold">Legal</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/aviso-de-privacidad" class="nav-link p-0 text-white ">Aviso de
                            privacidad
                        </a></li>
                    <li class="nav-item mb-2"><a href="/codigo-de-politicas-y-gestion-de-la-red"
                            class="nav-link p-0 text-white ">Politicas y gestion de la red
                        </a></li>
                    <li class="nav-item mb-2"><a href="/codigo-de-practicas-comerciales"
                            class="nav-link p-0 text-white ">Practicas comerciales
                        </a></li>
                    <li class="nav-item mb-2"><a href="/admin/login" class="nav-link p-0 text-white ">Administración</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg row align-items-center">
            <div class="col text-center">
                <p class="m-0">
                    <script>
                    var year = new Date().getFullYear();
                    document.write("© " + year + " ");
                    </script>REDES Y SEGURIDAD ELECTRÓNICA DE LA SELVA S.A. DE C.V
                </p>
            </div>
        </div>
    </footer>

    </div>



    <script src="{{ asset ('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset ('js/bootstrap-4-6-2.bundle.min.js')}}"></script>
    <script src="{{ asset ('js/bootstrap-5-3-3.bundle.min.js')}}"></script>
    <script src="{{ asset ('js/scriptRedysel.js')}}"></script>

</body>

</html>