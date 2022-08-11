<?php
include_once("./info.php");
$conn = new mysqli($IP,$USER, $PASS,$DB);

if($conn->connect_errno){
	echo "erro conexao </br>";
	echo "erro acusado: </br>".$conn->connect_error;
}else{
	echo "conectado \n";
}

