<?php

    #echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
require_once 'entidade/Funcionario.php';

    if(isset($_POST['nome'],$_POST['funcao'],$_POST['salario'],$_POST['data-admissao'])){
        $obFunc = new Funcionario;
        $obFunc->nomeCompleto   = $_POST['nome'];
        $obFunc->registro       = $_POST['registro'];
        $obFunc->funcao         = $_POST['funcao'];
        $obFunc->salario        = $_POST['salario'];
        $obFunc->Cadastrar();

    #echo "<pre>"; print_r($obFunc); echo "</pre>"; exit;

        
    }

include_once('includes/header.php');
include_once('includes/formulario.php');
include_once('includes/footer.php');
