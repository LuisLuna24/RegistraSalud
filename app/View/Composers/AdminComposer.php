<?php

namespace App\View\Composers;

use App\Models\rutas;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminComposer
{

    public $rutas, $flujos;

    public $titulo;

    public function __construct()
    {
        switch (Auth::user()->id_tipo_usuario) {

            case 1:
                $this->rutas = rutas::where('estatus', 1)->where('tipo_ruta', 1)->where('tipo_usuario', 1)->orderBy('name', 'asc')->get();
                break;
        }
    }



    public function compose(View $view): void
    {
        $view->with('rutas', $this->rutas);
    }
}
