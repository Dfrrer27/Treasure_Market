<x-layouts.app
  title="Configuration"
  @parent
  link="css/configuration-styles.css"
>

    <section class="client-service">
        <div class="client-service-module no-grid-module">
            <div class="account-menu">
                <a href="{{ route('update_password') }}" class="account-option">
                    <img src="/img/customer/password.png" alt="account-option">
                    <h3>Cambiar contraseña</h3>
                </a>
                
                <a href="{{ route('update_user') }}" class="account-option">
                    <img src="/img/customer/change.png" alt="account-option">
                    <h3>Cambiar nombre usuario</h3>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>