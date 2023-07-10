<?php
require __DIR__ . "/includes/funciones.php";
existe_session();
comprobar_session();
includeTemplate('head'); 

?>

<body>
  <?php includeTemplate('header'); ?>

  <main class="container seccion">
    <div class="form">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <fieldset>
          <legend>Inicia Sesión</legend>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="correo@correo.com" required value="<?php if (isset($usuario)) echo $usuario; ?>">
          <label for="password">Contraseña</label>
          <input type="password" name="pw" id="password" required placeholder="Introduzca su contraseña">
          <?php
          if (isset($_SESSION['err'])){
            echo "<p class = 'error'>Usuario o contraseña incorrectos</p>";
          }
          ?>
          <input type="submit" class="login-button" value="Iniciar Sesión">
          <p>¿No tienes una cuenta? </p><a href="registro.php">Regístrate gratis</a>
        </fieldset>
      </form>
    </div>
  </main>

</body>

<?php includeTemplate('footer'); ?>