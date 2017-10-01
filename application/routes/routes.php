<?php 

require_once ('../controller/controllerUser.php');

		//Checa se foi requerido cadastrar novo usuário
	if (isset($_POST['cadUserExterno'])) {
		//Recebe informações do FORM

		//TODO CODE
		//dados de usuario
		$nome = $_POST['nome'];
		$pais = $_POST['pais'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$ocupacao = $_POST['ocupacao'];
		$estadoCivil = $_POST['estCivil'];
		$empresa = $_POST['empresa'];
		$telefone = $_POST['telefone'];
		$celular = $_POST['celular'];
		$whatsapp = $_POST['whatsapp'];
		$tipo = '3';
		//dados de endereco
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$cep = $_POST['cep'];
		$logradouro = $_POST['logradouro'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];

		//senha
		$senha = $_POST['senha'];
		$confirmarSenha = $_POST['confirmarSenha'];
		$codedPassword = md5($senha);

		unset($_POST['cadUserExterno']);
		
		$userController = new controllerUser();

		$register = $userController->registerUser($nome, $pais, $email, $cpf, $ocupacao, $estadoCivil, $empresa, $telefone, $celular, $whatsapp, $estado, $cidade, $cep, $logradouro, $numero, $complemento, $bairro, $codedPassword, $tipo);
		//utilizando o  retorno da funcao, estes headers tem a funcao de mandar uma resposta ao usuario
		if($register){
			header("location:../../public/cadastroUsuarioExterno.php?register=true");
		}else{
			header("location:../../public/cadastroUsuarioExterno.php?register=false");
		}

	}

?>