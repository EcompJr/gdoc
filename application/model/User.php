<?php 

/**
* 
*/
class Usuarios
{
	private $idUser;
	private $cpf;
	private $nome;
	private $email;
	private $senha;
	private $tipo;
	private $telefone;
	private $endereco;
	
	public function __construct($idUser, $cpf, $nome, $email, $senha, $tipo, $telefone, $endereco) {

		$this->$idUser = $idUser;
		$this->$cpf = $cpf;
		$this->$nome = $nome;
		$this->$email = $email;
		$this->$senha = $senha;
		$this->$tipo = $tipo;
		$this->$telefone = $telefone;
		$this->$endereco = $endereco;

	}


	public function setIdUser($idUser) {
		$this->idUser = $idUser; 
	}
	
	public function getIdUser() {
		return $this->idUser;
		 }
	
	public function setCpf($cpf) {
		$this->cpf = $cpf; 
	}
	

	public function getCpf() { 
		return $this->cpf; 
	}
	
	public function setNome($nome) { 
		$this->nome = $nome; 
	}
	

	public function getNome() { 
		return $this->nome; 
	}
	
	public function setEmail($email) {
	 $this->email = $email; 
	}
	
	public function getEmail() { 
		return $this->email; 
	}
	

	public function setSenha($senha) { 
		$this->senha = $senha; 
	}
	
	public function getSenha() { 
		return $this->senha; 
	}
	
	public function setTipo($tipo) { 
		$this->tipo = $tipo;
	}
	
	public function getTipo() { 
		return $this->tipo;
	}
	
	public function setTelefone($telefone) {
	 $this->telefone = $telefone;
	}
	
	public function getTelefone() { 
		return $this->telefone;
	}
	
	public function setEndereco($endereco) {
	 $this->endereco = $endereco;
	 }
	
	public function getEndereco() { 
		return $this->endereco;
	}
}
?>