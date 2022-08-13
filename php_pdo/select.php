<?php
$HOST = "127.0.0.1";
$DB = "cursophp";
$USER = "eriton";
$PASS = "1234";
$conn = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASS);

$id = 4;

$stat = $conn->prepare("SELECT * FROM itens WHERE ID > :id");
$stat->bindParam(":id", $id);
$stat->execute();
print_r($stat->fetch(PDO::FETCH_ASSOC));
print_r($stat->fetchAll(PDO::FETCH_ASSOC));


