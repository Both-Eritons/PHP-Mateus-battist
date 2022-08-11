<?php

$data = new DateTime();

echo $data->format("d/m/y")."\n";
echo $data->format("l - F - Y")."\n";

$data->modify("+5 days");

echo $data->format("d/m/y")."\n";

$data->modify("+2 months");
echo $data->format("d/m/y")."\n";
