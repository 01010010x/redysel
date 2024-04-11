<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/floating-labels.css')}}">
    <!-- version bootstrap-4-6-2 -->
    <link rel="stylesheet" href="{{asset('css/adminRedysel.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-4-6-2.min.css')}}">


</head>

<body>

    <div id="app">

        <div class="container my-5">
            <a href="/" class="btn btn-success rounded-3 text-white">
                Regresar
            </a>
            
            <div class="container">
                <form class="form-signin" method="POST" action="{{ route('admin_login') }}">
                    @csrf
                    <div class="text-center mb-4">
                        <i style="font-size: 10rem; color: #3A9E52;" class="bi bi-person-circle"></i>
                    </div>

                    <div class="form-label-group">
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Email address" autofocus> @error('email') <span class="invalid-feedback"
                            role="alert"><strong>{{ $message }}</strong> </span> @enderror

                        <label for="email">Correo</label>
                    </div>

                    <div class="form-label-group">

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña" autocomplete="current-password"> @error('password') <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong> </span> @enderror

                        <label for="password">Contraseña</label>
                    </div>

                    <div class="checkbox mb-3">
                        <input class="mr-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label textos" for="remember">{{ __('Recordarme') }}
                        </label>
                        
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit">Iniciar</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2024</p>
                </form>
            </div>

        </div>

    </div>


    </div>


    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <!-- version bootstrap-4-6-2.bundle.min.js  -->
    <script src="{{asset('js/bootstrap-4-6-2.bundle.min.js')}}"></script>
    <script src="{{asset('js/scriptRedysel.js')}}"></script>


</body>

</html>