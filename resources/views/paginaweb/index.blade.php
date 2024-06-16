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
        <div class="row justify-content-center">
            @if ($libros->isEmpty())
                <h2 class="text-center mt-3">¡¡ No hay libros disponibles en la Biblioteca !!</h2>
            @else
                @foreach ($libros as $libro)
                    <div class="card col-md-3 libro">
                        <div class="card-body text-center">
                            <img class="imagen-pagina" src="{{ asset('storage') . '/' . $libro->caratula }}"
                                    alt="Title" />
                       
                            <div class="textos_libros">
                                <strong>{{ $libro->titulo }}</strong>
                                <h5>{{ $libro->autor }}</h5>
                                <h5><strong>{{ $libro->ano_publica }}</strong></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
