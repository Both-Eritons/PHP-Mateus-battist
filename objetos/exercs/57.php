<?php
class Cachorro{
	protected $tipo;
	protected $cor;
	protected $idade;
	function __construct(String $tipo, String $cor, Int $idade){
		$this->tipo = $tipo;
		$this->cor = $cor;
		$this->idade = $idade;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo(String $tipo): String{
		return $this->tipo = $tipo;
	}
	public function getCor(): String{
		return $this->cor;
	}
	public function setCor(String $cor): String{
		return $this->cor = $cor;
	}
	public function getIdade(): Int{
		return $this->idade;
	}
	public function setIdade(Int $newIdade): Int{
		return $this->idade = $newIdade;
	}


}
$dog = new Cachorro("caramelo", "cinza", 4);
echo $dog->getIdade()."\n";
echo $dog->getCor()."\n";
echo $dog->getTipo()."\n";
