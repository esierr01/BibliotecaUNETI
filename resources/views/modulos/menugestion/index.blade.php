@extends('layout.menugestion')

@section('title', 'BibliotecaUNETI - Gestión')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/estilosgenerales.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menugestion.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 offset-1 text-center mt-5">
            <div class="jumbotron jumbotron-fluid bg-body-secondary p-2 rounded custom-fondo1">
                <div class="container">
                    <h1 class="display-6 mb-4 text-center">Bienvenido al Sistema BibliotecaUneti</h1>
                    <p class="lead fs-5 text-center">
                        Aplicación desarrollada por: <span class="fw-semibold"><strong>Emmanuel Sierra / CI
                                11048546</strong></span> como
                        entrega final de
                        <br>
                        la materia <span class="text-dark fw-semibold"><strong>Programación II (M2)</strong></span> del PNF
                        Ingeniería en Informática de la UNETI
                    <div class="text-center">
                        <img class="img-fluid" width="160px" src="/assets/img/uneti.png" alt="uneti">
                    </div>
                    La Aplicación fue desarrollada utilizando: <br>
                    <div class="text-center mt-4" id="lenguajes">
                        <a href="https://www.php.net/" target="_blank"><i class="fa-brands fa-php"></i></a>
                        <a href="https://laravel-docs.com/es" target="_blank"><i class="fa-brands fa-laravel"></i></a>
                        <a href="https://www.w3schools.com/html/" target="_blank"><i class="fa-brands fa-html5"></i></a>
                        <a href="https://www.w3schools.com/css/" target="_blank"><i class="fa-brands fa-css3-alt"></i></a>
                        <a href="https://www.w3schools.com/js/" target="_blank"><i class="fa-brands fa-js"></i></a>
                        <a href="https://getbootstrap.com/" target="_blank"><i class="fa-brands fa-bootstrap"></i></a>
                        <a href="https://fontawesome.com/" target="_blank"><i class="fa-solid fa-font-awesome"></i></a>
                        <a href="https://datatables.net/"  target="_blank"><i class="fa-solid fa-table"></i></a>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5f0926b9a9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/menugestion.js') }}"></script>
@endsection
