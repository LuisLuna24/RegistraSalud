<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class unidades_medidas extends Model
{
    use HasFactory;

    protected $table = 'unidades_medidas';
    protected $fillable = [
        'nombre',
        'abreviatura',
    ];

    public $timestamps = false;


    public function medicamentos(): HasMany
    {
        return $this->hasMany(medicamentos::class);
    }
}
