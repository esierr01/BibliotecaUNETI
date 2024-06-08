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

    public function acerca()
    {
        return view('paginaweb.acerca');
        
    }

    public function contacto()
    {
        return view('paginaweb.contacto');
    }
}
