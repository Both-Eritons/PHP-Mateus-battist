<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Blog Codar</title>
	<link  rel="stylesheet" href="<?=$BASE_URL?>css/reset.css" />
	<link  rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
<a href="<?= $BASE_URL ?>" id="logo"><img src="<?= $BASE_URL ?>img/logo.svg" alt="hora de codar"/></a>
<nav>
<ul id="navbar">
<li><a href="<?= $BASE_URL ?>">Home</a></li>
<li><a href="#">Categorias</a></li>
<li><a href="#">Sobre</a></li>
<li><a href="<?= $BASE_URL?>contact.php">contato</a></li>
</ul>
</nav>
</header>
