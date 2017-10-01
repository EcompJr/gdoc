<?php 
/**
* 
*/

require_once '../persistence/Connection.class.php';

class controllerUser
{
	
	private $conn = null;

	function __construct()
	{
		$this->conn = Connection::getInstance();
	}

	public function registerUser($nome, $pais, $email, $cpf, $ocupacao, $estadoCivil , $empresa, $telefone, $celular, $whatsapp, $estado, $cidade, $cep, $logradouro, $numero, $complemento, $bairro, $senha, $tipo) {
		
		$conn = Connection::getInstance();
		
		$queryAddress= "INSERT INTO endereco(`street`, `city`, `state`, `country`, `district`, `number`, `cep`, `complement`) VALUES(\"$logradouro\", \"$cidade\", \"$estado\", \"$pais\", \"$bairro\", \"$numero\", \"$cep\", \"$complemento\");";
		//
		$sqlAddress = $conn->query($queryAddress);

		//Recupera o ultimo id inserido em endereco, para adicionar em usuario o id referente
		$last_id_Address = $this->conn->lastInsertId();


		$queryUser = "INSERT INTO user (`cpf`, `name`, `email`, `password`, `type`, `phone`, `address`, `occupation`, `maritalStatus`, `company`, `cellphone`, `whatsapp`, `active`) VALUES (\"$cpf\", \"$nome\", \"$email\", \"$senha\", \"$tipo\", \"$telefone\", \"$last_id_Address\", \"$ocupacao\", \"$estadoCivil\", \"$empresa\", \"$celular\", \"$whatsapp\", \"no\");";
	
		$sqlUser = $conn->query($queryUser);
		//verifica se as duas operacoes no banco funcionaram
		if($sqlAddress && $sqlUser){
		    return true;	
		}
		else {
			
			return false;
		}
		
	}

}
 ?>