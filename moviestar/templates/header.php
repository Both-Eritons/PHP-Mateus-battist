<?php
require_once("globals.php");
require_once("db.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

if(!empty($flassMessage["msg"])){
  //limpar a msg
  $message->clearMessage();
}

$userDAO = new UserDAO($conn, $BASE_URL);

$userData = $userDAO->verifyToken(false);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MovieStar</title>
<link rel="short icon" href="<?=$BASE_URL?>img/moviestar.ico" />
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS do projeto -->
<link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
<header>
<nav id="main-navbar" class="navbar navbar-expand-lg">
<a class="navbar-brand" href="<?= $BASE_URL ?>">
<img id="logo" src="<?= $BASE_URL ?>img/logo.svg" alt="moviestar">
<span id="moviestar-title">MovieStar</span>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
<form id="search-form" method="GET" action="" class="form-inline my-2 my-lg-0">
<input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="buscar filmes" aria-sort="search">
<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
</form>

<div id="navbar" class="collapse navbar-collapse">

<ul class="navbar-nav">

<?php if($userData):?>

<li class="nav-item">

<a class="nav-link" href="<?=$BASE_URL?>newmovie.php">

<i class="far fa-plus-square"></i> Incluir Filme

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="<?=$BASE_URL?>dashboard.php">Meus Filmes

</a>

</li>

<li class="nav-item">

<a class="nav-link bold" href="<?=$BASE_URL?>editprofile.php">

<?=$userData->name?>

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="<?=$BASE_URL?>logout.php">Sair

</a>

</li>

<?php else: ?>

<li class="nav-item">

<a class="nav-link" href="<?= $BASE_URL?>auth.php">entrar / cadastrar</a>

</li>

<?php endif;?>

</ul>

</div>

</nav>

</header>

<?php if(!empty($flassMessage["msg"])): ?>
<div class="msg-container">
<p class="msg <?=$flassMessage["type"]?>"> <?= $flassMessage["msg"]?></p>
</div>
<?php endif; ?>

