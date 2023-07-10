<?php
require __DIR__ . "/includes/funciones.php";

?>
<?php
includeTemplate('head');
?>

<body>
  <?php includeTemplate('header'); ?>

  <main class="container seccion">

    <div class="form">
      <form action="crear_registro.php" method="POST" id="registro-form">
        <fieldset>
          <legend>Regístrate</legend>
          <label for="nombre">Nombre</label>
          <input type="nombre" name="nombre" required placeholder="Introduzca su nombre" value="<?php if (isset($usuario)) echo $usuario; ?>">
          <label for="apellido">Apellido</label>
          <input type="apellido" name="apellido" required placeholder="Introduzca su apellido" value="<?php if (isset($usuario)) echo $usuario; ?>">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required placeholder="correo@correo.com" value="<?php if (isset($usuario)) echo $usuario; ?>">
          <label for="password">Contraseña</label>
          <input type="password" name="pw" id="password" required placeholder="Introduzca su contraseña">
          <label for="password">Confirme su Contraseña</label>
          <input type="password" name="pw-confirm" id="confirmar-password" required placeholder="Confirme su contraseña">
          <input type="submit" class="login-button" value="Regístrate ahora">
          <p>¿Ya tienes cuenta? </p><a href="index.php">Inicia sesión</a>
        </fieldset>
      </form>
    </div>
  </main>

</body>

<?php includeTemplate('footer'); ?>