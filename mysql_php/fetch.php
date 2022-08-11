<?php
$IP = "127.0.0.1";
$USER = "eriton";
$PASS = "1234";
$DB = "cursophp";
$conn = new mysqli($IP,$USER, $PASS,$DB);
if($conn->connect_errno){
	echo "\nerro: \n\n\n\n".$conn->connect_error;
}

$sql = "SELECT * FROM itens WHERE nome = 'fone'";
$re = $conn->query($sql);
$conn->close();
// UM RESULTADO
$item = $re->fetch_assoc();

//TODOS RESULTADOS
$itens = $re->fetch_all();
print_r($itens);

