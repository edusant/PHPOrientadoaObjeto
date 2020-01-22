<?php

class exemplo
{
	//Primeiro metódo chamado quando nós fazemos a instância 
	private $nome;	
	function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function getnome(){
		echo"O nome é: ".$this->nome;
	}
}