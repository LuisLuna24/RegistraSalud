<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class recetas extends Model
{
    use HasFactory;

    protected $table = 'recetas';
    protected $fillable = [
        'peso',
        'estatura',
        'alergias',
        'diagnostico',
        'id_profecional',
        'id_paciente',
        'estatus',
    ];

    public function paciente(): BelongsTo{
        return $this->belongsTo(pacientes::class,'id_paciente');
    }

    public function profecional(): BelongsTo{
        return $this->belongsTo(profecionales::class,'id+profecional');
    }

    public function medicamentos(): HasMany
    {
        return $this->hasMany(medicamentos::class);
    }
}
