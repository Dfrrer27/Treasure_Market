<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $primaryKey = 'idservicio_cliente';

    protected $fillable = [
        'fecha_com',
        'comentario',
        'users_idusuario',
    ];

    // Define la relación con el modelo User
    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_idusuario');
    }
}
