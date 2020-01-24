<?php
class banco
{
    const saldo = 8000;
 	public function exibirsaldo(){
        echo self::saldo;
    }   
    
}



class meubanco extends banco
{
    const saldo = 2000;
 	public function exibirsaldo(){
        echo parent::saldo;
    }   
}



$obj = new meubanco();

$obj->exibirsaldo();



$obj = new banco();

$obj->exibirsaldo();
