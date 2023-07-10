
  <header class="header container">
    <div class="nav-bar">
      <div class="logo">
        <img src="/Ecommerce/build/img/header/logo-u-shop-azul.svg" alt="logo Universae">
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#">Textil</a></li>
          <li><a href="#">Papelería</a></li>
          <li><a href="#">Accesorios</a></li>
          <li><a href="#">Categorías</a></li>
          <li><a href="#">UNIVERSAE</a></li>
          <li class="burger_menu"><img src="/Ecommerce/build/img/header/burger_menu.svg" alt=""></li>
        </ul>
      </div>
      <div class="nav-icons">
        <ul>
          <li><a href="#"><img src="/Ecommerce/build/img/header/icono-buscar-header.svg" alt="icono buscar" class="fas fa-search" /></a></li>
          <li><a href="#"><img src="/Ecommerce/build/img/header/icono-comprar-header.svg" alt="icono comprar" class="fas fa-shopping-cart" /></a></li>
          <li><a href="#"><img src="/Ecommerce/build/img/header/icono-perfil-header.svg" alt="icono perfil" class="fas fa-user" /></a></li>
          <li><a href="/Ecommerce/logout.php"><img src="/Ecommerce/build/img/header/icono-logout-header.svg" alt="icono logout" class="fas fa-logout" /></a></li>
        </ul>
      </div>
    </div>
    <div class="saludo">
      <h1><?= saludar_usuario();?></h1>
    </div>
  </header>