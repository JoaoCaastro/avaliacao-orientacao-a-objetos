<?php

require_once 'Db/Database.php';

class Funcionario{

    /**
     * Identificador único de funcionários
     * @var integer
     */
    public $id;

    /**
     * Nome do funcionário
     * @var string
     */
    public $nomeCompleto;

    /**
     * Funçao do funcionário
     * @var integer
     */
    public $registro;

    /**
     * Funçao do funcionário
     * @var string
     */
    public $funcao;

    /**
     * Salário atribuído ao funcionário
     * @var float
     */
    public $salario;

    /**
     * Data de criaçao do registro
     * @var string
     */
    public $data;

    /**
     * Método utilizado para cadastrar
     * @var boolean
     */
    public function Cadastrar() {

        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('funcionarios');
        $this->id = $obDatabase->insert([
                                            'nome'      => $this->nomeCompleto,
                                            'registro'  => $this->registro,
                                            'funcao'    => $this->funcao,
                                            'salario'   => $this->salario,
                                            'data'      => $this->data
                                        ]);

        #echo "<pre>"; print_r($this); echo "</pre>"; exit;
        

    }
    

}