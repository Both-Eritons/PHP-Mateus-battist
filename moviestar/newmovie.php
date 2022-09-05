<?php
require_once("globals.php");
require_once("db.php");
require_once("templates/header.php");

require_once("models/User.php");
require_once("dao/UserDAO.php");
$user = new User();
$userDAO = new UserDAO($conn, $BASE_URL);
$userData = $userDAO->verifyToken(true);

?>
<div id="main-container" class="container-fluid">
<div class="offset-md-4 col-md-4 new-movie-container">
<h1 class="page-title">adicionar filme</h1>
<p class="page-description">adicione sua critica e compartilhe com o mundo!</p>
<form id="add-movie-form" action="<?=$BASE_URL?>movie_process.php" method="POST" enctype="multipart/form-data"> 
<input type="hidden" name="type" value="create">
<div class="form-group">
<label for="title">Titulo: </label>
<input placeholder="coloque o titulo do filme!" type="text" name="title"  id="title" class="form-control">

</div>
<div class="form-group">
<label for="image">Imagem: </label>
<input type="file" name="image"  id="image" class="form-control-file" >

</div>
<div class="form-group">
<label for="length">Duração: </label>
<input type="text" name="length"  id="length" class="form-control"placeholder="coloque a duração do filme!" >

</div>
<div class="form-group">
<label for="category">Categoria: </label>
<select id="category" name="category" class="form-control">
  <option value="">Selecione</option>
  <option value="Ação">Ação</option>
  <option value="adrama">Drama</option>
  <option value="Comedia">Comedia</option>
  <option value="Fantasia / ficção">Fantasia / Ficção</option>
  <option value="Romance">Romance</option>
</select>
</div>
</div>
<div class="form-group">
<label for="trailer">Trailer: </label>
<input type="text" name="trailer"  id="trailer" class="form-control" placeholder="coloque o trailer do filme!" >

</div>

<div class="form-group">
<label for="description">Descrição: </label>
<textarea id="description" class="form-control" name="description" rows="5" placeholder="descreva o filme"></textarea>
</div>

<button class="card-btn p-2" type="submit">Postar filme</button>
</form>
</div>
</div>
<?php require_once("templates/footer.php"); ?>
