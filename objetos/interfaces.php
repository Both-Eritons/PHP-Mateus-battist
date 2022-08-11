<?php

use Humano as GlobalHumano;

interface Carac{
	public const NOME = "eriton";
	public function falar();
}
class Humano implements Carac{
	public function saidName(){
		echo "meu nome é ".self::NOME." \n";
	}
	public function falar(){
		echo "falar \n";
	}
}
$eriton = new GlobalHumano;
$eriton->falar();
$eriton->saidName();
