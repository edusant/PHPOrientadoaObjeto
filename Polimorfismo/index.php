<?php

class Animal
{
	public function iniciar_corrida(){
		echo "inicaiando";
	}
	
	public function correr(){
		echo "Correu";
	}
}
class Egua extends Animal
{
	public function iniciar_corrida(){
		echo "O Polimorfismo deixa tudo diferente";
	}
	
}


$obj = new Egua();

$obj->iniciar_corrida();