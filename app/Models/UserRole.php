<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'users_roles';

    protected $primaryKey = ['roles_idroles', 'usuario_idusuario'];

    public $incrementing = false;

    protected $fillable = [
        'roles_idroles',
        'usuario_idusuario',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'roles_idroles');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_idusuario');
    }
}
