<?php
require 'app.php';

function includeTemplate(string $name, bool $inicio = false)
{
  include TEMPLATES_URL . "/$name.php";
}

function comprobar_session()
{
  if (isset($_POST['email']) && isset($_POST['pw'])) {
    $credenciales = comprobar_usuario($_POST['email'], $_POST['pw']);
    if ($credenciales) {
      existe_session();
      $_SESSION['id'] = $credenciales->id;
      $_SESSION['nombre'] = $credenciales->nombre;
      $_SESSION['apellido'] = $credenciales->apellido;
      $_SESSION['email'] = $credenciales->email;
      $_SESSION['pw'] = $credenciales->pw;
      $_SESSION['rol'] = $credenciales->rol;
      $_SESSION['login'] = true;
      header('Location: index.php');
    } else {
      existe_session();
      $_SESSION['err'] = true;
      header('Location: login.php');
    }
    return;
  }
}

function saludar_usuario()
{
  if (isset($_SESSION['nombre'])) {
    $nombre = trim(mb_convert_case($_SESSION['nombre'], MB_CASE_TITLE, "UTF-8"));
    return "Te damos la bienvenida a Universae Store" . "<pre> </pre>" . "<span>$nombre.</span>";
  }
}

function registrar_usuario()
{
  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['pw'])) {
    $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $query = "INSERT INTO usuarios (nombre, apellido, email, pw) VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[email]', '$password')";
    $bd = obtener_conexion();
    $res = $bd->prepare($query);
    $res->execute();
    $bd = null;
    header('Location: login.php');
  }
}

function consultar_usuario($email)
{
  $bd = obtener_conexion();
  $res = $bd->prepare('SELECT * FROM usuarios WHERE email = ?');
  $res->execute([$email]);
  $bd = null;
  return $res->fetch();
}

function comprobar_usuario($email, $password)
{
  $usuario = consultar_usuario($email);
  if (!$usuario) {
    return false;
  }
  if (password_verify($password, $usuario->pw)) {
    return $usuario; // contraseña válida
  } else {
    return false; // contraseña inválida
  }

}

function obtener_conexion()
{
  $user = 'root';
  $password = '101415';
  $dbname = 'universaestore';
  $database = new PDO("mysql:host=localhost;dbname=$dbname", $user, $password);
  $database->query("SET NAMES 'utf8'");
  $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $database;
}

function existe_session()
{
  if (empty(session_id())) {
    session_start();
  }
}

function cargar_categorias() {
  $bd = obtener_conexion();
  $res = $bd->prepare('SELECT * FROM categorias');
  $res->execute();
  $bd = null;
  return $res->fetchAll();
}

function cargar_categoria($categoria) {
  $bd = obtener_conexion();
  $res = $bd->prepare("SELECT * FROM categorias WHERE id = $categoria");
  $res->execute();
  $bd = null;
  return $res->fetch();
}

function cargar_productos_categoria($categoria_id) {
  $bd = obtener_conexion();
  $res = $bd->prepare('SELECT * FROM productos WHERE categoria_id = ?');
  //die(var_dump($categoria_id));
  $res->execute([$categoria_id]);
  $bd = null;
  return $res->fetchAll();
}