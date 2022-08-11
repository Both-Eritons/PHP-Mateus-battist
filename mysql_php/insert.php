<?php
$IP = "127.0.0.1";
$USER = "eriton";
$PASS = "1234";
$DB = "cursophp";
$conn = new mysqli($IP,$USER, $PASS,$DB);

if($conn->connect_errno){
	echo "\nerro: \n\n\n\n".$conn->connect_error;
}
$TABLE = "itens";
$nome = "xicara";
$desc = "lorem ipsum";
$sql = "INSERT INTO $TABLE(nome, descricao) VALUES('$nome', '$desc')";
$re = $conn->query($sql);
print_r($re);
$conn->close();
 
