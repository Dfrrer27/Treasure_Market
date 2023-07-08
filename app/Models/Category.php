<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'idcategoria';

    protected $fillable = [
        'nombre',
    ];

    // Definir la relación con otros modelos de ser necesario aquí
}
