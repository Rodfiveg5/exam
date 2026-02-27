<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TipocomidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_tipo_comidas')->insert([
            ['nombre_categoria' => 'Bebidas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => 'Postres', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => 'Platillos Fuertes', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => 'Entradas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => 'Sopas', 'created_at' => now(), 'updated_at' => now()]        ]);
    }
}
