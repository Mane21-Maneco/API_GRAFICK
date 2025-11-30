<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PedidoEstadosHistorial>
 */
class PedidoEstadosHistorialFactory extends Factory
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
            'estado' => $this->faker->randomElement(['pendiente', 'en proceso', 'terminado', 'entregado']),
            'fecha' => $this->faker->dateTime(),
        ];
    }
}
