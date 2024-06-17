@extends('layout.menugestion')

@section('title', 'BibliotecaUNETI - Libros')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">

    <link rel="stylesheet" href="{{ asset('assets/css/estilosgenerales.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menugestion.css') }}">
@endsection

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

    <div class="card px-2 py-0 mt-3 mx-3 custom-fondo1">
        <div class="card-header row">
            <div class="col-4 font-weight-bold fs-5 ms-auto align-content-center">
                <strong class="titulo-modulo">LIBROS ACTIVOS</strong>
            </div>

            <div class="col-4 text-center ms-auto align-content-center">
                @if ($msj = Session::get('success'))
                    <div role="alert" id="alerta2" class="mensaje-suceso mt-1">
                        <strong><i class="fa-solid fa-check"></i></strong> <small>{{ $msj }}</small>
                    </div>
                @endif
            </div>

            <div class="col-4 ms-auto text-end align-content-center">

                <a href="{{ route('libros.create') }}" type="button" class="btn btn-sm btn-blue px-4"><i
                        class="fa-solid fa-square-plus"></i> Insertar Nuevo Libro</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="librosactivos" class="table table-dark table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Caratula</th>
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
                                <td width="300px" class="text-warning fw-bold fs-7 text-left">{{ $libro->titulo }}</td>
                                <td class="text-center">
                                    <div>
                                        <img id="libro_view" class="img-fluid" width="40px"
                                            src="{{ asset('storage') . '/' . $libro->caratula }}" alt="libro">
                                    </div>
                                </td>
                                <td class="text-center fs-6">{{ $libro->ano_publica }}</td>
                                <td class="cell-wrap" width="150px">{{ $libro->autor }}</td>
                                <td class="text-center fs-5" width="150px">{{ $libro->edicion }}</td>
                                <td class="text-center fs-5">{{ $libro->ejemplares }}</td>
                                <td class="text-center fs-5">{{ $libro->disponibles }}</td>
                                <td width="150px">{{ $libro->created_at->diffForHumans() }}</td>
                                <td class="text-center">
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

    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>

    <script src="https://kit.fontawesome.com/5f0926b9a9.js" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/menugestion.js') }}"></script>

    <script>
        new DataTable('#librosactivos', {
            responsive: true,
            language: {
                "processing": "Procesamiento en curso...",
                "search": "Buscar&nbsp;:",
                "lengthMenu": "Mostrar _MENU_ elementos",
                "info": "Mostrando elementos _START_ a _END_ de _TOTAL_ elementos",
                "infoEmpty": "Mostrando elementos 0 a 0 de 0 elementos",
                "infoFiltered": "(filtrados de _MAX_ elementos en total)",
                "infoPostFix": "",
                "loadingRecords": "Cargando...",
                "zeroRecords": "No hay elementos para mostrar",
                "emptyTable": "No hay datos disponibles en la tabla",
                "paginate": {
                    "first": "Primero",
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "last": "Último"
                },
                "aria": {
                    "sortAscending": ": activar para ordenar la columna en orden ascendente",
                    "sortDescending": ": activar para ordenar la columna en orden descendente"
                }
            },
            "pageLength": 4, // Número de registros que quieres mostrar por defecto
            "lengthMenu": [2, 4] // Opciones de cantidad de registros por página en el menú desplegable
        });
    </script>
@endsection
