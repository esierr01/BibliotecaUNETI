<?php

use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

//! Rutas iniciales no autenticadas
Route::get('/', [PaginaWebController::class, 'index'])->name('paginaweb.index');
Route::get('/acerca', [PaginaWebController::class, 'acerca'])->name('paginaweb.acerca');
Route::get('/contacto', [PaginaWebController::class, 'contacto'])->name('paginaweb.contacto');
Route::post('/filtro', [PaginaWebController::class, 'filtro'])->name('paginaweb.filtro');

Route::get('/login', [AutenticaController::class, 'login'])->name('login');
Route::post('/login', [AutenticaController::class, 'valida_login']);
Route::post('signout', [AutenticaController::class, 'signout'])->name('signout');

//! Rutas protegidas con autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('menugestion', function(){
        return view('modulos.menugestion.index');
    })->name('menugestion.index');

    Route::resource('libros', LibroController::class);
    Route::get('/libros/index_eliminados', [LibroController::class, 'index_eliminados'])->name('libros.index_eliminados');
    Route::delete('/libros/restaurar', [LibroController::class, 'restaurar'])->name('libros.restaurar');



});


