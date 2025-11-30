<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entrega extends Model
{
    /** @use HasFactory<\Database\Factories\EntregaFactory> */
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'fecha_programada',
        'fecha_entregada',
        'recibio_cliente',
        'ubicacion',
        'notas',
    ];

    // Relación: una entrega pertenece a un pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
