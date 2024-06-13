<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/estilosgenerales.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/paginaweb.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom2">
        <div class="container-fluid">
            <div class="d-flex justify-content-between w-100">
                <span class="logo">
                    <img class="img-fluid" width="120em" src="/assets/img/uneti.png" alt="uneti">
                    BibliotecaUneti
                </span>

                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light mt-1 fw-bold" href="{{ route('paginaweb.index') }}">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mt-1 fw-bold" href="{{ route('paginaweb.acerca') }}">Acerca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mt-1 fw-bold" href="{{ route('paginaweb.contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light mt-1 fw-bold" href="{{ route('login') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <hr>
        <p>Copyright © BibliotecaUneti 2024</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5f0926b9a9.js" crossorigin="anonymous"></script>
</body>

</html>
