<?php 
/**
 * Classe responsável por intermediar as ações que são realizadas no banco de dados relacionadas aos usuários
 * A presente classe utiliza o padrão Singleton, ou seja, terermos apenas uma instência dessa classe.
 * Class UserDAO
 */


require_once ('Conexao.php');
require_once ('CrudSql.php');

require_once (__DIR__."/../application/model/User.php");


/**
* 
*/
class UserDAO
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
		$stmt->bindValue(1,$User->getCpf);
		$stmt->bindValue(2,$User->getNome);
		$stmt->bindValue(3,$User->getEmail);
		$stmt->bindValue(4,$User->getSenha);
		$stmt->bindValue(5,$User->getTipo);
		$stmt->bindValue(6,$User->getTelefone);
		$stmt->bindValue(7,$User->getEndereco);
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return json_encode($rows);
	}


}

 ?>