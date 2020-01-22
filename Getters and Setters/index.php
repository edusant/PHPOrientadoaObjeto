<?php  

include 'classeexemplo.php';


$obj = new login();




$obj->setemail('Teste@teste.com');
$obj->setsenha('1234');
$obj->ordem();




//Escrever os valores recuperados via get 
echo "<br><br><br>".$obj->getEmail(). "<br><br><br>";
echo "<br><br><br>".$obj->getSenha(). "<br><br><br>";