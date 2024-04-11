@extends('layouts.app')

@section('content')

<section class="container-fluid deg-bt mt-5 m-t-5-r ">
    <div class="row">
        <div class="col p-0">
            <div class="video-container">
                <video autoplay loop muted playsinline src="{{asset('videos/camera-funcion.mp4')}}"
                    controlslist="nodownload"></video>
                <!-- <div class="vignette"></div> -->
            </div>
        </div>
    </div>
</section>


<section class="container mt-2rem">
    <div class="row justify-content-center ">
        <div class="col-5">
            <img class="w-100" src="{{asset('img/logo-blue.png')}}" alt="">
        </div>
    </div>
</section>


<div class="container"><div class="row justify-content-center ">
        <div class="col-lg-7 col-10 text-center py-4 mb-4 ">
            <h4 class="fw-light my-5 ">Servicio de<span class="fw-bold fs-3"> seguridad</span></h4>
            <p class="mb-2 text-seg">Contratar nuestro servicio de instalación de cámaras, sensores y
                alarmas puede ofrecer una amplia gama de beneficios para la seguridad de tu hogar o negocio:
            <p>
        </div>
    </div></div>

<section class="container mt-2rem pb-4rem pt-4rem bg-black-s-c text-white">

    <div class="row justify-content-center align-items-center b-8-vh">
        <div class="col-lg-5 col-12 b-8-100 bg-w ">
            <ul>
                <li>
                    <p class="text-justify"><span class="fw-semibold">Integración completa del sistema:</span> Nuestro
                        personal pueden integrar todos los componentes de seguridad de manera efectiva</p>
                </li>
                <li>
                    <p class="text-justify"><span class="fw-semibold">Garantía y soporte técnico:</span> Garantías de
                        trabajo, lo que significa que puedes obtener
                        soporte técnico y reparaciones si surge algún problema con el sistema después de la instalación.
                    </p>
                </li>
                <li>
                    <p class="text-justify"><span class="fw-semibold">Tranquilidad y seguridad:</span> Al tener un
                        sistema de seguridad completo instalado por profesionales, puedes tener la tranquilidad de saber
                        que tu propiedad está protegida de manera adecuada contra intrusiones, robos y otros riesgos de
                        seguridad.</p>
                </li>
            </ul>
        </div>
        <div class="col-1"></div>
        <div class="col-md-5 col-12 b-8-100 bg-w mt-lg-0 mt-5">
            <img class="inst-cam" src="{{asset('img/seguridad/cam-security.png')}}" class="d-block w-100"
                alt="Servicio de Instalacion de camaras REDYSEL">
        </div>
    </div>
</section>


<section class="container p-5 ">
    <div class="row justify-content-center">
        <div class="col">
            <div class="camaras">
                <h3 class="fw-bolder my-5 text-center fw-seg-c-s-a">CAMARAS</h3>
                <h5 class="my-4 text-seg">Protege Tu Espacio con Nuestro Servicio de Instalación de Cámaras de Seguridad
                </h5>
            </div>
        </div>
    </div>
    <div class="row  justify-content-center mt-5 align-items-center h-100vh  ">
        <div class="col-lg-6  col-12  mt-lg-0 mt-5 bg-b h-100 d-grid align-items-center pt-5  my-3 my-lg-0">
            <h2 class="fw-bold text-white text-center">HILOOK</h2>
            <img src="{{asset('img/seguridad/hiklook-camara-thc.png')}}" class="d-block h-w-auto" alt="...">
        </div>
        <div class="col-lg-6 col-12 h-100  ">
            <div class="row align-content-between justify-content-end align-items-center h-100 ">
                <div class="col-lg-11 col-12 h-4 bg-b d-grid justify-content-center my-3 my-lg-0">
                    <h2 class="fw-bold text-white text-center">TENDA</h2>
                    <img src="{{asset('img/seguridad/tenda-camara.png')}}" class="d-block w-img-auto" alt="...">
                </div>
                
                <div class="col-lg-11 col-12 h-4 bg-b d-grid justify-content-center my-3 my-lg-0 ">
                    <h2 class="fw-bold text-white text-center">DAHUA</h2>
                    <img src="{{asset('img/seguridad/dahua-camara.png')}}" class="d-block w-img-auto" alt="...">
                </div>
            </div>
        </div>

    </div>

</section>


@endsection