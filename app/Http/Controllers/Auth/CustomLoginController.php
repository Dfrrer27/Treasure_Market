<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class CustomLoginController extends AuthenticatedSessionController
{
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // Obtener el rol seleccionado por el usuario
        $selectedRole = $request->input('role');

        // Verificar si el rol existe en la base de datos
        $role = Role::where('nombre', $selectedRole)->first();

        if ($role) {
            // Actualizar el rol del usuario
            $user->roles()->sync([$role->idroles]);
        }

        // Redirigir al usuario a la página correspondiente según su nuevo rol
        if ($selectedRole === 'comprador') {
            return redirect('/sell');
        } elseif ($selectedRole === 'vendedor') {
            return redirect('/cart');
        }
    }
}
