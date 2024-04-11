@extends('layouts.app')

@section('content')


<div class="content">

    <section id="aboutUS-carrusel" class="carousel carousel-dark   bg-ysel slide  ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#aboutUS-carrusel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#aboutUS-carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item left active">
                <img src="{{asset('img/carrusel-index/ubiquiti-1.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption left  ">
                    <h1 class="fw-bold">Conexión punto a punto</h1>
                    <p class="text-break">Conexión directa entre dos dispositivos para una comunicación eficiente y
                        segura.
                    </p>
                </div>
            </div>
            <div class="carousel-item center">
                <img src="{{asset('img/carrusel-index/ubiquiti-2.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption center-left ">
                    <h1 class="fw-bold">Lo que más necesitas</h1>
                    <p class="">una buena conexión</p>
                </div>
                <div class="carousel-caption center-right  ">
                    <h1 class="fw-bold">a tu alcance</h1>
                    <span class="">REDYSEL</span>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutUS-carrusel" data-bs-slide="prev">
            <span class="" aria-hidden="true"><i class="bi bi-chevron-left"></i></span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutUS-carrusel" data-bs-slide="next">
            <span class="" aria-hidden="true"><i class="bi bi-chevron-right"></i></span>

        </button>
    </section>

    <section id="acerca" class="acerca-de container">
        <div class="row">
            <div class="col-12 col-lg">
                <h1 class="fw-bold">Bienvenidos a REDYSEL</h1>
                <p class="pt-lg-5 mt-lg-5 mt-3 pt-2">Somos una empresa de TI especializada en redes y seguridad
                    electrónica en la región de Yajalón,
                    Chiapas.</p>
                <p>Nuestra misión es ser líderes en soluciones tecnológicas para PyMES y usuarios finales. ¡Gracias por
                    confiar en nosotros para sus necesidades de conectividad y seguridad!</p>

            </div>
            <div class="col-12 col-lg"><img class="acercade-img" src="img/ACERCADE/ins.jpg" alt="" srcset=""></div>
        </div>
    </section>

    <section id="servicios" class="container servicios">
        <div class="col text-center my-5 pb-5">
            <h2 class="fw-bold ">NUESTROS SERVICIOS</h2>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-pc-display"></i>
                    </div>
                    <h3>Venta de equipos de cómputo</h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card ">
                    <div class="icon-wrapper">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>Asesoramiento de proyectos de TI en la región.</h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <h3>Servicios de seguridad electrónica. </h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-camera-video-fill"></i>
                    </div>
                    <h3>Instalación de cámaras de video vigilancia. </h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-code-square"></i>
                    </div>
                    <h3>Instalación de software especializado</h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card ">
                    <div class="icon-wrapper">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h3>Mantenimientos preventivos y correctivos a empresas</h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
    <div class="row my-5 py-5">
        <div class="col-12 col-md-6">
            <div class="text-break">
                <h1 class="mb-4 color-ysel fw-light text-center text-md-start">Internet <span class="fw-bold">punto a punto</b>
                </h1>
                <p class=" text-justify">Proporciona una <b>conexión inalámbrica segura</b> que abarca áreas grandes y es beneficiosa cuando
                    necesitas conectar varios edificios. </p>
                <p>En lugar de utilizar cables físicos, <b>se extiende mediante antenas direccionales</b> desde un
                    centro central.</p>
                <p><b class="text-danger">No es una conexión satelital</b>, sino una conexión directa entre ubicaciones.
                </p>
            </div>

        </div>
        <div class="col-12 col-md-6"><img src="{{asset('videos/lbeac.gif')}}" alt="" class="w-100"></div>
    </div>
    <div class="row my-5 py-5 justify-content-center respaldo">
        <div class="col-12 my-5">
            <h1 class="color-ysel text-center fw-light h1-hr ">Redysel te asegura <span class="fw-bold">velocidad y
                    confiabilidad</span>
                <hr class="hr-v-c">
            </h1>

        </div>

        <div class="col-9 col-md mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-reception-4 color-redy"></i>
                <p class="fs-6">Conexión estable y constante</p>
            </div>
        </div>
        <div class="col-9 col-md-3 mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-wifi-1 color-redy"></i>
                <p class="fs-6">Sin caídas inesperadas</p>
            </div>
        </div>
        <div class="col-9 col-md mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-r-circle color-redy"></i>
                <p class="fs-6">Respuesta confiable para tus necesidades comerciales</p>
            </div>
        </div>

        <div class="col-9 col-md mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-speedometer color-redy"></i>
                <p class="fs-6">Navega a velocidades sorprendentes</p>
            </div>
        </div>
        <div class="col-9 col-md mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-cloud-download color-redy"></i>
                <p class="fs-6">Descarga y carga archivos rápidamente</p>
            </div>
        </div>
        <div class="col-9 col-md mt-5">
            <div class="text-center pt-4">
                <i class="bi bi-cast color-redy"></i>
                <p class="fs-6">Streaming sin interrupciones</p>
            </div>
        </div>

    </div>


    <div class="row my-5 py-5 justify-content-center respaldo">
        <div class="col-12 my-5">
            <h1 class="fw-light color-ysel text-center ">Con <span class="fw-bold">respaldo</span> de señal</h1>

        </div>

        <div class="col-9 col-md-3 mt-5">
            <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                <div class="card-header text-center pt-4">
                    <i class="bi bi-wifi-off text-success"></i>
                </div>
                <div class="card-body pt-3 pb-5 ">
                    <p class="card-text">Aunque en ocasiones <b>la señal puede caer debido a factores externos</b>,
                        queremos asegurarte que contamos con
                        <b>respaldos sólidos</b> para minimizar cualquier interrupción.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-9 col-md-3 mt-5">
            <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                <div class="card-header text-center pt-4">
                    <i class="bi bi-tools text-success"></i>
                </div>
                <div class="card-body pt-3 pb-5 ">
                    <p class="card-text">Nuestro equipo técnico está preparado para <b>restaurar la conexión
                            rápidamente</b> en caso de cualquier
                        problema.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-9 col-md-3 mt-5">
            <div class="card h-100 shadow" style="background-color: #FEFCFE;">
                <div class="card-header text-center pt-4">
                    <i class="bi bi-server text-success "></i>
                </div>
                <div class="card-body pt-3 pb-5 ">
                    <p class="card-text">La redundancia en nuestra infraestructura garantiza que <b>siempre tengas
                            acceso a Internet.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>


</section>

    <section class="container">
        <section id="vision">
            <div class="row">
                <div class="col-10 col-lg-5 order-lg-0 order-1 text-center"><i class="bi bi-eye-fill"></i></div>
                <div class="col-10 col-lg-5">
                    <h1 class="fw-bold">Visión</h1>
                    <p class="pt-lg-5 mt-lg-5 mt-3 pt-2" style="text-align: justify;">Ser la empresa de TI líder en la
                        región selva que ofrezca
                        soluciones útiles que contribuyan a disminuir el rezago tecnológico y al crecimiento de las
                        PyMES
                    </p>
                </div>

            </div>
        </section>
        <section id="mision">
            <div class="row">
                <div class="col-10 col-lg-5 order-1 text-center"><i class="bi bi-bar-chart-steps"></i></div>
                <div class="col-10 col-lg-5">
                    <h1 class="fw-bold">Misión</h1>
                    <p class="pt-lg-5 mt-lg-5 mt-3 pt-2" style="text-align: justify;">Como empresa de TI nos dedicamos a
                        brindar soluciones de
                        conectividad, seguridad electrónica y de automatización para PyMES y usuarios finales.
                        Implementando
                        tecnología de vanguardia y trabajando en la mejora continúa en cada uno de nuestros procesos y
                        servicios para poder ser una opción útil para quienes solicitan nuestros servicios.</p>
                </div>

            </div>
        </section>
    </section>


</div>


@endsection