<?php
require_once("globals.php");
require_once("db.php");
require_once("templates/header.php");
require_once("dao/MovieDAO.php");

$movieDAO = new MovieDAO($conn, $BASE_URL);

$latestMovies = $movieDAO->getLatestMovies();


$actionMovies = [];

$comedyMovies = [];


?>
<div id="main-container" class="container-fluid">
  <h1 class="section-title">Filmes novos</h1>
  <p class="section-desc">veja as criticas dos ultimos filmes adicionado em movieStar</p>
  <div class="movies-container">
    <?php foreach($latestMovies as $movie): ?>
      <?php require("templates/movie_card.php"); ?>
    <?php endforeach; ?>
  </div>
  <h1 class="section-title">Ação</h1>
  <p class="section-desc">veja os melhores filmes de Ação</p>
  <div class="movies-container"></div>
  <h1 class="section-title">Comedia</h1>
  <p class="section-desc">veja os melhores filmes de Comedia</p>
  <div class="movies-container"></div>

</div>
<?php require_once("templates/footer.php"); ?>
