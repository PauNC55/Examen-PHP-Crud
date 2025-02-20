<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\socios;
use Faker\Factory as Faker;


class SociosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=0;$i<10;$i++){
            $faker = Faker::create();
            $usuario = new socios();
            $usuario->nombre = $faker->firstNameFemale;
            $usuario->email = $faker->firstNameFemale.'@email.com';
            $usuario->save();
        }
        
    }
}
