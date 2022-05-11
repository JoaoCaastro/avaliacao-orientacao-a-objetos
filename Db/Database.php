<?php

class Database {

    const HOST = '127.0.0.1';

    const NAME = 'database_dev';

    const USER = 'root';

    const PASS = '';

    private $table;

    private $connection;

    public function __construct($table = null) {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection() {
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '. $e->getMessage());
        }
    }

    public function execute($query, $params = []) {
        try{
            $retorno = $this->connection->prepare($query);
            $retorno->execute($params);
            return $retorno;
        }catch(PDOException $e){
            die('ERROR: '. $e->getMessage());
        }
    }

    public function insert($valores) {

        $campos = array_keys($valores);
        $valoresDinamicos = array_pad([],count($campos),'?');

        $query = 'INSERT INTO '.$this->table.' ('.implode(',', $campos).') VALUES ('.implode(',', $valoresDinamicos).')';
        
        $this->execute($query,array_values($valores));

        return $this->connection->lastInsertId();
    }
    
}