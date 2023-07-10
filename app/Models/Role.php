<?php

namespace App\Models;
use App\Models\UserRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primaryKey = 'idroles';

    protected $fillable = [
        'nombre',
    ];

    // Definir la relación con otros modelos, si es necesario, aquí

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles', 'roles_idroles', 'usuario_idusuario');
    }
}