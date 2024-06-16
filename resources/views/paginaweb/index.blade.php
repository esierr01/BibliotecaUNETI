@extends('layout.paginaweb')

@section('title', 'BibliotecaUNETI')

@section('content')
    <div class="contenedor-titulo">
        <div class="col-10 offset-1 text-center mt-4">
            <div class="row">
                <span class="titulo-ppal-web">Colección de Libros</span>
            </div>

            <div class="caja-titulo"></div>
        </div>
    </div>

    <div class="container-fluid contenedor-libros">
        <div class="card col-9 d-flex m-auto mb-5 libro">
            <div class="card-body">
                <div class="input-group mt-1">
                    <input type="text" class="form-control" placeholder="Ingrese busqueda" value="{{ old('buscar') }}"
                        name="buscar" aria-label="Usuario" aria-describedby="addon-wrapping">
                    <button class="btn btn-blue"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @if ($libros->isEmpty())
                <h2 class="text-center mt-3">¡¡ No hay libros disponibles en la Biblioteca !!</h2>
            @else
                @foreach ($libros as $libro)
                    <div class="card col-md-3 libro">
                        <div class="card-body text-center">
                            <img class="imagen-pagina" src="{{ asset('storage') . '/' . $libro->caratula }}"
<<<<<<< HEAD
                                    alt="Title" />
                       
                            <div class="textos_libros">
                                <strong>{{ $libro->titulo }}</strong>
                                <h5>{{ $libro->autor }}</h5>
                                <h5><strong>{{ $libro->ano_publica }}</strong></h5>
                            </div>
=======
                                alt="Title" />

                            <h5 class="tit-libro">{{ $libro->titulo }}</h5>
                            <h5 class="aut-libro">Autor: {{ $libro->autor }}</h5>
                            <h5 class="edi-libro">Fecha publicación: {{ $libro->ano_publica }}</h5>
>>>>>>> d4dc219738aa50e36d8fa7591560dc03b129c940
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
