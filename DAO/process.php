<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$brand = $_POST['brand'];
$km = $_POST['km'];
$color = $_POST['color'];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKM($km);
$newCar->setColor($color);
$carDao->create($newCar);
//$carDao->findAll();
header("Location: index.php");
