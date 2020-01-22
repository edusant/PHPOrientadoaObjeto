<?php

/**
 * 
 */
class login
{
	private $email;
	private $senha;
	// Pegando o emial via set 
	public function setemail($em){
		$email = filter_var($em, FILTER_SANITIZE_EMAIL);
		$this->email = $email;

	}


	// Pegando o senha via set 
	public function setsenha($senha){
		$this->senha = $senha;

	}
	//Chamando a função para fazer login

	public function ordem(){
		$this->fazendoLogin();
	}


	//Função fazaer o login
	private function fazendoLogin(){
		if ($this->email == "Teste@teste.com" && $this->senha == "1234") {
			echo "Login realizado com sucesso";
		}
		else
		{
			echo "Nada de login feito, palhaço";
		}
	}



	//Retornar o valor via GET


	public function getEmail(){
		return $this->email;
	}


	public function getSenha(){
		return $this->senha;
	}

}