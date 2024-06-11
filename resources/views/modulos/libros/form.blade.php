@extends('layout.menugestion')

@section('title', 'BibliotecaUNETI - Libros')

@section('content')
    <form @yield('accion') method="post" enctype="multipart/form-data">
        @yield('metodo')
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card custom-fondo">
                        <div class="card-header text-center">
                            <h4>LIBROS @yield('modulo')</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2 mb-2">
                                <div class="col-md-8">
                                    <div class="card custom-fondo2">
                                        <div class="card-header">
                                            <h5 class="text-muted text-center">Datos del Libro</h5>
                                        </div>

                                        <div class="card-body">
                                            <div class="input-group flex-nowrap mt-4">
                                                <span class="input-group-text" id="addon-wrapping">Titulo</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingrese título del Libro" value="" name="titulo"
                                                    aria-label="Titulo" aria-describedby="addon-wrapping">
                                            </div>
                                            @error('titulo')
                                                <small class="text-danger mt-1">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                            @enderror

                                            <div class="input-group flex-nowrap mt-4">
                                                <span class="input-group-text" id="addon-wrapping">Autor</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingrese autor del Libro" value="" name="autor"
                                                    aria-label="Autor" aria-describedby="addon-wrapping">
                                            </div>

                                            <div class="d-flex">
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Publicación</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese año publicación" value="" name="ano_publica"
                                                        aria-label="Autor" aria-describedby="addon-wrapping" min="1900" max="2099">
                                                </div>
                                                <div class="mt-4 mx-2">  </div>
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Edición</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese edición del Libro" value="" name="edicion"
                                                        aria-label="Edicion" aria-describedby="addon-wrapping" min="1" max="10">
                                                </div>
                                            </div>     
                                            
                                            <div class="d-flex mb-3">
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Ejemplares</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese nro ejemplares" value="" name="ejemplares"
                                                        aria-label="Autor" aria-describedby="addon-wrapping" min="1" max="30">
                                                </div>
                                                <div class="mt-4 mx-2">  </div>
                                                <div class="input-group flex-nowrap mt-4">
                                                    <span class="input-group-text" id="addon-wrapping">Disponibles</span>
                                                    <input type="number" class="form-control"
                                                        placeholder="Ingrese ejemplares disponibles" value="" name="disponibles"
                                                        aria-label="Edicion" aria-describedby="addon-wrapping" min="1" max="30">
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card custom-fondo2">
                                        <div class="card-header">
                                            <h5 class="text-muted text-center">Carátula</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <img id="ImagenLibro" class="img-fluid" src="/assets/img/libro_vacio.png" alt="libro">
                                            </div>

                                            <div class="mb-0">
                                                <label for="formFileSm" class="form-label mb-0">
                                                    <small>Nombre archivo:</small>
                                                </label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" accept=".jpg,.jpeg,.png, image/*">
                                              </div>
                                        </div>
                                    </div>
                                </div>
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
