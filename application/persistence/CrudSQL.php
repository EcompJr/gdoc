<?php 

/**
* 
*/
class CrudSQL
{
	
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {

        if (!isset(self::$instance)) {
            self::$instance = new CrudSql();
        }

        return self::$instance;
    }

    public function insertNewUser(){
    	return "INSERT INTO user (Cpf, Nome, Email, Senha, Tipo, Telefone, Endereco) VALUES (?, ?, ?, ?, ?, ?, ?)";
    }
}



 ?>