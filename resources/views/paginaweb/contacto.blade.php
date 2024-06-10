@extends('layout.paginaweb')

@section('title', 'BibliotecaUNETI - Contacto')

@section('content')
    <div class="contenedor-titulo">
        <div class="col-10 offset-1 text-center mt-4">
            <div class="row">
                <span class="titulo-ppal-web">Contacto</span>
            </div>

            <div class="caja-titulo"></div>
        </div>
    </div>

    <div class="row contacto-mapa">
        <div class="col-5">
            <div class="container contenedor-acerca">
                <div class="p-4 text-center">
                    <h2>Emmanuel Sierra Pacheco</h2>
                    <h5>
                        <strong class="text-primary"><i class="fa-regular fa-envelope"></i></strong>
                        emmanuel.sierra@gmail.com
                    </h5>
                    <h5>
                        <strong class="text-primary"><i class="fa-solid fa-mobile-screen-button"></i></strong>
                        +58 412 6009860
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="container d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.0535949614346!2d-66.94082843831055!3d10.492450227355109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5f02d552b997%3A0x735edfa3c11ee846!2sArtigas%2C%20Caracas%201020%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1717984113903!5m2!1ses!2sve"
                    width="500" 
                    height="350" 
                    style="border:3px double gray;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

@endsection
