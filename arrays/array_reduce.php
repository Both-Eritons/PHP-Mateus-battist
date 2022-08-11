<?php
$arr = [18,46,19,49,15,85];

$re = array_reduce($arr, function($a, $b){
	return $a + $b;
});
function soma($a, $b){
	return $a + $b;
}
$re2 = array_reduce($arr, "soma");


print_r($re."\n");
print_r($re2);
