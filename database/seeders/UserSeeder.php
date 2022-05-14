<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=> "Misael",
            "last_name"=>"Guzman",
            "email"=>"misael.gg21@gmail.com",
            "password"=>bcrypt("hola")
        ],
        [
            "name"=>"Jose Luis",
            "last_name" => "Banda",
            "email" => "jlbanda@gmail.com",
            "password" => bcrypt("twitch")

        ],
        [
            "name"=>"Rodolfo",
            "last_name" => "Renteria",
            "email" => "rodolfiux@gmail.com",
            "password" => bcrypt("lol")

        ],
    );
    }
}
