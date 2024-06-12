@extends('layout.menugestion') 

@section('title', 'BibliotecaUNETI - Gestión') 

@section('content')
    <div class="row">
        <div class="col-md-10 offset-1 text-center mt-5">
            <div class="jumbotron jumbotron-fluid bg-body-secondary p-2 rounded custom-fondo1">
                <div class="container">
                    <h1 class="display-6 mb-4 text-center">Bienvenido al Sistema BibliotecaUneti</h1>
                    <p class="lead fs-5 text-center">
                        Aplicación desarrollada por: <span class="fw-semibold"><strong>Emmanuel Sierra / CI 11048546</strong></span> como
                        entrega final de
                        <br>
                        la materia <span class="text-dark fw-semibold"><strong>Programación II (M2)</strong></span> del PNF
                        Ingeniería en Informática de la UNETI
                    <div class="text-center">
                        <img class="img-fluid" width="160px" src="/assets/img/uneti.png" alt="uneti">
                    </div>
                    La Aplicación fue desarrollada utilizando: <br>
                    <div class="text-center mt-4" id="lenguajes">
                        <i class="fa-brands fa-php"></i>
                        <i class="fa-brands fa-laravel"></i>
                        <i class="fa-brands fa-html5"></i>
                        <i class="fa-brands fa-css3-alt"></i>
                        <i class="fa-brands fa-js"></i>
                        <i class="fa-brands fa-bootstrap"></i>
                        <i class="fa-solid fa-font-awesome"></i>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
