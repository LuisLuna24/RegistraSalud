<?php

namespace Database\Seeders;

use App\Models\tipo_usuarios;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tipo = new tipo_usuarios();
        $tipo->id = "1";
        $tipo->nombre = "Admin";
        $tipo->save();

        $tipo1 = new tipo_usuarios();
        $tipo1->id = "2";
        $tipo1->nombre = "Doctor";
        $tipo1->save();

        $tipo1 = new tipo_usuarios();
        $tipo1->id = "3";
        $tipo1->nombre = "Psychologist";
        $tipo1->save();

        $tipo1 = new tipo_usuarios();
        $tipo1->id = "4";
        $tipo1->nombre = "Nutritionist";
        $tipo1->save();

        $tipo1 = new tipo_usuarios();
        $tipo1->id = "5";
        $tipo1->nombre = "Patient";
        $tipo1->save();

        $user = new User();
        $user->name = "Luis Luna";
        $user->email = "lued1006@gmail.com";
        $user->password = "Hmcnjsa1*";
        $user->estatus = "1";
        $user->id_tipo_usuario = 1;
        $user->email_verified_at = '2025/02/13';
        $user->save();

        $user1 = new User();
        $user1->name = "Bardex";
        $user1->email = "bardex@gmail.com";
        $user1->password = "bardex123*";
        $user1->estatus = "1";
        $user1->id_tipo_usuario = 3;
        $user1->email_verified_at = '2025/02/13';
        $user1->save();

        $user = new User();
        $user->name = "White";
        $user->email = "withe@gmail.com";
        $user->password = "white123*";
        $user->estatus = "1";
        $user->id_tipo_usuario = 3;
        $user->email_verified_at = '2025/02/13';
        $user->save();
    }
}
