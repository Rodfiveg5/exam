<?php

namespace Database\Seeders;

use App\Models\tb_comidas;
use App\Models\User;
use Database\Factories\ComidaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TipocomidaSeeder::class,
        ]);

        tb_comidas::factory(10)->create();
    }
}
