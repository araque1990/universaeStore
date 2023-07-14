<?php 
require_once("/Ecommerce/Models/categories_model.php"); 
$category = new Categories_model();
$categories = $category->get_categories();
require_once("/Ecommerce/Views/categories_view.php");
?>