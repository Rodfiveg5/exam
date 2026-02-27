<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tb_comidas>
 */
class tb_comidasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_comida' => $this->faker->word(),
            'costo_comida' => $this->faker->randomFloat(25, 65, 80),
            'descripcion_comida' => $this->faker->sentence(),
            'id_tb_tipo_comidas' => $this->faker->numberBetween(1,5),
        ];
    }
}

