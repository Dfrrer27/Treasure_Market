<nav>
  <div class="__col">

    {{-- sidebar --}}

    <div id="sidebar" class="sidebar">
      <div class="menu-content">
        <img id="menuImage" src="/img/nav/menu.png" alt="menu-img">
        <a class="logo" href="/"><img class="logo" src="/img/nav/logo.png" alt="logo-img"></a>
      </div>

      <ul class="list">

        <li class="list__item list__item--click">
          <div class="list_button list_button--click">
            <img src="/img/nav/sidebar/category.png" alt="category-img">
            <a class="nav__link">Buscar por Categoria</a>
            <img class="list_arrow" src="/img/nav/sidebar/arrow.png" alt="arrow">
          </div>

          <ul class="list__show">
            <li class="list__inside">
              <a href="{{ route('showCategory', ['category' => 'Ropa y Accesorios']) }}" class="nav__link nav__link--inside">Ropa y Accesorios</a>
            </li>

            <li class="list__inside">
              <a href="{{ route('showCategory', ['category' => 'Herramientas']) }}" class="nav__link nav__link--inside">Herramientas</a>
            </li>

            <li class="list__inside">
              <a href="/#categories" class="nav__link nav__link--inside">Mas categorias</a>
            </li>

          </ul>

        </li>

        <li class="list__item list__item--click">
          <div class="list_button list_button--click">
            <img src="/img/nav/sidebar/history.png" alt="category-img">
            <a class="nav__link">Historial</a>
            <img class="list_arrow" src="/img/nav/sidebar/arrow.png" alt="arrow">
          </div>

          <ul class="list__show">
            <li class="list__inside">
              <a href="{{ route('history', ['role' => 'ventas']) }}" class="nav__link nav__link--inside">De Ventas</a>
            </li>

            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">De Compras</a>
            </li>

          </ul>

        </li>

        <li class="list__item list__item--click">
          <div class="list_button list_button--click">
            <img src="/img/nav/sidebar/configuration.png" alt="configuration-img">
            <a class="nav__link">Ayuda y configuración</a>
            <img class="list_arrow" src="/img/nav/sidebar/arrow.png" alt="arrow">
          </div>

          <ul class="list__show">
            <li class="list__inside">
              <a href="{{ route('customer') }}" class="nav__link nav__link--inside">Servicio al cliente</a>
            </li>

            <li class="list__inside">
              <a href="{{ route('account') }}" class="nav__link nav__link--inside">Tu cuenta</a>
            </li>

          </ul>

        </li>

      </ul>

      <div class="content-user">

    @if (Route::has('login'))
      @auth

        <div class="user">
          <img class="img-radius" src="{{ Auth::user()->profile_photo_url }}" alt="Foto de perfil">
          <h3>{{ Auth::user()->usuario_nombre }}</h3>
          <h3>Rol: {{ Auth::user()->roles()->first()->nombre }}</h3>
        </div>
      
        <div>
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="logout-user">
                <img src="/img/nav/sidebar/logout.png" alt="logout-img">
                <h2>Cerrar sesión</h2>
              </button>
          </form>
        </div>

      @else

        <div class="user">
          <img src="/img/nav/sidebar/user.png" alt="user-img">
          <h3>Sin cuenta</h3>
        </div>

        <a href="{{ route('login') }}" class="login-user">
          <img src="/img/nav/sidebar/logout.png" alt="logout-img">
          <h2>Iniciar Sesión</h2>
        </a>

        @if (Route::has('register'))
            <p><a href="{{ route('register') }}">¿No tienes cuenta?</a></p>
        @endif
      @endauth
    @endif

      </div>

    </div>

    {{-- fin sidebar --}}

    <img id="menu" class="menu" src="/img/nav/menu.png" alt="menu-img">
    <a class="logo" href="/"><img class="logo" src="/img/nav/logo.png" alt="logo-img"></a>
  </div>

  <div class="__col">
    <div class="__nav-search-input">
      <input type="text">
      <div class="img">
        <img src="/img/nav/search.png" alt="img-search">
      </div>
    </div>
  </div>

  <div class="__col">

    <a class="btn-icon" type="button" href="/sell">
      <img src="/img/nav/seller.png" alt="vendido-img">
      <h4 class="link">Vender</h4>
    </a>

    <a class="btn-icon" type="button" href="/cart">
      <img src="/img/nav/shopping-cart.png" alt="carrito-img">
      <h4 class="link">Carrito</h4>
    </a>
    
  </div>

</nav>