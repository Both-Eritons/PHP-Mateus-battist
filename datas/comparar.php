<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataB->modify("+2 months");

echo $dataA < $dataB ? "sim \n" : "nao \n";
echo $dataA > $dataB ? "sim \n" : "nao \n";
echo $dataA == $dataB ? "sim \n" : "nao \n";
echo $dataB > $dataA ? "sim \n" : "nao \n";
echo $dataB < $dataA ? "sim \n" : "nao \n";
