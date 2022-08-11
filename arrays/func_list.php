<?php

$pessoa = [
	"eriton",
	18,
	"programador",
	"preto"
];
print_r($pessoa);
list($nome, $idade, $prof, $olho) = $pessoa;
echo " $nome \n $idade \n $prof \n $olho";
