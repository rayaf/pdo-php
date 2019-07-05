<?php 
  require_once 'classes/Categoria.php';

  $categoria = new Categoria($_POST['id']);
  $categoria->nome = $_POST['nome'];

  $categoria->atualizar();

  header('location: categorias.php');