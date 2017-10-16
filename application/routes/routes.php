<?php 

require_once ('../controller/controllerUser.php');

		//Checa as informações da primeira parte do cadastro
	if (isset($_POST['cadUserExterno'])) {
		//Recebe informações do FORM

		//TODO CODE
		//dados de usuario
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		
		$ocupacao = $_POST['ocupacao'];
		$estadoCivil = $_POST['estCivil'];
		$empresa = $_POST['empresa'];
		$telefone = $_POST['telefone'];
		$celular = $_POST['celular'];
		$whatsapp = $_POST['whatsapp'];
		$tipo = '3';
	
		/*dados de endereco
		//$pais = $_POST['pais'];
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
		*/

		//por enquanto vou deixar como true, mas depois teremos que implementar uma checagem desses dados.

		$register1 = true;
		if($register1){
			header("location:../../public/cadastroUsuarioExterno2.php?register1=true");
		}else{
			header("location:../../public/cadastroUsuarioExterno.php?register1=false");
		}

	}

		//Checa se foi requerido cadastrar novo usuário
		if (isset($_POST['cadUserExterno'])) {
			//Recebe informações do FORM
		
			//dados de endereco
			$pais = $_POST['pais'];
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