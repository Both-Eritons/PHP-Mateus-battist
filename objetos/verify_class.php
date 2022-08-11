<?php

class Humano{
	public $nome = "eriton";
	public $sexo = "homem";
	public $eriton = "gigachad";

	public function teste($teste){
		echo $teste;
	}
}
$eriton = new Humano;

echo class_exists("eriton") ? "sim \n" : "nao \n";

print_r(get_class_vars("humano"));
print_r(get_class_methods("humano"));
