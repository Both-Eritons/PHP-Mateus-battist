<?php
$HOST = "127.0.0.1";
$DB = "cursophp";
$USER = "eriton";
$PASS = "1234";
$conn = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASS);

$stat = $conn->prepare("INSERT INTO itens(nome,descricao) VALUES(:nome, :desc)");
$pa = [
	"ventilador",
	'S.O.S...'
];
$stat->bindParam(":nome", $pa[0]);
$stat->bindParam(":desc", $pa[1]);

$stat->execute();


