<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PedidoItem extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoItemFactory> */
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'tipo_item',
        'producto_variante_id',
        'servicio_id',
        'cantidad',
        'precio_unitario',
        'costo_unitario',
        'subtotal',
    ];

    // Relación: un item pertenece a un pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    // Relación: un item puede pertenecer a una variante de producto
    public function productoVariante()
    {
        return $this->belongsTo(ProductoVariante::class, 'producto_variante_id');
    }

    // Relación: un item puede pertenecer a un servicio
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'servicio_id');
    }
}
