<?php 
  require_once 'global.php';
  
  $categoria = new Categoria();
  $categoria->nome = $_POST['nome'];
  $categoria->inserir();

  header('location: categorias.php');
