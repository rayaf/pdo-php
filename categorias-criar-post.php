<?php 
  require_once 'global.php';
  try{
    $categoria = new Categoria();
    $categoria->nome = $_POST['nome'];
    $categoria->inserir();

    header('location: categorias.php');
  } catch(Exception $e) {
    Erro::trataErro($e);
  }
