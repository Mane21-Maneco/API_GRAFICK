<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\ProductoVariante;
use App\Models\Servicio;
use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\EstadoPedido;
use App\Models\Entrega;
use App\Models\PedidoEstadosHistorial;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
         Cliente::factory()->count(10)->create();
        Producto::factory()->count(20)->create();
        ProductoVariante::factory()->count(30)->create();
        Servicio::factory()->count(10)->create();
        EstadoPedido::factory()->count(4)->create();
        Pedido::factory()->count(15)->create();
        PedidoItem::factory()->count(40)->create();
        Entrega::factory()->count(10)->create();
        PedidoEstadosHistorial::factory()->count(20)->create();
    }
}
