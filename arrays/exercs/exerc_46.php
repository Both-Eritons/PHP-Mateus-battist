<?php

$arr = [
	["eriton", "dos", "santos", "junior"],
	["eriton", "dos", "santos", "sexo"],
	["eriton", "dos", "santos", "aro"]
];

for($i = 0; $i < count($arr); $i++){
	for($j = 0; $j < count($arr[$i]); $j++){
		echo $arr[$i][$j]."\n";
	}
}
