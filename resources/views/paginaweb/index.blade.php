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
        <div class="row d-flex justify-content-center">
            @if ($libros->isEmpty())
                <h2 class="text-center mt-3">¡¡ No hay libros disponibles en la Biblioteca !!</h2>
            @else
                @foreach ($libros as $libro)
                    <div class="card col-md-3 mx-3 mb-3 mt-3 custom-libros">
                        <img class="imagen-pagina" src="{{ asset('storage') . '/' . $libro->caratula }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $libro->titulo }}</h4>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center mt-3">
                                Autor: {{ $libro->autor }} <br>
                                Publicación: {{ $libro->ano_publica }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
