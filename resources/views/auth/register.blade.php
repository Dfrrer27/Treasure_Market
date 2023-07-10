
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form class="grid grid-col-2 gap-4" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="col-start-1 col-end-2">
                <x-label for="nombres" value="{{ __('Nombre') }}" />
                <x-input placeholder="hola" id="nombres" class="block mt-1 w-full" type="text" name="nombres" :value="old('nombres')" required autofocus autocomplete="nombres" />
            </div>

            <div class="mt-4 col-end-3 col-span-2">
                <x-label for="ape_paterno" value="{{ __('Apellido Paterno') }}" />
                <x-input id="ape_paterno" class="block mt-1 w-full" type="text" name="ape_paterno" :value="old('ape_paterno')" required autofocus autocomplete="ape_paterno" />
            </div>

            <div class="mt-4">
                <x-label for="ape_materno" value="{{ __('Apellido Materno') }}" />
                <x-input id="ape_materno" class="block mt-1 w-full" type="text" name="ape_materno" :value="old('ape_materno')" required autofocus autocomplete="ape_materno" />
            </div>

            <div class="mt-4">
                <x-label for="dni" value="{{ __('DNI') }}" />
                <x-input id="dni" class="block mt-1 w-full" type="number" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
            </div>

            <div class="mt-4">
                <x-label for="usuario_nombre" value="{{ __('Nombre de Usuario') }}" />
                <x-input id="usuario_nombre" class="block mt-1 w-full" type="text" name="usuario_nombre" :value="old('usuario_nombre')" required autofocus autocomplete="usuario_nombre" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="role" value="{{ __('Rol de Usuario') }}" />
                <select name="role" id="role" class="block">
                    <option value="" disabled selected>Selecciona un rol</option>
                    <option value="comprador" @if(old('role') === 'comprador') selected @endif>Comprador</option>
                    <option value="vendedor" @if(old('role') === 'vendedor') selected @endif>Vendedor</option>
                </select>
            </div>            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya se ha registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
                
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
