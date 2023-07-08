<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'idventas';

    protected $fillable = [
        'users_idcomprador',
        'users_idvendedor',
        'cantidad',
        'fecha_venta',
        'precio_venta',
        'payments_idmetodo_pago',
    ];

    // Definir las relaciones con los modelos de usuario, producto y método de pago
    public function buyer()
    {
        return $this->belongsTo(User::class, 'users_idcomprador');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'users_idvendedor');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(Payment::class, 'payments_idmetodo_pago');
    }
}
