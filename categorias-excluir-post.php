<?php 
  require_once 'classes/Categoria.php';

  $categoria = new Categoria($_GET['id']);

  $categoria->excluir();

  header('location: categorias.php');