<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'tipo' => $this->faker->randomElement(['sublimación', 'diseño', 'corte']),
            'costo' => $this->faker->randomFloat(2, 10, 100),
            'precio' => $this->faker->randomFloat(2, 20, 200),
            'descripcion' => $this->faker->sentence,
        ];
    }
}
