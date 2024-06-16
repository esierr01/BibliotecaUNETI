@extends('layout.menugestion')

@section('title', 'BibliotecaUNETI - Libros')

@section('content')
    {{-- @if ($msj = Session::get('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary alert-dismissible fade show" role="alert" id="alerta">
                    <strong><i class="fa-solid fa-check"></i></strong> {{ $msj }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif --}}

    <div class="card text-center px-2 py-0 mt-3 mx-3 custom-fondo1">
        <div class="card-header align-content-between row">
            <div class="col-4"></div>
            <div class="col-4"><strong class="titulo-modulo">LIBROS ACTIVOS</strong></div>
            <div class="col-4">
                @if ($msj = Session::get('success'))
                    <div role="alert" id="alerta2" class="mensaje-suceso mt-1">
                        <strong><i class="fa-solid fa-check"></i></strong> {{ $msj }}
                    </div>
                @endif
            </div>
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
                                    <a title="Editar" href="" type="button" class="btn btn-sm btn-blue px-2"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <small class="mx-1"></small>
                                    <button title="Borrar" class="btn btn-sm btn-red px-2"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-between mt-1">
                <div>
                    <a href="{{ route('libros.create') }}" type="button" class="btn btn-sm btn-orange px-4"><i
                            class="fa-solid fa-square-plus"></i>  Insertar Nuevo Libro</a>
                </div>
                <div>
                    <small>{{ $libros->onEachSide(0)->links() }}</small>
                </div>
            </div>
        </div>

    </div>
@endsection
