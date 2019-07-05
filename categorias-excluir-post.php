<?php 
  require_once 'global.php';
  try{
    $categoria = new Categoria($_GET['id']);

    $categoria->excluir();

    header('location: categorias.php');
  } catch(Exception $e) {
    Erro::trataErro($e);
  }