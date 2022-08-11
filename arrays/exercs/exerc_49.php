<?php

$tipo = "cachorro";
$raca = "caramelo";
$cor = "amarelo";

$dog = compact("tipo", "raca", "cor");
foreach($dog as $info => $valor){
	print_r($dog[$info]."\n");
}
for($i = 0; $i < count($dog); $i++){
	//print_r($dog[$i]);
}
