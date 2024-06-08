@extends('layout.login')

@section('title', 'BibliotecaUNETI - Login')

@section('content')
    <div class="contenedor-titulo">
        <div class="col-10 offset-1 text-center mt-4">
            <div class="row">
                <span class="titulo-ppal-web">Login</span>
            </div>

            <div class="caja-titulo"></div>
        </div>
    </div>

    <div class="container d-flex">
        <form action="" method="post" class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
            @csrf

            <h5 class="text-center">Ingrese sus datos de acceso</h5>

            @error('invalid_credentials')
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" id="alerta">
                    <strong>Error!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror

            <div class="input-group flex-nowrap mt-4">
                <span class="input-group-text" id="addon-wrapping">Usuario</span>
                <input type="text" class="form-control" placeholder="Ingrese e-mail" value="{{ old('email') }}"
                    name="email" aria-label="Usuario" aria-describedby="addon-wrapping">
            </div>
            @error('email')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror

            <div class="input-group flex-nowrap mt-4 ">
                <span class="input-group-text" id="addon-wrapping">Contraseña</span>
                <input type="password" class="form-control" placeholder="Ingrese contraseña" name="password"
                    aria-label="Password" aria-describedby="addon-wrapping">
            </div>
            @error('password')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-blue mx-1">Ingresar</button>
                <a href="{{ route('paginaweb.index') }}" class="btn btn-orange mx-1">Regresar</a>
            </div>
        </form>
    </div>

@endsection
