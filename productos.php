<?php
require 'includes/funciones.php';
existe_session();
comprobar_session();
includeTemplate('head');
?>

<body>
<?php
    includeTemplate('header'); ?>
  <section class="categoria-productos container">
    <?php
    $categoria = cargar_categoria($_GET['categoria']);
    $productos = [];
    $productos = cargar_productos_categoria($categoria->id);

    if (!$categoria || !$productos) { ?>
      <p class='error-categoria'>Error de conexión</p>;
    <?php } else {
      $nombre_categoria = $categoria->nombre;
    ?>
      <h2>Categoría: <?= $nombre_categoria ?></h2>

      <table>
        <tr>
          <th>Nombre</th>
          <th>Stock</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <!-- <th>Imagen</th> -->
          <th>Comprar</th>
        </tr>
        <?php foreach ($productos as $producto) {
          $producto_id = $producto->id;
          $producto_nombre = $producto->nombre;
          $producto_stock = $producto->stock;
          $producto_precio = $producto->precio;
          //$producto_imagen = $producto->imagen; 
        ?>
          <tr>
            <td><?= $producto_nombre ?></td>
            <td><?= $producto_stock ?></td>
            <td><?= $producto_precio ?></td>
            <!-- <td>$producto_imagen</td> -->
            <td>
              <form action="agregar.php" method="post">
                <input type="hidden" name="producto_id" value="<?php echo $producto_id ?>">
                <input type="number" class="cantidad" name="cantidad" min="1" value="1" >
              </form>
            </td>
            <td>
              <form action="agregar.php" method="post">
                <input type="hidden" name="producto_id" value="<?php echo $producto_id ?>">
                <input type="submit" value="Agregar">
              </form>
          </tr>
        <?php } ?>
      </table>
    <?php }
    ?>
  </section>
</body>