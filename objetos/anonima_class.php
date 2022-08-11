<?php

$an = new class(){
	public $nome = "nome";

	public function dizee(){
		return $this->nome;
	}
};
echo $an->dizee();
