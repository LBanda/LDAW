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
        //Seeder para la tabla users
        DB::table('users')-> insert([

            'name' => 'Misael',
            'last_name' => 'Guzman',
            'email' => 'misael.gg21@gmail.com',
            'password' => bcrypt('holacomoestas'),
        ],
        [
            'name' => 'Jose Luis',
            'last_name' => "Banda",
            'email' => 'hola@gmail.com',
            'password' => bcrypt('twitch'),

        ],);
    }
}
