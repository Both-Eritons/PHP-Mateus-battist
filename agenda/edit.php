<?php
include_once("./config/URL.php");
include_once("./templates/header.php");
?>
<div class="container">
<?php include_once("./templates/backbtn.html");?>
<h1 id="main-title">editar contato</h1>
<form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
<input type="hidden" name="type" value="edit">
<input type="hidden" name="id" value="<?=$contact['id'];?>">
<div class="form-group">
<label for="name">nome do contato: </label>
<input type="text" class="form-control" id="name" name="name" placeholder="coloque o nome" required value="<?= $contact['name']?>">
</div>
<div class="form-group">
<label for="phone">numero do contato: </label>
<input type="text" class="form-control" id="phone" name="phone" placeholder="coloque o numero" required value="<?= $contact['phone']?>">
</div>
<div class="form-group">
<label for="obs">descrição do contato: </label>
<textarea type="text" class="form-control" id="obs" name="obs" placeholder="coloque a observação" rows="3"><?= $contact['obs']?></textarea>
</div>

<button type="submit" class="btn btn-primary">editar</button>
</form>
</div>
<?php
include_once("./templates/footer.php");
?>
