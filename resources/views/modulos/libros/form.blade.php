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


    <form @yield('accion') method="post" enctype="multipart/form-data">
        @yield('metodo')
        @csrf

        <div class="mx-4">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-3">
                    <div class="card custom-fondo1">
                        <div class="card-header text-center">
                            <h4>LIBROS @yield('modulo')</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2 mb-2 justify-content-center">

                                <div class="{{ $errors->any() ? 'col-md-6' : 'col-md-4' }}">
                                    <div class="card custom-fondo2">
                                        <div class="card-header">
                                            <h5 class="text-muted text-center">Datos del Libro</h5>
                                        </div>

                                        <div class="card-body">
                                            <div class="input-group flex-nowrap mt-4">
                                                <span class="input-group-text" id="addon-wrapping">Titulo</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingrese título del Libro" value="{{ old('titulo') }}"
                                                    name="titulo" aria-label="titulo" aria-describedby="addon-wrapping">
                                            </div>

                                            <div class="input-group flex-nowrap mt-4">
                                                <span class="input-group-text" id="addon-wrapping">Autor</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingrese autor del Libro" value="{{ old('autor') }}"
                                                    name="autor" aria-label="autor" aria-describedby="addon-wrapping">
                                            </div>

                                            <div class="d-flex">
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Publicación</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese año publicación"
                                                        value="{{ old('ano_publica') }}" name="ano_publica"
                                                        aria-label="ano_publica" aria-describedby="addon-wrapping"
                                                        min="1900" max="2099">
                                                </div>

                                                <div class="mt-4 mx-2"> </div>
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Edición</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese edición del Libro" value="{{ old('edicion') }}"
                                                        name="edicion" aria-label="edicion"
                                                        aria-describedby="addon-wrapping" min="1" max="10">
                                                </div>

                                            </div>

                                            <div class="d-flex mb-3">
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Ejemplares</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese nro ejemplares" value="{{ old('ejemplares') }}"
                                                        name="ejemplares" aria-label="ejemplares"
                                                        aria-describedby="addon-wrapping" min="1" max="30">
                                                </div>

                                                <div class="mt-4 mx-2"> </div>
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Disponibles</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese ejemplares disponibles"
                                                        value="{{ old('disponibles') }}" name="disponibles"
                                                        aria-label="disponibles" aria-describedby="addon-wrapping"
                                                        min="1" max="30">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="{{ $errors->any() ? 'col-md-3' : 'col-md-4' }}">
                                    <div class="card custom-fondo2">
                                        <div class="card-header">
                                            <h5 class="text-muted text-center">Carátula</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <img id="ImagenLibro" class="img-fluid" src="/assets/img/libro_vacio.png"
                                                    alt="libro">
                                            </div>

                                            <div class="mb-0">
                                                <label for="formFileSm" class="form-label mb-0">
                                                    <small>Nombre archivo:</small>
                                                    <small>{{ old('caratula') }}</small>
                                                </label>
                                                <input class="form-control form-control-sm" id="formFileSm"
                                                    type="file" accept=".jpg,.jpeg,.png, image/*"
                                                    onchange="mostrarImagen(event)" name="caratula"
                                                    value="{{ old('caratula') }}">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($errors->any())
                                <div class="col-md-3" id="alerta">
                                    <div class="card custom-fondo2">
                                        <div class="card-header">
                                            <h5 class="text-muted text-center">Estatus</h5>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-warning alert-dismissible fade show errores-carga"
                                                            role="alert" >
                                                            <p><b><i class="fa-solid fa-circle-exclamation"></i> Errores</b></p>
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <small><li>{{ $error }}</li></small>
                                                                @endforeach
                                                            </ul>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                <input type="hidden" value="0" name="eliminado">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-blue mx-1">Guardar datos</button>
                                <a href="{{ route('libros.index') }}" class="btn btn-orange mx-1">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
@endsection
