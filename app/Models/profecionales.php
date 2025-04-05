<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class profecionales extends Model
{
    use HasFactory;

    protected $table = 'profecionales';
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'sexo',
        'id_subscripcion',
        'id_user',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function subscripcion(): BelongsTo
    {
        return $this->belongsTo(subscripciones::class,'id_subscripcion');
    }

    public function pacientes(): HasMany
    {
        return $this->hasMany(pacientes::class);
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
