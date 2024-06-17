<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::where('eliminado', 0)->orderby('titulo')->get();
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
            'ano_publica.required' => 'Fecha de publicación es requerida',
            'autor.required' => 'El autor es requerido',
            'edicion.required' => 'La edición es requerida',
            'ejemplares.required' => '# de ejemplares existentes es requerido',
            'disponibles.required' => '# ejemplares disponibles requerido',
            'disponibles.lte' => 'ejemplares disponibles no puede ser mayor que existentes'
        ]);

        $libro = Libro::create($request->all());
        $ultimoId = Libro::latest('id')->first()->id;

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
