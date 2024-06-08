<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['caratula', 'titulo', 'ano_publica', 'autor', 'edicion', 'ejemplares', 'disponibles', 'eliminado', 'fecha_eliminado'];
}
