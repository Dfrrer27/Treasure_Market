<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $primaryKey = 'idcarrito_compra';

    protected $fillable = [
        'users_idusuario',
        'products_idproductos',
        'cantidad',
    ];

    // Definir las relaciones con los modelos de usuario y producto
    public function user()
    {
        return $this->belongsTo(User::class, 'users_idusuario');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_idproductos');
    }
}
