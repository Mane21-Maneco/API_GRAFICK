<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrega>
 */
class EntregaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pedido_id' => \App\Models\Pedido::factory(),
            'fecha_programada' => $this->faker->dateTime(),
            'fecha_entregada' => $this->faker->optional()->dateTime(),
            'recibio_cliente' => $this->faker->name,
            'ubicacion' => $this->faker->address,
            'notas' => $this->faker->sentence,
        ];
    }
}
