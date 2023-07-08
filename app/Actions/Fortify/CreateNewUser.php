<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'nombres' => ['required', 'string', 'max:255'],
            'ape_paterno' => ['required', 'string', 'max:255'],
            'ape_materno' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'numeric', 'digits:8', 'unique:users'],
            'usuario_nombre' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'nombres' => $input['nombres'],
            'ape_paterno' => $input['ape_paterno'],
            'ape_materno' => $input['ape_materno'],
            'dni' => $input['dni'],
            'usuario_nombre' => $input['usuario_nombre'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $selectedRole = Role::where('nombre', $input['role'])->first();
        if ($selectedRole) {
            $user->roles()->attach($selectedRole);
        }

        return $user;
    }
}
