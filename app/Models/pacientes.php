<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pacientes extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'sexo',
        'fecha_nacimiento',
        'telefono',
        'id_profecional',
        'id_user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function profecional(): BelongsTo
    {
        return $this->belongsTo(profecionales::class,'id_profecional');
    }

    public function citas(): HasMany
    {
        return $this->hasMany(citas::class);
    }

    public function recetas(): HasMany
    {
        return $this->hasMany(recetas::class);
    }

    public function bitacoras(): HasMany
    {
        return $this->hasMany(bitacoras::class);
    }
}
