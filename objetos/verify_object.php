<?php


class Humano{
	public function objeto(){
		return "texto...";
	}
}
$eriton = new Humano;

echo is_object($eriton) ? "sim\n" : "nao\n";
echo get_class($eriton)."\n";
echo method_exists($eriton, "objeto") 
	? "sim"
	: "nao";
