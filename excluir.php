<?php

require_once('entidade/Funcionario.php');

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA AO FUNCIONARIO
$obFunc = Funcionario::getFuncionario($_GET['id']);

//VALIDAÇÃO DA FUNCIONARIO
if(!$obFunc instanceof Funcionario){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obFunc->Excluir();

  header('location: index.php?status=success');
  exit;
}

require_once('includes/header.php');
require_once('includes/confirma-exclusao.php');
require_once('includes/footer.php');