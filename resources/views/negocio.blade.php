@extends('layouts.app')

@section('content')

<div class="content">

    <section id="index-carrusel" class="carousel sect-neg carousel-dark slide container-fluid p-0 m-0 ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#index-carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active  ">
                <div class="bg-inf bg-negocio-3 d-flex align-items-center">
                    <div class="container text-center ">
                        <div class="row align-items-center flex-lg-row-reverse ">
                            <div class="col-12 col-lg-6 inf-1 order-lg-1 order-0  ">
                                <p class="mega-text sp">Velocidad y rendimiento para empresas</p>
                                <p class="white-dark">Obtén la velocidad y el rendimiento que tu negocio necesita para
                                    prosperar en un mundo digital</p>

                            </div>
                            <div class="col-12 col-lg-6 inf-2 order-lg-0 order-1"><img
                                    src="{{ asset('img/carrusel-negocio/negociando-3.jpg')}}" width="100%" alt=""></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item  ">
                <div class="bg-inf bg-negocio-1 d-flex align-items-center">
                    <div class="container text-center ">
                        <div class="row align-items-center flex-lg-row-reverse ">
                            <div class="col-12 col-lg-6 inf-1 ">
                                <p class="mega-text sp mb-lg-0 mb-5 px-lg-0 px-3">Planes escalables para tu empresa</p>
                                <a href="#paquetes" class="btn btn-sr">Ver Más</a>

                            </div>
                            <div class="col-12 col-lg-6 inf-2"><img
                                    src="{{ asset('img/carrusel-negocio/negociando-1.jpg')}}" width="100%" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="bg-inf bg-negocio-2 d-flex align-items-center">
                    <div class="container text-center ">
                        <div class="row align-items-center flex-lg-row-reverse ">
                            <div class="col-12 col-lg-6 inf-1 order-lg-1 order-0  ">
                                <p class="mega-text sp">Soporte técnico especializado</p>
                                <p class="white-dark">Nuestro equipo técnico especializado está disponible las 24 horas
                                    para resolver cualquier problema que pueda surgir en tu negocio</p>

                            </div>
                            <div class="col-12 col-lg-6 inf-2 order-lg-0 order-1"><img
                                    src="{{ asset('img/carrusel-negocio/negociando-2.jpg')}}" width="100%" alt=""></div>
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




    <section id="paquetes" class="container paquete text-center ">
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

                    <h2 class="fw-bold fs-1 color-ysel">{{ $paquete->nombre }}</h2>
                    <div class="price">${{ $paquete->precio }}/mes</div>
                    <ul class="features">
                        <li>
                            <h2 class="fw-bold">{{ $paquete->subtitulo }}</h2>
                        </li>
                        <li class="text-break"><i class="bi bi-check-circle-fill"></i>{{ $paquete->descripcion }}</li>
                    </ul>
                    @guest
                    @if (Route::has('register'))
                    <a class="btn btn-rs" href="https://wa.me/529191111944">Contratar</a>
                    @endif
                    @else
                    <form action="/carrito/agregar" method='POST'>
                        @csrf
                        <input type="hidden" name='id_paquete' value="{{ $paquete->id }}">
                        <button>Contratar</button>
                    </form>
                    @endguest
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

                                    <img src="{{asset('img/LBE-M5/CP-UBIQUITINETWORKS-LBE-M5-23-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p class="fw-bold">Router TP-Link Fast Ethernet TL-WR840N, 300Mbit/s</p>
                                    <p>Un router inalámbrico que ofrece conectividad rápida a través de la tecnología
                                        Fast Ethernet y una velocidad de hasta 300 Mbps!</p>
                                    <img src="{{asset('img/TL-WR840N/CP-TP-LINK-TL-WR840N-3.jpg')}}" alt="">
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


    <section class="requisitos container">
        <div class="col text-center py-5 ">
            <h3 class="fw-bold">Requisitos de instalación</h3>
            <p class="">Con nosotros es fácil, rápido y garantizado.</p>
        </div>
        <div class="row align-items-center py-4">
            <div class="col">
                <p class=""><span class="dot" onclick="currentSlide(this)">1</span> Proporciona tu ubicación geográfica
                </p>
                <p class=""><span class="dot" onclick="currentSlide(this)">2</span> Agendamos visita a su hogar para
                    realizar un estudio de factibilidad </p>
                <p class=""><span class="dot" onclick="currentSlide(this)">3</span> Si estas de acuerdo, realizamos tu
                    instalación</p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="slideshow-container shadow">
                    <div class="mySlides fade">
                        <img src="{{asset('img/REQUISITOS/ubicacion.png')}}" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="{{asset('img/REQUISITOS/analisis.png')}}" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="{{asset('img/REQUISITOS/instalacion.png')}}" style="width:100%">
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="container-fluid pb-5">
            <div class="col"><img src="{{asset('img/REQUISITOS/trazo.png')}}" alt="" width="100%"></div>
        </div>
        <div class="container">
            <div class="col text-center">
                <h4 class="fw-bold ">¡Tu instalación en menos de 4 horas!</h4>
            </div>
        </div>

        <script>
        let slideIndex = 0;
        let timer;

        function showSlides() {
            clearTimeout(timer); // Limpiar el temporizador actual

            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].classList.add("active");

            timer = setTimeout(showSlides, 3500); // Restablecer el temporizador
        }

        function currentSlide(element) {
            let dots = document.getElementsByClassName("dot");
            for (let i = 0; i < dots.length; i++) {
                if (dots[i] === element) {
                    slideIndex = i + 0;
                    break;
                }
            }
            showSlides();
        }

        showSlides();
        </script>
    </section>


    <section class="container prooverdores mt-5 pt-5">
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