<?php


require'classes/produto.php';
require'models/produto.php';

use models\produto as molpro;
use classes\produto as clapro;



$produto = new molpro();

$produto->saida();

echo "<br><br>";


$models = new clapro();

$models->saida();