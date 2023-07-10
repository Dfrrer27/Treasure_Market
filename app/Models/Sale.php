<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'idventas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuario_idcomprador',
        'usuario_idvendedor',
        'cantidad',
        'fecha_venta',
        'precio_venta',
        'metodo_pago_idmetodo_pago',
    ];

    /**
     * Get the buyer of the sale.
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'usuario_idcomprador');
    }

    /**
     * Get the seller of the sale.
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'usuario_idvendedor');
    }

    /**
     * Get the payment method used for the sale.
     */
    public function paymentMethod()
    {
        return $this->belongsTo(Payment::class, 'metodo_pago_idmetodo_pago');
    }

    /**
     * Get the products included in the sale.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'details', 'sales_idventas', 'products_idproductos')
            ->withPivot('cantidad', 'precio_unitario', 'subtotal');
    }
}
