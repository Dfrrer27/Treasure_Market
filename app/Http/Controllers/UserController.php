<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(User $user)
    {
        $compradorRole = Role::where('nombre', 'comprador')->first();
        $vendedorRole = Role::where('nombre', 'vendedor')->first();
        
        if ($user->roles->contains($compradorRole)) {
            // El usuario tiene el rol "comprador"
            // Realizar acciones específicas para el rol "comprador"
            return dump(['users' => $user]);
        } elseif ($user->roles->contains($vendedorRole)) {
            // El usuario tiene el rol "vendedor"
            // Realizar acciones específicas para el rol "vendedor"
            return view('vendedor.profile', ['users' => $user]);
        } else {
            // El usuario no tiene ninguno de los roles especificados
            // Redireccionar o mostrar una página de error
            dump(['users' => $user]);
            abort(403, 'Acceso no autorizado, pipipi');
        }
        
    }    
}
