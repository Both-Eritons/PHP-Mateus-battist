<?php
$IP = "127.0.0.1";
$USER = "eriton";
$PASS = "1234";
$DB = "cursophp";
$conn = new mysqli($IP,$USER, $PASS,$DB);
$id = 4;

$stat = $conn->prepare("SELECT * FROM itens WHERE ID > ?");

$stat->bind_param("i", $id);

$stat->execute();

$result = $stat->get_result();
$data = $result->fetch_all();

print_r($data);
