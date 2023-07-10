<x-layouts.app
  title="configure username"
  @parent
  link="css/configuration-styles.css"
>

<section class="client-service">
    <div class="client-service-module">
        <form>
            <a href="{{ route('account') }}">
                <img class="goBack" src="/img/customer/arrow.png" alt="go-back">
            </a>
            <h2>Cambiar nombre</h2>
            <label>
                Nombre actual
                <input type="text">
            </label>
            <label>
                Nombre nuevo
                <input type="text">
            </label>
            <button type="submit" class="btn-black-yellow">
                Cambiar
            </button>
        </form>
        <div>
            <img src="/img/customer/config-user.png" alt="help-service">
        </div>
    </div>
</section>

</x-layouts.app>