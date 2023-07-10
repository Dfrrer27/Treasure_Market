<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $primaryKey = 'idcarrito_compra';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuario_idusuario',
        'productos_idproductos',
        'cantidad',
    ];

    /**
     * Get the user who made the purchase.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_idusuario');
    }

    /**
     * Get the product in the purchase.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'productos_idproductos');
    }
}
