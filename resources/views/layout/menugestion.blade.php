<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/menugestion.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom1">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold ">BibliotecaUneti</a>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Libros
                        </a>                        
                        <ul class="dropdown-menu color-drop text-black">
                            <li><a class="dropdown-item" href="">Activos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="">Eliminados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Clientes
                        </a>                        
                        <ul class="dropdown-menu color-drop text-black">
                            <li><a class="dropdown-item" href="">Activos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="">Eliminados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Prestamos
                        </a>                        
                        <ul class="dropdown-menu color-drop text-black">
                            <li><a class="dropdown-item" href="">Activos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="">Eliminados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="">Usuarios</a>
                    </li>                 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">CerrarSesión</a>
                        <form id="logout-form" action="{{ route('signout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                <span class="navbar-text fw-medium ">
                    <small>Usuario: <strong class="text-light">{{ Auth::user()->name }}</strong></small>
                </span>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5f0926b9a9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/menugestion.js') }}"></script>
</body>

</html>
