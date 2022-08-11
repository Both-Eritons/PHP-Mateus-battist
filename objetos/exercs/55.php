<?php
class Carro{
	public $max_velo = 100;

	public function setVelocidadeMaxima(Int $velo){
		return $this->max_velo = $velo;
	}
	public function getVelo(){
		return $this->max_velo;
	}

}
$carro = new Carro;

echo $carro->getVelo()."\n";
$carro->setVelocidadeMaxima(128);
echo $carro->getVelo()."\n";
