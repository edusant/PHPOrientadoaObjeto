<?php


class Automovel
{
	public $nome;
	public $ano;
	public $cor;

	public function parar(){
		echo "Parou <br><br>";
	}

	public function andar(){
		echo "andou <br><br>";
	}

}


class carro extends Automovel
{
	
	public function metodoexclusivocarro(){
		echo "Metódo só do carro <br><br>";
	}
}



class moto extends Automovel
{
	
	public function metodoexclusivomoto(){
		echo "Metódo só da moto <br><br>";
	}
}