<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fruta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('login')->insert([
            [
                'nombre_fruta' => "Guineo",
                'cantidad' => 25,
                'proveedor' => "Arturo Zambrano"
            ],
            [
                'nombre_fruta' => "Pera",
                'cantidad' => 29,
                'proveedor' => "Jahir Celorio"
            ],
            [
                'nombre_fruta' => "Durazno",
                'cantidad' => 300,
                'proveedor' => "Miguel Celorio"
            ],
            [
                'nombre_fruta' => "Frutilla",
                'cantidad' => 500,
                'proveedor' => "Roberto Alcívar"
            ],
            [
                'nombre_fruta' => "Guayaba",
                'cantidad' => 5,
                'proveedor' => "Agustín Cedeño"
            ],
            [
                'nombre_fruta' => "Sandía",
                'cantidad' => 100,
                'proveedor' => "Gilberto Angulo"
            ],
            [
                'nombre_fruta' => "Melón",
                'cantidad' => 90,
                'proveedor' => "Andres Zambrano"
            ],
            [
                'nombre_fruta' => "Coco",
                'cantidad' => 15,
                'proveedor' => "Angela Riofrio"
            ],
            [
                'nombre_fruta' => "Pera",
                'cantidad' => 200,
                'proveedor' => "Raul"
            ]
            ]);
    }
}
