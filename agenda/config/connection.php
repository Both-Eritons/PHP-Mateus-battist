<?php
$HOST = "127.0.0.1";
$DB = "AGENDA";
$USER = "eriton";
$PASS = "1234";

try{
	$conn = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASS);

	// ATIVAR MODO DE ERRO
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e){
	echo "erro ocorrido: ".$e->getMessage();
}
