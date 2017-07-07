<?php 
/**
* 
*/

require_once (__DIR__."/../../application/model/User.php");

class controllerUsuario
{
	
	public function registerUser($cpf, $nome,$email,$senha,$tipo,$telefone,$endereco) {
		return UserDAO::getInstance()->insertNewUser(new User($cpf, $nome,$email,$senha,$tipo,$telefone,$endereco));
	}

}


 ?>