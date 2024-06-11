@extends('modulos.libros.form')

@section('modulo')
    - Crear nuevo libro
@endsection

@section('accion')
    action = "{{ route('libros.store') }}"
@endsection