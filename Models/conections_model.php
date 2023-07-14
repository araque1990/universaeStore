<?php 
class Conect{
  public static function get_conection()
{
  try {
    $user = 'root';
  $password = '101415';
  $dbname = 'universaestore';
  $database = new PDO("mysql:host=localhost;dbname=$dbname", $user, $password);
  $database->query("SET NAMES 'utf8'");
  $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $database;
  } catch (PDOException $e) {
    die ("Error: " . $e->getMessage());
    echo "Linea del error: " . $e->getLine();
  }
  return $database;
}
} ?>