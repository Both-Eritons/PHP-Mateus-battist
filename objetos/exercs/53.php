<?php

class Cachorro{
	function latir(){
		echo "Au Au Au Au \n";
	}
	function andar(){
		echo "andando... \n";
	}
}
$dog = new Cachorro;

$dog->latir();
$dog->andar();
