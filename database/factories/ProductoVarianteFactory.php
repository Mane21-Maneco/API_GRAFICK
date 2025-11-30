<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductoVariante>
 */
class ProductoVarianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto_id' => \App\Models\Producto::factory(),
            'color' => $this->faker->safeColorName,
            'talla' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'sku' => $this->faker->unique()->ean8,
        ];
    }
}
