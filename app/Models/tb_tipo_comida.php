<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_tipo_comida extends Model
{
    use HasFactory;

    protected $table ="tb_tipo_comidas";
    protected $fillable = [
        'nombre_categoria'  
            ];

    const CATEGORIAS = [
        'Bebidas',
        'Postres',
        'Platillos Fiertes',
        'Entradas',
        'Sopas'
    ];
}
