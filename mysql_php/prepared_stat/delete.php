<?php
$IP = "127.0.0.1";
$USER = "eriton";
$PASS = "1234";
$DB = "cursophp";
$conn = new mysqli($IP,$USER, $PASS,$DB);
$id = 4;
$nome = "torradeira";
$stat = $conn->prepare("DELETE FROM itens WHERE nome= ?");
$stat->bind_param("s", $nome);
$stat->execute();
$stat->close();

