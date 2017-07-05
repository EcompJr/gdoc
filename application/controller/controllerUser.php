<?php 
/**
* 
*/

require_once (__DIR__."/../../application/model/User.php");

class controllerUsuario
{
	
	public function registerUser($idUser, $cpf, $nome,$email,$senha,$tipo,$telefone,$endereco) {
		return UserDAO::getInstance()->insertNewUser(new User($idUser, $cpf, $nome,$email,$senha,$tipo,$telefone,$endereco));
	}

}


 ?>