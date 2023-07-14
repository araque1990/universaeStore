<body>
  <section class="categories">
    <div class="container">
      <div class="titulo-barra-bloque">
        <h2>CATEGORÍAS</h2>
        <hr>
      </div>
      <div class="categories-container">
        <ul>
          <?php
          foreach ($categories as $category) : ?>
            <li><?= $category["nombre"] ?></li>
          <?php endforeach;
          ?>

        </ul>
      </div>
      <button class="green-button">
        <a href="change-your-way-collection.php">VER MÁS</a>
      </button>
    </div>
  </section>
</body>