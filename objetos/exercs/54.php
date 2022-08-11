<?php
declare(strict_types=1);

use Pessoa as GlobalPessoa;

class Pessoa{
	public $nome = "Eriton";
	public $idade = 18;

	public function andar(String $msg_andar){
		return $msg_andar;
	}
}
$eriton = new GlobalPessoa;
echo $eriton->andar("andando...");
