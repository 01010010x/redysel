@extends('layouts.app')

@section('content')


<div class="content">

    <section id="index-carrusel" class="carousel carousel-dark slide container-fluid p-0 m-0 ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class="bg-inf residencial d-flex align-items-center">
                    <div class="container text-center ">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 inf-1">
                                <p class="mega-text">10 MEGAS</p>
                                <p class="fw-bold text-white"><span class="fs-5 ">de </span> <span
                                        class="fs-5 text-decoration-line-through">$550</span></p>
                                <p class="mega-text"><span class="fs-5 ">a </span>$450</p>
                                <p class="fw-bold text-white">Sin pago el primer mes</p>
                            </div>
                            <div class="col-12 col-lg-6 inf-2"><img src="{{asset('img/carrusel-residencial/persona-1.png')}}"
                                    width="100%" alt="" srcset=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="bg-inf residencial d-flex align-items-center">
                    <div class="container text-center  ">
                        <div class="row align-items-center flex-lg-row-reverse">
                            <div class="col-12 col-lg-6 inf-1 ">
                                <p class="mega-text">Conéctate sin límites</p>
                                <p class=" text-white">Experimenta la libertad de una conexión sin límites con nuestros
                                    planes residenciales.</p>
                            </div>
                            <div class="col-12 col-lg-6 inf-2"><img 
                                    src="{{asset('img/carrusel-residencial/persona-2.png')}}" width="100%" alt=""
                                    srcset=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item  ">
                <div class="bg-inf residencial d-flex align-items-center">
                    <div class="container text-center  ">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 inf-1 ">
                                <p class="mega-text">Streaming sin interrupciones</p>
                                <p class=" text-white">Disfruta de un streaming sin interrupciones. Con nuestra
                                    conexión, nunca más sufrirás de retrasos.</p>
                            </div>
                            <div class="col-12 col-lg-6 inf-2 order-1"><img
                                    src="{{asset('img/carrusel-residencial/persona-3.png')}}" width="100%" alt=""
                                    srcset=""></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#index-carrusel" data-bs-slide="prev">
            <span class="" aria-hidden="true"><i class="bi bi-chevron-left"></i></span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#index-carrusel" data-bs-slide="next">
            <span class="" aria-hidden="true"><i class="bi bi-chevron-right"></i></span>

        </button>
    </section>




    <section class="container intro">
        <div class="text-center mt-5">
            <h3 class="mb-5 fw-bold">¡Descubre la Solución Perfecta para Superar tus Retos de Conexión!</h3>
            <p class="card-text m-0 p-0 ">Brindamos el Servicio de Internet a través de radio-enlaces</p>
            <p class="card-text m-0 p-0 ">Tenemos la EXPERIENCIA y la TECNOLOGÍA para solucionar tu falta de
                conectividad.</p>
        </div>
        <div class="row mt-5 mb-5 justify-content-center ">
            <div class="col-9 col-md-3 mt-5">
                <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                    <div class="card-header text-center pt-4">
                        <i class="bi bi-card-text"></i>
                    </div>
                    <div class="card-body pt-3 pb-5 ">
                        <h5 class="card-title">Sin contratos forzosos</h5>
                        <p class="card-text">
                            Sin plazos forzosos y sin costos sorpresa. Con nosotros TÚ decides el tiempo que deseas
                            estar con nosotros.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-3 mt-5">
                <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                    <div class="card-header text-center pt-4">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <div class="card-body pt-3 pb-4 ">
                        <h5 class="card-title">Servicio y atención</h5>
                        <p class="card-text">
                            Estamos para ti cuando nos necesites. Contamos con el personal capacitado para poder atender
                            tus dudas y resolver cualquier inconveniente.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-3 mt-5">
                <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                    <div class="card-header text-center pt-4">
                        <i class="bi bi-speedometer"></i>
                    </div>
                    <div class="card-body pt-3 pb-5 ">
                        <h5 class="card-title">Velocidad a tu medida</h5>
                        <p class="card-text">
                            Tenemos el plan ideal que se adapta a tus necesidades. Navega sin contratiempos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-3 mt-5">
                <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                    <div class="card-header text-center pt-4">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div class="card-body pt-3 pb-4 ">
                        <h5 class="card-title">Costo y calidad</h5>
                        <p class="card-text">
                            Trabajamos constantemente para ofrecerte un servicio confiable, estable y útil para ti. Sin
                            que pagues de más.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container paquete text-center ">
        <div class="col-12">
            <h2 class="fw-bold">PAQUETES</h2>
        </div>
        <div class="col-12">
            <p>En <span class="color-redy fw-bold">REDYSEL </span>tenemos una opcion para ti.</p>
        </div>
        <!-- SECTION PAQUETES -->
        <div class="pricing">
            <div class="d-flex animate__animated animate__fadeInRight">
                @foreach($paquetes as $paquete)
                <div class="plan {{ $paquete->nombre === '8 Megas' ? 'popular' : '' }} col-10 col-lg-3">

                    @if($paquete->nombre === '8 Megas')
                    <span>Mas popular</span>
                    @endif

                    <h2 class="fw-bold fs-1 color-ysel mt-5">{{ $paquete->nombre }}</h2>
                    <div class="price">${{ $paquete->precio }}/mes</div>
                    <ul class="features">
                        <li>
                            <h2 class="fw-bold">{{ $paquete->subtitulo }}</h2>
                        </li>
                        <li class="text-break"><i class="bi bi-check-circle-fill"></i>{{ $paquete->descripcion }}</li>
                    </ul>
                    <a class="btn btn-rs" href="https://wa.me/529191111944">Contratar</a>
                </div>
                @endforeach
            </div>
            <a href="#" class="icon-left"><i class="bi bi-arrow-left-circle-fill"></i></a>
            <a href="#" class="icon-right"><i class="bi bi-arrow-right-circle-fill"></i></a>

        </div>


    </section>



    <section class="contrato">
        <div class="container">
            <div class="col text-center">
                <h2 class="fw-bold">CONTRATO</h2>
            </div>
            <div class="col-12 text-center py-3 my-2">
                <p class="fs-6">Al optar por cualquiera de nuestros paquetes, se le brindará un contrato, dicho <span
                        class="fw-bold color-ysel fs-5">CONTRATO</span> incluye</p>
            </div>
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="{{ asset('img/LBE-M5/CP-UBIQUITINETWORKS-LBE-M5-23-2.jpg')}}"
                                    class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="{{ asset('img/TL-WR840N/CP-TP-LINK-TL-WR840N-2.jpg')}}" class="img-fluid"
                                    alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="{{ asset('img/ETHERNET/CP-GHIA-GCB-009-1.jpg')}}" class="img-fluid" alt="">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 text-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide"
                        data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p class="fw-bold">Ubiquiti Networks LBE-5AC-Gen2 LiteBeam </p>
                                    <p>Equipo de cliente de punto de acceso (CPE) diseñado para conexiones inalámbricas
                                        de alta velocidad</p>

                                    <img src="{{asset('img/LBE-M5/CP-UBIQUITINETWORKS-LBE-M5-23-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p class="fw-bold">Router TP-Link Fast Ethernet TL-WR840N, 300Mbit/s</p>
                                    <p>Un router inalámbrico que ofrece conectividad rápida a través de la tecnología
                                        Fast Ethernet y una velocidad de hasta 300 Mbps!</p>
                                    <img src="{{asset('img/TL-WR840N/CP-TP-LINK-TL-WR840N-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p class="fw-bold">30 metros de cable UTP</p>
                                    <p>El cable UTP (Unshielded Twisted Pair) de 30 metros es una solución confiable y
                                        eficiente para la conexión de dispositivos en redes de área local (LAN). Este
                                        cable está diseñado con pares trenzados sin blindaje para reducir interferencias
                                        electromagnéticas y garantizar una transmisión de datos estable.</p>
                                    <img src="{{asset('img/ETHERNET/CP-GHIA-GCB-009-1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                    <div class="col mt-5 pt-5">
                        <p class="fw-bold m-0 p-0 fs-6">Con un precio totalmente accesible</p>
                        <p class="fw-bold fs-6">de <span class="text-decoration-line-through fs-5 text-danger">$2300
                            </span>a <span class="fs-2 color-ysel">$2000</span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="requisitos container-fluid bg-white pt-3 pt-lg-5 ">
        <div class="col text-center ">
            <h3 class="fw-bold">Requisitos de instalación</h3>
            <p class="">Con nosotros es fácil, rápido y garantizado.</p>
        </div>
        <div class="container">
            <div class="row py-5 ">
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-telephone-fill"></i></p>
                    <p class="">Comuníquese con nosotros al teléfono (919) 111 194 4</p>
                </div>
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-geo-alt-fill"></i></p>
                    <p class="">Proporcionar dirección exacta del domicilio</p>
                </div>
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-router-fill"></i> </p>
                    <p class="">En minutos realizamos el estudio de viabilidad</p>
                </div>
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-calendar-date-fill"></i></p>
                    <p class="">Agendamos horario de instalación</p>
                </div>
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-clock-fill"></i></p>
                    <p class="">Instalación en menos de 3 horas</p>
                </div>
                <div class="col-sm-2 col-6 text-center py-2 py-lg-5">
                    <p class="text-info text-center"><i class=" color-ysel bi bi-wifi"></i></p>
                    <p class="">Disfrute de los servicios de conexión a internet</p>
                </div>
                <div class="col-12">
                    <img class="d-none d-lg-block" src="{{asset('img/REQUISITOS/trazo.png')}}" alt="" width="100%">
                    <div class="text-center text-lg-end contac mt-3 ">
                        <a href="https://wa.me/529191111944"" target=" _black" class="btn btn-rs">CONTACTAR AHORA</a>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <section class="container">
        <div class="col-12 text-center my-4">
            <h1 class="my-4 fw-bold">Ubicación</h1>
            <h5 class="my-2">Matriz Yajalón</h5>
        </div>
        <div class="row py-5">
            <div class="col-12 col-lg-6">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3" class="w-100 ubicacion shadow"></div>
                    <script>
                    (function() {
                        var setting = {
                            "query": "Central Pte. 19, Centro, 29930 Yajalón, Chis., México",
                            // "width": 300,
                            "height": 300,
                            "satellite": false,
                            "zoom": 18,
                            "placeId": "ChIJX-rF99CF8oURJGf56GFBuT8",
                            "cid": "0x3fb94161e8f96724",
                            "coords": [17.173482, -92.33377469999999],
                            "lang": "es",
                            "queryString": "Central Pte. 19, Centro, 29930 Yajalón, Chis., México",
                            "centerCoord": [17.173482, -92.33377469999999],
                            "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                            "embed_id": "1092317"
                        };
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=1092317';
                        s.async = true;
                        s.onload = function(e) {
                            window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                    })();
                    </script>
                    <!-- axrs -->
                </div>
            </div>
            <div class="col-12 col-lg-6 my-5 my-lg-0 justify-content-center shadow horario">
                <div class="row justify-content-center py-5 py-lg-1">
                    <h6 class="fw-bold text-center">Horarios</h6>
                    <div class="col d-flex d-block justify-content-center">
                        <ul class="ul-ho" id="dias-semana">
                            <li class="nav-link fw-bold">Lunes</li>
                            <li class="nav-link fw-bold">Martes</li>
                            <li class="nav-link fw-bold">Miércoles</li>
                            <li class="nav-link fw-bold">Jueves</li>
                            <li class="nav-link fw-bold">Viernes</li>
                            <li class="nav-link fw-bold">Sábado</li>
                            <li class="nav-link fw-bold">Domingo</li>
                        </ul>
                    </div>
                    <div class="col d-flex d-block justify-content-center w-300px">
                        <ul class="ul-ho" id="horarios">
                            <li class="nav-link">9:00 - 19:00</li>
                            <li class="nav-link">9:00 - 19:00</li>
                            <li class="nav-link">9:00 - 19:00</li>
                            <li class="nav-link">9:00 - 19:00</li>
                            <li class="nav-link">9:00 - 19:00</li>
                            <li class="nav-link">9:00 - 14:00</li>
                            <li class="nav-link badge text-bg-danger">Cerrado</li>
                        </ul>
                    </div>
                </div>
            </div>

            <script>
            // Obtener el día actual
            var fecha = new Date();
            var dia = fecha.getDay();

            // Obtener los elementos de la lista de horarios
            var horarios = document.getElementById('horarios').getElementsByTagName('li');

            // Definir los horarios de apertura y cierre para cada día de la semana
            var horariosSemana = [{
                    apertura: '9:00',
                    cierre: '19:00'
                }, // Lunes
                {
                    apertura: '9:00',
                    cierre: '19:00'
                }, // Martes
                {
                    apertura: '9:00',
                    cierre: '19:00'
                }, // Miércoles
                {
                    apertura: '9:00',
                    cierre: '19:00'
                }, // Jueves
                {
                    apertura: '9:00',
                    cierre: '19:00'
                }, // Viernes
                {
                    apertura: '9:00',
                    cierre: '14:00'
                }, // Sábado
                {
                    cierre: 'Cerrado'
                } // Domingo
            ];

            // Actualizar los horarios en la lista
            for (var i = 0; i < horarios.length; i++) {
                if (horariosSemana[i].hasOwnProperty('apertura') && horariosSemana[i].hasOwnProperty('cierre')) {
                    horarios[i].textContent = horariosSemana[i].apertura + ' - ' + horariosSemana[i].cierre;
                } else {
                    horarios[i].textContent = horariosSemana[i].cierre;
                }
            }

            // Si no es domingo y está abierto, agregar el span con la clase "badge"
            if (dia !== 0 && horariosSemana[dia - 1].apertura && horariosSemana[dia - 1].cierre) {
                var diaElement = horarios[dia - 1];
                var spanElement = document.createElement('span');
                spanElement.className = 'mx-1 badge text-bg-success';
                spanElement.textContent = 'Abierto';
                diaElement.appendChild(spanElement);
            }
            </script>

        </div>

        <div class="text-center"><a href="/sucursales-y-cobertura" class="btn btn-rs">VER MÁS</a></div>

    </section>


    <section class="container prooverdores mt-5 pt-5 px-4">
        <h1 class="fw-bold text-center my-4">NUESTROS PROVEEDORES</h1>
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/ubiquiti.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/mimosa.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/starlink.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/tp-link.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/linkedpro.png')}}"
                    alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/mikrotik.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/mercusys.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/netpoint.jpg')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/cambium.png')}}" alt="">
            </div>
            <div class="col-lg-3  col-12 mx-2 my-2 my-lg-0"><img src="{{asset('img/proveedores/hilook.jpeg')}}" alt="">
            </div>
        </div>
    </section>



</div>


@endsection