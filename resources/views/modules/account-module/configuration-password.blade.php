<x-layouts.app
  title="configure password"
  @parent
  link="css/configuration-styles.css"
>

    <section class="client-service">
        <div class="client-service-module">
            <form>
                <a href="{{ route('account') }}">
                    <img class="goBack" src="/img/customer/arrow.png" alt="go-back">
                </a>
                <h2>Cambiar contraseña</h2>
                <label>
                    Contraseña actual
                    <input type="password">
                </label>
                <label>
                    Contraseña nueva
                    <input type="password">
                </label>
                <button type="submit" class="btn-black-yellow">
                    Cambiar
                </button>
            </form>
            <div>
                <img src="/img/customer/Forgot_password.png" alt="help-service">
            </div>
        </div>
    </section>

</x-layouts.app>