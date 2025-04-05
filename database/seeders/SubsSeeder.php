<?php

namespace Database\Seeders;

use App\Models\subscripciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subs = new subscripciones();
        $subs->nombre = "Esencial Doc";
        $subs->precio = "200";
        $subs->precio_oferta = "0";
        $subs->duracion = "30";
        $subs->no_pacientes = "50";
        $subs->no_empleados = "2";
        $subs->estatus = 1;
        $subs->save();

        $subs2 = new subscripciones();
        $subs2->nombre = "Pro Doc";
        $subs2->precio = "300";
        $subs2->precio_oferta = "0";
        $subs2->duracion = "30";
        $subs2->no_pacientes = "150";
        $subs2->no_empleados = "5";
        $subs2->estatus = 1;
        $subs2->save();

        $subs3 = new subscripciones();
        $subs3->nombre = "Elite Doc";
        $subs3->precio = "400";
        $subs3->precio_oferta = "0";
        $subs3->duracion = "30";
        $subs3->no_pacientes = "300";
        $subs3->no_empleados = "10";
        $subs3->estatus = 1;
        $subs3->save();
    }
}
