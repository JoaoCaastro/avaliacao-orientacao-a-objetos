<?php

require_once 'entidade/Funcionario.php';
$obFunc = new Funcionario;


    if(isset($_POST['nome'],$_POST['registro'],$_POST['funcao'],$_POST['salario'])){
        $obFunc->nome   = $_POST['nome'];
        $obFunc->registro       = $_POST['registro'];
        $obFunc->funcao         = $_POST['funcao'];
        $obFunc->salario        = $_POST['salario'];
        $obFunc->Cadastrar();

        header('location: index.php?status=success');
        
    }

include_once('includes/header.php');
include_once('includes/formulario.php');
include_once('includes/footer.php');
