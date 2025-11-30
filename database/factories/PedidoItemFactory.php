<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PedidoItem>
 */
class PedidoItemFactory extends Factory
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
            'tipo_item' => $this->faker->randomElement(['producto', 'servicio']),
            'producto_variante_id' => \App\Models\ProductoVariante::factory(),
            'servicio_id' => \App\Models\Servicio::factory(),
            'cantidad' => $this->faker->numberBetween(1, 10),
            'precio_unitario' => $this->faker->randomFloat(2, 10, 200),
            'costo_unitario' => $this->faker->randomFloat(2, 5, 150),
            'subtotal' => $this->faker->randomFloat(2, 10, 200),
        ];
    }
}
