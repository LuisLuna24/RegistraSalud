<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tipo_usuarios extends Model
{
    use HasFactory;

    protected $table = 'tipo_usuarios';
    protected $fillable = [
        'nombre'
    ];

    public $timestamps = false;


    public function usuario(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
