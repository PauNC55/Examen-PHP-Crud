<?php

namespace Database\Seeders;
use App\Models\prestamos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prest = new prestamos();
        $prest->libro_id = 1;
        $prest->socio_id = 3;
        $prest->save();
    }
}
