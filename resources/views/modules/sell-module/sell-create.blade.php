<x-layouts.app
  title="Create Product"
  @parent
  link="css/sell-styles/sell-create-styles.css"
>

<div class="content">

  <section>

    <div class="content-form">
      <form class="form" action="">
        <div class="column-one">
          <div class="return">
            <img src="/img/customer/arrow.png" alt="arrow">
            <h1>Vender Producto</h1>
          </div>

          <div class="form-group">
            <label for="">Nombre del Producto:</label>
            <input type="text">
          </div>
  
          <div class="form-group">
            <label for="">Precio:</label>
            <input type="text">
          </div>
  
          <div class="form-group">
            <label for="">Descuento (opcional):</label>
            <input type="text">
          </div>
  
          <div class="form-group">
            <label for="">Descripción:</label>
            <input type="text">
          </div>

          <button type="button"><h3>Enviar</h3></button>

        </div>

        <div class="column-two">
          <div class="form-group">
            <label for="">Cantidad:</label>
            <input type="text">
          </div>
  
          <div class="form-group">
            <label for="">Categoría:</label>
            <select name="" id="">
                <option value="" disabled selected>Selecciona una categoría</option>
                <option value="Herramientas">Herramientas</option>
                <option value="Relojes y Joyas">Relojes y Joyas</option>
                <option value="Juguetes">Juguetes</option>
                <option value="antigüedades">antigüedades</option>
                <option value="Herramientas para Jardín">Herramientas para Jardín</option>
                <option value="Ropa y Accesorios">Ropa y Accesorios</option>
                <option value="Libros, Revistas y Comics">Libros, Revistas y Comics</option>
                <option value="Muebles">Muebles</option>
                <option value="Instrumentos Musicales">Instrumentos Musicales</option>
                <option value="Electrodomésticos">Electrodomésticos</option>
            </select>
        </div>
  
          <div class="form-group">
            <label for="">Marca (opcional):</label>
            <input type="text">
          </div>
  
          <div class="form-group">
            <label for="">Metodo de Pago:</label>
            <select name="" id="">
              <option value="" disabled selected>Selecciona un metodo de Pago</option>
              <option value="Contra Entrega">Contra Entrega</option>
              <option value="Tarjeta">Tarjeta</option>
          </select>
          </div>
        </div>

        <div class="column-three">
          <label for="">Subir Imagen:</label>
          <input type="file">
        </div>

      </form>
    </div>

  </section>

  <aside>
    <img src="/img/remember.png" alt="recuerda">
  </aside>

</div>

</x-layouts.app>