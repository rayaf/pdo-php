<?php 
  require_once 'global.php';
  try  {  
    $categoria = new Categoria($_POST['id']);
    $categoria->nome = $_POST['nome'];

    $categoria->atualizar();

    header('location: categorias.php');
  } catch(Exception $e) {
    Erro::trataErro($e);
  }