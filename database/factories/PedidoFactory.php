<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'fecha_pedido' => $this->faker->date(),
            'fecha_entrega_estimada' => $this->faker->date(),
            'fecha_entrega_real' => $this->faker->optional()->date(),
            'estado_id' => \App\Models\EstadoPedido::factory(),
            'notas' => $this->faker->sentence,
        ];
    }
}
