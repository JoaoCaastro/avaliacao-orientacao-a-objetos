<?php

include_once('entidade/Funcionario.php');

$funcionarios = Funcionario::getFuncionarios();

include_once('includes/header.php');
include_once('includes/listagem.php');
include_once('includes/footer.php');
