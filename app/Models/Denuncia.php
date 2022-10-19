<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Denuncia extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'denunciante_id', 'tipos_proceso_id', 'caso_id', 'fecha_registro', 'denunciado', 'delito', 'monto', 'archivos', 'estado'
    ];
}
