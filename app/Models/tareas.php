<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tareas extends Model
{
    use HasFactory;
    protected $table = 'tareas';
    protected $fillable = [
        'titulo',
        'descripcion',
        'resultados',
        'resultados_paciente',
        'estatus',
        'id_bitacora',
    ];

    public $timestamps = false;

    public function bitacora(): BelongsTo
    {
        return $this->belongsTo(bitacoras::class, 'id_bitacora');
    }
}
