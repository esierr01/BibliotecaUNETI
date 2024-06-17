<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @yield('css')
</head>

<body>
    @php
        $ruta_actual = request()->route()->getName();
    @endphp

    <nav class="navbar navbar-expand-lg navbar-custom1">
        <div class="container-fluid">
            <span class="logo">
                <img class="img-fluid" width="90em" src="/assets/img/uneti.png" alt="uneti">
                BibliotecaUneti
            </span>

            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link @if ($ruta_actual == 'menugestion.index') text-warning fw-bold @endif"
                            href="{{ route('menugestion.index') }}">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if ($ruta_actual == 'libros.index' || $ruta_actual == 'libros.create') text-warning fw-bold @endif"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Libros
                        </a>
                        <ul class="dropdown-menu color-drop text-black">
                            <li><a class="dropdown-item text-dark" href="{{ route('libros.index') }}">Activos</a></li>
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
                            <li><a class="dropdown-item text-dark" href="">Activos</a></li>
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
                            <li><a class="dropdown-item text-dark" href="">Activos</a></li>
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
                    <small class="text-light">Usuario: <strong>{{ Auth::user()->name }}</strong></small>
                </span>
            </div>
        </div>
    </nav>


    @yield('content')

    <pre class="text-primary mt-4">
        Ruta temporal: {{ $ruta_actual }}
    </pre>
    @yield('js')
</body>

</html>
