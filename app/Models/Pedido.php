<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'fecha_pedido',
        'fecha_entrega_estimada',
        'fecha_entrega_real',
        'estado_id',
        'notas',
    ];

    // Relación: un pedido pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación: un pedido pertenece a un estado
    public function estado()
    {
        return $this->belongsTo(EstadoPedido::class, 'estado_id');
    }

    // Relación: un pedido tiene muchos items
    public function items()
    {
        return $this->hasMany(PedidoItem::class);
    }

    // Relación: un pedido tiene muchas entregas
    public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }
}
