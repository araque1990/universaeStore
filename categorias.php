<?php
require 'includes/funciones.php';
existe_session();
comprobar_session();
includeTemplate('head');
?>

<body>
  <?php includeTemplate('header') ?>

  <section class="categories">
    <div class="container">
      <div class="titulo-barra-bloque">
        <h2>CATEGORÍAS</h2>
        <hr>
      </div>
      <div class="categories-container categorias">
        <?php $categorias = cargar_categorias();
        if (!$categorias) {
          echo "<p class='error-categoria'>Error de conexión con la base de datos</p>";
        } else { ?>
            <ul>
              <?php
              foreach ($categorias as $categoria) { ?>
                <?php $url = '/Ecommerce/productos.php?categoria=' . $categoria->id; ?>
                <li>
                  <div class="imagen-categorias">
                    <a href="<?php echo $url ?>">
                      <img src=<?php echo "/Ecommerce/build/img/images/categorias-$categoria->nombre.webp"; ?> alt="Imagen papeleria">
                    </a>
                  </div>
                  <!-- <div class="barra-categorias-imagen">
                  <img src="/Ecommerce/build/img/images/categorias-barra-vertical.webp" alt="Barra vertical">
                  <div class="texto-categorias">
                    <h3><//?php echo $categoria['nombre']; ?></h3>
                    <p><//?php echo $categoria['descripcion']; ?></p>
                  </div>
                </div> -->
                  <?php $categoria->nombre ?>
                </li>
            <?php }
            } ?>
            </ul>
          </div>

  </section>
</body>
<?php includeTemplate('footer'); ?>