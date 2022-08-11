<?php
class Humano{
	public $idade = 18;

	public function falar(String $msg){
		echo $msg;
	}
}
class Professor extends Humano{
	protected $salary = "2.900";

	public function getIdade(){
		return $this->idade;
	}
	public function isAdult(Int $num){
		return $this->getIdade() > $num ? true : false;
	}
	public function getSalary(){
		return $this->salary;
	}
}
$prof = new Professor;
