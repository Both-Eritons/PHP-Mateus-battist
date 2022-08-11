<?php
$IP = "127.0.0.1";
$USER = "eriton";
$PASS = "1234";
$DB = "cursophp";
$conn = new mysqli($IP,$USER, $PASS,$DB);
$nome = "casa";
$desc = "sexo em casa";
$id = 10;

$stat = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE ID = ?");

$stat->bind_param("ssi", $nome, $desc, $id);

$stat->execute();
if($stat->error){
	echo "erro ocorrido: ".$stat->error;
}
