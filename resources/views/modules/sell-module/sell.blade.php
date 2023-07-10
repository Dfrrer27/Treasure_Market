<x-layouts.app
  title="Sell"
  @parent
  link="css/sell-styles/sell-styles.css"
>
  <section class="animated fadeIn">
    <div class="container-msg">
      <h1>¡Hola! Antes que nada recuerda que para vender tienes que cambiar al rol de vendedor</h1>

      <div class="content-button" >
        <a href="#"><button class="button" type="button"><h2>Cambiar Rol</h2></button></a>

        <a href="{{ route('sell-create') }}"><button class="button" type="button"><h2>Continuar</h2></button></a>
      </div>
    </div>
  </section>
</x-layouts.app>
