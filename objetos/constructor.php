<?php


class Carro{
	protected $portas;
	protected $cor;
	protected $marca;
	function __construct(
		String $portas, String $cor, String $marca){
		$this->portas = $portas;
		$this->cor = $cor;
		$this->marva = $marca;
	}

	public function getColor(){
		return $this->cor;
	}
	public function setColor(String $cor){
		return $this->cor = $cor;
	}

}
$ferrari = new Carro(4, "vermelho", "ferrari");

echo $ferrari->getColor()."\n";
$ferrari->setColor("verde")."\n";
echo $ferrari->getColor()."\n";
