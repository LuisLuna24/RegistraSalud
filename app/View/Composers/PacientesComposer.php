<?php

namespace App\View\Composers;

use App\Models\rutas;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PacientesComposer
{

    public $rutas;

    public $titulo;

    public function __construct()
    {
        switch (Auth::user()->id_tipo_usuario) {

            case 5:
                $this->rutas = rutas::where('estado', 1)->where('tipo_ruta', 1)->where('tipo_usuario', 5)->orderBy('title', 'asc')->get();
                break;
        }
    }



    public function compose(View $view): void
    {
        $view->with('rutas', $this->rutas);
    }
}
