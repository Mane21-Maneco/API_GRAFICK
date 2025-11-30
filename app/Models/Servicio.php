<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Servicio extends Model
{
    /** @use HasFactory<\Database\Factories\ServicioFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'costo',
        'precio',
        'descripcion',
    ];

    // Relación: un servicio puede tener muchos pedido items
    public function pedidoItems()
    {
        return $this->hasMany(PedidoItem::class);
    }
}
