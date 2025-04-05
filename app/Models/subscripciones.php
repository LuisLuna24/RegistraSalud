<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class subscripciones extends Model
{
    use HasFactory;

    protected $table = 'subscripciones';
    protected $fillable = [
        'nombre',
        'precio',
        'precio_oferta',
        'duracion_dias',
        'no_pacientes',
        'no_empleados',
        'estatus',
    ];

    public function profecionales(): HasMany
    {
        return $this->HasMany(profecionales::class);
    }
}
