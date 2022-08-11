<?php

$data = new DateTime();
$dataB = new DateTime();
$dataB->setDate(2023, 10, 15);
$diff = $data->diff($dataB);
print_r($diff);
echo $diff->format("%a days");
