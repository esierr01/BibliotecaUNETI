<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $cantLibros = Libro::where('eliminado',0)->count();
        $libros = Libro::where('eliminado', 0)->orderby('titulo')->simplePaginate(2);
        return view('modulos.libros.index', compact('libros', 'cantLibros'));
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
        $request->validate([
            'caratula' => 'required',
            'titulo' => 'required',
            'ano_publica' => 'required',
            'autor' => 'required',
            'edicion' => 'required',
            'ejemplares' => 'required',
            'disponibles' => 'required|lte:ejemplares'
        ],[
            'caratula.required' => 'La carátula es requerida',
            'titulo.required' => 'El titulo es requerido',
            'ano_publica.required' => 'requerido',
            'autor.required' => 'El autor es requerido',
            'edicion.required' => 'requerido',
            'ejemplares.required' => 'requerido',
            'disponibles.required' => 'requerido',
            'disponibles.lte' => 'no puede ser mayor que ejemplares'
        ]);

        $libro = Libro::create($request->all());

        if ($request->hasFile('caratula')) {
            $originalFileName = $request->file('caratula')->getClientOriginalExtension();
            $newFileName = $libro->id . '.' . $originalFileName; // Asume que $registroId contiene el ID del registro
            $rutaArchivo = $request->file('caratula')->storeAs('img', $newFileName, 'public');

            $libro->caratula = 'img/' . $newFileName;
            $libro->save();
        }

        return redirect()->route('libros.index')->with('success', 'Libro cargado exitosamente');
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
