<?php
class Pessoa{
	private function privado(){
		echo "privado";
	}
	public function publico(){
		$this->privado();
	}
	protected function protegido(){
		echo "protegido";
	}
}

$pessoa = new Pessoa;
$pessoa->publico();
