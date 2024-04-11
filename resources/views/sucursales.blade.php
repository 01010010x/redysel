@extends('layouts.app')

@section('content')

<br><br><br><br><br><br>

<section class="container">
    <div class="col-12 text-center my-4">
        <h2 class="my-4 fw-bold">Sucursales</h2>
        <h5 class="my-2">Ocosingo</h5>
    </div>
    <div class="row py-5 ">
        <div class="col-12 col-lg-6">
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3" class="w-100 ubicacion shadow"></div>
                <script>
                (function() {
                    var setting = {
                        "query": "Segunda Avenida Nte. Ote. 9, Norte, Ocosingo, Chis., México",
                        // "width": 800,
                        "height": 300,
                        "satellite": false,
                        "zoom": 20,
                        "placeId": "EkFTZWd1bmRhIEF2ZW5pZGEgTnRlLiBPdGUuIDksIE5vcnRlLCAyOTk1MCBPY29zaW5nbywgQ2hpcy4sIE1leGljbyIwEi4KFAoSCSNFj49w6vKFEcecGp2A6OWwEAkqFAoSCTXhffdw6vKFEaXEmeKNaL-_",
                        "cid": "0x850499845f1fb757",
                        "coords": [16.9097434, -92.0955701],
                        "lang": "es",
                        "queryString": "Segunda Avenida Nte. Ote. 9, Norte, Ocosingo, Chis., México",
                        "centerCoord": [16.9097434, -92.0955701],
                        "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                        "embed_id": "1092347"
                    };
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=1092347';
                    s.async = true;
                    s.onload = function(e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();
                </script>
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
                    <ul class="ul-ho" id="horarios-ocosingo">
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
        var horarios = document.getElementById('horarios-ocosingo').getElementsByTagName('li');

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

</section>
<br><br><br><br><br>


<section id="cobertura" class="container pt-5 cobertura">
    <div class="col-12 my-4">
        <h2 class="my-4 fw-bold text-center">Cobertura</h2>
        <h4 class="my-2 text-center">Chiapas</h4>
        <p class="text-justify">La ubicación de nuestra infraestructura ha sido estratégicamente seleccionada con el
            propósito de ofrecer
            nuestros servicios de conexión inalámbrica de manera óptima. No dude en ponerse en contacto con nosotros
            para obtener información adicional sobre cómo podemos satisfacer sus necesidades específicas de servicio.
        </p>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-lg-6">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Yajalón</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+200</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Ocosingo</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+300</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Chilón</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tumbala</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tila</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+150</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Petalcingo</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+50</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Sabanilla</div>
                    </div>
                    <span class="badge text-bg-success rounded-pill">+80</span>
                </li>
            </ol>
        </div>
        <div class="col-12 col-lg-6 mt-4 mt-lg-0 p-4 p-xl-5">

            <img class="shadow" src="{{asset('img/cobertura.png')}}" alt="" srcset="">

        </div>
    </div>

</section>

@endsection