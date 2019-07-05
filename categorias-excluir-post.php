<?php 
  require_once 'global.php';

  $categoria = new Categoria($_GET['id']);

  $categoria->excluir();

  header('location: categorias.php');