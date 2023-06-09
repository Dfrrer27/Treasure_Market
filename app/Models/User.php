<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = 'users';

    protected $primaryKey = 'idusuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',
        'ape_paterno',
        'ape_materno',
        'dni',
        'usuario_nombre',
        'email',
        'password',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the services for the user.
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'usuario_idusuario');
    }

    /**
     * Get the sales where the user is the buyer.
     */
    public function buyerSales()
    {
        return $this->hasMany(Sale::class, 'usuario_idcomprador');
    }

    /**
     * Get the sales where the user is the seller.
     */
    public function sellerSales()
    {
        return $this->hasMany(Sale::class, 'usuario_idvendedor');
    }

    /**
     * Get the purchases for the user.
     */
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'usuario_idusuario');
    }

    /**
     * Get the roles associated with the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'usuario_idusuario', 'roles_idroles');
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'usuario_idusuario');
    }
}
