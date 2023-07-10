<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'details';

    protected $primaryKey = ['sales_idventas', 'products_idproductos'];

    public $incrementing = false;

    protected $fillable = [
        'cantidad',
        'precio_unitario',
        'subtotal',
        'sales_idventas',
        'products_idproductos',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sales_idventas');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_idproductos');
    }
}
