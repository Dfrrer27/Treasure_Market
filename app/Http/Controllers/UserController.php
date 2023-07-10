<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile(User $user)
    {
        $compradorRole = Role::where('nombre', 'comprador')->first();
        $vendedorRole = Role::where('nombre', 'vendedor')->first();

        if ($user->userRoles()->where('roles_idroles', $compradorRole->idroles)->exists()) {
            // El usuario tiene el rol "comprador"
            // Realizar acciones específicas para el rol "comprador"
            return view('/', ['users' => $user]);
        } elseif ($user->userRoles()->where('roles_idroles', $vendedorRole->idroles)->exists()) {
            // El usuario tiene el rol "vendedor"
            // Realizar acciones específicas para el rol "vendedor"
            return view('modules.cart-module.cart', ['users' => $user]);
        } else {
            // El usuario no tiene ninguno de los roles especificados
            // Redireccionar o mostrar una página de error
            abort(403, 'Acceso no autorizado, pipipi');
        }
    }
}
