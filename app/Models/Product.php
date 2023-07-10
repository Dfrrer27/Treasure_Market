<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'idproductos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'precio',
        'categoria_idcategoria',
        'descuento',
        'img',
    ];

    // Definir la relación con el modelo Category
    public function category(){
        return $this->belongsTo(Category::class, 'category_idcategoria');
    }

    /**
     * Get the details of the product.
    */
    public function details(){
        return $this->belongsToMany(Sale::class, 'details', 'products_idproductos', 'sales_idventas')
            ->withPivot('cantidad', 'precio_unitario', 'subtotal');
    }

}
