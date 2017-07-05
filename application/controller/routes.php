<?php 

require_once('controllerUser.php');

//Checa se foi requerido cadastrar novo usuário
if (isset($_GET['cadastroUsuarioExterno'])) {
	//Recebe informações do FORM

	//TODO CODE
	
	$name = $_GET['name'];
	if(isset($name)){
		//Tenta criar requisição
		if ( (new controllerUser())->registerUser($idUser,$cpf,$nome,$email,$senha,$tipo,$telefone,$endereco)) {
			//OK se conseguiu
			header("HTTP/1.0 200 OK");
		}
		//se não conseguir
		else{
			//erro ao criar
			header("HTTP/1.0 500 Internal error")

		}
	}
	else{
		//Erro an aquisição de informações do FORM
		// Campo Vazio ou Nulo
		header("HTTP/1.0 400 Bad Request");
	}
	

}

?>