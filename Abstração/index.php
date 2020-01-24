<?php
abstract class banco
{
    protected $saldo = 5000;
    // Força a classe que estende ClasseAbstrata a definir esse método
    abstract protected function depositar($valor);
    
    
}



class meubanco extends banco
{
    public function depositar($valor){
        $this->saldo = $valor + $this->saldo;
        echo "Seu novo saldo é: ".$this->saldo;
    }
}



$obj = new meubanco();

$obj->depositar(20000);