<?php

$host = "127.0.0.1";
$db = "moviestar";
$user = "eriton";
$pass = "1234";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


