<?php

abstract class Teste{
	public static function teste(){
		echo " abstract \n";
	}
	abstract public function testeABS();
}
class Nova extends Teste{
	public function testeABS()
	{
		echo "teste... \n";
	}
}
$x = new Nova;
$x->testeABS();
$x->teste();
Teste::teste();
