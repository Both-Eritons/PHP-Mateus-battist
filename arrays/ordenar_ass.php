<?php
/*
 * asort();
 * → ORGANIZA EM ORDEM CRESCENTE.
 * arsort();
 * → ORGANIZA EM ORDEM DESCRECENTE.
 ** arsort();
 * → ORGANIZA EM ORDEM DESCRECENTE.
* ksort();
 * → ORGANIZA EM ORDEM CRESCENTE(chave do array).
* krsort();
 * → ORGANIZA EM ORDEM DESCRECENTE(chave do array).
 */
$arr = [
	"eriton" => 18,
	"matheus" => 18,
	"bryan" => 19,
	"joao" => 19,
	"david" => 5
];
$arr2 = [
	"eriton" => 18,
	"matheus" => 18,
	"bryan" => 19,
	"joao" => 19,
	"david" => 5
];
$arr3 = [
	"eriton" => 18,
	"matheus" => 18,
	"bryan" => 19,
	"joao" => 19,
	"david" => 5
];

asort($arr);

print_r($arr);
echo "\n";
arsort($arr2);

print_r($arr2);

ksort($arr3);

print_r($arr3);
