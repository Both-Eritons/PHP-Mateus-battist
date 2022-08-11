<?php


class Pessoa{
	public $nome = "eriton";
	public $idade = 18;

	public function setName(String $name){
		return $this->nome = $name;
	}
	public function getName(){
		return $this->nome;
	}
}
$eriton = new Pessoa;
echo $eriton->getName();
