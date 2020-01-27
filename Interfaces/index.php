<?php  


interface temquefazer{
	public function metodo($nome);
}


/**
 * 
 */
class Clas implements temquefazer
{
	public function metodo($nome){
           echo "Este metodo é obrigatório em tadoas as classes que usam a interface".$nome; 
	}
	
}
$obj = new Clas();
$nome = ':';
$obj->metodo($nome);