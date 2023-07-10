<x-layouts.app
  title="customer service"
  @parent
  link="css/configuration-styles.css"
>
<section class="client-service">
    <div class="client-service-module">
        <form>
            <h2>Servicio al cliente</h2>
            <label>
                Nombres
                <input type="text">
            </label>
            <label>
                Correo electronico
                <input type="text">
            </label>
            <label>
                DNI
                <input type="text">
            </label>
            <label>
                Mensaje
                <input type="text">
            </label>
            <button type="submit" class="btn-black-yellow">
                Enviar
            </button>
        </form>
        <div>
            <img src="/img/customer/customer-service.jpg" alt="help-service">
        </div>
    </div>
</section>
</x-layouts.app>