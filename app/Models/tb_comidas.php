<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_comidas extends Model
{
    use HasFactory;

    protected $table ="tb_comidas";
    protected $fillable = [
        'nombre_comida',
        'costo_comida',
        'descripcion_comida',
        'id_tb_tipo_comidas'
    ];

    public function tipoComida()
    {
        return $this->belongsTo(tb_tipo_comida::class, 'id_tb_tipo_comidas');
    }
}
