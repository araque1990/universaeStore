<?php 
  class Categories_model {
    private $db;
    private $categories;
    public function __construct() {
      require_once("conections.php");
      $this->db = Conect::get_conection();
      $this->categories = array();
    }

    public function get_categories() {
      $query = $this->db->query("SELECT * FROM categorias");
      while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $this->categories[] = $row;
      }
      return $this->categories;
    }
  }
?>