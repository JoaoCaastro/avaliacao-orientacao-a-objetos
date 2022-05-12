<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }
  $resultados = '';
  foreach($funcionarios as $funcionario){
    $resultados .= '<tr>
                      <td>'.$funcionario->id.'</td>
                      <td>'.$funcionario->nome.'</td>
                      <td>'.$funcionario->registro.'</td>
                      <td>'.$funcionario->funcao.'</td>
                      <td>'.$funcionario->salario.'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($funcionario->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$funcionario->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$funcionario->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum funcionario encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo funcionario</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome Completo</th>
            <th>Número de Registro</th>
            <th>Função</th>
            <th>Salário</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>