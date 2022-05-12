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
            return true;
        }
        
        public function atualizar(){
            return (new Database('funcionarios'))->update('id = '.$this->id,[
                                                                        'nome'      => $this->nomeCompleto,
                                                                        'registro'  => $this->registro,
                                                                        'funcao'    => $this->funcao,
                                                                        'salario'   => $this->salario,
                                                                        'data'      => $this->data
                                                                      ]);
          }
        
          /**
           * Método responsável por excluir a funcionario do banco
           * @return boolean
           */
          public function excluir(){
            return (new Database('funcionarios'))->delete('id = '.$this->id);
          }
        
          /**
           * Método responsável por obter as funcionarios do banco de dados
           * @param  string $where
           * @param  string $order
           * @param  string $limit
           * @return array
           */
          public static function getFuncionarios($where = null, $order = null, $limit = null){
            return (new Database('funcionarios'))->select($where,$order,$limit)
                                          ->fetchAll(PDO::FETCH_CLASS,self::class);
          }
        
          /**
           * Método responsável por buscar uma funcionario com base em seu ID
           * @param  integer $id
           * @return Funcionario
           */
          public static function getFuncionario($id){
            return (new Database('funcionarios'))->select('id = '.$id)
                                          ->fetchObject(self::class);
          }
        

    }
    