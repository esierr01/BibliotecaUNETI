@extends('layout.menugestion')

@section('title', 'BibliotecaUNETI - Libros')

@section('content')
    <div class="card text-center p-2 mt-4 mx-3 custom-fondo">
        <div class="card-header">
            <strong>LIBROS ACTIVOS</strong>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th>Caratula</th>
                            <th>Título</th>
                            <th>Publicación</th>
                            <th>Autor</th>
                            <th>Edición</th>
                            <th>Ejemplares</th>
                            <th>Disponibles</th>
                            <th>Carga</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <td>
                                    <div>
                                        <img id="libro_view" class="img-fluid" width="80px"
                                            src="{{ asset('storage') . '/' . $libro->caratula }}" alt="libro">
                                    </div>
                                </td>
                                <td width="300px" class="text-warning fw-bold cell-wrap">{{ $libro->titulo }}</td>
                                <td>{{ $libro->ano_publica }}</td>
                                <td width="150px">{{ $libro->autor }}</td>
                                <td>{{ $libro->edicion }}</td>
                                <td>{{ $libro->ejemplares }}</td>
                                <td>{{ $libro->disponibles }}</td>
                                <td width="150px">{{ $libro->created_at }}</td>
                                <td>
                                    <a href="" type="button" class="btn btn-sm btn-blue px-2"><i class="fa-solid fa-pencil"></i></a>
                                    <small class="mx-1"></small>
                                    <button class="btn btn-sm btn-red px-2"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-body-secondary align-content-between">
            <div class="row">
                <div class="col-4 text-left"><small>Página # de # (## Libros)</small></div>
                <div class="col-4"><a href="" type="button" class="btn btn-sm btn-orange"><i class="fa-solid fa-square-plus"></i> Nuevo Libro</a></div>
                <div class="col-4 text-right"><small>Links</small></div>
            </div>
        </div>
    </div>
@endsection