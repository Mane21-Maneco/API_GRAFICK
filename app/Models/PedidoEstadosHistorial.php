<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PedidoEstadosHistorial extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoEstadosHistorialFactory> */
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'estado',
        'fecha',
    ];

    // Relación: un historial pertenece a un pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
