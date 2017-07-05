<?php 
/**
 * Classe responsável por intermediar as ações que são realizadas no banco de dados relacionadas aos usuários
 * A presente classe utiliza o padrão Singleton, ou seja, terermos apenas uma instência dessa classe.
 * Class UsuerDAO
 */


require_once ('Conexao.php');
require_once ('CrudSql.php');

require_once (__DIR__."/../application/model/Usuer.php");


/**
* 
*/
class UsuerDAO
{
	
	
    /**
     * @var guarda uma referencia para UsuarioDAO
    */
	private static $instance;

	private function __construct(){

	  }

    /**
     * Método que cria uma única instância da classe UsuarioDAO
     * @return guarda|UsuarioDAO
    */
	public static function getInstance(){
		if(!isset(self::$instance)){
	        self::$instance = new UsuarioDAO();
	    }
		return self::$instance;
	}

	public function insertNewUser($User){
		$stmt = Conexao::getInstance()->prepare(CrudSql::getInstance()->insertNewUser());
		$stmt->bindValue()
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return json_encode($rows);
	}


}

 ?>