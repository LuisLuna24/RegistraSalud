<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class citas extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $fillable = [
        'fecha_hora',
        'motivo',
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

}
