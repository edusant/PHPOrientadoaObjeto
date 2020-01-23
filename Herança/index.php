<?php  

include 'classeexemplo.php';


$carro = new carro();

$carro->nome = "Gol";
$carro->ano = 2020;
$carro->cor = 'Azul';


$carro->andar();
$carro->parar();
$carro->metodoexclusivocarro();
var_dump($carro);


echo "<br><br>";
$moto = new moto();

$moto->nome = "X-10";
$moto->ano = 2020;
$moto->cor = 'Azul';


$moto->andar();
$moto->parar();
$moto->metodoexclusivomoto();
var_dump($moto);