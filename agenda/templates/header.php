<?php
include_once("config/URL.php");
include_once("config/process.php");

/* LIMPA A MSG*/
if(isset($_SESSION['msg'])){
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Contatos</title>
  <!-- Bootstrap cdnjs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- Font awesome cdnjs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="<? $BASE_URL?>css/style.css">
</head>
<body>
<header class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
<img  class="" src="<?= $BASE_URL?>img/logo.svg" alt="agenda"/>
</a>
<div class="">
<div class="navbar-nav">
<a href="<?= $BASE_URL?>index.php" class="nav-link active" id="home-link">agenda</a>
<a href="<?= $BASE_URL?>create.php" class="nav-link active">adicionar contato</a>
</div>
</div>
</nav>
</header>
