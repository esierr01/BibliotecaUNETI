<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class PaginaWebController extends Controller
{
    public function index()
    {
        $libros =  Libro::where('eliminado', 0)->get();
        return view('paginaweb.index', compact('libros'));
    }

    public function filtro(Request $request)
    {
        // dd($request->all());
        $cadena = $request['buscar'];
        $libros = Libro::whereRaw("UPPER(titulo) LIKE UPPER('%$cadena%')")
            ->orWhereRaw("UPPER(autor) LIKE UPPER('%$cadena%')")
            ->where('eliminado', 0)
            ->get();
        return view('paginaweb.index', compact('libros'));
    }

    public function acerca()
    {
        return view('paginaweb.acerca');
    }

    public function contacto()
    {
        return view('paginaweb.contacto');
    }
}
