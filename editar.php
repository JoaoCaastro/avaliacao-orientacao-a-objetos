<?php

require_once('entidade/Funcionario.php');

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A FUNCIONARIO
$obFunc = Funcionario::getFuncionario($_GET['id']);

//VALIDAÇÃO DA FUNCIONARIO
if(!$obFunc instanceof Funcionario){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['registro'],$_POST['funcao'],$_POST['salario'])){
  $obFunc->nome   = $_POST['nome'];
  $obFunc->registro       = $_POST['registro'];
  $obFunc->funcao         = $_POST['funcao'];
  $obFunc->salario        = $_POST['salario'];
  $obFunc->Atualizar();


  header('location: index.php?status=success');
  exit;
}


require_once('includes/header.php');
require_once('includes/formulario.php');
require_once('includes/footer.php');

?>