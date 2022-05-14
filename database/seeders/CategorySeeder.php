<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "id"=> 1,
            "nombre"=>"Automovilismo",
            "descripcion"=>"Carrera de autos"
        ],
        [
            "id"=>2,
            "nombre" => "Contaduria",
            "descripcion" => "Seminario de contaduria",

        ],
        [
            "id"=>3,
            "nombre" => "Ropa",
            "descripcion" => "Expo de ropa",

        ],
    );
    }
}
