<?php

namespace Database\Seeders;

use App\Models\rutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $route = rutas::new();
        $route->name = "Usuarios";
        $route->route = "admin.control.usuarios";
        $route->tipo_ruta = "1";
        $route->tipo_usuario = "1";
        $route->estatus = "1";
    }
}
