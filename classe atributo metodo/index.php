<?php  

include 'classeexemplo.php';


$obj = new primeiraclasse();


$obj->nome = "Nome da silva";

$obj->idade = 16;


// uma forma de escrever usando o objeto 

echo "exemplo 1 Nome do cidadão: ".$obj->nome." Idade do cidadão ". $obj->idade. "<br><br><br><br>";
//Chamando o metódo 
$obj->pri();
var_dump($obj);