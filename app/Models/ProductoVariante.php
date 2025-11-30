<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductoVariante extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoVarianteFactory> */
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'color',
        'talla',
        'sku',
    ];

    // Relación: una variante pertenece a un producto
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    // Relación: una variante puede tener muchos pedido items
    public function pedidoItems()
    {
        return $this->hasMany(PedidoItem::class);
    }
}
