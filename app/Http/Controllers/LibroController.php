<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::where('eliminado', 0)->orderby('titulo')->paginate(2);
        return view('modulos.libros.index', compact('libros'));
    }

    public function index_eliminados()
    {
        //
    }

    public function create()
    {
        return view('modulos.libros.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Libro $libro)
    {
        //
    }

    public function edit(Libro $libro)
    {
        //
    }

    public function update(Request $request, Libro $libro)
    {
        //
    }

    public function destroy(Libro $libro)
    {
        //
    }

    public function restaurar(Libro $libro)
    {
        //
    }
}
