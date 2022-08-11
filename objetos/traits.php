<?php

trait Objeto{

	public function teste(){
		echo "testando...";
	}
}
class  Central{
	use Objeto;
}
$x = new Central;
$x->teste();

