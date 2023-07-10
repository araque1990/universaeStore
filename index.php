<?php
require_once 'includes/funciones.php';
// inicia la sesión
existe_session();
comprobar_session();
// Si no hay una sesión iniciada, redirigir al login
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
}

includeTemplate('head');
?>
<body>
  <?php
  includeTemplate('header');
  ?>
  
  <main class="primary">
    <section class="slide-hero">

    </section>

    <section class="collections container">
      <div class="pioneering-collection">
        <h2>COLECCIÓN <br> PIONEROS</h2>
        <button class="green-button">
          <a href="pioneering-collection.php">VER MÁS</a>
        </button>
      </div>
      <div class="change-your-way-collection">
        <h2>COLECCIÓN <br> CHANGE YOUR WAY</h2>
        <button class="green-button">
          <a href="change-your-way-collection.php">VER MÁS</a>
        </button>
      </div>
    </section>

    <section class="top-sales container">
      <div class="titulo-barra-bloque">
        <h2>TOP VENTAS</h2>
        <hr>
      </div>

      <div class="top-sales-container">
        <ul class="top-sales-container-grid">
          <li>
            <img src="/Ecommerce/build/img/images/producto-textil-sudadera-change-your-way.webp" alt="Sudadera change your way">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Sudadera Change Your Way</p>
            <p class="precio">24,99 €</p>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-textil-sudadera-con-capucha.webp" alt="Sudadera con capucha">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Sudadera con capucha</p>
            <p class="precio-naranja">20,30 €</p>
            <p class="precio-tachado">27,30 €</p>
            <p class="descuento">30%</p>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-textil-sudadera-sin-capucha.webp" alt="Sudadera sin capucha">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Sudadera sin capucha</p>
            <p class="precio">19,99 €</p>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-textil-camiseta-manga-corta.webp" alt="camiseta manga corta">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Camiseta</p>
            <p class="precio">19,99 €</p>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-textil-camiseta.webp" alt="camiseta change your way">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Camiseta Change Your Way</p>
            <p class="precio">19,99 €</p>
          </li>
        </ul>
        <div class="flechas-carrusel">
          <div class="flecha-izquierda">
            <img src="/Ecommerce/build/img/svg/flecha-carrusel-izquierda.svg" alt="Flecha izquierda">
          </div>
          <div class="flecha-derecha">
            <img src="/Ecommerce/build/img/svg/flecha-carrusel-derecha.svg" alt="Flecha derecha">
          </div>
        </div>
      </div>
    </section>

    <section class="categories">
      <div class="container">
        <div class="titulo-barra-bloque">
          <h2>CATEGORÍAS</h2>
          <hr>
        </div>
        <div class="categories-container">
          <ul>
            <li>
              <div class="imagen-categorias">
                <img src="/Ecommerce/build/img/images/categorias-papeleria.webp" alt="Imagen papeleria">
              </div>
              <div class="barra-categorias-imagen">
                <img src="/Ecommerce/build/img/images/categorias-barra-vertical.webp" alt="Barra vertical">
                <div class="texto-categorias">
                  <h3>PAPELERÍA</h3>
                  <p>Comienza tu FP con <br> el mejor material de <br> la mano de UNIVERSAE</p>
                </div>
              </div>
            </li>
            <li>
              <div class="imagen-categorias">
                <img src="/Ecommerce/build/img/images/imagen-textil.webp" alt="Imagen sudadera">
              </div>
              <div class="barra-categorias-imagen">
                <img src="/Ecommerce/build/img/images/categorias-barra-vertical.webp" alt="Barra vertical">
                <div class="texto-categorias">
                  <h3>TEXTIL</h3>
                  <p>Comienza tu FP con la mejor <br> variedad de prendas de la <br> mano de UNIVERSAE</p>
                </div>
              </div>
            </li>
            <li>
              <div class="imagen-categorias">
                <img src="/Ecommerce/build/img/images/categorias-accesorios.webp" alt="Imagen accesorios">
              </div>
              <div class="barra-categorias-imagen">
                <img src="/Ecommerce/build/img/images/categorias-barra-vertical.webp" alt="Barra vertical">
                <div class="texto-categorias">
                  <h3>ACCESORIOS</h3>
                  <p>Comienza tu FP con <br> con el mejor material de <br> la mano de UNIVERSAE</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <button class="green-button">
          <a href="change-your-way-collection.php">VER MÁS</a>
        </button>
      </div>
    </section>

    <section class="solidarity-action container">
      <h2>ACCIÓN SOLIDARIA<span><img src="/Ecommerce/build/img/svg/icono-lazo-accion-solidaria.svg" alt="icono lazo"></span></h2>
      <div class="solidarity-action-text">
        <h3>COLABORAMOS CON A.E.C.</h3>
        <div class="solidarity-action-container">
          <div class="solidarity-action-text-bar">
          </div>
          <div class="solidarity-action-paragraph">
            <p>Una organización sin ánimo de lucro formada por pacientes, familiares, voluntarios, colaboradores y profesionales.</p>
            <p>Desarrollan su actividad en toda España. Por cada compra, colaboras directamente a la ayuda a combatir esta enfermedad juntos.</p>
          </div>
        </div>
      </div>
      <div class="solidarity-action-logo">
        <img src="/Ecommerce/build/img/images/logo-asociacion-espanola-contra-el-cancer.webp" alt="Logo acción solidaria">
      </div>
      <div class="solidarity-action-productos">
        <ul>
          <li>
            <div>
              <img src="/Ecommerce/build/img/images/producto-solidario-pulsera.webp" alt="imagen pulsera">
              <div class="icono-like-blanco">
                <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
              </div>
              <p>Pulsera</p>
              <p class="precio">5 €</p>
            </div>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-solidario-botella.webp" alt="imagen botella">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Botella de cristal colaboración con A.E.C.</p>
            <p class="precio">5 €</p>
          </li>
          <li>
            <img src="/Ecommerce/build/img/images/producto-solidario-llavero.webp" alt="imagen llavero">
            <div class="icono-like-blanco">
              <img src="/Ecommerce/build/img/svg/icono-like-blanco.svg" alt="icono like">
            </div>
            <p>Llavero</p>
            <p class="precio">8,99 €</p>
          </li>
        </ul>
      </div>
      <button class="green-button">
        <a href="change-your-way-collection.php">VER MÁS</a>
      </button>
    </section>

    <section class="newsletter">
      <div class="container newsletter-container">
        <div class="texto-newsletter">
          <h3>SUSCRÍBETE A NUESTRA NEWSLETTER</h3>
          <p>Sé el primero en conocer todas nuestras promociones de descuento y nuevos productos de merchandising.</p>
        </div>
        <div class="formulario">
          <form action="">
            <input type="text" placeholder="Introduce tu email">
            <button class="orange-button">SUSCRÍBETE</button>
          </form>
        </div>
        <div class="imagen-newsletter">

        </div>
      </div>
    </section>
  </main>
  <?php
  includeTemplate('footer');
  ?>
</body>

</html>