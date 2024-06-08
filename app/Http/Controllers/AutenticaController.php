<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticaController extends Controller
{
    public function login()
    {
        return view('modulos.login.login');
    }

    public function valida_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],[
            'email.required' => 'El e-mail es requerido',
            'email.email' => 'Email con formato invalido',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener longitud minima de 8 carácteres'
        ]);

        //! validamos si los datos de acceso estan en la tabla User
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('menugestion.index');
        }
        return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña invalidos !!']);
    }

    public function signout()
    {
        Auth::logout();
        return redirect()->route('paginaweb.index');
    }
}
