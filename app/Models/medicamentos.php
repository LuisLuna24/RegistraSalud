<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class medicamentos extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';
    protected $fillable = [
        'nombre',
        'docis',
        'duracion',
        'indicacione',
        'id_unidad_medida',
        'id_receta',
    ];

    public $timestamps = false;

    public function unidadMedida(): BelongsTo
    {
        return $this->belongsTo(unidades_medidas::class, 'id_unidad_medida');
    }

    public function receta(): BelongsTo
    {
        return $this->belongsTo(recetas::class, 'id_receta');
    }
}
